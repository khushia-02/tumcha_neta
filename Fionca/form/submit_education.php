<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $education_type = $_POST['education_type'];
    $education_year_of_completion = $_POST['education_year_of_completion'];
    $education_institute_name = $_POST['education_institute_name'];
    $education_university_name = $_POST['education_university_name'];
    $qualification = $_POST['qualification'];

    $sql = "INSERT INTO candidate_education (education_type, education_year_of_completion, education_institute_name, education_university_name, qualification) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if prepare() failed
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sisss", $education_type, $education_year_of_completion, $education_institute_name, $education_university_name, $qualification);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
