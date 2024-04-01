<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$visitor_number=$_POST['number'];
$message=$_POST['message'];

$email_from='info@princechaudhary.com.np';
$email_subjext="New form";
$email_body="User Name: $name .\n".
"User Email: $visitor_email \n ".
"User Contact Number: $visitor_number \n".
"User Message: $message";

$to='prince1905tech@gmail.com';

$headers="From: $email_from \r\n";
$headers.= "Reply-To:$visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");



?>