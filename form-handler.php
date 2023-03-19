<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email-form ='baidyanathchaudhary44612@gmail.com';

$email_subject = 'New Form Submission';
$email_body = 'User Name: $name.\n'.
                    'User Email: $visitor_email.\n'. 
                    'Subject: $subject.\n'. 
                    'User Message: $message.\n';


$to ='baidyanathchaudhary44612@gmail.com';

$headers = "Form: $email_for \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")



?>