<?php
// Database connection
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "tumcha_neta"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$candidate_username = $_POST['candidate_username'];
$year = $_POST['year'];
$district = $_POST['district'];
$area = $_POST['area'];
$pincode = $_POST['pincode'];
$candidate_areas_of_workingfor = $_POST['candidate_areas_of_workingfor'];
$details_of_working = $_POST['details_of_working'];

// SQL query to insert data into candidate_works table
$sql = "INSERT INTO candidate_works (candidate_username, year, district, area, pincode, candidate_areas_of_workingfor, details_of_working) 
        VALUES ('$candidate_username', '$year', '$district', '$area', '$pincode', '$candidate_areas_of_workingfor', '$details_of_working')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
