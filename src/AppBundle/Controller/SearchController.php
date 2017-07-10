<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\SearchObject;

class SearchController extends Controller
{
    /**
     * @Route("/search/searchpage", name="searchpage")
     */
    public function indexAction(Request $request)
    {
     
     $searchObject = new SearchObject();
        $searchObject->setSearchObject('I hear you like movies?');
      

        $form = $this->createFormBuilder($searchObject)
            ->add('searchObject', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'search'))
            ->getForm();

              $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $searchObject = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($task);
        // $em->flush();

         return $this->render('search/searchpage.html.twig', array(
            'form' => $form->createView(), 'searchObject' => $searchObject->getSearchObject(),
            
        ));
    }
    
        return $this->render('search/searchpage.html.twig', array(
            'form' => $form->createView(),'searchObject' => $searchObject->getSearchObject(),
        ));
        // searchpage
      //  return $this->render('search/searchpage.html.twig');
    }

 
}
?>