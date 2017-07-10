<?php
namespace AppBundle\Entity;

class MovieObject
{
    protected $voteCount;
    protected $movieId;
    protected $isVideo;// *1 if not then it shouldn't be displayed in the results.
    protected $voteAverage;
    protected $title;
    protected $popularity;
    protected $posterPath;// *2
    protected $originalLanguage;
    protected $originalTitle;
    protected $genreIds;//*3
    protected $backdropPath;// *2
    protected $isAdult;// *1 should be set to false by default in case of minors using the website, TODO: age check
    protected $overview;// summary
    protected $releaseDate;// date

    /*
    *1: is a boolean
    *   can be set with strings true/false, returns a boolean, does not check wether value is valid!
    *2: is a path to an image (.jpg presumably)
    *   path which to append to the homepage of said movie. which is currently not yet known,
    *   another api call has to be made to collect the details of the movie. those should be appended
    *   to this object as well. at wich point the posters can be loaded. a fix might be approperiate 
    *   so that said images can be shown in the initial search results.
    *3: is an array
    *   note: while by default this should be an array, it can be null.
    */

     public function getVoteCount(){
         return $this->voteCount;
     }
     public function setVoteCount($voteCount){
         $this->voteCount=$voteCount;
     }
     public function getMovieId(){
         return $this->movieId;
     }
     public function setMovieId($movieId){
         $this->movieId=$movieId;
     }
     public function getIsVideo(){
         return $this->isVideo;
     }
     public function setIsVideo($isVideo){
         $this->isVideo=$isVideo;
     }
     public function getVoteAverage(){
         return $this->voteAverage;
     }
     public function setVoteAverage($voteAverage){
         $this->voteAverage=$voteAverage;
     }
     public function getTitle(){
         return $this->title;
     }
     public function setTitle($title){
         $this->title=$title;
     }
     public function getPopularity(){
         return $this->popularity;
     }
     public function setPopularity($popularity){
         $this->popularity=$popularity;
     }
     public function getPosterPath(){
         return $this->posterPath;
     }
     public function setPosterPath($posterPath){
         $this->posterPath=$posterPath;
     }
     public function getOriginalLanguage(){
         return $this->originalLanguage;
     }
     public function setOriginalLanguage($originalLanguage){
         $this->originalLanguage=$originalLanguage;
     }
     public function getOriginalTitle(){
         return $this->originalTitle;
     }
     public function setOriginalTitle($originalTitle){
         $this->originalTitle=$originalTitle;
     }
     public function getGenreIds(){
         return $this->genreIds;
     }
     public function setGenreIds($genreIds){
         $this->genreIds=$genreIds;
     }
     public function getBackdropPath(){
         return $this->backdropPath;
     }
     public function setBackdropPath($backdropPath){
         $this->backdropPath=$backdropPath;
     }
     public function getIsAdult(){
         return $this->isAdult;
     }
     public function setIsAdult($isAdult){
         $this->isAdult=$isAdult;
     }
     public function getOverview(){
         return $this->overview;
     }
     public function setOverview($overview){
         $this->overview=$overview;
     }
     public function getReleaseDate(){
         return $this->releaseDate;
     }
     public function setReleaseDate($releaseDate){
         $this->releaseDate=$releaseDate;
     }
}    
       
?>
