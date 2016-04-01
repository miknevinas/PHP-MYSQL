<?php 
class Car {
    //adding properties
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    //write constructor
    function __construct() {
        //This keyword applies
        echo $this->wheels = 12;
    }
}

if(!method_exists("Car", "__construct")) {
    echo "No method";
}

$car = new Car();

?>