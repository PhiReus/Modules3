<?php
include "Point3D.php";
$point3d = new Point3D('PHI',2,'CHIẾN');
echo "Dử liệu bạn cần : " .$point3d->toString();
echo "<br>";

$point3d->setXYZ(500,200,600);
echo "mãng của bạn là : ".$point3d->toString();
echo "<br>";

$point2d = new Point2D('PHI','GIẾT');
echo "Dử liệu bạn cần : " .$point2d->toString();
echo "<br>";

$point2d->setXY('PHI', 'GIẾT NÓ CHO ANH');
echo "mãng của bạn là : ".$point2d->toString();
echo "<br>";
?>