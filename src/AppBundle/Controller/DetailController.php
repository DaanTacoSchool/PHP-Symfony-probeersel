<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Unirest;
use AppBundle\Helpers\SearchMovieHelper;

class DetailController extends Controller
{

    /**
     * @Route("/search/searchpage/details/{id}", name="details", requirements={"id": "\d+"})
     */
    public function indexAction(Request $request,$id)
    {  
       $smh = new SearchMovieHelper();
       //arrayobj MovieDetailsObject (extends MovieObject)
       list($arrayobj,$backdropPrefix) = $smh->getMovieDetails($id);
       return $this->render('search/details.html.twig', array(
            'movie'=>$arrayobj, 'backdroppath'=>$backdropPrefix));
  
    }
  
 
}
?>