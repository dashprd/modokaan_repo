<?php
require("class.smtp.php");
//echo "reached";die;
$mail = new PHPMailer();

$mail->IsSMTP();// set mailer to use SMTP
//$mail->SMTPDebug = 3;
//$mail->Host = "webmail.modokaan.com;";  // specify main and backup server
$mail->Host = "mail.modokaan.in";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "support@modokaan.in";  // SMTP username
$mail->Password = "Nigam@2019"; // SMTP password
//$mail->SMTPSecure = 'tls'; 
$mail->Mailer = "Mailer";
$mail->Port = "25";
$mail->From = "support@modokaan.in";
$mail->FromName = "Mo Dokaan Website (Question or feedback)";
$mail->AddAddress("support@modokaan.in");
$mail->AddAddress("nigamaenterprisers@gmail.com");                  // name is optional
//$mail->AddReplyTo("ovihosting@gmail.com", "Information");
$mail->WordWrap = 100;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML
$mail->Subject = 'User Question / Feedback';
$msg = '<br>Name : '.$_POST['name'].',<br> Email : '.$_POST['email'].',<br> Mobile : '.$_POST['mobile'].',<br> City :'.$_POST['city'].',<br> Message :'.$_POST['message']  ;
$mail->Body    = $msg;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "error";
   //echo "" . $mail->ErrorInfo;
   exit;
}
echo "success";

?>