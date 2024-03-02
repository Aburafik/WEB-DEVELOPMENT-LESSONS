<?php

use PHPMailer\PHPMailer\PHPmailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';
if (isset($_POST['send']))
{
$mail= new PHPMailer(true);
$mail->isSMTP();
$mail->Host=smtp.gmail.com;
$mail->SMTPAuth=true;
$mail->Username='office.consoleghana@gmail.com';
$mail->password='swcd juwy wlyf wtrl';
$mail->SMTPSecure='ssl';
$mail->PORT='465';


$mail->setFrom('office.consoleghana@gmail.com');
$mail->AddAddress($_POST['email']);
$mail->isHTML(true);

$mail->Subject=$_POST('subject');
$mail->Body=$_POST('message');

$mail->send();
        echo
         "
         <script>
        alert('Your message was sent!');
        document.location.href='index.html';
        </script>";


}
?>

