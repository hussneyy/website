<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';
$email_body ="User Name: $name.\n"
             "User Email: $visitor_email.\n"
             "User Subject: $subject.\n"
             "User Message: $message.\n";
$to ='hussna.alee25@gmail.com';
$headers = "from: $email_from\r\n"
$headers .= "reply to: $visitor_email \r\n"

mail($to,$email_subject, $email_body,$headers);

header("Location: contact.html")