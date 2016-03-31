<?php 
if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //Connect to database
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    
    if($connection) {
        echo "Connection established";
    } else {
        die("Connection failure");
    }
    
//    if($username && $password) {
//        echo $username . "<br />" . $password;
//    } else {
//        echo "Information not valid";
//    }
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
                <form action="42_database_connect.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </form>
            </div>

        </div>

    </body>
</html>