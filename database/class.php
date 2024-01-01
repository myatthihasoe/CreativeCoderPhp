<?php
class Car{
    public static function startEngine()
    {
        echo "start engine";
        echo "<br>";
        return new Car; //  $this can not use in static function   
    }

    public function drive()
    {
        echo "car is driving";
        echo "<br>"; 
        return $this;
    }
    public function stop()
    {
        // return "car is stopped";
        echo "car is stopped";
        
    }
    public function whatIsThis()
    {
        return $this;//return new Car 
    }

}
Car::startEngine()->drive()->stop();//static method

// $car1 = new Car;
// $car1 -> drive();

// $car2 = new Car;
// echo $car2 -> stop();
// echo "<br>";
// var_dump($car2->whatIsThis()->stop());
?>