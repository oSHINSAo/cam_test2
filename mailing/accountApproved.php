<?php
	$attr['logo'] = 'http://89.40.115.94/img/logo.png';
?>
<html>
	<head>
		<style>
			*{ font-family: 'Verdana'; }
			.pink{color:#db2376;}
			.body{
				width:600px;
				margin:0 auto;
				padding:0px;
			}
			.badge{
				background-color:#db2376;
				padding:2px 5px;
				color:#fff;
				border-radius:10px;
				margin-left:-25px;
			}
			.list{
				margin-left:25px;
			}
			.btn{
				border-radius:10px;
				color:#fff;
				background-color:#db2376;
				font-weight:bold;
				padding: 10px 25px;
				text-decoration: none;
			}
			.desc{
				background-color:#ccc;
				width:100%;
				text-align: center;
			}
			.desc a{
				margin:20px;
				text-decoration: none;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div class="body">
			<p style="text-align: center;">To ensure delivery, add <b>noreply@camlicious.com</b> to your address book</p>
			<img src="<?= $attr['logo']; ?>" style="width:240px;margin:0 auto;display: block;">
			<p style="font-size:24px;" class="pink">Hey <b><?= $attr['nick']; ?></b></p>
			<p>
				<b>Welcome and thanks for joining our site!</b>
			</p>
			<p class="list"><span class="badge">1</span> Log in and start uploading your profile pics</p>
			<p class="list"><span class="badge">2</span> Fill in your profile information and update your payment details</p>
			<p class="list"><span class="badge">3</span> Upload the content you want to sell on our online shop and set your prices</p>
			<p class="list"><span class="badge">4</span> Interested in camming? Check your camera settings and start boradcasting</p>
			<p class="list" style="margin-bottom:30px;">
				<span class="badge">5</span>
				<span class="pink">Want to get an extra 10% commission for every referred user you bring to our site and that spends money on you? Simply use your referral link to advertise your profile. Find more info in your settings.</span>
			</p>

			<p style="text-align:center;">
				<a href="<?= $attr['link']; ?>" class="btn">Get Started</a>
			</p>
			<p style="margin-top:30px;">If you have questions or want to maximize your revenues just hit us up!</p>
			<p>
				<b>Cheers,<br>
				Camlicious Team</b>
			</p>
			<div class="desc" style="padding:20px 0px;">
				<p style="margin: 0px 0px 15px 0px;">
					<i>This is an automatic message. Please do not reply to this mail</i><br>
					<strong>Copyright &copy; 2017 Camlicious.com</strong>
				</p>
				<a href="<?= $attr['link']; ?>">Support</a>
				<a href="<?= $attr['link']; ?>">Terms of Use</a>
				<a href="<?= $attr['link']; ?>">Privacy Policy</a>
			</div>
		</div>
	</body>
</html>