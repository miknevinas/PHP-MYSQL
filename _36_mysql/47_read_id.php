<?php include "45b_db.php";?>
<?php include "47b_functions.php";?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="col-xs-6">
                <form action="47_read_id.php" method="post">
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
                               showAllData();
                            ?>

                        </select>
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
                </form>
            </div>
        </div>
    </body>
</html>