<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
        <!--Step 1 -Make a variable with some text as value

        Step 2 - Use crypt() function to encrypt it

        Step 3 - Assign the crypt result to a variable

        Step 4 - echo the variable-->
	
	<?php  
        //Step 1
        $password = "123";
        //Step 2
        $hashFormat = '$2y$10$';
        $salt = 'mdksndje839202ksjduenr';
        $hashAndSalt = $hashFormat . $salt;
        //Step 3
        $password = crypt($password, $hashAndSalt);
        //Step 4
        echo $password;
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>