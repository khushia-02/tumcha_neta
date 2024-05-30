<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tumcha_neta";

// Start the session
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['candidate_username'];
    $contact = $_POST['candidate_contact'];
    $email = $_POST['candidate_email'];
    $fullname = $_POST['candidate_fullname'];
    $password = $_POST['password_generation'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username, email, or contact number already exists
    $sql = "SELECT * FROM candidate_registration WHERE candidate_username = '$username' OR candidate_email = '$email' OR candidate_contact = '$contact'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User already registered
        echo "<script>alert('Username, Email, or Contact Number already registered.');";
        echo "window.location.href = 'index.php';</script>";
        exit();
    }

    // Handle file upload
    $target_dir = "candidate_uploads/";
    $target_file = $target_dir . basename($_FILES["candidate_profile_path"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["candidate_profile_path"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.');</script>";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["candidate_profile_path"]["size"] > 500000) {
        echo "<script>alert('Sorry, your file is too large.');</script>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.');</script>";
    } else {
        // Ensure the target directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES["candidate_profile_path"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["candidate_profile_path"]["name"])) . " has been uploaded.";

            // Insert user data into the database
            $sql = "INSERT INTO candidate_registration (candidate_username, candidate_email, candidate_fullname, candidate_contact, password_generation, candidate_profile_path) 
                    VALUES ('$username', '$email', '$fullname', '$contact', '$hashedPassword', '$target_file')";
            if ($conn->query($sql) === TRUE) {
                // Insert the username into other tables
                $tables = [
                    "candidate_further_details",
                    "candidate_achievements",
                    "candidate_upcoming_events",
                    "candidate_additional_information",
                    "candidate_education",
                    "candidate_goals",
                    "candidate_social_links",
                    "candidate_video_links_path",
                    "candidate_works"
                ];
                
                $allInserted = true;
                foreach ($tables as $table) {
                    $sql_insert = "INSERT INTO $table (candidate_username) VALUES ('$username')";
                    if (!$conn->query($sql_insert)) {
                        $allInserted = false;
                        echo "<script>alert('Error: " . $conn->error . "');</script>";
                    }
                }

                if ($allInserted) {
                    echo "<script>alert('Registration successful!');";
                    echo "window.location.href = 'index.php';</script>";

                    // Destroy the session to clear form data
                    session_destroy();
                    exit();
                }
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
    }
}

$conn->close();
?>