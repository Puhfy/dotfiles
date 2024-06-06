<?php
$servername = "localhost"; // Replace with your MySQL server address
$username = "puhfy"; // Replace with your MySQL username
$password = "1234"; // Replace with your MySQL password
$database = "wbdtabase"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If you need to set charset
$conn->set_charset("utf8");

?>
