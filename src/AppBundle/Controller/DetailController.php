<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\SearchObject;
use AppBundle\Entity\MovieObject;
use Unirest;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Helpers\ConfigurationAPIHelper;

class DetailController extends Controller
{

    /**
     * @Route("/search/searchpage/details/{id}", name="details", requirements={"id": "\d+"})
     */
    public function indexAction(Request $request,$id)
    {
   
        $configurationAPIHelper = new ConfigurationAPIHelper();
        $body= $configurationAPIHelper->getConfigurationResponseBody();
    
        $imageBaseUrl = $body->images->base_url;
        $posterSize = $body->images->poster_sizes[3];
        $backdropSize=$body->images->backdrop_sizes[2];
        $imagePrefix = $imageBaseUrl.$posterSize;
        $backdropPrefix=$imageBaseUrl.$backdropSize;

        $filterLanguage ='en-US';//default
        $response = Unirest\Request::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=75c283e81f306f2883b55e5ecb213cd8&language='.$filterLanguage);
        $arrayobj= $response->body;
         
         return $this->render('search/details.html.twig', array(
            'movie'=>$arrayobj, 'imgpath'=>$imagePrefix, 'backdroppath'=>$backdropPrefix));
  
    }
  
 
}
?>