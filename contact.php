<?php
	$name= $_POST['name'];
	$visitor_email = $_POST['email']
	$message = $_POST['message'];
	
	$email_form = 'princeenabe3@gmail.com';
	
	$email_subject = "new form submission";
	
	$email_body = "user name: $name.\n".
					"user email: $visitor_email.\n".
						"user message: $message.\n";
						
	$to = "princeenabe3@gmail.com";
	
	$headers = "from: $email_from \r\n";
	
	$headers .= "reply-to: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("location: index.html");


?>