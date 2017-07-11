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
use AppBundle\Helpers\BackgroundHelper;

class SearchController extends Controller
{
    /*
    Explanation: there are 3 methods in this controller. the first being fired when the page is first loaded.
        The second is called from the third. the third is called whenever the user navigates to another page.
        When the user navigates to another page the third method will collect the cookies that were set by the first. In this cookie 
        is the searchquery which the user entered. Which is passed to the second, along with some other params, to retreive the next
        set of results. 
        This means that results will not be pre-loaded. (try searching with the word 'the', it takes a while to load 85k objects, hence this dicision was made)
    */

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
        /* doesnt work as intended, something with the cookies, maybe if i can pass those values through other means this will work.
        $search= $searchObject->getSearchObject();
        $resultPage=1;//needed somewhere else as well.
        $arrayobj=$this->requestMovies($resultPage,$search,false);
        $search = $request->cookies->get('search');
        $totalItems = $request->cookies->get('totalitems');
        $totalPages = $request->cookies->get('totalpages');
        */
        $configResponse = Unirest\Request::get('https://api.themoviedb.org/3/configuration?api_key=75c283e81f306f2883b55e5ecb213cd8');
        $imageBaseUrl = $configResponse->body->images->base_url;
        $posterSize = $configResponse->body->images->poster_sizes[2];
        $backdropSize=$configResponse->body->images->backdrop_sizes[2];
        $imagePrefix = $imageBaseUrl.$posterSize;
        $backdropPrefix=$imageBaseUrl.$backdropSize;

        $bgHelper = new BackgroundHelper();
        $backdropPath=$bgHelper->getBackground();
        $pageBackground=$backdropPrefix.$backdropPath;

        $headers = array('Accept' => 'application/json');
     
        $filterLanguage ='en-US';//default
        $searchQuery= $searchObject->getSearchObject();
        $resultPage=1;
        $isAdultFilm=false;
        $query = array('language' => $filterLanguage, 'query' => urlencode($searchQuery), 'page' => $resultPage, 'include_adult'=> $isAdultFilm);
        $response = Unirest\Request::get('https://api.themoviedb.org/3/search/movie?api_key=75c283e81f306f2883b55e5ecb213cd8',$headers,$query);
        $totalItems= $response->body->total_results;
        $totalPages=$response->body->total_pages;
        $divided=ceil($totalItems/20);

        $resp = new Response();
        $cookieItems = new Cookie('totalitems', $totalItems, time()+3600);
        $cookieSearchQuery = new Cookie('search', $searchQuery, time()+3600);
        $cookiePage = new Cookie('currentpage', $resultPage, time()+3600);    
        $cookieTotalPages = new Cookie('totalpages', $totalPages, time()+3600); 
        $cookieBackground = new Cookie('background',$pageBackground,time()+3600);
        
        $resp->headers->setCookie($cookieItems);
        $resp->headers->setCookie($cookieSearchQuery);
        $resp->headers->setCookie($cookiePage);
        $resp->headers->setCookie($cookieTotalPages);
        $resp->headers->setCookie($cookieBackground);
        $resp->send();
   
     foreach ($response->body->results as &$value) {
         $movie= new MovieObject();
         $movie->setVoteCount($value->vote_count);
         $movie->setMovieId($value->id);
         $movie->setIsVideo($value->video);
         $movie->setVoteAverage($value->vote_average);
         $movie->setTitle($value->title);
         $movie->setPopularity($value->popularity);
         $imgPath = $imagePrefix.$value->poster_path;
         $movie->setPosterPath($imgPath);
         $movie->setOriginalLanguage($value->original_language);
         $movie->setOriginalTitle($value->original_title);
         $movie->setGenreIds($value->genre_ids);
         $movie->setBackdropPath($value->backdrop_path);
         $movie->setIsAdult($value->adult);
         $movie->setOverview($value->overview);
         $movie->setReleaseDate($value->release_date);
         $arrayobj[] =$movie;
        }   
   
