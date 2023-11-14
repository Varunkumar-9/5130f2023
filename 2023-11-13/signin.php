<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user info"; // Use the existing database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$email = $conn->real_escape_string($_POST['email']); // sanitize input
$password = $conn->real_escape_string($_POST['password']); // sanitize input

// Validate data (you can add more validation if needed)

// Retrieve user data from the database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, verify the password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Password is correct, user is authenticated
        echo "Login successful!";
    } else {
        // Password is incorrect
        echo "Incorrect password";
    }
} else {
    // User not found
    echo "User not found";
}

// Close the database connection
$conn->close();
?>
