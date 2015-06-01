<?php
// Check for empty fields
if(empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!"; // ESCREVER EM PORT?
	return false;
   }
	
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'henrique@weact.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nEmail: $email_address\n\nMessage:\n$message";
mail($to,$email_subject,$email_body);
return true;			
?>