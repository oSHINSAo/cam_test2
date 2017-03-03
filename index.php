<?php
	require_once "includes/config.php";
	require_once "includes/front.conf"; // configuration for web site
	require_once "includes/head.php"; // head of document
	// Non display body if no was loged or not was accepted warning
	$active = ".activeWebcams";
?>
<body>
	<?php
		require "includes/header.php";
		require "includes/content.php";
		require "includes/footer.php";

		if(isset($_GET['nick']) && !isset($_SESSION['iduser'])){
			$_SESSION['nick'] = $_GET['nick'];	?>
			<a href="modals/changePassword.php" data-width="500" class="modaal-ajax changePasswordAction" style="display:none;"></a>
			<script>
				$(document).ready(function() {
					$('.changePasswordAction').trigger('click');
				});
			</script>
<?php	}	?>
</body>
</html>