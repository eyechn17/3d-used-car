<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "databasenew";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
mysqli_query($conn, "SET NAMES UTF8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>