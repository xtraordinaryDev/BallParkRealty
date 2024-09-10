<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'sean@ballparkrealtymn.com';  

	// prepare message 
	$body = "You have got a new contact message from - Ballpark Realty :
	
	First Name:  $_POST[name]
	Last Name:  $_POST[lastname]
	Email:  $_POST[email]
	Phone:  $_POST[phone]
	Zip:  $_POST[zip]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Message from BallPark', $body, $headers );

} ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Thanks!</title>
</head>
<body>
<p> Thank you! We will get back to you soon.</p>
</body>
</html>