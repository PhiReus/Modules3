<?php
class Point2D{
    protected $x;
    protected $y;
    protected $xy;
    public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function getXY(){
        return array($this->x,$this->y);
    }

    public function setX($x){
        $this->x = $x;
    }
    public function setY($y){
        $this->y = $y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getXYString() {
        $xy_array = $this->getXY(); 
        $xy_string = implode(",", $xy_array); 
        return $xy_string;
    }
    public function toString(){
        return $this->getXYString();
    }
}
?>