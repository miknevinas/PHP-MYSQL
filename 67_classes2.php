<?php 
class Car {
    function moveWheels() {
        echo "Wheels are moving";
    }
}

if(method_exists("Car", "moveWheels")) {
    echo "The method exists";
} else {
    echo "No method";
}
?>