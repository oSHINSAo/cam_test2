	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<nav class="pull-left">
				<li><a href="/register/models">Become a model</a></li>
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">2257</a></li>
				<li><a href="#">DMCA</a></li>
				<li><a href="#">FAQ's</a></li>
				<li><a href="#">Contact</a></li>
			</nav>
			<div class="pull-right"><p class="text-muted">Copyright © 2017 <a href="#">Camlicious.com</a></p></div>
		</div>
	</footer>
	<script>
		$(document).ready(function(){
			var active = $('<?= $active; ?>');
			active.removeClass("nav-item");
			active.addClass("active");
		});
	</script>
	<!-- /.Footer -->

<?php
	// Show message alert for only older 18
	if(isset($showWarning)){	
		require_once $_SERVER['DOCUMENT_ROOT']."/includes/older.msg.php";
	}	?>