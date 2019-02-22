<?php
include_once("MovablePoint.php");
$myMovablePoint = new MovablePoint(3,4,5,6);
$myMovablePoint->tostring()."<br>";
//$myMovablePoint->setXSpeed(8);
//$myMovablePoint->setYSpeed(8);
//echo $myMovablePoint->getXSpeed(8)."<br>";
//echo $myMovablePoint->getYSpeed(8);
$myMovablePoint->move();
echo "<br>";
$myMovablePoint->tostring();