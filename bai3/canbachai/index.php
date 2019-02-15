<?php
class QuadraticEquation {
    private $a;
    private $b;
    private $c;
    public function _construct($a, $b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function geta(){
        return  $this->a;
    }
    public function getb(){
        return  $this->b;
    }
    public function getc(){
        return  $this->c;
    }
    public function seta($new_a){
         $this->a=$new_a;
    }
    public function setb($new_b){
        $this->b=$new_b;
    }
    public function setc($new_c){
         $this->c=$new_c;
    }
    public function getDiscriminant(){
        return pow($this->b,2)-(4*$this->a*$this->c);
    }
    public function getRoot1(){
        if($this->getDiscriminant()>0){
            return (-$this->b+sqrt($this->getDiscriminant()))/2* $this->a;
        }else if
            ($this->getDiscriminant()==0){
                return (-$this->b/2* $this->a);
        }else 
            return 0;
    }
    public function getRoot2(){
        if($this->getDiscriminant()>0){
            return (-$this->b-sqrt($this->getDiscriminant()))/2* $this->a;
        }else if
            ($this->getDiscriminant()==0){
                return (-$this->b/2* $this->a);
        }else 
            return 0;
    }
}
    $myQuadraticEquation = new QuadraticEquation();
    $myQuadraticEquation->seta(1);
    $myQuadraticEquation->setb(3);
    $myQuadraticEquation->setc(1);

    $myQuadraticEquation->geta(1);
    $myQuadraticEquation->getb(3);
    $myQuadraticEquation->getc(1);
    echo $myQuadraticEquation->getRoot1();
    echo "<br>";
    echo $myQuadraticEquation->getRoot2();