<?php
include 'MyList.php';
class MyListTest extends MyList {
	function main(){
		echo " Đây là một chuỗi";
	}
}
$objList = new MyListTest();
$objList->main();
echo "<br>";
$objList->add(1);
$objList->add(2);
$objList->add(3);
echo $objList -> get(1);