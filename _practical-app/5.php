<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

   /* Step1: Use a pre-built math function here and echo it

      Step 2:  Use a pre-built string function here and echo it

      Step 3:  Use a pre-built Array function here and echo it */

    //Step 1
    $number = 10;
    echo sqrt($number);
    echo "<br />";
    
    //Step 2
    $string = "HI It's me thE wOndeR man.";
    echo strrev($string);
    echo "<br />";
    
    //Step 3
    $arr1 = array(1,2,3);
    $result = array_sum($arr1);
    echo $result;

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>