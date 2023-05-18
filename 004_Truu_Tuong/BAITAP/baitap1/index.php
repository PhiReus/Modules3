<?php
include_once('Shape.php');
include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle('Hình Tròn  01', 3);
echo $circle->getInfo();
echo "<br>";
echo 'Diện tích hình tròn : ' . $circle->getArea() . '<br />';
echo 'Chu vi hình tròn : ' . $circle->getPerimeter() . '<br />';
echo "<br>";

$circle->resize();
echo 'Diện tích hình tròn 02 : ' . $circle->getArea() . '<br />';
echo 'Chu vi hình tròn 02 : ' . $circle->getPerimeter() . '<br />';
echo "<br>";




$rectangle = new Rectangle('Hình Chữ Nhật 01', 3, 4);
echo $rectangle->getInfo();
echo "<br>";
echo 'Diện tích HCN : ' . $rectangle->getArea() . '<br />';
echo 'Chu vi HCN : ' . $rectangle->getPerimeter() . '<br />';
echo "<br>";

$rectangle->resize();
echo 'Diện tích HCN 02 : ' . $rectangle->getArea() . '<br />';
echo 'Chu vi HCN 02: ' . $rectangle->getPerimeter() . '<br />';
echo "<br>";


$square = new Square('Hình Vuông 01', 10);
echo $square->getInfo();
echo "<br>";
echo 'Diện tích hình vuông : ' . $square->getArea() . '<br />';
echo 'Chu vi hình vuông : ' . $square->getPerimeter() . '<br />';
// echo $square->howToColor()."<br>";
echo "<br>";

$square->resize();
echo 'Diện tích hình vuông 02 : ' . $square->getArea() . '<br />';
echo 'Chu vi hình vuông 02 : ' . $square->getPerimeter() . '<br />';
echo "<br>";
echo "<br>";


$shapes = array(
    $circle,
    $rectangle,
    $square
);

foreach ($shapes as $key => $shape) {
    echo "Diện tích hình " . $key . ": " . $shape->getArea() . "<br>";
    if ($shape instanceof Colorable) {
        echo $shape->howToColor()."<br>";
    }
}

?>