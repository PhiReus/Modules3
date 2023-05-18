<?php
include "Shape.php";
$shape = new Shape(10,8,7);
echo $shape->toString();
echo "<br>";
echo "Chiều cao : ". $shape->getH();
echo "<br>";
echo "<br>";
$shape->__construct(25,17,11);
echo $shape->toString();


$triangle = new Triangle(100,85,71);
echo $triangle->toString();
echo "<br>";
echo "Chiều cao : ". $triangle->getH();
$triangle->__construct(255,170,110);
echo $triangle->toString();
?>