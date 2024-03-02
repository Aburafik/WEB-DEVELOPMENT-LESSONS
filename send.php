
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'office.consoleghana@gmail.com'; // Use environment variable for username
        $mail->Password = 'swcd juwy wlyf wtrl'; // Use environment variable for password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('office.consoleghana@gmail.com'); // Use environment variable for sender email
        $mail->addAddress($_POST['email']);
        $mail->isHTML(true);

        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];

        if ($mail->send()) {
            header('Location: index.html?success=true'); // Redirect with success flag
        } else {
            echo 'Error sending email: ' . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
