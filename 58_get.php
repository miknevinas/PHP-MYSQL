<?php 
    //Super global variable
    print_r($_GET);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php 
    $id = 10;
    ?>
   
    <a href ="58_get.php?id=<?php echo $id;?>">CLICK</a>
</body>
</html>