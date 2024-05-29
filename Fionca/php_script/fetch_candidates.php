<?php
// Establish a connection to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "tumcha_neta";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch candidates based on the input
$input = $_POST['input'];
$sql = "SELECT full_name FROM candidates WHERE full_name LIKE '%$input%'";
$result = $conn->query($sql);

// Display suggestions
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['full_name'] . "'>";
    }
} else {
    echo "<option value=''>No suggestions found</option>";
}

$conn->close();
?>
