<?php
// Database connection settings
$servername = "localhost"; // Default server for localhost
$username = "root";        // Default MySQL username for XAMPP
$password = "";            // Default MySQL password for XAMPP
$dbname = "diana_homestay"; // The name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Error if connection fails
}
?>
