<?php
require "connection.php"; // Ensure database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password for security

    // SQL query to insert user data
    $sql = "INSERT INTO users (name, email, gender, phone, password) VALUES (?, ?, ?, ?, ?)";
    
    // Prepare statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $gender, $phone, $password);
    
    if ($stmt->execute()) {
        echo "Registration successful! <a href='signup.html'>Go back</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
