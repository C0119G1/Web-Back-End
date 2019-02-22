<?php
class Point2D {
    private $x;
    private $y;
    function Point2D($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function getx()
    { 
        return $this->x;

    }
    function gety()
    {
        return $this->y;
    }
    function getxy()
    {
        $arrayxy = array($this->x,$this->y);
        return  $arrayxy;
      
    }
   
    function setx($new_x)
    {
        $this->x=$new_x;
    }
    function sety($new_y)
    {
        $this->y=$new_y;
    }
    function setxy($newx,$newy)    
    {
        $this->x=$newx;
        $this->y=$newy;
    }
    
    function tostring()
    {
        echo "Tọa độ xy là:".$this->x.",".$this->y;
    }
}
class Point3D extends Point2D {
    private $z;

    public function Point3D($x,$y,$z)

    {
        parent::Point2D($x,$y);
        $this->z=$z;
    }
    function getz()
    {
        return $this->z;
    }
    function setz($newz)
    {
        $this->z=$newz;
    }
    function getzyz()
    {
       $arrayxyz = parent::getxy();
       array_push($arrayxyz,$this->z);
       return $arrayxyz;
    }
    function setzyz($newx,$newy,$newz)
    {
        parent::setxy($newx,$newy)    ;
        $this->z=$newz;
    }
    function tostring()
    {
        echo "Tọa độ xyz là:".(parent::getx().",".parent::gety().",".$this->z);
    }

}
$myPoint2D = new Point2D(2,4);
$myPoint3D= new Point3D(1,2,3);
$myPoint2D->setx(5);
$myPoint2D->getx(5);
$myPoint2D->sety(10);
$myPoint2D->gety(10);
$myPoint3D->setz(8);
$myPoint3D->getz(8);



echo "Tọa độ x là :".$myPoint2D->getx();
echo "<br>";
echo "Tọa độ y là :".$myPoint2D->gety();
echo "<br>";
echo "Tọa độ z là :".$myPoint3D->getz();
echo "<br>";
echo  $myPoint2D->tostring();
echo "<br>";
echo $myPoint3D->tostring();
echo"<br>";
print_r($myPoint2D->getxy());
print_r($myPoint3D->getxyz());





    