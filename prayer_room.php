<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'omokethomas644@gmail.com';
    $mail->Password = 'teng elgi iexd yrgd'; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587;
    $mail->setFrom('omokethomas644@gmail.com');
    $mail->addAddress('omokethomas644@gmail.com'); 
    $mail->isHTML(true);
    $mail->Subject = 'Prayer Request from ' . $_POST["name"]; 
    $mail->Body = 'Name: ' . $_POST["name"] . '<br>Phone Number: ' . $_POST["phone_number"] . '<br>Prayer Request: ' . $_POST["prayer_request"]; 

    if(!$mail->send()){
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo "<div class='alert alert-success'>Details Received Successfully</div>";
    }
}