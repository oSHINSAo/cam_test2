<?php
	$url = "http://89.40.115.94/";
?>
<html>
	<head>
		<style>
			body{
				font-family: verdana;
			}
			h1{
				color:#db2376;
			}
			.footer{
				background-color:#cccccc;
				width:100%;
				padding: 1px;
				margin-top: 20px !important;
			}
			.btn-blue{
				background-color: #45a4c4;
				border-radius: 50px;
				text-decoration: none;
				padding: 10px 20px 10px 20px;
				color: #fff;
				font-weight: bold;
			}
			.textCenter{
				text-align:center;
			}
			.footer p{
				margin:8px;
			}
			.footer p a{
				margin:10px;
			}
			.textLeft{
				text-align:left;
				margin:25px;
			}
			.container{
				width:700px;
				margin:0 auto;
			}
			.containertwo{
				padding: 5px 0px 5px 0px;
				margin-top:20px;
			}
			.footer div{
				width:100%;
			}
		</style>
	</head>
	<body>
		<p class="textCenter">To ensure delivery, add <strong>noreply@camlicious.com</strong> to your address book</p>
		<div class="container" style="height: 300px">
			<img src="<?= $url; ?>img/mailing/modelActivateAccount.png" height="320px" style="float:right;">
			<center><img src="<?= $url; ?>img/logo.png"></center>
			<h1 class="textLeft">You're almost done!</h1>
			<p class="textLeft">Click on the activation link below to verify your account and get full access</p>
			<a href="<?= $attr['link']; ?>" class="btn-blue textLeft">Activate your account!</a>
		</div>
		<div class="container footer textCenter">
			<div>
				<p>Please do not reply to this email. The account has to be activated within the 24 hours of receiving this email. If the activation doesn't take place within this time interval, the account will be automatically deleted.<br>
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