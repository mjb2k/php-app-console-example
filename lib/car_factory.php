<?php
class CarFactory{

  private function __construct(){}

  public function getBlueCar(){
    $car = new Car();
    $car->setColor("blue");
    return $car;
  }
}
