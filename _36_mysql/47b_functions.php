<?php include "45b_db.php";?>
<?php

//Create
function createUser() {
    if(isset($_POST['submit'])) {
        
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Connect to database
        //localhost, username, password, database name
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

        if(!$connection) {
            die("Connection failure");
        }

        //Submit query with MYSQL
        $query = "INSERT INTO users(username, password)"; //INSERT INTO table name 
        $query .= "VALUES ('$username', '$password')"; //concatenate values

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('Query failed' . mysqli_error());
        } else {
            echo "User created";
        }
    }
}

//Read (entire row)
function readUsers() {
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed' . mysqli_error());
    }
    
    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

//Update
function updateUser() {
    if(isset($_POST['submit'])) {
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
}

//Delete
function deleteUser() {
    if(isset($_POST['submit'])) {
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
        } else {
            echo "User deleted";
        }
    }
}

//Show id's only
function showIdData() {
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