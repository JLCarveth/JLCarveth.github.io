<?php 
$servername = "localhost";
$username = "cst8238";
$password = "SomeLonger!Password222";
$dbname = "cst8238";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>