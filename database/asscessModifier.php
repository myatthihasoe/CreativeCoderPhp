<?php
class Car{
    protected $carName;//Lambo
    public function __construct($car)
    {
        $this->carName=$car;
    }
    protected function drive(){
        echo "$this->carName is drive";
    }
    public function getDrive(){
        $this->drive();
    }
}
// $car = new Car;
// $car -> getDrive();

$car = new Car("Lambo");
$car -> getDrive();

?>