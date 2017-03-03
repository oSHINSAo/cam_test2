<?php
	require "../class/mailing.class.php";
	$mandar	= new Mailing();
	$attrs		= array('name' => 'Angel Prueba', 'subject' => 'Enviando mails');
	$mandar->sendEmail('angel.hdz91@hotmail.com', 'test.php', $attrs);