<?php
require_once 'Users.php';

class GoldenUser extends User{
    private $GoldenDiscountLevel;

    public function setGoldenDiscount($_GoldenDiscountLevel){
       $this->GoldenDiscountLevel = $_GoldenDiscountLevel * 10;
         
    }

    public function getGoldenDiscount(){
        return $this->GoldenDiscountLevel;
    }

}

?>