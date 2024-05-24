<?php
    session_start();
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        header("Location: login.php ");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM candidate_registration WHERE candidate_email='{$_SESSION['candidate_email']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "Welcome  <a href='logout.php'>Logout</a>";
    }
?>