<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP's default MySQL password
$dbname = "diana_homestay"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
