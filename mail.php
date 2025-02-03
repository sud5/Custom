<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // Include Composer's autoloader

$mail = new PHPMailer(true);


try {
    // Server settings
    $mail->isSMTP();                        // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com:465'; // Specify SMTP server (e.g., smtp.gmail.com)
    $mail->SMTPAuth   = true;               // Enable SMTP authentication
    $mail->Username   = 'il@insidelearnings.com'; // SMTP username
    $mail->Password   = 'xmpf jakq cexq yfoj';         // SMTP password
    $mail->SMTPSecure = 'ssl';              // Enable TLS encryption (`ssl` or `tls`)
    $mail->Port       = 465;                // TCP port (587 for TLS, 465 for SSL)

    // Recipients
    $mail->setFrom('sgupta@gmail.com', $_POST['Name']);
    $mail->addAddress('sudhanshug5@gmail.com', 'Sudhanshu Gupta'); // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Moodle Enquiry';
    $mail->Body    = $_POST['message'].'His Email:'. $_POST['Email'] .'and Phone number:'.$_POST['phone'];
    $mail->AltBody = 'His Email:'. $_POST['Email'] .'and Phone number:'.$POST['phone'] ; // For non-HTML clients

    $mail->send();
    $url = "/contact.php?sent=1";
} catch (Exception $e) {
//    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $url = "/contact.php?sent=2";
}
header('Location: '.$url);
?>
