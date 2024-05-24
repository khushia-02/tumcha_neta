<?php
// Start session to access session variables
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

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
    $username = $_SESSION['username']; // Use username from session
    $self_profession = $_POST['self_profession'];
    $about_candidate = $_POST['about_candidate'];
    $candidate_area_pincode = $_POST['candidate_area_pincode'];
    $candidate_city = $_POST['candidate_city'];
    $candidate_area_current = $_POST['candidate_area_current'];
    $candidate_gender = $_POST['candidate_gender'];
    $candidate_dob = $_POST['candidate_dob'];
    $candidate_email = $_POST['candidate_email'];
    $candidate_state = $_POST['candidate_state'];
    
    // File upload handling
    $target_dir = "Fionca/uploads";
    $target_file = $target_dir . basename($_FILES["profile_photo_path"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["profile_photo_path"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["profile_photo_path"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profile_photo_path"]["tmp_name"], "./".$target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["profile_photo_path"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    // Check if candidate already exists
    $check_query = "SELECT * FROM candidate_further_details WHERE candidate_username='$username'";
    $result = $conn->query($check_query);
    if ($result->num_rows > 0) {
        echo "You have already entered this data.";
    } else {
        // Insert candidate data into database
        $sql = "INSERT INTO candidate_further_details (candidate_username, self_profession, about_candidate, candidate_area_pincode, candidate_city, candidate_area_current, candidate_gender, candidate_dob, candidate_email, candidate_state, profile_photo_path)
        VALUES ('$username', '$self_profession', '$about_candidate', '$candidate_area_pincode', '$candidate_city', '$candidate_area_current', '$candidate_gender', '$candidate_dob', '$candidate_email', '$candidate_state', '$target_file')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
}
?>
