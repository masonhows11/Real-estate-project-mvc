<?php

namespace App\Http\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use System\Config\Config;

class MailService
{


    public function send($emailAddress, $subject, $body)
    {

        $mail = new PHPMailer(true);

        // Looking to send emails in production? Check out our Email API/SMTP product!
        //        $phpmailer = new PHPMailer();
        //        $phpmailer->isSMTP();
        //        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        //        $phpmailer->SMTPAuth = true;
        //        $phpmailer->Port = 2525;
        //        $phpmailer->Username = '1480411f94b162';
        //        $phpmailer->Password = 'ed6618069fb09d';

        try {
            // for encoding persian characters
            $mail->CharSet = 'UTF-8';
            // Server settings
            // $mail->Port  = 465;
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = 'b1d119b682772a';
            $mail->Password = '19ff78d1e2bed8';                           //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            // Recipients
            // from
            $mail->setFrom(Config::get('mail.SMTP.setFrom.mail'), Config::get('mail.SMTP.setFrom.name'));
            // to
            $mail->addAddress($emailAddress);                     //Add a recipient  //Name is optional
            // $mail->addAddress('ellen@example.com');            //Add a recipient   //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $body;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            return $mail->send();
           // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}