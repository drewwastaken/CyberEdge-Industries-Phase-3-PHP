<?php
// Database configuration
$host = "localhost";
$user = "root";           // Default XAMPP username
$pass = "";               // Default XAMPP password (empty)
$dbname = "cyberedge_db"; // Your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8
$conn->set_charset("utf8mb4");
?>
