<?php
	session_start();
	if(isset($_SESSION['iduser'])){
		session_destroy();
	}
	header("Location: /");
?>