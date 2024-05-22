<?php

include 'config.php';
$msg = "";

if (isset($_GET['verification'])) {
    $verificationCode = $_GET['verification'];
    $result = mysqli_query($conn, "SELECT * FROM candidate_registration WHERE code='$verificationCode'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $query = mysqli_query($conn, "UPDATE  SET code='' WHERE code='$verificationCode'");

        if ($query) {
            $_SESSION['verification_done'] = true;
            $_SESSION['verification_user_id'] = $row['id'];
            header("Location: login.php");
            exit();
        }
    } else {
        header("Location: login.php");
        exit();
    }
}

if (isset($_POST['submit'])) {
    $email = validateInput($_POST['email']);
    $password = $_POST['password'];  // Do not validate or hash here

    if (empty($email) || empty($password)) {
        $msg = "<div class='alert alert-danger'>Email and Password are required.</div>";
    } else {
        // Use parameterized query to prevent SQL injection
        $sql = "SELECT * FROM candidate_registration WHERE candidate_email=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            // Verify the entered password with the stored hashed password
            if (password_verify($password, $row['password'])) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $email;
                header("Location: welcome.php");
                exit();
            } else {
                $msg = "<div class='alert alert-danger'>Incorrect Email or Password. Try again.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Incorrect Email or Password. Try again.</div>";
        }
    }
}

function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<!DOCTYPE html>
<html lang="zxx">
    
    <head>
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form" style="background: linear-gradient(to bottom, #5E17EB 0%, #ffeaab 100%);">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/login.png" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Login Now</h2>
                        <p>Welcome To PrepPros </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password"
                            style="margin-bottom: 2px;" required>
                            <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                            <button name="submit" style="background-color:#5E17EB;" class="btn" type="submit">Login</button>
                        </form>
                        <div class="social-icons">
                            <p>Create Account! <a href="register.php">Register</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->
    
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut(100, function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
        </script>

</body>
</html>
