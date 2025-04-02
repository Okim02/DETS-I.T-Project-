<?php
require("connection.php");

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    gender ENUM('male', 'female') NOT NULL,
    phone VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$query = mysqli_query($con, $sql);

if ($query) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}
?>
