<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/includes/config.php";
	// require_once $_SERVER['DOCUMENT_ROOT']."/cifrado.php";
	
	class Studios{
		public function getInfo($id){
			$cifrado	= new cifrado();
			$conn		= new Conexion();
			if(!is_numeric($id)){
				$id = $cifrado->decrypt($id, $conn->generateToken());
			}
			$query = $conn->prepare("call studio_getInfo(:iduser)");
			$query->bindParam(':iduser', $id);
			$query->execute();
			return $query->fetch(PDO::FETCH_ASSOC);
			// print_r($query->fetch(PDO::FETCH_ASSOC));
			// print_r($query->errorInfo());
		}
	}