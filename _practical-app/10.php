<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	 <!--Step 1: Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 3: Make a method named ShowAll that echos all the properties

		Step 4: Instantiate the class / create object and call it pitbull

        Step 5: Call the method ShowAll-->

    <?php
    //Step 1
    class Dog {
    //Step 2
        var $eyes = 'brown';
        var $nose = 'small';
        var $bark = 'loud';
    //Step 3
        function ShowAll() {
            echo $this->eyes . ' ' . $this->nose . ' ' . $this->bark;
        }
    }
    //Step 4
    $pitBull = new Dog();
    //Step 5
    echo $pitBull->ShowAll();
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>