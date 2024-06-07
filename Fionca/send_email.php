<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer autoload file

// Function to send email using SMTP
function sendEmail($recipient, $subject, $message) {
    $mail = new PHPMailer();

    // Check if SMTP configuration is available for the recipient
    $smtpConfig = getSmtpConfig($recipient);

    if ($smtpConfig) {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = $smtpConfig['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $smtpConfig['username'];
        $mail->Password = $smtpConfig['password'];
        $mail->SMTPSecure = $smtpConfig['security'];
        $mail->Port = $smtpConfig['port'];
    }

    // Email content and recipients
    $mail->setFrom('your_email@gmail.com', 'Your Name');
    $mail->addAddress($recipient);
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send the email
    if ($mail->send()) {
        echo 'Email sent successfully';
    } else {
        echo 'Error: ' . $mail->ErrorInfo;
    }
}

// Function to get SMTP configuration for the recipient from the database
function getSmtpConfig($recipient) {
    // Query the database to fetch SMTP configuration based on the recipient email address
    // Replace this with your actual database query logic
    $smtpConfig = array(
        'host' => 'smtp.example.com',
        'port' => 587,
        'username' => 'smtp_username',
        'password' => 'smtp_password',
        'security' => 'tls'
    );

    return $smtpConfig;
}

// Usage example
$recipient = 'recipient@example.com';
$subject = 'Subject of the email';
$message = 'Body of the email';

sendEmail($recipient, $subject, $message);
?>
