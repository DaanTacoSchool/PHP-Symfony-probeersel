<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Unirest;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Helpers\SearchMovieHelper;

class ResultController extends Controller
{

     /**
     * @Route("/search/searchresult/{page}", name="movie_results", requirements={"page": "\d+"})
     */
     public function indexAction(Request $request,$page){
        $search= $request->get('search');

       $smh = new SearchMovieHelper();   
       list($arrayobj,$totalItems,$totalPages,$pageBackground)=$smh->requestMovies($page,$search,false);

       $paginator = $this->get('ashley_dawson_simple_pagination.paginator');
       $paginator->setItemTotalCallback(function () use ($totalItems) {
            return $totalItems;
        });
        $paginator->setSliceCallback(function ($offset, $length) use ($arrayobj) {
            return array_slice($arrayobj, $offset, $length);
        });
        $pagination = $paginator->paginate((int)$request->query->get('page', $page));
         return $this->render('search/searchresults.html.twig', array('page'=>$page,'search'=>$search,
          'movies'=>$arrayobj, 'totalitems'=>$totalItems,'totalpages'=>$totalPages,
            'pagination' => $pagination,'currentpage'=>$page, 'background'=>$pageBackground,));
     }
 
}
?>