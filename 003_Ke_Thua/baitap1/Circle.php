<?php
class Circle{
    protected $radius;
    protected $color;
    public function __construct($radius,$color){
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function SetRadius($radius){
        $this->radius=$radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color; 
    }
    public function toString(){
        return "Ban Kinh : ".$this->radius.' '.", Mau sac : ".$this->color;
    }
    public function getArea(){
        return "Diện tích hình tròn là : ". $this->radius * $this->radius * 3.14;
    }
}


?>