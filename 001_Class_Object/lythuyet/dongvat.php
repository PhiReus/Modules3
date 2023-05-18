<?php
class DongVat{
    public $name = 'Dong Vat';
    public $age = 18;

    function __construct($ts_name,$ts_age){
        $this->name = $ts_name;
        $this->age = $ts_age;
    }
    
    //tra veef gia tri thuoc tinh name
    public function getName(){
       return $this-> name;
    }
    //thiet lap gia trij thuoc tinh name
    public function setName($ts_name){
        $this->name = $ts_name;
    }

    //tra ve gia tri thuoc tinh age(1)
    public function getAge(){
        return $this->age;
    }
    public function setAge($ts_age){
        $this->age = $ts_age;
    }
}
//khoi tạo đối tuong
$meo = new DongVat('Mimi',25);


//truy xuất thuộc tính name
echo $meo->name;

//truy xuất thuộc tính age
echo $meo->age;
echo '<br>';

//gọi PT setName
$meo->setName('cho');

//gọi PT getName
echo $meo->getName();

//goi PT setAge
$meo->setAge('25');
//goi PT getAge
echo $meo->getAge();


?>