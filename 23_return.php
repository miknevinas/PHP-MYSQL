<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    function calculate($a,$b) {
        
        $total = $a + $b;
        
        return $total;
    }
    $result = calculate(10, 10);
    echo $result;
    echo "<br ?>";
    $result = calculate($result, 10);
    echo $result;
    ?>
</body>
</html>