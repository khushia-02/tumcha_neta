<?php
session_start(); // Start the session to access session variables

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
    $username = $_SESSION['username'] ?? ''; // Retrieve the username from the session
    $youtube = $_POST['youtube'] ?? '';
    $facebook = $_POST['facebook'] ?? '';
    $instagram = $_POST['instagram'] ?? '';
    $twitter = $_POST['twitter'] ?? '';
    $linkedin = $_POST['linkedin'] ?? '';
    $whatsapp_channel_link = $_POST['whatsapp_channel_link'] ?? '';
    $candidate_linked_NGO = $_POST['candidate_linked_NGO'] ?? ''; // Check if the form field name is correct
    $additional_link = $_POST['additional_link'] ?? '';

    // Escape special characters in inputs for security
    $username = $conn->real_escape_string($username);
    $youtube = $conn->real_escape_string($youtube);
    $facebook = $conn->real_escape_string($facebook);
    $instagram = $conn->real_escape_string($instagram);
    $twitter = $conn->real_escape_string($twitter);
    $linkedin = $conn->real_escape_string($linkedin);
    $whatsapp_channel_link = $conn->real_escape_string($whatsapp_channel_link);
    $candidate_linked_NGO = $conn->real_escape_string($candidate_linked_NGO);
    $additional_link = $conn->real_escape_string($additional_link);
    
    // SQL query to insert data into candidate_social_links table
    $sql = "INSERT INTO candidate_social_links (candidate_username, youtube, facebook, instagram, twitter, linkedin, whatsapp_channel_link, candidate_linked_NGO, additional_link) 
            VALUES ('$username', '$youtube', '$facebook', '$instagram', '$twitter', '$linkedin', '$whatsapp_channel_link', '$candidate_linked_NGO', '$additional_link')";

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
