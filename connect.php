<?php
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP's default MySQL password is blank
$dbname = "diana_home_stay"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



