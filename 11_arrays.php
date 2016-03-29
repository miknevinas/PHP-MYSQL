<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $numberList = array(1,2,3,4,5,'6','<h1>7</h1>');
    
    //display indices w/ index number
    print_r($numberList);
    
    echo $numberList[1];
    ?>
</body>
</html>