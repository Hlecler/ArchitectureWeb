<?php
	require_once 'model/PDO.php';
	
	function redirect() {
		header('Location: accueil.php');
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$idsec = $_GET['idsection'];
	
	if(empty($subject) or empty($message)) {
		redirect();
	}
	
	$dbquery = connect();
	$dbquery->exec('INSERT INTO Thread(Title, Content, idsection) VALUES ($subject, $message, $idsec)');
	
	redirect();
?>
