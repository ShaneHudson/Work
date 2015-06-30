<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name  = stripslashes(trim($_POST['name']));	
	$email = stripslashes(trim($_POST['email']));	
	$brief = stripslashes(trim($_POST['brief']));	

	$pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';
	if (preg_match($pattern, $name) || preg_match($pattern, $email)) {
		exit(header("HTTP/1.1 401 Unauthorized"));
	}
	
	$emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

	if($name && $email && $emailIsValid  && $brief){
		$subject  = "Work - Potential Client - $name";
		$body     = "Name: $name <br /> Email: $email <br /> Brief: $brief";
		$headers  = 'MIME-Version: 1.1' . PHP_EOL;
		$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
		$headers .= "From: $name <$email>" . PHP_EOL;
		$headers .= "Return-Path: mail@shanehudson.net" . PHP_EOL;
		$headers .= "Reply-To: $email" . PHP_EOL;
		$headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;
		mail($emailTo, $subject, $body, $headers);
		
		// Check for AJAX, returns 200 OK	
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			exit("AJAX");
		}
		exit(header("Location: ../index.php"));
	} else {
		exit(header("HTTP/1.1 400 Bad Request"));
	}
}
exit(header("HTTP/1.1 400 Bad Request"));
?>
