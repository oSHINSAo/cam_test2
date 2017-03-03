<?php
	if(isset($_POST['action'])){
		require $_SERVER['DOCUMENT_ROOT']."/class/users.class.php";
		$users = new Users();
		switch ($_POST['action']) {
			case 'register':
					$nick	= (isset($_POST['nick'])) ? $_POST['nick'] : '0';
					$email = (isset($_POST['email'])) ? $_POST['email'] : '0';
					$pass	= (isset($_POST['pass'])) ? $_POST['pass'] : '0';
					echo json_encode($users->register($nick, $email, $pass));
				break;
			case 'login':
					echo json_encode($users->login($_POST['user'], $_POST['pass'], $_POST['remember']));
				break;
			case 'resend':
					echo json_encode($users->resentEmail($_POST['email']));
				break;
			case 'changeEmail':
					echo json_encode($users->changeEmail($_POST['idUser'],$_POST['email']));
				break;
			case 'resetPassword':
					echo json_encode($users->resetPassword($_POST['email']));
				break;
			case 'changePassword':
					echo json_encode($users->changePassword($_POST['password']));
				break;
			case 'userFavorite':
					echo json_encode($users->userFavorite($_SESSION['iduser'], $_SESSION['idprofile']));
				break;
			case 'listNicksMessages':
					// $array	= [
					// 	['id' => 1,'name' => "hola"],
					// 	['id' => 2,'name' => "mundo"],
					// 	['id' => 2,'name' => "mundoasdaklsjdlakjsdlkasaslkjdlaksjdlkajsdlkasdjlasd"]
					// ];
					echo json_encode($users->listNicksMessages($_POST['query']));
				break;
			case 'userOnline':
					echo json_encode($users->userOnline());
				break;
		}
	}else{
		// var_dump($_POST);
	}
?>