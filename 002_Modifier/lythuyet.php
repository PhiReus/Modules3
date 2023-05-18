<?php
class Animal{
    private $name = 'Animal';
    private $age = 0;
    public $color = 'black';
    public static $msg = 'hello';
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
//khoi tao doi tuong
$dog = new Animal();

//truy xuat thuoc tinh color
echo $dog->color;

//truy xuat thuoc tinh name
// $dog->setName("cat");
echo $dog->getName();

echo '<pre>';
print_r($dog);
echo '</pre>';

?>