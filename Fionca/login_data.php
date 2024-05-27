<?php
session_start();

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
    $email = $_POST['candidate_email'];
    $password = $_POST['password_generation'];

    // Fetch user details from the database
    $sql = "SELECT candidate_username, candidate_email, password_generation FROM candidate_registration WHERE candidate_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_username, $db_email, $db_password);
        $stmt->fetch();

        if (password_verify($password, $db_password)) {
            // Password is correct
            $_SESSION['username'] = $db_username;
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
}

$conn->close();
?>
