<?php
include_once 'resize.php';
include_once 'Shape.php';
class Square extends Shape implements Resizeable {
	public $canh;
	function Square($canh) 
	{
		$this->canh=$canh;
	}
	function name()
	{
		echo "Đây là hình vuông";
	}
	function color()
	{
		echo "Hình vuông có màu trắng";
	}
	function areaSquare()
	{
		return $this->canh *$this->canh;
	}
	function resize($new_area)
	{
		$new_area=rand(2,40);
		return $this->areaSquare()*$new_area;
	}
}