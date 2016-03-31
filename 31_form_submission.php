<?php 

//form data is submited as associative array $_POST
if(isset($_POST['submitted'])) {
    echo "It works!";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="31_form_submission.php" method="post">
        <input type="text" placeholder="enter username"><br>
        <input type="password" placeholder="enter password"><br>
        <input type="submit" name="submitted">
    </form>
</body>
</html>