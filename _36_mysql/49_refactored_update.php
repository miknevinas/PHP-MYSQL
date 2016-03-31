<?php include "45b_db.php";?>
<?php include "47b_functions.php";?>
<?php updateUser(); ?>

<?php include "_includes/header.php" ?>
<body>
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Update</h1>
            <form action="49_refactored_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">  
                    <select name="id" id="">
                        <?php
                        showIdData();
                        ?>
                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            </form>
        </div>
    </div>
</body>
<?php include "_includes/footer.php" ?>