          $paginator = $this->get('ashley_dawson_simple_pagination.paginator');
          $paginator->setItemTotalCallback(function () use ($totalItems) {
            return $totalItems;
        });
        $paginator->setSliceCallback(function ($offset, $length) use ($arrayobj) {
            return array_slice($arrayobj, $offset, $length);
        });
        $pagination = $paginator->paginate((int)$request->query->get('page', $resultPage));

         
         return $this->render('search/searchresults.html.twig', array(
            'form' => $form->createView(),'movies'=>$arrayobj, 'totalitems'=>$totalItems,'totalpages'=>$totalPages,
            'pagination' => $pagination,'currentpage'=>$resultPage, 'background'=>$pageBackground,));
    }
        return $this->render('search/searchpage.html.twig', array(
            'form' => $form->createView()
        ));
        
    }

    
    public function requestMovies($page,$search,$isAdult){
        $arrayobj =  array();
        /* this will be moved to seperate class in the future */
        $configResponse = Unirest\Request::get('https://api.themoviedb.org/3/configuration?api_key=75c283e81f306f2883b55e5ecb213cd8');
        $imageBaseUrl = $configResponse->body->images->base_url;
        $posterSize = $configResponse->body->images->poster_sizes[2];
         $backdropSize=$configResponse->body->images->backdrop_sizes[2];
        $imagePrefix = $imageBaseUrl.$posterSize;
        $backdropPrefix=$imageBaseUrl.$backdropSize;

        $bgHelper = new BackgroundHelper();
        $backdropPath=$bgHelper->getBackground();
        $pageBackground=$backdropPrefix.$backdropPath;

        $headers = array('Accept' => 'application/json');
       
        $filterLanguage ='en-US';//default
        $searchQuery= $search;
        $resultPage=$page;
        $isAdultFilm=$isAdult;
        $query = array('language' => $filterLanguage, 'query' => urlencode($searchQuery), 'page' => $resultPage, 'include_adult'=> $isAdultFilm);
        $response = Unirest\Request::get('https://api.themoviedb.org/3/search/movie?api_key=75c283e81f306f2883b55e5ecb213cd8',$headers,$query);
        $totalItems= $response->body->total_results;
        $totalPages=$response->body->total_pages;

        $resp = new Response();
        $cookieItems = new Cookie('totalitems', $totalItems, time()+3600);
        $cookieSearchQuery = new Cookie('search', $searchQuery, time()+3600);
        $cookiePage = new Cookie('currentpage', $page, time()+3600);  
        $cookieTotalPages = new Cookie('totalpages', $totalPages, time()+3600);  
        $cookieBackground = new Cookie('background',$pageBackground,time()+3600);
       // $cookieTest=new Cookie('test','only set in requestmovie func',time()+3600);
        $resp->headers->setCookie($cookieItems);
        $resp->headers->setCookie($cookieSearchQuery);
        $resp->headers->setCookie($cookiePage);
        $resp->headers->setCookie($cookieTotalPages);
        $resp->headers->setCookie($cookieBackground);
       // $resp->headers->setCookie($cookieTest);
        $resp->send();
       
     foreach ($response->body->results as &$value) {
         $movie= new MovieObject();
         $movie->setVoteCount($value->vote_count);
         $movie->setMovieId($value->id);
         $movie->setIsVideo($value->video);
         $movie->setVoteAverage($value->vote_average);
         $movie->setTitle($value->title);
         $movie->setPopularity($value->popularity);
         $imgPath = $imagePrefix.$value->poster_path;
         $movie->setPosterPath($imgPath);
         $movie->setOriginalLanguage($value->original_language);
         $movie->setOriginalTitle($value->original_title);
         $movie->setGenreIds($value->genre_ids);
         $movie->setBackdropPath($value->backdrop_path);
         $movie->setIsAdult($value->adult);
         $movie->setOverview($value->overview);
         $movie->setReleaseDate($value->release_date);
         $arrayobj[] =$movie;
        }   
         
        return $arrayobj;
    }
 
     /**
     * @Route("/search/searchpage/{pagenum}", name="tmp", requirements={"pagenum": "\d+"})
     */
     public function showPage(Request $request,$pagenum){
       $search = $request->cookies->get('search');
       $totalItems = $request->cookies->get('totalitems');
       $totalPages = $request->cookies->get('totalpages');
       $arrayob=$this->requestMovies($pagenum,$search,false);
       $pageBackground = $request->cookies->get('background');
       //$test = $request->cookies->get('test');
       $paginator = $this->get('ashley_dawson_simple_pagination.paginator');
       $paginator->setItemTotalCallback(function () use ($totalItems) {
            return $totalItems;
        });
        $paginator->setSliceCallback(function ($offset, $length) use ($arrayob) {
            return array_slice($arrayob, $offset, $length);
        });
        $pagination = $paginator->paginate((int)$request->query->get('pagenum', $pagenum));
         return $this->render('search/searchresults.html.twig', array(
            'movies'=>$arrayob,'pagination' => $pagination,'currentpage'=>$pagenum, 'totalpages'=>$totalPages, 'totalitems'=>$totalItems, 'background'=>$pageBackground,
        ));
     }
 
}
?>