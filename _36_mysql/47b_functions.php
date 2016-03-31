<?php include "45b_db.php";?>
<?php
function showAllData() {
    global $connection;
    //Get users
    $query = "SELECT * FROM users";
    //Send information to database
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query failed' . mysqli_error());
    }

    //Get id's from database
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
?>