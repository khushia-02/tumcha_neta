<?php
include 'config.php'; // Include your database configuration file
session_start();

if (isset($_POST['submit'])) {
    $username = validateInput($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username and Password are required.'); window.location.href = 'login.html';</script>";
    } else {
        // Use parameterized query to prevent SQL injection
        $sql = "SELECT * FROM users WHERE username=?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                // Verify the entered password with the stored hashed password
                if (password_verify($password, $row['password'])) {
                    echo "<script>alert('Welcome " . $row['username'] . "'); window.location.href = 'welcome.php';</script>";
                    exit();
                } else {
                    echo "<script>alert('Incorrect Username or Password. Try again.'); window.location.href = 'login.html';</script>";
                }
            } else {
                echo "<script>alert('Incorrect Username or Password. Try again.'); window.location.href = 'login.html';</script>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Database query failed.'); window.location.href = 'login.html';</script>";
        }
    }
}

function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
