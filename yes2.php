<?php
// Connecting to Database
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connect) {
    die('Connection failed: ' . mysqli_connect_error());
}
else {
    // echo'conn successful';
}

// Your code goes here if the connection is successful
// ...

// Close connection when done
// mysqli_close($connect);
?>