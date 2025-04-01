<?php
require("connection.php");

$sql = "CREATE DATABASE IF NOT EXISTS dets";
$query = mysqli_query($con, $sql);

if ($query) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($con);
}
?>
