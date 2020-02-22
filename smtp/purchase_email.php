<?php


require("class.phpmailer.php");


$mail = new PHPMailer();

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = "mail.modokaan.in";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "support@modokaan.in";                // SMTP username
$mail->Password = "Nigam@2019";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted

$mail->From = 'support@modokaan.in';
$mail->FromName = 'Mo Dokaan Web';
$mail->AddAddress('support@modokaan.in');  // Add a recipient
$mail->AddAddress('support@modokaan.com');  // Add a recipient
$mail->AddAddress('santosh9861212138@gmail.com');  // Add a recipient
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = "Modokaan - Order Placed'";
$msg = "<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size:12px;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<center><b>Mo Dokaan</b><br>
<b>Received Order details are like</b></center><br>
<table>
  <tr>
    <th style='width:40%'>Heads</th>
    <th>Values</th>    
  </tr>
  <tr>
    <td>Delivery Date :</td>
    <td>".$_POST['deliveryDate']."</td>
  </tr>
  <tr>
    <td style='font-weight:bold;font-size:12px;'>Customer Name :</td>
    <td style='font-weight:bold;font-size:12px;'>".$_POST['pname']."</td>
  </tr>
  <tr>
    <td style='font-weight:bold;font-size:12px;'>Shipping Address :</td>
    <td style='font-weight:bold;font-size:12px;'>".$_POST['saddress']."<br><b>Pin No.:".$_POST['ppin']."</b><br> Contact No:".$_POST['pmobile']."</td>
  </tr>      
  <tr>
    <td>..............</td>
    <td>..........................</td>
  </tr> 
  <tr>
    <td>Billing Address :</td>
    <td>".$_POST['baddress']."</td>
  </tr>      
  <tr>
    <td>Mobile No. :</td>
    <td style='font-weight:bold;font-size:12px;'>".$_POST['pmobile']."</td>
  </tr>  
  <tr>
    <td>Email Id :</td>
    <td>".$_POST['pemail']."</td>
  </tr>
   <tr>
    <td>Products Cost :</td>
    <td>Rs.".$_POST['amount']."/-</td>
  </tr>    
   <tr>
    <td>Delivery Charges :</td>
    <td>Rs.".$_POST['deliverycharges']."/- For total weight ( ".$_POST['totalweight']." Kg(s) )</td>
  </tr>    
  </tr>    
    <tr>
    <td>Discount Amount :</td>
    <td>Rs.".$_POST['discountamount']."/- For using referral code (<b style='color:blue;'> ".$_POST['rcode']."</b> )</td>
  </tr>
   <tr>
    <td >Total Bill Amount:</td>
    <td style='font-weight:bold;font-size:12px;'>Rs.<b style='color:blue;'>".$_POST['totalamount']."/-</b></td>
  </tr>    
  <tr>
    <td >UPI Reference No. :</td>
    <td style='font-weight:bold;font-size:12px;'>".$_POST['pmessage']."</td>
  </tr>

</table>
<center><b>Products Details are:<b></center>
<table style='font-size:10px;'>
".$_POST['tableproductsText']."</table>
</body>
</html>
";
$mail->Body    = $msg;

if(!$mail->Send()) {
	print_r($mail);
   echo 'error';
   exit;
}

//Reply to Customer
$mailreply = new PHPMailer();

$mailreply->IsSMTP();                                      // Set mailer to use SMTP
$mailreply->Host = "mail.modokaan.in";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mailreply->Port = 587;                                    // Set the SMTP port
$mailreply->SMTPAuth = true;                               // Enable SMTP authentication
$mailreply->Username = "support@modokaan.in";                // SMTP username
$mailreply->Password = "Nigam@2019";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted


$mailreply->From = 'support@modokaan.in';
$mailreply->FromName = 'Mo Dokaan Web';
$mailreply->AddAddress($_POST['pemail']);  // Add a recipient
$mailreply->IsHTML(true);                                  // Set email format to HTML

$mailreply->Subject = "Mo Dokaan - Your Oder Placed Successfully'";
$msg = "<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size:12px;
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
<p><b style='color:rgb(0, 0, 150);'>Namaskar..!<br><br>We are glad and happy you placed your order with us.<br>We are pleased to inform you, your order has been placed successfully...!<br></b></p>
<table>
<h3>Your Placed Order Details are like:</h3>
<table>
  <tr>
    <th style='width:40%'>Heads</th>
    <th>Values</th>    
  </tr>
  <tr>
    <td>Delivery Date :</td>
    <td>".$_POST['deliveryDate']."</td>
  </tr>
  <tr>
    <td>Customer Name :</td>
    <td>".$_POST['pname']."</td>
  </tr>
  <tr>
    <td>Shipping Address :</td>
    <td>".$_POST['saddress']."<br><b>Pin No.:".$_POST['ppin']."</b><br> Contact No:".$_POST['pmobile']."</td>
  </tr>      
  <tr>
    <td>Billing Address :</td>
    <td>".$_POST['baddress']."</td>
  </tr>      
  <tr>
    <td>Email Id :</td>
    <td>".$_POST['pemail']."</td>
  </tr>
  <tr>
    <td>Mobile No. :</td>
    <td>".$_POST['pmobile']."</td>
  </tr>
  
   <tr>
    <td>Products Cost :</td>
    <td>Rs.".$_POST['amount']."/-</td>
  </tr>    
  
   <tr>
    <td>Delivery Charges :</td>
    <td>Rs.".$_POST['deliverycharges']."/- For total weight ( ".$_POST['totalweight']." Kg(s) )</td>
  </tr>    
    <tr>
    <td>Discount Amount :</td>
    <td>Rs.".$_POST['discountamount']."/- For using referral code (<b style='color:blue;'> ".$_POST['rcode']."</b> )</td>
  </tr>

   <tr>
    <td>Total Bill Amount:</td>
    <td>Rs.<b style='color:blue;'>".$_POST['totalamount']."/-</b></td>
  </tr>    
  <tr>
    <td>UPI Reference No. :</td>
    <td>".$_POST['pmessage']."</td>
  </tr>

</table><h3>Selected Products are:</h3>
<table style='font-size:11px;'>
".$_POST['tableproductsText']."</table>
</table>
<br><br>
<p><b style='color:rgb(0, 0, 150);'>Very soon we will dispatch your order. And will share the DTDC Courier Docket No. with you by Email Or SMS.<br><br>
Keep visiting us for new declious food products of Odisha.<br>
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
