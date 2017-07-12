<?php
namespace AppBundle\Entity;

use AppBundle\Entity\MovieObject;

class MovieDetailsObject extends MovieObject
{
    protected $budget;
    protected $homepage;
    protected $productionCompanies;
    protected $productionCountries;
    protected $revenue;
    protected $runtime;
   


    public function getBudget(){
        return $this->budget;
    }
    public function setBudget($budget){
        $this->budget=$budget;
    }
    public function getHomepage(){
        return $this->homepage;
    }
    public function setHomepage($homepage){
        $this->homepage=$homepage;
    }
    public function getProductionCompanies(){
        return $this->productionCompanies;
    }
    public function setProductionCompanies($productionCompanies){
        $this->productionCompanies=$productionCompanies;
    }
    public function getProductionCountries(){
        return $this->productionCountries;
    }
    public function setProductionCountries($productionCountries){
        $this->productionCountries=$productionCountries;
    }
    public function getRevenue(){
        return $this->revenue;
    }
    public function setRevenue($revenue){
        $this->revenue=$revenue;
    }
    public function getRuntime(){
        return $this->runtime;
    }
    public function setRuntime($runtime){
        $this->runtime=$runtime;
    }
   

}    
       
?>

