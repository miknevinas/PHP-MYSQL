<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
<!--
        Step 1 - Create a database in PHPmyadmin

        Step 2 - Create a table like the one from the lecture

        Step 3 - Insert some Data

        Step 4 - Connect to Database and read data 
-->
	
	<?php  
	//Step 4
        $connection = mysqli_connect('localhost', 'root', '', 'practice7');

        if($connection) {
            echo "Connection established";
        } else {
            die("Connection failure");
        }
        
        $query = "SELECT * FROM people";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query failed' . mysqli_error());
        }
	
	?>
        <div class="col-xs-6">
            <?php 
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <pre>
                <?php print_r($row);?>
            </pre>
            <?php
            }
            ?>
        </div>

</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
