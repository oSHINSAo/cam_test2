<?php
	require_once "includes/config.php";
	// Non display body if no was loged or not was accepted warning
	if(isset($_SESSION['registerComplete'])){
		session_destroy();
		header("Location: /activate");
	}
	
	require_once "includes/front.conf"; // configuration for web site
	require_once "includes/head.php"; // head of document

	if(!isset($_SESSION['iduser']) && !isset($_COOKIE['older18'])){
		$showWarning = true;
	}
	if(isset($_GET['token'])){
		$cifrado	= new cifrado();
		$conn		= new Conexion();
		$nick		= $cifrado->decrypt($_GET['token'], $conn->generateToken());
		$query		= $conn->prepare("call users_activateAccount(:nick)");
		$query->bindParam(':nick', $nick);
		$query->execute();
		$row = $query->fetch(PDO::FETCH_ASSOC);
		$_SESSION['iduser']	= $cifrado->encrypt($row['id'], $conn->generateToken());
		$_SESSION['type']	= $cifrado->encrypt($row['type'], $conn->generateToken());
		if(isset($_SESSION['type']) and ( $row['type'] == 1 || $row['type'] == 2 ) ){
			$_SESSION['registerSteps'] = ($row['registerStep'] > 3) ? $row['registerStep'] : 3;
			// $_SESSION['registerSteps'] = 3;
			echo "<script>window.location.href='/register/models'</script>";
		}
	}
	// $showWarning = true;
?>
<body>
	<style>
		body {
			margin: 0;
		}
		.flex-container {
			display: flex;
			flex-direction: column;
			min-height: 63vh;
			background-image: url(/img/mailing/model2.jpg);
			background-size: contain;
			background-position: center;
			background-repeat: no-repeat;
		}
		section.content {
			flex: 1;
			display:flex;
			align-items:center;
			justify-content: center;
			background-color: rgba(256,256,256,0.6);
		}
		h2{
			color:#db2376;
			font-weight: bold;
			padding-top:10%;
		}
		h2 span{
			color:#45a4c4;
			font-size:22px;
		}
	</style>
	<?php
		if(isset($showWarning)){
			require_once "includes/older.msg.php";
		}		
		require "includes/header.php";	?>


		<section class="flex-container">
			<section class="content">
				<h2 class="text-center visible-md visible-lg" style="min-height:400px;">GET A BONUS <span>AS A WELCOME GIFT IF YOU TOP UP YOUR ACCOUNT NOW</span></h2>
				<h2 class="text-center visible-xs visible-sm" style="min-height:200px;padding-top: 0%;">GET A BONUS <span>AS A WELCOME GIFT IF YOU TOP UP YOUR ACCOUNT NOW</span></h2>
			</section>
		</section>


	<?php
		require "includes/footer.php";	?>
</body>
</html>