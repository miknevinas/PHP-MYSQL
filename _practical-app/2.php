<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		
           <!-- Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

            Step 2: Add the two variables and display the sum with echo:


            Step3: Make 2 Arrays with the same values, one regular and the other associative-->

        <?php
            //Step 1
            $number1 = 10;
            $number2 = 20;
            
            //Step 2
            echo $number1 + $number2 . "<br /";
            
            //Step 3
            $arr1 = array(1,2,3);
            $arr2 = array('num1' => 1, 'num2' => 2, 'num3' => 3);
            
            print_r($arr1);
            echo "<br />";
            print_r($arr2);
		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>