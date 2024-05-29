<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "tumcha_neta"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve and sanitize form inputs
    $fullName = isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : '';
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';

    // Check if fullName and gender are not empty
    if (!empty($fullName) && !empty($gender)) {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO candidates (full_name, gender) VALUES (?, ?)");
        
        // Check if statement preparation was successful
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        // Bind parameters
        if (!$stmt->bind_param("ss", $fullName, $gender)) {
            die("Error binding parameters: " . $stmt->error);
        }

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            die("Error executing statement: " . $stmt->error);
        }

        // Close statement
        $stmt->close();
    } else {
        die("Full Name and Gender are required.");
    }

    // Close connection
    $conn->close();

    // Redirect to a success page (or back to the form)
    header("Location: index.php"); // Replace with your success page
    exit();
} else {
    die("Invalid request method.");
}
?>
