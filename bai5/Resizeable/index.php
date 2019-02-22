<?php
include_once 'circle.php';
include_once 'Rectangle.php';
include_once  'Square.php';
$myCircle = new Circle(6);
$myRectangle= new Rectangle(2, 3);
$mySquare = new Square(9);
echo "Diện tích hình tròn là".$myCircle ->areacircle();
echo "<br>";
echo "Diện tích hình tròn được thay đổi là:".$myCircle ->resize(7);
echo "<br>";
echo " Diện tích hình chữ nhật là:".$myRectangle->areaRectangle();
echo "<br>";
echo "Diện tích hình chữ nhật được thay đổi là:".$myCircle ->resize(8);
echo "<br>";
echo "Diện tích hình chữ nhật là:".$mySquare->areaSquare();
echo "<br>";
echo "Diện tích hình vuông được thay đổi là:".$mySquare->resize(9);