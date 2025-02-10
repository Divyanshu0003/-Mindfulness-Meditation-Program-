<?php

session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $Password = $_POST["Password"];

    // Prepare and execute SQL statement with parameters
    $stmt = $conn->prepare("SELECT * FROM detail WHERE name = ? AND Password = ?");
    $stmt->bind_param("ss", $name, $Password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Login successful
        $_SESSION['user'] = $result->fetch_assoc();
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['message'] = 'Invalid email or password. Please try again.';
        $_SESSION['user'] = $result->fetch_assoc();
        header("Location: login.html");
    }

    $stmt->close();
}

$conn->close();
?>
