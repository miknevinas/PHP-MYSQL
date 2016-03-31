<?php
//Connect to database
//localhost, username, password, database name
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if(!$connection) {
        die("Connection failure");
    }
?>