<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

    Step 2: Make a forloop  that displays 10 numbers

    Step 3 : Make a switch Statement that test againts one condition with 5 cases*/

    //Step 1
    $number = 12;
    if (!$number) {
        echo "Not real";
    } else if ($number < 2) {
        echo "I hate PHP";
    } else {
        echo "I love PHP";
    }
    echo "<br >"; echo "<br >";
    
    //Step 2
    for($counter = 0; $counter <= 10; $counter++) {
        echo $counter;
    }
    echo "<br >"; echo "<br >";
    
    //Step 3
    switch ($number) {
        case 10:
            echo "this is the number";
            break;
        case 11:
            echo "this is the number";
            break;
        case 13:
            echo "this is the number";
            break;
        case 14:
            echo "this is the number";
            break;
        case 12:
            echo "this is the number";
            break;
    }
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>