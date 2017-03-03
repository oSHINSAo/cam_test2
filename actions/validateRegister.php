<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/includes/config.php";
	if(isset($_POST['nick'])){
		$array['valid'] = true;
		$conn = new Conexion();
		$query = $conn->prepare("SELECT * FROM users where nickname = ?");
		$query->execute(array($_POST['nick']));
		if($query->rowCount() > 0){
			$array['valid'] = false;
			$array['message'] = "Nickname already in use!";
		}
	}else if(isset($_POST['email'])){
		$array['valid'] = true;
		$conn = new Conexion();
		$query = $conn->prepare("SELECT * FROM users where email = ?");
		$query->execute(array($_POST['email']));
		$query->execute();
		if($query->rowCount() > 0){
			$array['valid'] = false;
		}
	}else if(isset($_POST['changeEmail'])){
		$array['valid'] = true;
		$conn = new Conexion();
		$query = $conn->prepare("SELECT * FROM users where email = ?");
		$query->execute(array($_POST['changeEmail']));
		if($query->rowCount() > 0){
			$array['valid'] = false;
		}
	}else{
		$array = array(
			"valid" => "false",
			"message" => "no debe pasar"
		);
	}
	echo json_encode($array);