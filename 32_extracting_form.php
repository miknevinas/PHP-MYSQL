<?php 

//form data is submited as associative array $_POST
if(isset($_POST['submitted'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    echo $username . "<br />";
    echo $password;
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="32_extracting_form.php" method="post">
            <input type="text" name="username" placeholder="enter username"><br>
            <input type="password" name="password" placeholder="enter password"><br>
            <input type="submit" name="submitted">
        </form>
    </body>
</html>