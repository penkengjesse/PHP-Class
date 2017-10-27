<?php
include_once "animal.php";
class Cat extends Animal

{
    private function __construct($petNameFromOut) {
        parent:: __construct( "貓 ");
        $this -> petname = $petNameFromOut;



}
  public function getPetName(){
    return $this -> petname;
}

}
 $cat = new Cat("kitty");
  echo $cat -> getAnimalType();
