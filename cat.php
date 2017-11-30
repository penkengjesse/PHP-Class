<?php

include_once "Animal.php";

class Cat extends Animal
{
    private $petName;
    public static $staticProperty = "靜態屬性";//宣告同時給一個值

    public function __construct($petNameFromOut) {
        parent::__construct("貓");//需要呼叫父類別初始化的方法, 否則父類別不會做他的建構子的初始動作
        $this->petName = $petNameFromOut;
//        var_dump($this->position);
        self::$staticProperty = "在建構子中設定(".$this->petName.")";//要用 self:: 來存取靜態屬性
    }

    public function getPetName() {
//        $this->getAnimalType();//測試 protected 方法
        return $this->petName;
    }

    public static function staticFunction($test) {
        echo "this is static function";
        self::$staticProperty = "從靜態方法改變靜態屬性(".$test.")";
    }
}

//測試
//$cat = new Cat("Kitty");
//echo $cat->getAnimalType();//繼承後可以直接使用父類別的 public 方法
//
//$cat->getFood("小魚");
//$cat->moveDxDy(1,1);
//$cat->moveDxDy(1,2);