<?php
	require_once 'model/PDO.php';
	//require_once 'model/newthread.php';
	function redirect($idsection) {
		header('Location: section.php?idsection='.$idsection);
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$idsec = $_POST['idsection'];
	
	if(empty($subject) or empty($message)) {
		redirect($idsec);
	}
	
	//newthread($subject, $message, $idsec);
	$dbquery = connect();
	$dbquery->exec('INSERT INTO Thread (Title, Content, idsection) VALUES ($subject, $message, $idsec)');
	redirect($idsec);
?>
