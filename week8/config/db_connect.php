<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "week8";

$conn = new mysqli('localhost', 'root', 'root@123', 'week8');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
