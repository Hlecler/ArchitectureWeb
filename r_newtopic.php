<?php
	require_once 'model/PDO.php';
	//require_once 'model/newthread.php';
	function redirect() {
		header('Location: section.php?idsection='.$_POST['idsection']);
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$idsec = $_POST['idsection'];
	
	if(empty($subject) or empty($message)) {
		redirect();
	}
	
	//newthread($subject, $message, $idsec);
	$dbquery = connect();
	$dbquery->exec('INSERT INTO Thread (Title, Content, idsection) VALUES ($subject, $message, $idsec)');
	redirect();
?>
