<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);
    
    function send_mail($email,$subject,$message){    
        global $mail;
        require "vendor/autoload.php";
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "wheel2rent.project@gmail.com";
        $mail->Password = "oskmipoohthnjdtp";
        $mail->SMTPSecure = 'tsl';
        $mail->Port = 587;
        $mail->setFrom("wheel2rent.project@gmail.com");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
    
        $mail->send();
    
        return true;
    }

    send_mail("parthrm2105@gmail.com","test email","hello parth");