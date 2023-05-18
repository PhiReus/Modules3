<?php
class Square extends Shape implements Resizeable,Colorable{
    public $width;
    public function __construct($name,$width){
        parent::__construct($name);
        $this->width = $width;
    }
    public function getArea(){
        return $this->width * $this->width;
    }
    public function getPerimeter(){
        return $this->width * 4;
    }
    public function resize(){
        $randomRatio = rand(1, 100);
        $this->width *= $randomRatio / 100;
    }
    public function howToColor(){
        return "Tô màu cả bốn phía !";
    }
}
?>