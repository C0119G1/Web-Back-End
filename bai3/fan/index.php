<?php
include("fan.php");
$objFan = new XDFan();
$objFan->set_on(false);
$objFan->toString();
echo "<br>";
$objFan1 = new XDFan();
$objFan1->set_on(true);
$objFan1->set_radius(10);
$objFan1->set_color("yelow");
$objFan1->toString();
?>