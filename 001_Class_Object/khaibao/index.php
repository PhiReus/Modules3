<?php 

//nhúng 
include("class_lib.php");

//Tạo Object
$phi = new Person();
$hieu = new Person();
$long = new Person();
$khuong = new Person();
$cuong = new Person();

//thiết đặt giá trị
$phi->setName("Tôi tên là Phi");
$hieu->setName("Tôi tên là Hiếu bến tàu");
$long->setName("Tôi tên là Long Buri");
$khuong->setName("Tôi tên là Khương chợ lớn");
$cuong->setName("Tôi tên là Cường tiến sĩ");

//truy cập phương thức và thuộc tính
echo "Xin chào : ".$phi->getName()."<br>";
echo "Xin chào : ".$hieu->getName()."<br>";
echo "Xin chào : ".$long->getName()."<br>";
echo "Xin chào : ".$khuong->getName()."<br>";
echo "Xin chào : ".$cuong->getName()."<br>";

?>

