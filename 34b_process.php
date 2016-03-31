<?php 

//form data is submited as associative array $_POST
if(isset($_POST['submitted'])) {

    $names = array("Edwin", "Adam", "Timmy");
    $minimum = 5;
    $maximum = 20;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum) {
        echo "Username must be longer than five characters.";
    } 
    if(strlen($username) > $maximum) {
        echo "Username must be shorter than 20 characters.";
    }

    //pass in value then array
    if(!in_array($username, $names)) {
        echo "User already exists";
    } else {
        echo "Welcome";
    }
}

?>