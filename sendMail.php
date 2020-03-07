<?php
$to = "jyotisankar070393@gmail.com";
$from = "das.santan92@gmail.com";
 $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
?>