<?php

// print($_REQUEST['subject'] . " " . $_REQUEST['email'] . " " . $_REQUEST['comments'] . " " . $_REQUEST['fullname']);
// print("From: ".$_REQUEST['fullname']. " &#60;".$_REQUEST['email'].">");

//keeping their email in a cookie

if (!isset($_COOKIE["email"])) {
	$email = $_POST["email"];
	setcookie( "email", $email, strtotime('+1 year'));
}


// The message
$message = $_REQUEST['comments'];

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

$to = 'me.starbuck@gmail.com';
$subject = $_REQUEST['subject'];
$email = $_REQUEST['email'];
$name = $_REQUEST['fullname'];

// Send

	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/plain; charset=iso-8859-1";
	$headers[] = "From: ".$_REQUEST['fullname']. " <".$_REQUEST['email'].">";
	$headers[] = "Reply-To: ". $_REQUEST['email'];
	$headers[] = "Subject: {$subject}";
	$headers[] = "X-Mailer: PHP/".phpversion();

$something = mail($to, $subject, $message, implode("\r\n", $headers));
if($something)
	echo "YAY";
else echo ":(";
header("Location: index.php");
?>