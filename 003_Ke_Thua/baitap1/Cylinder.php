<?php
include "Circle.php";
class Cylinder extends Circle{
    private $height;
    public function __construct($radius,$color,$height){
        parent::__construct($radius,$color);
        $this->height = $height;
    }
    public function getHeight(){
        return $this->height;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function toString(){
        return parent::toString(). ", Chieu cao : ".$this->height;
    }
    public function getVolume(){
        return "Thể tích hình tròn là : " .$this->height * 3 / 2;
    }
}
?>