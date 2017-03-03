<?php
	// phpinfo();
	require_once "class/mailing.template.class.php";
	require_once "class/mailsend.class.php";

	$mailing	= new Mailing();
	$template	= new MailingTemplate();
	$link	= "http://".$_SERVER['HTTP_HOST']."/test.acti"; // Generate link for activate account register
	$attr	= array(
		"nick" => $row['nickname'],
		"link" => $link,
		"subject" => 'Activate your account'
	); // Attribute for template email
				// IF sent email
	$body = $template->select('activateAccount.php', $attr);
	$email = "angel.hdz91@hotmail.com";
	if($mailing->sendMail($email, $body, $attr)){
		echo "Se envió el correo";
	}else{
		echo "valio madres!";
	}
?>