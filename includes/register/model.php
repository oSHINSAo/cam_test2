<?php
	$document_root = $_SERVER['DOCUMENT_ROOT'];
	require_once $document_root."/includes/config.php";
	require_once $document_root."/cifrado.php";
	// Non display body if no was loged or not was accepted warning
	$conn = new Conexion();
	$active = '';
	if(!isset($_SESSION['registerSteps'])){
		$_SESSION['registerSteps'] = 1;
	}else if($_SESSION['registerSteps'] == 'finish'){
		header('Location: /activate');
	}
	require_once $document_root."/includes/front.conf"; // configuration for web site
	require_once $document_root."/includes/head.php"; // head of document
?>
<body>
	<style>
		label{
			margin: 0px 10px 0px 10px;
		}
		.step-text{
			color:#808080;
			font-weight: bold;
		}
		.step-text span{
			color:#db2376;
		}
	</style>
<?php
	require $document_root."/includes/header.php";

?>

	<div class="container">
	<?php
		$cifrado	= new cifrado();
		$type	= $cifrado->decrypt($_SESSION['type'], $conn->generateToken());
		$step = 0;
		switch ($_SESSION['registerSteps']) {
			case 1:
					$step	= 1;
				break;
			case 2:
					$step	= 2;
				break;
			case 3:
					if($type == 1){
						$step = "3"; // IF REGISTER MODEL
					}else if($type == 2){
						$step = "3-1"; // IF REGISTER STUDIO
					}
				break;
			case 4:
					if($type == 1){
						$step = "4"; // IF REGISTER MODEL
					}else if($type == 2){
						$step = "4-1"; // IF REGISTER STUDIO
					}
				break;
			case 5:
					if($type == 1){
						$step = "5"; // IF REGISTER MODEL
					}else if($type == 2){
						$step = "5-1"; // IF REGISTER STUDIO
					}
				break;
			case 6:
					$step = 6;
				break;
		}
		if($step === 0){
			echo "<script>window.location='/';</script>";
		}else{
			require_once $document_root."/includes/register/step".$step.".php";
		}

	?>
	</div>
	
<?php

	require $document_root."/includes/footer.php";
	?>
</body>
</html>