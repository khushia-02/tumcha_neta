<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// session_start();

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header("Location: register.php");
    exit();
}

include 'config.php';
$msg = "";

function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = validateInput($_POST['username']);
    $name = validateInput($_POST['full_name']);
    $email = validateInput($_POST['candidate_email']);
    $ph = validateInput($_POST['phone_no']);
    $password = validateInput($_POST['password']);

    if (empty($name) || empty($email) || empty($password) || empty($ph)) {
        $msg = "<div class='alert alert-danger'>All fields are required.</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "<div class='alert alert-danger'>Invalid email format.</div>";
    } elseif (!ctype_digit($ph)) {
        $msg = "<div class='alert alert-danger'>Phone number should only have numbers.</div>";
    } elseif (strlen($ph) !== 10) {
        $msg = "<div class='alert alert-danger'>10 digits in phone number.</div>";
    } elseif (strlen($password) < 6) {
        $msg = "<div class='alert alert-danger'>Password must be at least 6 characters.</div>";
    } elseif (!preg_match("/[a-zA-Z]/", $password)) {
        $msg = "<div class='alert alert-danger'>Password must contain at least one letter.</div>";
    } elseif (!preg_match("/[0-9]/", $password)) {
        $msg = "<div class='alert alert-danger'>Password must contain at least one number.</div>";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        $code = md5(rand());

        $checkEmailQuery = "SELECT * FROM candidate_registration WHERE candidate_email=?";
        $checkEmailStmt = mysqli_prepare($conn, $checkEmailQuery);
        mysqli_stmt_bind_param($checkEmailStmt, "s", $email);
        mysqli_stmt_execute($checkEmailStmt);
        $result = mysqli_stmt_get_result($checkEmailStmt);

        if (mysqli_num_rows($result) > 0) {
            $msg = "<div class='alert alert-danger'>This email address is invalid or already exists.</div>";
        } else {
            $insertUserQuery = "INSERT INTO candidate_registration(candidate_username_available, candidate_fullname, candidate_email, candidate_contact, password) VALUES (?, ?, ?, ?, ?)";
            $insertUserStmt = mysqli_prepare($conn, $insertUserQuery);
            mysqli_stmt_bind_param($insertUserStmt, "sssss", $username, $name, $email, $ph, $hashedPassword);
            $insertResult = mysqli_stmt_execute($insertUserStmt);

            if ($insertResult) {
                $mail = new PHPMailer(true);

                try {
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'prepbroszz@gmail.com';
                    $mail->Password   = 'hqlykprmembzmcfa';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port       = 465;

                    $mail->setFrom('prepbroszz@gmail.com');
                    $mail->addAddress($email);

                    $mail->isHTML(true);
                    $mail->Subject = 'Account Verification';
                    $mail->Body = 'Here is the verification link: <b><a href="http://localhost/PrepPros/login&signup/login.php?verification='.$code.'">Click here </a></b>';

                    $mail->send();
                    $msg = "<div class='alert alert-info'>We have sent a verification link to your email address.</div>";
                } catch (Exception $e) {
                    $msg = "<div class='alert alert-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
                }
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
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <section class="w3l-mockup-form" style="background: linear-gradient(to bottom, #8C52FF 0%, #FFDE59 100%);">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/signup.png" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2 style="color: #5E17EB">Register Now</h2>
                        <p>Welcome to CinemaBinema </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="text" class="username" name="username" placeholder="Enter Your User name" required>
                            <input type="text" class="full_name" name="full_name" placeholder="Enter Your Full name" required>
                            <input type="email" class="email" name="candidate_email" placeholder="Enter Your Email" required>
                            <input type="phone_no" class="username" name="phone_no" placeholder="Enter Your Phone number" required>
                            <input type="password" id="password" class="password" name="password" placeholder="Enter Your Password" required>
                            <button type="button" style="width:50px;" id="togglePassword" aria-label="Toggle Password Visibility">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </button>                            
                            <button name="submit" class="btn" style="background-color: #5E17EB;" type="submit">Register</button>
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
        // script.js
        document.getElementById('togglePassword').addEventListener('click', function (e) {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle the icon class
            if (type === 'password') {
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        });

    </script>
</body>

</html>
