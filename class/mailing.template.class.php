<?php
	class MailingTemplate {
		public function select ($template = "", $attr = [], $utf8_decode = true) {
			// Validar nombre de template.
			if (empty ($template)) {
				throw new Exception ("No se ha especificado nombre de template a cargar");
			}

			// Ubicación.
			$template = $_SERVER['DOCUMENT_ROOT']."/mailing/$template";

			ob_start ();
			// Vaciar buffer.
			ob_flush ();

			// Requerir archivo.
			require ($template);
			$html = ob_get_contents ();
			ob_end_clean ();

			// Si está decodificar de utf8, decodificar.
			if ($utf8_decode === true) {
				$html = utf8_decode ($html);
			}

			// Regresar validación.
			return $html;
		}

	}
?>