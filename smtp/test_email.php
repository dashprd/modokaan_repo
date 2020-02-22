<?php


require("class.phpmailer.php");


$mail = new PHPMailer();

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = "mail.modokaan.com";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "support@modokaan.com";                // SMTP username
$mail->Password = "Nigama@2019";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted

$mail->From = 'support@modokaan.com';
$mail->FromName = 'MoDokaan Web';
$mail->AddAddress('support@modokaan.com');  // Add a recipient
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'User '.$_POST['contactType'];
//$msg= 'Test mail';

$msg = "<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Recived Query details are like</h2><table>
<table>
  <tr>
    <th style='width:20%'>Heads</th>
    <th>Values</th>    
  </tr>
  <tr>
    <td>Customer Name :</td>
    <td>".$_POST['name']."</td>
  </tr>
  
  <tr>
    <td>Email Id :</td>
    <td>".$_POST['email']."</td>
  </tr>
  <tr>
    <td>Mobile No. :</td>
    <td>".$_POST['mobile']."</td>
  </tr>
  <tr>
    <td>Address :</td>
    <td>".$_POST['address']."</td>
  </tr>    
  <tr>
    <td>Message :</td>
    <td>".$_POST['message']."</td>
  </tr>    
</table> 
</body>
</html>
";
$mail->Body    = $msg;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
	print_r($mail);
   echo 'error';
   //echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}


//Reply to Customer
$mailreply = new PHPMailer();

$mailreply->IsSMTP();                                      // Set mailer to use SMTP
$mailreply->Host = "mail.modokaan.com";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mailreply->Port = 587;                                    // Set the SMTP port
$mailreply->SMTPAuth = true;                               // Enable SMTP authentication
$mailreply->Username = "support@modokaan.com";                // SMTP username
$mailreply->Password = "Nigama@2019";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted


$mailreply->From = 'support@modokaan.com';
$mailreply->FromName = 'Mo Dokaan Web';
$mailreply->AddAddress($_POST['email']);  // Add a recipient
$mailreply->IsHTML(true);                                  // Set email format to HTML

$mailreply->Subject = "Mo Dokaan - Your ".$_POST['contactType']." Placed Successfully'";
$msg = "<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<p><b style='color:rgb(0, 0, 150);'>Namaskar..!<br><br>We are glad and happy to get your ".$_POST['contactType']."</b><br></p><table>
<h2>Your sumitted ".$_POST['contactType']." Details are like:</h2><table>
  <tr>
    <th style='width:20%'>Heads</th>
    <th>Values</th>    
  </tr>
  <tr>
    <td>Customer Name :</td>
    <td>".$_POST['name']."</td>
  </tr>
  
  <tr>
    <td>Email Id :</td>
    <td>".$_POST['email']."</td>
  </tr>
  <tr>
    <td>Mobile No. :</td>
    <td>".$_POST['mobile']."</td>
  </tr>
  <tr>
    <td>Address :</td>
    <td>".$_POST['address']."</b></td>
  </tr>  
  <tr>
    <td>Message :</td>
    <td>".$_POST['message']."</td>
  </tr>
</table>
<br><br>
<p><b style='color:rgb(0, 0, 150);'>Very soon we will get back to you.<b/><br><br>
Keep visiting us for declious food products of Odisha<br>
<br><br>
Thanks a lot...! <br><br>
Regards,<br>
Mo Dokaan Family<br><br>
www.modokaan.com</b></p>
</body>
</html>
";
$mailreply->Body    = $msg;

if(!$mailreply->Send()) {
	print_r($mailreply);
   echo 'error';
   exit;
}

echo 'success';
exit(0);?>
