<?php
	require $_SERVER['DOCUMENT_ROOT']."/includes/config.php";
	$messages = new Messages();
	var_dump( $messages->listConversations('sent',7) );
	// echo json_encode($messages->listConversations($_POST['menu']));