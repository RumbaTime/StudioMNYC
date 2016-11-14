<?php
	require_once('recaptchalib.php');
  $privatekey = "6LcUx-sSAAAAAE6NG4dlHeUE7yi7sUmhxgHsV0k1";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {

	$name = $_POST["name"];
	$email = $_POST["email"];
	$comment = $_POST["comment"];
	
	$to      = 'minako.art@gmail.com';
	$subject = 'Contact Form';
	$message = "Name: ".$name." Email: ".$email." Message: ".$comment;
	$headers = 'From: website@minakoyoshino.com'."\r\n" .
    'Reply-To: '.$email."\r\n";

	mail($to, $subject, $message, $headers);
	
	header('Location: index.php');
  }
?>