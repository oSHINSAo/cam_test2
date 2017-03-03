<?php
	error_reporting(E_ALL);
	if(isset($_POST['action'])){
		require $_SERVER['DOCUMENT_ROOT']."/class/messages.class.php";
		$messages = new Messages();
		switch ($_POST['action']) {
			case 'unreadMessages':
					echo json_encode($messages->unreadMessages());
				break;
			case 'listConversations':
					echo json_encode($messages->listConversations($_POST['menu']));
				break;
			case 'sendMessage':
					echo json_encode($messages->sendMessage($_POST['message'], $_POST['nick']));
				break;
			case 'sendAttachment':
					echo json_encode('hola');
				break;
			case 'getNewMessages':
					echo json_encode($messages->getNewMessages($_POST['nick']));
				break;
			case 'sendFile':
					echo json_encode($messages->uploadFile($_FILES, $_POST));
				break;
		}
	}
?>