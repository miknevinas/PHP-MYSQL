<?php 
class Car {
    
    //same as var
    public $wheels = 4;
    //available to only this class and any subclasses
    protected $hood = 1;
    //available to only this class
    private $engine = 1;
    //
    var $doors = 4;

   
    function showProperty() {
        echo $this->hood;
    }
}

$car = new Car();
echo $car->showProperty();

echo $car->hood; // prints error
?>