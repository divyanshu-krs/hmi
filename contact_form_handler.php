<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'sdiv0.github.io;

	$email_subject = 'Website New Contact Form Submission';
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n ".
					"Message: $message.\n";

	$to = "divyanshu17048@iiitd.ac.in";

	$headers = "From $email_from \r\n";
	$headers = "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body)
	headers("Location: index.html")

?>