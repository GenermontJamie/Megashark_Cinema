<?php

class Movie
{
    private $name;
    private $description;
    private $duration;
    private $releaseDate;
    function __construct($name ,$description ,$duration,$releaseDate){
    
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
        $this->releaseDate = $releaseDate;
    }
    public function postUp()
    {
          print 'name: '.$this -> name.'<br>';
          print 'description: '.$this -> description.'<br>';
          print 'duration: '.$this -> duration.'<br>';
          print 'releaseDate: '.$this -> releaseDate.'<br>';
    }
    public function setName($name=""){
     $this->name = $name;   
    }
    public function getName(){
     return $this->name;   
    }
}

$movie= new Movie('MegaShark versus Crocosaurus','MEGASHARK VERSUS CROCOSAURUS','2H','21-12-2010');

$movie->postUp();

$movie->setName("Yolo");

$movie->postUp();

