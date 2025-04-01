<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dets"; // Use the database name here

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Select the database
$con->select_db($dbname);

echo "Connected successfully";
?>
