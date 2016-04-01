<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
        <!--Create a link saying Click Here, and set 
        the link href to pass some parameters and use the GET super global to see it

        Step 2 - Set a cookie that expires in one week

        Step 3 - Start a session and set it to value, any value you want.-->
		
	
	<?php 
        //Step 1
	    if(isset($_GET['source'])) {
            echo $_GET['source']; 
        }
        
        //Step 2
        $name = "thename";
        $value = 100;
        $expiration = time() + (60 * 60 * 24 * 7);
        setcookie($name, $value, $expiration);
        
        //Step 3
        session_start();
        $_SESSION['greeting'] = "Hello student";
    ?>
    
    <a href ="9.php?source=3000">CLICK HERE</a>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>