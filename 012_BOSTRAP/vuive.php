<?php
function increment($number){
    $number++;
}
$number = 13;
increment($number);
echo $number;
//13

// class Student{
//     public $name;
//     function __construct($name){
//         $this->name = $name;
//     }
//     function __toString(){
//         return "Student[name = $this->name]";
//     }
// }
// $trung = new Student("Trung");
// $cuc = $trung;
// $cuc = null;
// echo $trung;
// echo $cuc;
//Sinh viên[name=Trung]

class Student{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
    function __toString(){
        return "Student[name = $this->name]";
    }
}
$trung = new Student("Trung");
$cuc = $trung;
$cuc->name = "Cúc";
echo $trung;
echo $cuc;
//Student[name = Cúc]Student[name = Cúc]

class Staff
{
     static function show(){
          echo 'Staff class.';
     }
}
// $staff = new Staff();
// $staff->show();
Staff::show();

?>