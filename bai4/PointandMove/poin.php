<?php
class Point{
    private $x;
    private $y;
    function Point($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    function getX()
    {
        return $this->x;
    }
    function getY()
    {
        return $this->y;
    }
    function setx($new_x)
    {
        $this->x=$new_x;
    }
    function sety($new_y)
    {
        $this->y=$new_y;
    }
    function getxy()
    {
        $arrayXY=array($this->x.$this->y);
        return $arrayXY;
    }
    function setXY($new_x,$new_y)
    {
        $this->x=$new_x;
        $this->y=$new_y;
    }
    function tostring()
    {
        echo "Tọa độ x và Y là:"."(".$this->x.",".$this->y.")";
    }
}