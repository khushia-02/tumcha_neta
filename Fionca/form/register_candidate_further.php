<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "tumcha_neta";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Get form data
    $self_profession = $conn->real_escape_string($_POST['self_profession']);
    $about_candidate = $conn->real_escape_string($_POST['about_candidate']);
    $candidate_area_pincode = intval($_POST['candidate_area_pincode']);
    $candidate_city = $conn->real_escape_string($_POST['candidate_city']);
    $candidate_area_current = $conn->real_escape_string($_POST['candidate_area_current']);
    $candidate_gender = $conn->real_escape_string($_POST['candidate_gender']);
    $candidate_dob = $conn->real_escape_string($_POST['candidate_dob']);
    $candidate_email = $conn->real_escape_string($_POST['candidate_email']);
    $candidate_state = $conn->real_escape_string($_POST['candidate_state']);
    $candidate_username = $conn->real_escape_string($_POST['candidate_username']); // Get username from the form

    // Check if candidate already exists
    $check_query = "SELECT * FROM candidate_further_details WHERE candidate_username='$candidate_username'";
    $result = $conn->query($check_query);
    if ($result->num_rows > 0) {
        echo "You have already entered this data.";
    } else {
        // Insert candidate data into database
        $sql = "INSERT INTO candidate_further_details (candidate_username, self_profession, about_candidate, candidate_area_pincode, candidate_city, candidate_area_current, candidate_gender, candidate_dob, candidate_email, candidate_state)
        VALUES ('$candidate_username', '$self_profession', '$about_candidate', $candidate_area_pincode, '$candidate_city', '$candidate_area_current', '$candidate_gender', '$candidate_dob', '$candidate_email', '$candidate_state')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
}
?>
