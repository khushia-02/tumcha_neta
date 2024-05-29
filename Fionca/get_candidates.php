<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tumcha_neta"; // Replace with your database name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch candidates from the database
$sql = "SELECT full_name, gender FROM candidates";
$result = $conn->query($sql);

$candidates = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $candidates[] = $row;
    }
}

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($candidates);

// Close connection
$conn->close();
?>
