<?php
class Triangle{
    protected float $a = 1.0;
    protected float $b = 1.0;
    protected float $c = 1.0;
    protected $color = 'red';
    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }
    public function getC(){
        return $this->c;
    }
    public function getColor(){
        return $this->color;
    }
    public function setA($a){
        $this->a = $a;
    }
    public function setB($b){
        $this->b = $b;
    }
    public function setC($c){
        $this->c = $c;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function getH(){
        return $this->b / 2;
    }
    public function getPerimeter(){
        return ($this->a + $this->b +$this->c);
    }
    public function getArea(){
        return ($this->a * $this->getH() / 2);
    }
    public function toString(){
        return "<h3>Thông tin tam giác cha :</h3>". "Cạnh a = ". $this->a.' '.", Cạnh b = ".$this->b.' '.", Cạnh c = ".$this->c.'<br>'
        ."Chu vi tam giác : ".$this->getPerimeter().'<br>'."Diện tích tam giác : ".$this->getArea().'<br>'."Màu sắc : ".$this->color;
    }
}
?>