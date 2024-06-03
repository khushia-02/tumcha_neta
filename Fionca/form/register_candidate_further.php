<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    echo "<script>
        alert('Please log in first.');
        window.location.href = 'index.php';
        </script>";
    exit();
}

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "tumcha_neta";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $self_profession = $conn->real_escape_string($_POST['self_profession']);
    $candidate_education = $conn->real_escape_string($_POST['candidate_education']);
    $candidate_area_pincode = intval($_POST['candidate_area_pincode']);
    $candidate_city = $conn->real_escape_string($_POST['candidate_city']);
    $candidate_area_current = $conn->real_escape_string($_POST['candidate_area_current']);
    $candidate_gender = $conn->real_escape_string($_POST['candidate_gender']);
    $candidate_dob = $conn->real_escape_string($_POST['candidate_dob']);
    $candidate_email = $conn->real_escape_string($_POST['candidate_email']);
    $candidate_state = $conn->real_escape_string($_POST['candidate_state']);
    $candidate_age = intval($_POST['candidate_age']);
    $candidate_username = $_SESSION['username']; // Get username from session

    // Check if candidate already exists
    $check_query = "SELECT * FROM candidate_further_details WHERE candidate_username = '$candidate_username'";
    $result = $conn->query($check_query);
    
    if ($result->num_rows > 0) {
        echo "<script>alert('You have already entered this data.');</script>";
    } else {
        // Insert candidate data into database
        $sql = "INSERT INTO candidate_further_details (candidate_username, self_profession, candidate_area_pincode, candidate_city, candidate_area_current, candidate_gender, candidate_dob, candidate_email, candidate_state, candidate_education, candidate_age)
                VALUES ('$candidate_username', '$self_profession', $candidate_area_pincode, '$candidate_city', '$candidate_area_current', '$candidate_gender', '$candidate_dob', '$candidate_email', '$candidate_state', '$candidate_education', $candidate_age)";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
            echo "<script>window.location.href = 'candidate_details.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
