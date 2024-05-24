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
    $year = $_POST['year'];
    $name_of_award = $_POST['name_of_award'];
    $award_ceremony_img = $_FILES['award_ceremony_img']['name'];
    
    // Upload image
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["award_ceremony_img"]["name"]);
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["award_ceremony_img"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["award_ceremony_img"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["award_ceremony_img"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
        exit;
    }
    
    // SQL query to insert data into candidate_achievements table
    $sql = "INSERT INTO candidate_achievements (year, name_of_award, award_ceremony_img) 
            VALUES ('$year', '$name_of_award', '$award_ceremony_img')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
