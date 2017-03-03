<?php
	if(!isset($_GET)){
		header("Location: /");
	}

	require_once "includes/config.php";
	$conn		= new Conexion();
	$cifrado	= new cifrado();

	$id		= $cifrado->decrypt($_GET['id'], $conn->generateTokenMessages());
	$sql	= "select * from messages where id=:id";
	$query	= $conn->prepare($sql);
	$query->bindParam(':id', $id, PDO::PARAM_INT);
	$query->execute();
	if($query->rowCount > 0){
		$row	= $query->fetch(PDO::FETCH_ASSOC);
		$ext	= strtolower(end(explode(".", $row['message'])));
		$file = $_GET['id'].$ext;
		header("Content-disposition: attachment; filename=$file");
		header("Content-type: application/octet-stream");
		readfile($file);
	}else{
		header("Location: /");
	}
?>