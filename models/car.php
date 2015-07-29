<?php
class Car{
  private $color;

  public function __construct(){}

  public function drive(){
    echo "Vroom!";
  }

  public function getColor(){
    return $this->color;
  }

  public function setColor($color){
    $this->color = $color;
  }

}
