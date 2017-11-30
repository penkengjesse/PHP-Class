<?php

include_once "Animal.php";

class Dog extends  Animal
{
    private $petName;

    public function __construct($petNameFromOut)
    {
        parent::__construct("狗");
        $this->petName = $petNameFromOut;
    }

    public function getPetName()
    {
        return $this->petName;
    }

    public function setPetName($petName)
    {
        $this->petName = $petName;
    }
}

//測試
//$dog = new Dog("WangWang");
//echo $dog->getPetName()."<br>";
//
//$dog->setPetName("White");
//echo $dog->getPetName()."<