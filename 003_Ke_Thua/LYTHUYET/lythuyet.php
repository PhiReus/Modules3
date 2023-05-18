<?php
class Animal {
    protected $name;
    private $color = 'Black';
    public function setName($name){
        $this->name = $name;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
    public function getName(){
        return $this->name;
    }

}
class Human extends Animal {
    
}
//khoi tao doi tuong
$human = new Human();
//goi PT SETNAME
echo $human->setName('Chuột ăn Mèo');
//goi PT getName
echo $human->getName();
//goi PT getcolor
echo $human->getColor();

?>