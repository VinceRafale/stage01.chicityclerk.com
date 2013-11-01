<?php
  require_once('recaptchalib.php');
  $privatekey = "6LfUFeISAAAAAFFAw4rNPGPGF9JehcWu9XWd-BMt";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification


$fname 			=	$_POST['fname'];
$lname			=	$_POST['lname'];
$emailDowntime	=	$_POST['emailSubmit'];

$con = mysql_connect("clerkpress.stage01.chicityclerk.com", "admin21", "Accenture4!");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}
		
	mysql_select_db("clerkData", $con);
	
	$inputEmail = mysql_query(sprintf("INSERT INTO downtime (fname, lname, email, emailSent, time) VALUES ('%s', '%s', '%s', 0, UTC_TIMESTAMP())",
		mysql_real_escape_string($fname),
		mysql_real_escape_string($lname),
		mysql_real_escape_string($emailDowntime)));
		
		if (!$inputEmail) {
			echo "Could not update database." . " " . mysql_error();
		}
		
		else {
			header('Location: http://stage01.chicityclerk.com/ezbuy/index-email-list.html');
		}


  }



?>
