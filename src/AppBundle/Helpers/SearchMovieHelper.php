<?php

namespace AppBundle\Helpers;

use Symfony\Component\HttpFoundation\Request;
use Unirest;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\MovieObject;
use AppBundle\Helpers\BackgroundHelper;
use AppBundle\Helpers\ConfigurationAPIHelper;
use Symfony\Component\HttpFoundation\Cookie;

class SearchMovieHelper
{
   
    public function getMovieSearchResponse($searchQuery,$resultPage)
    {
        $headers = array('Accept' => 'application/json');
        $filterLanguage ='en-US';//default
        $isAdultFilm=false;

        $query = array('language' => $filterLanguage, 'query' => urlencode($searchQuery), 'page' => $resultPage, 'include_adult'=> $isAdultFilm);
        $response = Unirest\Request::get('https://api.themoviedb.org/3/search/movie?api_key=75c283e81f306f2883b55e5ecb213cd8',$headers,$query);
       return $response;
    }

     public function getMovieSearchMovieArray($imagePrefix,$searchQuery,$resultPage)
    {
        $headers = array('Accept' => 'application/json');
        $filterLanguage ='en-US';//default
        $isAdultFilm=false;

        $query = array('language' => $filterLanguage, 'query' => urlencode($searchQuery), 'page' => $resultPage, 'include_adult'=> $isAdultFilm);
        $response = Unirest\Request::get('https://api.themoviedb.org/3/search/movie?api_key=75c283e81f306f2883b55e5ecb213cd8',$headers,$query);
        $arrayobj =  array();

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
        $totalItems= $response->body->total_results;
        $totalPages=$response->body->total_pages;
        return [$arrayobj,$totalItems,$totalPages];
    }
   public function requestMovies($page,$search,$isAdult){
        $arrayobj =  array();
        $configurationAPIHelper = new ConfigurationAPIHelper();
        $body= $configurationAPIHelper->getConfigurationResponseBody();  
        $imageBaseUrl = $body->images->base_url;
        $posterSize = $body->images->poster_sizes[2];
        $backdropSize=$body->images->backdrop_sizes[2];
        $imagePrefix = $imageBaseUrl.$posterSize;
        $backdropPrefix=$imageBaseUrl.$backdropSize;
        $bgHelper = new BackgroundHelper();
        $backdropPath=$bgHelper->getBackground();
        $pageBackground=$backdropPrefix.$backdropPath;
        list($arrayobj,$totalItems,$totalPages) = $this->getMovieSearchMovieArray($imagePrefix,$search,$page);     
        return [$arrayobj,$totalItems,$totalPages,$pageBackground];
    }
    
}
?>
