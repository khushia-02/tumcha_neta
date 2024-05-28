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
    $youtube = $_POST['youtube'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $whatsapp_channel_link = $_POST['whatsapp_channel_link'];
    $candidate_linked_NGO = $_POST['candidate_linked_NGO'];
    $additional_link = $_POST['additional_link'];

    $sql = "INSERT INTO candidate_social_links (youtube, facebook, instagram, twitter, linkedin, whatsapp_channel_link, candidate_linked_NGO, additional_link) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if prepare() failed
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("ssssssss", $youtube, $facebook, $instagram, $twitter, $linkedin, $whatsapp_channel_link, $candidate_linked_NGO, $additional_link);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
