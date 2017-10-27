<?php


    class Animal{
    private $animalType = "default animal Type";
    protected $position;

    public function __construct($animalTypeFromOut){
      $this->animalType = $animalTypeFromOut;
    $this->position = [ "x" => 0,  "y" => 0];
    }
    public function getAnimalType() {
     return  $this->animalType;
    }


    public function getFood($foodname) {
    echo " 得到食物: $foodname<br>";
    }

    }







?>
