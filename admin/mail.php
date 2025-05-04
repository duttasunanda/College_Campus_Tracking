<?php
// Include PHPMailer classes manually
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendStudentMail($sname, $semail, $spassword, $scollegename) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'duttasunanda730@gmail.com';      // Your Gmail
        $mail->Password   = 'mocf lgpk lmvn vdkl';        // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('duttasunanda730@gmail.com', 'JIS SCHOOL OF POLYTECHNIC'); // Your Gmail
        $mail->addAddress($semail); // Add a recipient

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Welcome to Our JIS SCHOOL OF POLYTECHNIC!';
        $mail->Body    = "
        <div style='font-family: Arial, sans-serif; color: #333;'>
            <h2 style='color: #4CAF50;'>Welcome, <b>$sname</b>!</h2>
            <p>We are thrilled to have you join <b>$scollegename</b>. Here's to a journey filled with learning, growth, and success!</p>
            <p>Your login credentials are as follows:</p>
            <ul style='list-style-type: none; padding: 0;'>
            <li><b>Email:</b> $semail</li>
            <li><b>Password:</b> $spassword</li>
            </ul>
            <p>Feel free to reach out to us if you have any questions.</p>
            <p style='color: #4CAF50;'>Best Regards,<br>JISSP</p>
        </div>";

        $mail->send();
        return true;
    } catch (Exception $e) {
        // You can log $mail->ErrorInfo
        return false;
    }
}
?>
