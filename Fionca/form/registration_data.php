<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tumcha_neta";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$username = $_POST['candidate_username'];
$fullname = $_POST['candidate_fullname'];
$email = $_POST['candidate_email'];
$contact = $_POST['candidate_contact'];
$password=$_POST['password_generation'];

// SQL to insert data into table
$sql = "INSERT INTO candidate_registration (candidate_username,candidate_fullname,candidate_email, candidate_contact, password_generation) VALUES ('$username', '$fullname','$email', '$contact', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
