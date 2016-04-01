<?php 
class Car {

    static $wheels = 4;
    
    function moveWheels() {
        Car::$wheels = 10;
    }
    
}

$car = new Car();

//access static property
echo Car::$wheels;

Car::moveWheels();
echo Car::$wheels;
?>