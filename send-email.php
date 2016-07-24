<?php 
$name 			= $_POST['name'];
$email 			= $_POST['email'];
$subject 		= $_POST['subject'];
$message 		= $_POST['message'];
$formcontent	="From: $name \n Message: $message";
$recipient 		= "your@email.com";
$email_subject 	= "Contactform - ".$subject;
$mailheader 	= "From: $email \r\n";

mail($recipient, $email_subject, $formcontent, $mailheader) or die("Error!");

echo "Thank You!";

$url = 'index.html';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';  