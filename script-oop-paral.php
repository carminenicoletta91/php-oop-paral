<?php
// creazione classe oggettp
class Parall{
  public $a;
  public $b;
  public $c;

  public function  __construct($a,$b,$c){
    $this -> a = $a;
    $this -> b = $b;
    $this -> c = $c;
  }
  public function getArea(){
    $Area = 2 * ($this -> a * $this -> b +  $this -> a * $this -> c + $this -> b * $this -> c);
    return $Area;
  }
  public function getVolume(){
    $Volume = ($this -> a * $this -> b * $this -> c);
    return $Volume;
  }
}


?>
