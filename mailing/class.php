<?php
	class Test{
		public function cargar ($template = "", $attr = [], $utf8_decode = true) {
			if (empty ($template)) {
				throw new Exception ("is not specific template");
			}
			$template = "$template";
			require ($template);
			$html = ob_get_contents ();
			if ($utf8_decode === true) {
				$html = utf8_decode ($html);
			}
			return $html;
		}
	}