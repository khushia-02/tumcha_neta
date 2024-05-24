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
    $youtube = $_POST['youtube'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $whatsapp_channel_link = $_POST['whatsapp_channel_link'];
    $canidate_linked_NGO = $_POST['canidate_linked_NGO'];
    $additional_links = $_POST['additional_links'];
    
    // SQL query to insert data into candidate_social_links table
    $sql = "INSERT INTO candidate_social_links (youtube, facebook, instagram, twitter, linkedin, whatsapp_channel_link, canidate_linked_NGO, additional_links) 
            VALUES ('$youtube', '$facebook', '$instagram', '$twitter', '$linkedin', '$whatsapp_channel_link', '$canidate_linked_NGO', '$additional_links')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
