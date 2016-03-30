<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    $outside = "outside";
    
    function convert() {
        global $inside; //makes a local variable global
        $inside = "inside";
    }
    
    convert();
    
    echo $outside . "<br />";
    echo $inside . "<br ?>";
    ?>
</body>
</html>