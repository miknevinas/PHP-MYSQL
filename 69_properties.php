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

echo $bmw->wheels;

//change value of property
$bmw->wheels = 8;
echo $bmw->wheels;

//call method
$bmw->moveWheels();
echo $bmw->wheels;
?>