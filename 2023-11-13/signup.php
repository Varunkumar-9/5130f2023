<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user info";

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

// Hash the password before storing in the database (for security)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
