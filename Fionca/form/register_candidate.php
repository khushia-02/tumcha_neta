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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $candidate_username = $_POST['candidate_username'];
    $profile_photo_path = $_POST['profile_photo_path'];
    $self_profession = $_POST['self_profession'];
    $about_candidate = $_POST['about_candidate'];
    $candidate_area_pincode = $_POST['candidate_area_pincode'];
    $candidate_city = $_POST['candidate_city'];
    $candidate_area_current = $_POST['candidate_area_current'];
    $candidate_gender = $_POST['candidate_gender'];
    $candidate_dob = $_POST['candidate_dob'];
    $candidate_email = $_POST['candidate_email'];
    $candidate_state = $_POST['candidate_state'];
    $age = $_POST['age'];
    
    // SQL query to insert data into candidate_education table
    $sql = "INSERT INTO candidate_education (candidate_username, profile_photo_path, self_profession, about_candidate, candidate_area_pincode, candidate_city, candidate_area_current, candidate_gender, candidate_dob, candidate_email, candidate_state, age) 
            VALUES ('$candidate_username', '$profile_photo_path', '$self_profession', '$about_candidate', '$candidate_area_pincode', '$candidate_city', '$candidate_area_current', '$candidate_gender', '$candidate_dob', '$candidate_email', '$candidate_state', '$age')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
