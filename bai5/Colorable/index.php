<?php

include_once ("Square.php");
include_once ("Rectangle.php");



$cn = new Rectangle(2,4);
echo $cn->getArea();
echo "<br>";
$cn->howToColor(4);
echo "<br>";

$vuong = new Square(4,4);
echo $vuong->getArea();
echo "<br>";
$vuong->howToColor(9);
echo "<br>";


$mang = array();
for ($i=0;$i<10;$i++){
	$chieudai = rand(1,20);
	$cnn = new Rectangle(2,4);
	array_push($mang,$cnn);
	echo "<br>";
	print_r($mang[$i]->getArea());
}