<?php
require_once ('PHPMailer/PHPMailerAutoload.php');
require 'PHPMailer/class.phpmailer.php';
include_once 'Session/DAO/UserDAO.php';
include_once 'Session/Utils/SessionUtils.php';
startSessionIfNotStarted();
$mail = new PHPMailer();
$mail->isSmtp();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML(true);
$mail->Username = 'yolodesign.jas@gmail.com';
$mail->Password = '12345Abcde';
$mail->SetFrom('yolodesign.jas@gmail.com');
$mail->Subject = 'Alguien se ha interesado en tu anuncio';
$mail->Body = 'El usuario con el correo ' . $_SESSION['user'] . ' se quiere poner en contacto contigo. Enviale un email, muchas gracias' ;
$mail->AddAddress($_GET['correo']);
$mail->Send();
header('Location: index.php');
?>