<?php
// server.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $cgpa = $_POST['cgpa'];

    // Validate inputs
    if (empty($name) || empty($cgpa)) {
        echo 'Both Name and CGPA are required.';
        exit;
    }

    // Database connection parameters
    $host = 'localhost';
    $username = 'root';
    $password = 'root@123';  // Your specified password
    $database = 'week10';     // Your database name

    // Create a new MySQLi connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare an SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO students (name, cgpa) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $cgpa);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Hello, " . htmlspecialchars($name) . "! Your CGPA (" . htmlspecialchars($cgpa) . ") has been saved.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo 'Invalid request method.';
}
?>
