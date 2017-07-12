<?php

namespace AppBundle\Helpers;

use Symfony\Component\HttpFoundation\Request;
use Unirest;
use Symfony\Component\HttpFoundation\Response;

class BackgroundHelper
{
   
    public function getBackground()
    {
     
     $randomPage= rand(1,99);
     $randomMovie=rand(0,19);   
        //$response = Unirest\Request::get('https://api.themoviedb.org/3/movie/now_playing?api_key=75c283e81f306f2883b55e5ecb213cd8&language=en-US&page=1');
        $response = Unirest\Request::get('https://api.themoviedb.org/3/movie/popular?api_key=75c283e81f306f2883b55e5ecb213cd8&language=en-US&page='.$randomPage);
        $backdrop= $response->body->results[$randomMovie]->backdrop_path;
        
        return $backdrop;
    }

    
}
?>