<?php
//使用類別

include_once "Cat.php";
include_once "Dog.php";

echo Cat::$staticProperty;//還未初始化即可使用
echo "<br>";
Cat::staticFunction("類別");
echo "<br>";
echo Cat::$staticProperty;//在靜態方法中被設定
echo "<br>";

$cat = new Cat("Kitty");
echo $cat->getPetName();
echo "<br>";
echo Cat::$staticProperty;//new 之後, 仍可以使用
echo "<br>";
Cat::staticFunction("類別");
echo "<br>";

$dog = new Dog("WangWang");
echo $dog->getPetName();
echo "<br>";

$cat2 = new Cat("BanBan");
echo $cat2::$staticProperty;
$cat2::staticFunction("cat2");
echo "<br>";
echo $cat::$staticProperty;//另一個物件的角度, 但仍使用同一個靜態屬性
echo "<br>";

