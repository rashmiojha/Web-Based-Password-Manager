<?php

require "phpmailer/PHPMailerAutoload.php";
$mail = new PHPMailer(); 
$mail->IsSMTP(); // send via SMTP
$mail->Host = 'smtp.gmail.com';
//IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "projectrssomk@gmail.com"; // SMTP username
$mail->Password = "safehouse"; // SMTP password
$webmaster_email = "projectrssomk@gmail.com"; //Reply to this email ID
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$email="projectrssomk@gmail.com"; // Recipients email ID
$name="Project"; // Recipient's name
$mail->From = $webmaster_email;
$mail->FromName = "localhost";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"localhost");
$mail->WordWrap = 50; // set word wrap
// $mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
// $mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(true); // send as HTML
$mail->Subject = "This is the subject";
$mail->Body = "Hi, This is the HTML BODY "; //HTML Body
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
if(!$mail->send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}





// ?>