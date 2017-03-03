<?php
	$url = "http://camqa.4unity.mx/";
?>
<html>
	<head>
		<style>
			body{	font-family: verdana;}
			.container{	width:100%;text-align:center;}
			h1{	color:#db2376;}
			.footer{	background-color:#cccccc;width:100%;}
			.btn-pink{	background-color:#db2376;color:#fff;border-radius:20px;font-weight:bold;padding: 10px 20px 10px 20px;text-decoration: none;}
			.footer{	padding: 10px 0 10px 0;}
			.textCenter{	text-align:center;}
			.footer p{	margin:20px;}
			.footer p a{	margin:10px;}
			.textLeft{	text-align:left;margin:25px;}
		</style>
	</head>
	<body>
		<div class="container">
			<p class="textCenter">To ensure devivery, add <strong>noreply@camlicious.com</strong> to your address book</p>
			<img src="<?= $url; ?>img/logo.png">
			<h1>Hey <?= $attr['nick']; ?>!</h1>
			<p><strong>We heard you need a password reset.</strong></p>
			<p>To do so, please click the button below to change your password</p>
			<p style="padding: 15px 0 20px 0;"><a href="<?= $attr['link']; ?>" class="btn-pink">Change Password</a></p>
			<p>If you did not make this request just ignore this email.</p>
			<p><strong>Cheers,<br>Camlicious</strong></p>
		</div>
		<div class="footer">
			<div class="container1 textCenter">
				<p>This is an automatic message. Please do not reply to this email.<br>
				<strong>Copyright &copy; 2017 Camlicious.com</strong></p>
				<p><strong>
					<a href="<?= $url; ?>support">Support</a>
					<a href="<?= $url; ?>termsofuse">Terms of Use</a>
					<a 	href="<?= $url; ?>privacypolicy">Privacy Policy</a>
				</strong></p>
			</div>
		</div>
	</body>
</html>