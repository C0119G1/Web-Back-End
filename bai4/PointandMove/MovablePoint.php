<?php
include_once ("poin.php");
class MovablePoint extends Point {
	private $xSpeed;
	private $ySpeed;
	function MovablePoint($x, $y, $xSpeed, $ySpeed) {
		parent::Point ( $x, $y );
		$this->xSpeed = $xSpeed;
		$this->ySpeed = $ySpeed;
	}
	function getXSpeed() {
		return $this->xSpeed;
	}
	function getYSpeed() {
		return $this->ySpeed;
	}
	function setXSpeed($new_X) {
		$this->xSpeed = $new_X;
	}
	function setYSpeed($new_Y) {
		$this->ySpeed = $new_Y;
	}
	function getSpeed() {
		return $this->xSpeed . "," . $this->ySpeed;
	}
	function setSpeed($xSpeed,$ySpeed)
	{
		$this->xSpeed=$xSpeed;
		$this->ySpeed=$ySpeed;
	}
	function tostring() {
		echo parent::tostring ();

		echo ",Speed =(" . $this->getSpeed () . ")";
		
	}
	function move() {
		return parent::setX($this->getX()+$this->xSpeed).",".parent::setY($this->getY()+$this->ySpeed);
	}
}
