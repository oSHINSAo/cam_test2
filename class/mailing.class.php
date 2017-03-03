<?php
	// require "PHPMailer/PHPMailerAutoload.php";
	class MailingBK{
		public function selectTemplate($template, $attr = [], $utf8_decode = true){
			if (empty ($template)) {
				throw new Exception ("is not specific template");
			}
			$template = $_SERVER['DOCUMENT_ROOT']."/mailing/$template";
			require ($template);
			// Vaciar buffer.
			ob_flush ();

			// Requerir archivo.
			ob_start ();
			require ($template);
			$html = ob_get_contents ();
			ob_end_clean ();

			// Si está decodificar de utf8, decodificar.
			if ($utf8_decode === true) {
				$html = utf8_decode ($html);
			}
			return $html;
		}
		public function sendMail($email = '', $template = '', $attr = []){
			$mail = new PHPMailer;
			$template = $this->selectTemplate($template, $attr);
			//From email address and name
			$mail->setFrom('no-reply@camlicious.com', 'Camlicious');
			$mail->addAddress($email);
			//Send HTML or Plain Text email
			$mail->isHTML(true);
			$mail->Subject = $attr['subject'];
			$mail->Body = $template;
			return $mail->send();
		}
	}