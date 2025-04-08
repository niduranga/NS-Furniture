<?php
// Database connection parameters
$servername = "localhost";  // Database host (usually localhost)
$username = "root";         // Database username
$password = "";             // Database password (default is an empty string for local servers)
$dbname = "ns_furnitures";  // Name of your database

// Create connection using MySQLi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->mysqli_connect_error);
}
?>