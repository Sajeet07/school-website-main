<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if (isset($_POST["send"])) {
    // $name = $_POST["name"];

    $mail = new PHPMailer(true);
    //smtp settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'Meroschool829@gmail.com';
    $mail->Password = 'engdxiwsmhijwljb';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //email settings
    $mail->setFrom('Meroschool829@gmail.com', 'Sajit');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);


    $mail->Subject = ($_POST["subject"]);
    $mail->Body = $name . ($_POST["message"]);

    $mail->send();

    if ($mail->send()) {
        header("Location:../index.php");
    }
}
