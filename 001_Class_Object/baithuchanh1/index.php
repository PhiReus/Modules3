<?php
include_once "hinhchunhat.php";
//khai báo và khởi tạo hcn mới
$width = 10;
$height = 20;
$hinhchunhat = new HinhChuNhat($width,$height);

//in ra độ dài cạnh
echo $hinhchunhat->width ."<br>";
echo $hinhchunhat->height."<br>";

//khai báo độ dài mới của hcm
$hinhchunhat->width = 20;
$hinhchunhat->height = 30;

//in ra độ dài mới cuả cạnh
echo $hinhchunhat->width."<br>";
echo $hinhchunhat->height."<br>";

//in ra diện tích và chu vi
echo "Diện tích của hình chử nhật là : ". $hinhchunhat->getArea()."<br>";
echo "Chu vi của hình chử nhật là : ". $hinhchunhat->getPerimeter()."<br>";

//in ra mô tả của hình chử nhật
echo "Hình chử nhật của bạn : " .$hinhchunhat->display();
?>