<?php

	require $_SERVER['DOCUMENT_ROOT']."/includes/config.php";
	$messages = new Messages();
	$messages->markRead(7);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<title>Prueba</title>
	</head>
	<body>
		<ul>
			<li class="1">1</li>
			<li class="2">2</li>
			<li class="3">3</li>
		</ul>
		<button type="button" class="btn">probar</button>

		<script>
			$('.btn').click(function(){
				$('ul').append($('ul').children().eq(2));
			})
		</script>
	</body>
</html>