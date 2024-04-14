<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@gmail.com';
$email_subject='New form Submission';
$email_body="User Name: $name.\n".
            "User email: $visitior_email.\n".
            "Subject: $subject.\n".
            "User Message: $visitior_email.\n";

$to = 'abarleela@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply To: $visitior_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>            