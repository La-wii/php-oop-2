<?php

class User {
    protected $name;
    protected $surname;
    protected $address;
    protected $discount = 0;

    function __construct($_name,$_surname,$_address){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->surname = $_address;
    }

    public function getPrintedInfo(){
        return $this->name . ' ' . $this->surname . ' ' . $this->address;
    }
    
    public function setDiscount($age){
        if($age > 50){
            $this->discount = 10;
        }
    }

    public function getDiscount(){
        return $this->discount;
    }

}