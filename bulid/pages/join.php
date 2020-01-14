<?php
session_start();
$servername = "localhost";
$username = "matura";
$password = "Maturita2020";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>