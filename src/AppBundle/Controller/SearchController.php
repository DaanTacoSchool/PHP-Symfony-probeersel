<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\SearchObject;
use Unirest;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Helpers\SearchMovieHelper;

class SearchController extends Controller
{

    /**
     * @Route("/search/searchpage", name="searchpage")
     */
    public function indexAction(Request $request)
    {
     
     $searchObject = new SearchObject();
     $searchObject->setSearchObject('I hear you like movies?');
     $arrayobj =  array();   
        $form = $this->createFormBuilder($searchObject)
            ->add('searchObject', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'search'))
            ->getForm();

              $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $searchObject = $form->getData(); 
        $search= $searchObject->getSearchObject();
        $smh = new SearchMovieHelper();   
        $resultPage=1;//default here
        list($arrayobj,$totalItems,$totalPages,$pageBackground)=$smh->requestMovies($resultPage,$search,false);
        
        $paginator = $this->get('ashley_dawson_simple_pagination.paginator');
        $paginator->setItemTotalCallback(function () use ($totalItems) {
            return $totalItems;
        });
        $paginator->setSliceCallback(function ($offset, $length) use ($arrayobj) {
            return array_slice($arrayobj, $offset, $length);
        });
        $pagination = $paginator->paginate((int)$request->query->get('page', $resultPage));

      
         return $this->render('search/searchresults.html.twig', array('page'=>$resultPage,'search'=>$search,
            'form' => $form->createView(),'movies'=>$arrayobj, 'totalitems'=>$totalItems,'totalpages'=>$totalPages,
            'pagination' => $pagination,'currentpage'=>$resultPage, 'background'=>$pageBackground,));
    }
        return $this->render('search/searchpage.html.twig', array(
            'form' => $form->createView()
        ));
        
    }

}
?>