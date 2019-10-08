<?php
$servername = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
    die("Error connecting to database..." . $conn->connect_error);
}
echo "<h1 style='color:green;'>Connected successfully</h1>";

?>