<?php
const SLOW = 1;
const MEDIUM =2;
const  FAST  = 3;
class XDFan
{
   private $speed;
   private $on;
   private $radius;
   private $color;

   public function XDFan()
   {
       $this->speed = SLOW;
       $this->on = false;
       $this->radius = 5;
       $this->color = "blue";
   }

   public function set_speed($_speed)
   {
       $this->speed = $_speed;
   }

   public function get_speed()
   {
       return $this->speed;
   }

   public function set_on($_on)
   {
       $this->on = $_on;
   }

   public function get_on()
   {
       return $this->on;
   }
   public function set_radius($_radius)
   {
       $this->radius = $_radius;
   }

   public function get_radius()
   {
       return $this->radius;
   }
   public function set_color($_color)
   {
       $this->color = $_color;
   }

   public function get_color()
   {
       return $this->color;
   }
   public function  toString(){
       if($this->on) {
           print_r("fan is on <br>");
           print_r("Tốc độ quạt là:" .$this->speed ."<br>");
           print_r("Màu sắc của quạt là:" . $this->color."<br>");
           print_r("Bán kính cánh quạt là:" . $this->radius);
       }else{
           print_r("fan is off <br>");
           print_r("Màu sắc của quạt là:" ." ". $this->color."<br>");
           print_r("Bán kính cánh quạt là:" ." ". $this->radius);
       }

   }
}
?>