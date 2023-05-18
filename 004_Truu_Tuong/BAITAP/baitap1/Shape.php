<?php
abstract class Shape {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getInfo(){
        return "Tôi là một hình , hình dạng của tôi là ".$this->name;
    }
    abstract function getArea();
    abstract function getPerimeter();
}
interface Resizeable{
    function resize();
}
interface Colorable{
    function howToColor();
}
?>