<?php
// require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Start session
session_start();

// Redirect if user is already logged in
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header("Location: register.php");
    exit();
}

// include 'config.php';
// $msg = "";

// // Function to validate user input
// function validateInput($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $username = validateInput($_POST['username']);
    // $email = validateInput($_POST['email']);
    // $phone_no = validateInput($_POST['phone_no']);
    // $password = validateInput($_POST['password']);

    if (empty($username) || empty($email) || empty($password) || empty($phone_no)) {
        $msg = "<div class='alert alert-danger'>All fields are required.</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "<div class='alert alert-danger'>Invalid email format.</div>";
    } elseif (!ctype_digit($phone_no)) {
        $msg = "<div class='alert alert-danger'>Phone number should only have numbers.</div>";
    } elseif (strlen($phone_no) !== 10) {
        $msg = "<div class='alert alert-danger'>Phone number should be 10 digits.</div>";
    } elseif (strlen($password) < 6) {
        $msg = "<div class='alert alert-danger'>Password must be at least 6 characters.</div>";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

        $checkEmailQuery = "SELECT * FROM candidate_registration WHERE candidate_email=?";
        $checkEmailStmt = mysqli_prepare($conn, $checkEmailQuery);
        mysqli_stmt_bind_param($checkEmailStmt, "s", $email);
        mysqli_stmt_execute($checkEmailStmt);
        $result = mysqli_stmt_get_result($checkEmailStmt);

        if (mysqli_num_rows($result) > 0) {
            $msg = "<div class='alert alert-danger'>This email address is invalid or already exists.</div>";
        } else {
            $insertUserQuery = "INSERT INTO candidate_registration (candidate_username_available, candidate_fullname, candidate_contact, password_generation) VALUES (?, ?, ?, ?)";
            $insertUserStmt = mysqli_prepare($conn, $insertUserQuery);
            mysqli_stmt_bind_param($insertUserStmt, "ssss", $username, $email, $phone_no, $hashedPassword);
            $insertResult = mysqli_stmt_execute($insertUserStmt);

            if ($insertResult) {
                $msg = "<div class='alert alert-info'>Registration successful.</div>";
            } else {
                $msg = "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- <?php include dirname(__DIR__) . '/includes/head1.php'; ?> -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Add more styles/scripts as needed -->
</head>

<body>
<?php
// require 'vendor/autoload.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// Start session
// session_start();

// Redirect if user is already logged in
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header("Location: register.php");
    exit();
}

// include 'config.php';
// $msg = "";

// // Function to validate user input
// function validateInput($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $username = validateInput($_POST['username']);
    // $email = validateInput($_POST['email']);
    // $phone_no = validateInput($_POST['phone_no']);
    // $password = validateInput($_POST['password']);

    if (empty($username) || empty($email) || empty($password) || empty($phone_no)) {
        $msg = "<div class='alert alert-danger'>All fields are required.</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "<div class='alert alert-danger'>Invalid email format.</div>";
    } elseif (!ctype_digit($phone_no)) {
        $msg = "<div class='alert alert-danger'>Phone number should only have numbers.</div>";
    } elseif (strlen($phone_no) !== 10) {
        $msg = "<div class='alert alert-danger'>Phone number should be 10 digits.</div>";
    } elseif (strlen($password) < 6) {
        $msg = "<div class='alert alert-danger'>Password must be at least 6 characters.</div>";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

        $checkEmailQuery = "SELECT * FROM candidate_registration WHERE candidate_email=?";
        $checkEmailStmt = mysqli_prepare($conn, $checkEmailQuery);
        mysqli_stmt_bind_param($checkEmailStmt, "s", $email);
        mysqli_stmt_execute($checkEmailStmt);
        $result = mysqli_stmt_get_result($checkEmailStmt);

        if (mysqli_num_rows($result) > 0) {
            $msg = "<div class='alert alert-danger'>This email address is invalid or already exists.</div>";
        } else {
            $insertUserQuery = "INSERT INTO candidate_registration (candidate_username_available, candidate_fullname, candidate_contact, password_generation) VALUES (?, ?, ?, ?)";
            $insertUserStmt = mysqli_prepare($conn, $insertUserQuery);
            mysqli_stmt_bind_param($insertUserStmt, "ssss", $username, $email, $phone_no, $hashedPassword);
            $insertResult = mysqli_stmt_execute($insertUserStmt);

            if ($insertResult) {
                $msg = "<div class='alert alert-info'>Registration successful.</div>";
            } else {
                $msg = "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Add more styles/scripts as needed -->
</head>

<body>
<section class="w3l-mockup-form" style="background: linear-gradient(to bottom, rgb(194, 32, 194) 0%, gold 100%);">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/signup.png" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Register Now</h2>
                        <p>Welcome to PrepPros </p>
                        <!-- <?php echo $msg; ?> -->
                        <form action="" method="post">
                            <input type="text" class="username" name="username" placeholder="Enter Your User name" required>
                            <input type="email" class="username" name="email" placeholder="Enter Your Email" required>
                            <input type="text" class="username" name="phone_no" placeholder="Enter Your Phone number" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" required>
                            <button name="submit" class="btn" style="background-color: purple;" type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account! <a href="login.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.main-mockup').fadeOut(100, function(c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>
</body>

</html>


