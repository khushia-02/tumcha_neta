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

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['candidate_email'];
    $password = $_POST['password_generation'];

    if (empty($email) && empty($password)) {
        $error_message = "Please enter your email and password.";
    } elseif (empty($email)) {
        $error_message = "Please enter your email.";
    } elseif (empty($password)) {
        $error_message = "Please enter your password.";
    } else {
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
                $error_message = "Incorrect password. Please try again.";
            }
        } else {
            $error_message = "Email not found. Please try again.";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Add some basic styling */
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div id="overlay"></div>
    <div id="popupDialog">
        <div id="loginForm" class="form-container">
            <h2>Login</h2>
            <?php
            if (!empty($error_message)) {
                echo "<p class='error-message'>" . $error_message . "</p>";
            }
            ?>
            <form action="" method="post" class="login">
                <label for="email">Email:</label>
                <input type="email" name="candidate_email" placeholder="Enter your email" required>
                <label for="password">Password:</label>
                <input type="password" name="password_generation" placeholder="Enter your password" required>
                <button type="button" class="toggle-password" aria-label="Toggle Password Visibility">
                    <i class="fas fa-eye"></i>
                </button>
                <button type="submit" class="button-login">Login</button>
                <span class="toggle-link" onclick="toggleForm()">Don't have an account? Register</span>
            </form>
        </div>
    </div>
</body>
</html>
