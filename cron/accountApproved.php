<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/includes/config.php";
	$conn		= new Conexion();
	$mailing	= new Mailing();
	$template	= new MailingTemplate();
	$sql		= "SELECT * from users u where u.type in (1,2) and u.approved=1 and u.sentApproved=0";
	$query		= $conn->prepare($sql);
	$query->execute();
	$rows = $query->fetchAll(PDO::FETCH_ASSOC);

	$users = ""; // to update status
	// Get users approved without notification
	foreach($rows as $row){
		// Attributes for email
		$attr = [
			'nick' => $row['nickname'],
			'link' => $_SERVER['HTTP_HOST'],
			'subject' => 'Your account has been approved!'
		];
		$body = $template->select('accountApproved.php', $attr); // Template for email
		if($mailing->sendMail($row['email'],$body, $attr)){
			$users .= $row['id'].",";
		} // Send email
		
	}
	$users	= substr($users, 0,-1);
	$sql	= "UPDATE users set sentApproved=1 where id in ($users);";
	$query = $conn->prepare($sql);
	$query->execute();
?>