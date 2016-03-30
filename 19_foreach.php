<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $numbers = array(1,2,3,4,5,6);
    //foreach takes array and assigns each value to the variable after "as"
    foreach($numbers as $number) {
        echo $number . "<br />";
    }
    ?>
</body>
</html>