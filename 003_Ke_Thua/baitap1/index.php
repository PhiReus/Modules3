<?php
include "Cylinder.php";
//khởi tạo đối tượng Cylinder
$cylinder = new Cylinder(50,'red',20);

//in ra thông tin và diện tích
echo $cylinder->toString();
echo "<br>";
echo $cylinder->getArea();
echo "<br>";
echo $cylinder->getVolume();

echo "<br>";
echo "<br>";

//khởi tạo đối tượng Circle
$circle = new Circle(100,'green');

//in ra thông tin và diện tích
echo $circle->toString();
echo "<br>";
echo $circle->getArea();
echo "<br>";
echo "<br>";

//thiết đặt lại giá trị height and radius cho cylinder
$cylinder->setRadius(200);
$cylinder->setHeight(80);
echo $cylinder->toString();
echo "<br>";
echo $cylinder->getArea();
echo "<br>";
echo $cylinder->getVolume();


?>