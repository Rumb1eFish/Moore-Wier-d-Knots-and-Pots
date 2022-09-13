<?php

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	$message_subject = $_POST['subject'];

	$email_from = "Moore Weir'd Knots & Pots Website";
	$email_subject = $message_subject;
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";
	
	$to = "benjamin.j.graham2006@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .="Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	header("Location: Moore Weir'd Knots & Pots")

?>