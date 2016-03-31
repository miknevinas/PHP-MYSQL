<?php 
    //Connect to database
    //localhost, username, password, database name
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo "Connection established";
    } else {
        die("Connection failure");
    }

    //Get users
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
    die('Query failed' . mysqli_error());
    }

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="col-xs-6">
                <?php 
                while($row = mysqli_fetch_assoc($result)) {
                ?>
                   <pre>
                   <?php
                    print_r($row);
                    ?>
                    </pre>
                <?php
                }
                
                ?>
                
            </div>
        </div>
    </body>
</html>