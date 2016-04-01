<?php 
class Car {
    //adding properties
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels() {
        //This keyword applies
        $this->wheels = 12;
    }
}

if(!method_exists("Car", "moveWheels")) {
    echo "No method";
}
$bmw = new car();

//Inherit properties from another object
class Plane extends Car {
    
}

$jet = new Plane();

$jet->moveWheels();
echo $jet->wheels;
?>