<?php
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$phoneNum = $_POST['phoneumber'];
	$email = $_POST['email'];
	$package = $_POST['country'];
	$message = $_POST['subject'];

	$to = 'jemina.cayme.sy@gmail.com';
	$subject = 'New Form Submission';
	$body = "First Name: $fname\n".
			"Last Name: $lname\n".
			"Phone Number: $phoneNum\n".
			"Email: $email\n".
			"Package: $package\n".
			"Message: $message\n";

	if (mail($to, $subject, $body)) {
		echo '<script>alert("Email sent successfully!")</script>';
	} else {
		echo '<script>alert("Error, please try again later")</script>';
	}
	echo '<script>window.location.href="contactus.html";</script>';

?>