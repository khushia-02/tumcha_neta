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

// Get form data
$candidate_username_available = $_POST['candidate_username_available'];
$years = $_POST['year'];
$districts = $_POST['district'];
$areas = $_POST['area'];
$pincodes = $_POST['pincode'];
$candidate_areas_of_workingfor = $_POST['candidate_areas_of_workingfor'];
$details_of_working = $_POST['details_of_working'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO candidate_works (candidate_username_available, year, district, area, pincode, candidate_areas_of_workingfor, details_of_working) VALUES (?, ?, ?, ?, ?, ?, ?)");

// Loop through each entry and execute the prepared statement
for ($i = 0; $i < count($years); $i++) {
    $year = $years[$i];
    $district = $districts[$i];
    $area = $areas[$i];
    $pincode = $pincodes[$i];
    $area_of_workingfor = $candidate_areas_of_workingfor[$i];
    $detail_of_working = $details_of_working[$i];
    
    $stmt->bind_param("sississ", $candidate_username_available, $year, $district, $area, $pincode, $area_of_workingfor, $detail_of_working);
    
    if ($stmt->execute()) {
        echo "New record created successfully for entry $i.<br>";
    } else {
        echo "Error for entry $i: " . $stmt->error . "<br>";
    }
}

// Close connections
$stmt->close();
$conn->close();
?>
