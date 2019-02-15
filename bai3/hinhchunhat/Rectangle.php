<?php
class Rectangle{
    public $width;
    public $height;
    public function __construct($_height,$_width){
        $this->height= $_height;
        $this->width= $_width;
    }
    public function getArea(){
        return ($this->height*$this->width);
    }
    public function getPerimeter(){
        return ($this->height+$this->width)*2;
    }
    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}


?>