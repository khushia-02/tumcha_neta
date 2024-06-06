<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tumcha_neta"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['candidate_username'];
    $party = $_POST['party'];
    $party_name = $_POST['party_name'] ?? '';
    $ideologies = $_POST['ideologies'];
    $party_position = $_POST['party_position'];
    $default_logo_path = $_POST['default_logo_path'];

    // Handle file uploads
    $party_logo_path = $default_logo_path; // Default to the selected default logo path
    if (isset($_FILES['party_logo_input']) && $_FILES['party_logo_input']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = './candidate_uploads/'; // Adjusted path
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $party_logo_name = $_FILES['party_logo_input']['name'];
        $party_logo_path = './candidate_uploads/' . $party_logo_name; // Adjusted path
        move_uploaded_file($_FILES['party_logo_input']['tmp_name'], $upload_dir . $party_logo_name); // Adjusted path
    }

    $profile_banner_path = '';
    if (isset($_FILES['banner_image']) && $_FILES['banner_image']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = './candidate_uploads/'; // Adjusted path
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $profile_banner_name = $_FILES['banner_image']['name'];
        $profile_banner_path = '../candidate_uploads/' . $profile_banner_name; // Adjusted path
        move_uploaded_file($_FILES['banner_image']['tmp_name'], $upload_dir . $profile_banner_name); // Adjusted path
    }

    $stmt = $conn->prepare("INSERT INTO candidate_party_ideologies (username, party, party_name, party_logo_path, profile_banner_path, ideologies, party_position) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssss', $username, $party, $party_name, $party_logo_path, $profile_banner_path, $ideologies, $party_position);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
