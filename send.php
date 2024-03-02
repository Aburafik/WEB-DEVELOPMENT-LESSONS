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

//     $to = "rfkabubakari@gmail.com"; // Your email address
//     $name = $_POST['name'];
//     $from = $_POST['email'];
//     $message = $_POST['message'];
//     $subject = "Contact Form Submission";

//     $headers = "From: " . $from . "\r\n";
//     $headers .= "Reply-To: " . $from . "\r\n";
//     $headers .= "X-Mailer: PHP/" . phpversion();

//     $result = mail($to, $subject, $message, $headers);

//     if ($result)
//     {
//         echo '<script type="text/javascript">alert("Your message was sent!");</script>';
//         echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

//     }
//     else
//     {
//         echo '<script type="text/javascript">alert("Oops! Your message wasn’t sent. Try again later.");</script>';
//         echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
//     }
}
?>