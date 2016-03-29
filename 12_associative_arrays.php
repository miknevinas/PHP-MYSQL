<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    //regular array
    $numbers = array(10,20,30);
    echo $numbers[0] . "<br>";
    print_r($numbers);
    echo "<br />";
    
    //associative array
    $names = array("first_name" => 'Adam', 'last_name' => 'McNevin');
    print_r($names);
    //associative arrays replace the indice numbers with custom names
    echo "<br />";
    echo $names['first_name'] . ' ' . $names['last_name']
    
    
    ?>
</body>
</html>