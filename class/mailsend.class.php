<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/class/PHPMailer/PHPMailerAutoload.php";
	class Mailing{
		public function sendMail($email = '', $body, $attr){
			$mail = new PHPMailer;
			//From email address and name
			$mail->IsSMTP(); // telling the class to use SMTP
			// $mail->SMTPDebug  = 2;				// enables SMTP debug information (for testing)
														// 1 = errors and messages
														// 2 = messages only
			$mail->SMTPAuth	= true;                  // enable SMTP authentication
			// $mail->SMTPSecure = "ssl";
			// $mail->Host			= "smtp.gmail.com"; // sets the SMTP server
			// $mail->Port			= 465;                    // set the SMTP port for the GMAIL server
			// $mail->Username		= "noreply.camlicious@gmail.com"; // SMTP account username
			// $mail->Password		= "camlicious2016";        // SMTP account password

			$mail->SMTPSecure = "ssl";
			$mail->Host			= "smtpout.secureserver.net"; // sets the SMTP server
			$mail->Port			= 465;                    // set the SMTP port for the GMAIL server
			$mail->Username		= "noreply@camlicious.com"; // SMTP account username
			$mail->Password		= "CJF-EcX-7qr-uYq";        // SMTP account password

			$mail->setFrom('noreply@camlicious.com', 'Camlicious');
			$mail->addAddress($email);
			//Send HTML or Plain Text email
			$mail->isHTML(true);
			$mail->Subject = $attr['subject'];
			$mail->Body = $body;
			return $mail->send();
		}
	}
?>