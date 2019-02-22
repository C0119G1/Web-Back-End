<?php
class Circle {
    private $radius;
    private $color;

    public function Circle( $radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    function getter_radius()
    {
        return $this->radius;
    }

    function getter_color()
    {
        return $this->color;
    }

    function setter_radius($new_radius){
        $this->radius = $new_radius;
    }

    function setter_color($new_color){
        $this->color = $new_color;
    }

    function dientich()
    {
        return pow($this->radius,2) * PI();
    }

    function toString()
    {
       echo "Đây là hình tròn";
    }
}
class Cylinder extends Circle {
    public $height;

    public function Cylinder($radius,$color,$height)
    {
        parent::Circle($radius,$color);
        $this->height=$height;
    }

    function thetich()
    {
        return 	Pi()* pow(parent::getter_radius(),2)*$this->height;
    }

    function toString()
    {
        echo "Đây là hình trụ";
     }
}
    $myCircle = new Circle(10,'blue');
    $myCircle->setter_color("yellow");
    $myCircle->getter_color("yellow");
    echo "Màu của hình tròn là:". $myCircle->getter_color();
    echo "<br>";
    $myCircle->getter_radius(5);
    $myCircle->setter_radius(5);
    echo "Bán kính hình tròn là:".$myCircle->getter_radius();
    echo "<br>";
    echo " Diện tích hình tròn là :".$myCircle->dientich();

    $myCylinder = new Cylinder(10,'blue',5);
    $myCircle->setter_color("white");
    $myCircle->getter_color("yellow");
    echo "<br>";
    echo "Màu của hình trụ là:".  $myCircle->getter_color();
    echo "<br>";
    echo "Thể tích hình trụ là:".$myCylinder->thetich();
?>


