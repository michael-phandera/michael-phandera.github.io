<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Base files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Email
{
    private $transport = null;
    public function _construct()
    {
        // Create the Transport
    }

    public function send($from, $to, $msg, $subject, $copy = [], $bcopy = [])
    {


        // PHPMailer classes into the global namespace

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP(); // using SMTP protocol
            $mail->Host = ' smtp.gmail.com'; // SMTP host as gmail
            $mail->SMTPAuth = true;  // enable smtp authentication
            $mail->Username = 'michaelphandera@gmail.com';  // sender gmail host
            $mail->Password = 'zaryflsraadbteoc'; // sender gmail host password
            $mail->SMTPSecure = 'ssl';  // for encrypted connection
            $mail->Port = 465;   // port for SMTP
            //$mail->SMTPDebug = 3;
            $mail->setFrom($from, "RESUME"); // sender's email and name
            $mail->addAddress($to, "Receiver");  // receiver's email and name

            $mail->Subject = $subject;
            $mail->Body    = '<p>' . $msg . '</p>';
            $mail->IsHTML(true);

            $mail->send();
            return 1;
        } catch (Exception $e) { // handle error.
            return  'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}
