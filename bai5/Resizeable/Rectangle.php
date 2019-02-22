<?php
include_once 'resize.php';
include_once 'Shape.php';
class Rectangle extends Shape implements Resizeable {
	public $height;
	public $width;
	
	function Rectangle($height,$width)
	{
		$this->height=$height;
		$this->width=$width;
	}
	
	function name()
	{
		echo " Đây là hình chữ nhật";
	}
	
	function color()
	{
		echo " Hình chữ nhật có màu vàng";
	}
	
	function areaRectangle()
	{
		return $this->height*$this->width;
	}
	
	function resize($new_area)
	{
		$new_area =rand(1,20);
		return $this->areaRectangle() * $new_area;
	}
}