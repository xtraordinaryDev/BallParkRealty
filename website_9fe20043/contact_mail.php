<?php

$to = "contact@yourdomainname.com";
$subject = "Form fill from Contact us Form | Sean Mckamie";

$date = $_POST["date"];
$username = $_POST["userName"];
$message = $_POST["content"];
$email = $_POST["userEmail"];

$msg = "<strong>Name:</strong> ".$username."<br>";
$msg .= "<strong>Date:</strong> ".$date."<br>";
$msg .= "<strong>Email:</strong> ".$email."<br>";
$msg .= "<strong>Message:</strong> ".$message."<br>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: noreply@yourdomainname.com\r\n";
$headers .= "Reply-To: ".$email."\r\n";

$mailSent = mail($to, $subject, $msg, $headers);

if ($mailSent) {
    echo "Thank you. Your message has been sent successfully!";
} else {
    echo "Oops. email not send!";
}


?>
