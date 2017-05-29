<?php
	require_once 'model/PDO.php';
	require_once 'model/newthread.php';
	function redirect($idsection) {
		header('Location: section.php?idsection='.$idsection);
		exit;
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$idsection = $_POST['idsection'];
	
	echo $idsection;
	echo $subject;
	echo $message;
	/*if(empty($subject) or empty($message)) {
		redirect($idsection);
	}
	
	newthread($subject, $message, $idsection);
	//$dbquery = connect();
	//$dbquery->exec('INSERT INTO thread VALUES ($subject, $message, $idsection)');
	redirect($idsection);*/
?>
