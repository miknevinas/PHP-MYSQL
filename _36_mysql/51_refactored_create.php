<?php include "45b_db.php";?>
<?php include "47b_functions.php"; ?>
<?php createUser(); ?>

   
<?php include "_includes/header.php" ?>
<body>
    <div class="container">
        <div class="col-xs-6">
           <h1 class="text-center">Create</h1>
            <form action="51_refactored_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
            </form>
        </div>
    </div>
</body>
<?php include "_includes/footer.php" ?>