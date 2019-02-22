<?php

include_once ("Colorable.php");
include_once ("Shape.php");

class Square extends Shape implements Colorable
{
	private $canh;
	
	
	public function Square($canh){
		$this->canh = $canh;
	}
	public function howToColor($color){
		echo "Color all four sides:.$color";
		
	}
	
	
	public function set_DTHV($canh){
		$this->canh = $canh;
	}
	
	
	public function getArea(){
		return  $this->canh*$this->canh;
	}
}