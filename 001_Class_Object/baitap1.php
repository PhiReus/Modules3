<?php
class Tinh{
    public $a;
    public $b;
    public $c;

    public function __construct($a,$b,$c)
    {
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

    public function getDiscriminant(){
        return ($this->b * $this->b) - (4*$this->a * $this->c);
    }

    public function getRoot1(){
        return (-$this->b + sqrt($this->b * $this->b - 4*$this->a * $this->c)) / 2 * $this->a;
    }
    public function getRoot2(){
        return (-$this->b - sqrt($this->b * $this->b - 4*$this->a * $this->c)) / 2 * $this->a;
    }
    
}

$tinh = new Tinh(1,3,1);
$delta = $tinh->getDiscriminant();
$r1 = $tinh->getRoot1();
$r2 = $tinh->getRoot2();

if($delta > 0) {
    echo $r1."<br> ".$r2;
}
else if($delta == 0){
    echo $r1;
}
else{
    echo "Phương trình vô nghiệm";
}
?>

