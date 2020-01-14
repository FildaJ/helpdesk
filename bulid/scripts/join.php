<?php
session_start();
$servername = "localhost";
$username = "matura";
$password = "Maturita2020";
$dbname = "helpdesk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>