<?php
session_start();

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

// Retrieve form data
$about_detail = $conn->real_escape_string($_POST['about_detail']);
$candidate_marriage_status = $conn->real_escape_string($_POST['candidate_marriage_status']);
$spouse_name = $conn->real_escape_string($_POST['spouse_name']);
$candidate_office_contact = $conn->real_escape_string($_POST['candidate_office_contact']);
$candidate_office_email = $conn->real_escape_string($_POST['candidate_office_email']);
$candidate_office_address = $conn->real_escape_string($_POST['candidate_office_address']);
$candidate_username = $_SESSION['username']; // Assuming you have stored the username in session

// Check if candidate already exists
$check_query = "SELECT * FROM candidate_additional_information WHERE candidate_username = '$candidate_username'";
$result = $conn->query($check_query);

if ($result->num_rows > 0) {
    echo "<script>
        alert('You have already entered this data.');
        window.location.href = 'candidate_information.php';
    </script>";
} else {
    // SQL query to insert data into candidate_additional_information table
    $sql = "INSERT INTO candidate_additional_information (candidate_username, about_detail, candidate_marriage_status, spouse_name, candidate_office_contact, candidate_office_email, candidate_office_address) 
            VALUES ('$candidate_username', '$about_detail', '$candidate_marriage_status', '$spouse_name', '$candidate_office_contact', '$candidate_office_email', '$candidate_office_address')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('New record created successfully');
            window.location.href = 'candidate_details.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!-- hello -->