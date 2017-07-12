<?php

namespace AppBundle\Helpers;

use Symfony\Component\HttpFoundation\Request;
use Unirest;
use Symfony\Component\HttpFoundation\Response;

class ConfigurationAPIHelper
{
   
    public function getConfigurationResponseFull()
    {
        $configResponse = Unirest\Request::get('https://api.themoviedb.org/3/configuration?api_key=75c283e81f306f2883b55e5ecb213cd8');
        return $configResponse;
    }

      public function getConfigurationResponseBody()
    {
        $configResponse = Unirest\Request::get('https://api.themoviedb.org/3/configuration?api_key=75c283e81f306f2883b55e5ecb213cd8');
        $body= $configResponse->body;
        return $body;
    }
    
}
?>