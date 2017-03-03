
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		metatags(); 
		$libraries = new libraries();
		$libraries->Jquery();
		$libraries->JqueryValidation();
		$libraries->JqueryCookie();
		$libraries->JqueryRateYo();
		$libraries->Modaal();
		$libraries->Bootstrap();
		$libraries->FontAwesome();
		$libraries->Animate();
		$libraries->Styles();
		$libraries->BootstrapSelect();
		$libraries->Slick();
		$libraries->Calendar();
		$libraries->uploadFile();
		$libraries->jqueryBootcomplete();
		$libraries->emojify();
		$libraries->te();
		$libraries->slickCarousel();

		if(!isset($_SESSION['iduser']) && !isset($_COOKIE['older18'])){
			$showWarning = true;
		}
		// $showWarning = true;
		// if a user is session
		if(isset($_SESSION['iduser'])){	?>
			<script>
				(function userOnline() {
					$.ajax({
						url: '/actions/users.actions.php',
						data: {action: 'userOnline'},
						dataType: 'json',
						type: 'post',
						success: function(data) {
						},
						complete: function() {
							setTimeout(userOnline, 15000);
						}
					});
				})( jQuery );
				(function unreadMessages() {
					$.ajax({
						url: '/actions/messages.actions.php',
						data: {action: 'unreadMessages'},
						dataType: 'json',
						type: 'post',
						success: function(data) {
							$('span.number').text(data);
						},
						complete: function() {
							setTimeout(unreadMessages, 1000);
						}
					});
				})( jQuery );
<?php	} // if a user is session ?>
			</script>

	<title>Camlicious</title>
	
</head>