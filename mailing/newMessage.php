<?php
	if (isset($_GET)) {
		$attr['photo'] = $_SERVER['HTTP_HOST'].'/img/member.png';
		$attr['nick'] = "zk";
	}else{
		$attr['photo'] = $_SERVER['HTTP_HOST'].$attr['photo'];
	}
?>
<html>
	<head>
		<style>
			*{ font-family: 'Verdana'; }
			.container{
				width:600px;
				text-align:center;
				margin:0 auto;
			}
			.col-4{
				width:148px;
				display: inline-block;
			}
			.col-4 img{
				width: 100%;
			}
			.col-8{
				width:348px;
				display:inline-block;
			}
			.desc{
				background-color:#ccc;
				width:100%;
			}
			.col-8 p{
				display:table;
				margin-bottom:10%;
				color:#db2376;
				font-size: 20px;
			}
			.button{
				border-radius:10px;
				color:#fff;
				background-color:#db2376;
				font-weight:bold;
				padding: 10px 25px;
				text-decoration: none;
			}
			.desc a{
				margin:20px;
				text-decoration: none;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<p style="text-align: center;">To ensure delivery, add <b>noreply@camlicious.com</b> to your address book</p>
			<img src="<?= $_SERVER['HTTP_HOST'].'/img/logo.png'; ?>">
			<div class="info" style="margin-bottom:40px;">
				<div style="margin-bottom:20px;">
					<div class="col-4">
						<img src="<?= $attr['photo']; ?>">
					</div>
					<div class="col-8">
						<p>
							<strong><?= $attr['nick']; ?></strong> has sent you a new message
						</p>
					</div>
				</div>
				<a href="" class="button">Read it now</a>
			</div>

			<div class="desc" style="padding:20px 0px;">
				<p style="margin: 0px 0px 15px 0px;">
					<i>This is an automatic message. Please do not reply to this mail</i><br>
					<strong>Copyright &copy; 2017 Camlicious.com</strong>
				</p>
				<a href="">Support</a>
				<a href="">Terms of Use</a>
				<a href="">Privacy Policy</a>
			</div>
		</div>

	</body>
</html>