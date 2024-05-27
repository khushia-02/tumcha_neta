<?php
// Database connection details
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
    $username = $_POST['candidate_username'];
    $contact = $_POST['candidate_contact'];
    $email = $_POST['candidate_email'];
    $fullname = $_POST['candidate_fullname'];
    $password = $_POST['password_generation'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Handle file upload
    $target_dir = "candidate_uploads/";
    $target_file = $target_dir . basename($_FILES["candidate_profile_path"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["candidate_profile_path"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["candidate_profile_path"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Ensure the target directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES["candidate_profile_path"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["candidate_profile_path"]["name"])) . " has been uploaded.";

            // Insert user data into the database
            $sql = "INSERT INTO candidate_registration (candidate_username, candidate_email, candidate_fullname, candidate_contact, password_generation, candidate_profile_path) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $username, $email, $fullname, $contact, $hashedPassword, $target_file);
            if ($stmt->execute()) {
                echo "<script>alert('Registration successful!');";
                echo "window.location.href = 'index.php';</script>";
                
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>
