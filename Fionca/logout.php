<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the index page
header("Location:index.php"); // Adjust the path if necessary
exit();
?>