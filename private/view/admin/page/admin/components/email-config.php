<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = ;

$mail->Username = "";
$mail->Password = "";

$mail->setFrom(htmlspecialchars($_SESSION['email']), $fromName);
$mail->addAddress($email);

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

?>
