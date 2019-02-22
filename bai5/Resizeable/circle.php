<?php
include_once  'resize.php';
include_once  'shape.php';
class Circle extends Shape implements Resizeable {
	public $radius;
	function Circle($radius)
	{
		$this->radius = $radius;
	}
	function name()
	{
		echo " Đây là hình tròn";
	}
	function color()
	{
		echo " Hình tròn có màu đen";
	}
	function areacircle()
	{
		return pow($this->radius,2)*pi();
	}
	function resize($new_area)
	{
		$new_area=rand(1,20);
		return $this->areacircle()* $new_area;
	}
		
}