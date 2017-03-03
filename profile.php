<?php
	require_once "includes/config.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/class/users.class.php";
	// Non display body if no was loged or not was accepted warning
	$conn		= new Conexion();
	$cifrado	= new cifrado();
	$active		= ".activeWebcams";
	$model	= false;
	$iAm		= false;
	$users		= new Users();





	require_once "includes/front.conf"; // configuration for web site
	require_once "includes/head.php"; // head of document
?>
<body>
		<style>
			.favorite{
				transition: all 0.3s;
			}
		</style>
<?php
	require "includes/header.php";

	if(isset($_SESSION['iduser']) && !isset($_GET['nick']) ){
		$iAm = true;
	}

	if( ( !isset($_GET['nick']) && !isset($_SESSION['iduser']) ) || (isset($_GET['nick']) && $_GET['nick'] == '') ){
		echo "<script>window.location='/';</script>";
	}

	if(isset($_GET['nick'])){
		$iduser =  $users->getIdUser($_GET['nick']);
		$iduser = ( (isset($_SESSION['iduser'])) && ($_SESSION['iduser'] == $iduser) ) ? $_SESSION['iduser'] : $iduser;
		$user	= $users->getInfoUserPublic($iduser);
		if(count($user) < 2  || (isset($user['active']) && $user['active'] ==0)){
			echo "<script>console.log('mamaste');</script>";
		}
		// echo (count($user) <= 1 || (isset($user['active']) && $user['active'] ==0) ) ? "<script>window.location='/';</script>" : '';	
	}

	if(isset($_SESSION['iduser'])){
		$iAm		= ($cifrado->decrypt($_SESSION['iduser'], $conn->generateToken()) == $iduser) ? true : false;
	}

	if($user['type'] == 1){
		$model = true;
	}else if($user['type'] == 0){
		$model = false;
	}else{
		echo "<script>window.location='/';</script>";
	}



	// GET FAVORITE
	$isFavorite = '-o';
	if($iAm == false && isset($_SESSION['iduser'])){
		$isFavorite = $users->isFavorite($_SESSION['iduser'],$iduser);
		$_SESSION['idprofile'] = $iduser;
	}


	if($model){
		require $_SERVER['DOCUMENT_ROOT']."/includes/profile/model.php";
	}else{
		require $_SERVER['DOCUMENT_ROOT']."/includes/profile/user.php";
	}
	require "includes/footer.php";
	?>

	<script>
<?php
	if(!isset($_SESSION['iduser'])){	?>
		
		$(".favorite").addClass("modaal-ajax");
		$(".favorite").attr("href","/modals/loginUsers.php");
		$(".favorite").attr("data-width","500");

<?php
	}else if($iAm == false && isset($_SESSION['iduser'])){	?>

		$(".favorite").click(function() {
			$(this).css("font-size","10px");
			var it = $(".favorite");
			$.ajax({
				url: '/actions/users.actions.php',
				type: 'POST',
				data: {action: 'userFavorite'},
				dataType: 'json',
				success: function(resp){
					if(it.hasClass("fa-heart")){
						it.removeClass("fa-heart");
						it.addClass("fa-heart-o");
					}else if(it.hasClass("fa-heart-o")){
						it.addClass("fa-heart");
						it.removeClass("fa-heart-o");
					}
					setTimeout(function() {
						$(".favorite").css("font-size","14px");
					},500);
				}
			})
		});

<?php
	}	?>
		$(".favorite").css("cursor","pointer");
	</script>
</body>
</html>