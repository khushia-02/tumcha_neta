<?php
session_start();

// Connection parameters
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
    $email = $_POST["candidate_email"];
    $pass_word = $_POST["password_generation"];

    // Prepare and execute the query
    $sql = "SELECT * FROM candidate_registration WHERE candidate_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, check password
        $row = $result->fetch_assoc();
        if (password_verify($pass_word, $row["password_generation"])) {
            // Password is correct, start session and redirect
            $_SESSION['user'] = $row;
            echo "<script>alert('Welcome, " . $row['candidate_fullname'] . "!'); window.location.href = './Fionca/index.php';</script>";
        } else {
            // Password is incorrect, show error message in popup
            echo "<script>alert('Incorrect password!'); window.history.back();</script>";
        }
    } else {
        // User not found, show error message in popup
        echo "<script>alert('Credentials are not correct!'); window.history.back();</script>";
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>
