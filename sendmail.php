<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include Composer's autoloader

$mail = new PHPMailer(true);    // Create a new PHPMailer instance

try {
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ayushramani2022@gmail.com';                 // Your Gmail address
    $mail->Password   = 'xava nltm vtoh hkry';                    // App password (not your regular Gmail password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
    $mail->Port       = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('ayushramani2022@gmail.com', 'Ayush Ramani');        // Sender's email
    $mail->addAddress('ayushramani2022@gmail.com');                 // Add a recipient
    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Test Email via PHP';                // Email subject
    $mail->Body    = 'This is a <b>test email</b> sent using PHP! '; // Email body
    $mail->AltBody = 'This is a test email sent using PHP!';         // Plain text body for non-HTML mail clients
    $mail->send();                                              // Send the email
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>