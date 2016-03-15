<?php 

$ToEmail = '1151@aircadets.org'; 
$EmailSubject = 'Site contact form'; 

$mailheader = "From: ".$_POST["form_email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["form_email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$MESSAGE_BODY = "Name: ".$_POST["form_name"]."\n"; 
$MESSAGE_BODY .= "Email: ".$_POST["form_email"]."\n"; 
$MESSAGE_BODY .= "Comment: ".nl2br($_POST["form_msg"])."\n"; 

mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>
