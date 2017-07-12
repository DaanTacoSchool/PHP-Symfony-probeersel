<?php 
namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
class SearchObject
{
    protected $searchObject;
    
     /**
     * @Assert\NotBlank()
     */
    public function getSearchObject()
    {
        return $this->searchObject;
    }

    public function setSearchObject($searchObject)
    {
        $this->searchObject = $searchObject;
    }

 
}
?>