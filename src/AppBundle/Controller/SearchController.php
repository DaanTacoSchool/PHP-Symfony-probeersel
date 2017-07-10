<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\SearchObject;
use AppBundle\Entity\MovieObject;
use Unirest;

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
        // $form->getData() holds the submitted values
        // but, the original `$searchObject` variable has also been updated
        $searchObject = $form->getData();

       
        $headers = array('Accept' => 'application/json');
       
      //  $apiKey = '--';
        $filterLanguage ='en-US';//default
        $searchQuery= $searchObject->getSearchObject();
        $resultPage=1;
        $isAdultFilm=false;
        $query = array('language' => $filterLanguage, 'query' => urlencode($searchQuery), 'page' => $resultPage, 'include_adult'=> $isAdultFilm);
        $response = Unirest\Request::get('https://api.themoviedb.org/3/search/movie?api_key=placekeyhere',$headers,$query);
       

   
     foreach ($response->body->results as &$value) {
         $movie= new MovieObject();
         $movie->setVoteCount($value->vote_count);
         $movie->setMovieId($value->id);
         $movie->setIsVideo($value->video);
         $movie->setVoteAverage($value->vote_average);
         $movie->setTitle($value->title);
         $movie->setPopularity($value->popularity);
         $movie->setPosterPath($value->poster_path);
         $movie->setOriginalLanguage($value->original_language);
         $movie->setOriginalTitle($value->original_title);
         $movie->setGenreIds($value->genre_ids);
         $movie->setBackdropPath($value->backdrop_path);
         $movie->setIsAdult($value->adult);
         $movie->setOverview($value->overview);
         $movie->setReleaseDate($value->release_date);
        $arrayobj[] =$movie;
        }   
   

         return $this->render('search/searchpage.html.twig', array(
            'form' => $form->createView(),'movies'=>$arrayobj,
            
        ));
    }
    
        return $this->render('search/searchpage.html.twig', array(
            'form' => $form->createView(),'movies'=>$arrayobj
        ));
        // searchpage
      //  return $this->render('search/searchpage.html.twig');
    }

 
}
?>