<?php include "45b_db.php";?>
<?php
//Read, create
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

//Update
function updateUser() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET "; //put a space after SET and other commands when concatenating
    //concatenating helps reduce length of lines of code
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id"; //space needed here too

    //making actual query here
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("QUERY FAILED" . " " . mysqli_error($connection));
    }
}

//Delete
function deleteUser() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users "; 
    $query .= "WHERE id = $id";

    //making actual query here
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("QUERY FAILED" . " " . mysqli_error($connection));
    }
}
?>