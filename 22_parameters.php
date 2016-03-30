<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    function greeting($name) {
        
        echo "Hello, " . $name;
    }
    greeting("Adam");
    
    echo "<br />" . "<br />";
    
    function calculate($a, $b) {
        echo $a * $b;
    }
    calculate(3,3);
    ?>
</body>
</html>