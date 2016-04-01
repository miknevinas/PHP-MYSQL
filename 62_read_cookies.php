<?php 
$name = "thename";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7);
setcookie($name, $value, $expiration);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <?php 
        if(isset($_COOKIE['thename'])) {
            $visitor = $_COOKIE['thename'];
        } else {
            $visitor = "";
        }
        ?>
    </body>
</html>