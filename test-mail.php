<?php

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
require_once "Mail.php";

$host = "mail.modokaan.com";
$username = "hosting@modokaan.com";
$password = "Dvm959%v";
$port = "587";
$to = "ovihosting@gmail.com";
$email_from = "hosting@modokaan.com";
$email_subject = "Mail From Modokaan" ;
$email_body = "whatever you like" ;
$email_address = "hosting@modokaan.com";

$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
$mail = $smtp->send($to, $headers, $email_body);


if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>