<?php
$host = "localhost";
$user = "root";  // Change if you set a password
$password = "";  // Set your MySQL password if needed
$database = "ecommerce_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
?>


