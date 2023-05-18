<?php
class Rectangle extends Shape implements Resizeable{
    public $width;
    public $height;
    public function __construct($name,$width,$height){
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->width * $this->height;
    }
    public function getPerimeter(){
        return ($this->width + $this->height) * 2;
    }
    public function resize(){
        $randomRatio = rand(1, 100);
        $this->height *= $randomRatio / 100;
        $this->width *= $randomRatio / 100;
    }
    
}
?>