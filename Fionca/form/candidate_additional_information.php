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
$about_detail = $_POST['about_detail'];
$spouse_name = $_POST['spouse_name'];
$candidate_tagline = $_POST['candidate_tagline'];
$candidate_video_path = $_POST['candidate_video_path'];
$candidate_office_address = $_POST['candidate_office_address'];
$candidate_party_name = $_POST['candidate_party_name'];
$candidate_logo_path = $_POST['candidate_logo_path'];
$candidate_banner_path = $_POST['candidate_banner_path'];
$candidate_books_pdf_path = $_POST['candidate_books_pdf_path'];

// SQL query to insert data into candidate_registration table
$sql = "INSERT INTO candidate_additional_information(candidate_username, about_detail, spouse_name, candidate_tagline, candidate_video_path, candidate_office_address, candidate_party_name, candidate_logo_path, candidate_banner_path, candidate_books_pdf_path) 
        VALUES ('$candidate_username', '$about_detail', '$spouse_name', '$candidate_tagline', '$candidate_video_path', '$candidate_office_address', '$candidate_party_name', '$candidate_logo_path', '$candidate_banner_path', '$candidate_books_pdf_path')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
