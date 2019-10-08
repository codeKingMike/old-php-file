<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE phpDB";
if ($conn->query($sql) === TRUE) {
    echo "<h1 style='color:green;'>Database created successfully</h1>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
