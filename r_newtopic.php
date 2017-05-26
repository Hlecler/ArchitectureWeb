<?php
	require_once 'model/PDO.php';
	
	function redirect() {
		header('Location: accueil.php');
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$idsec = $_GET['idsection'];
	
	if(empty($subject) or empty($message)) {
		echo 'test1';
		//redirect();
	}
	
	$dbquery = connect();
	$dbquery->exec('INSERT INTO thread(Title, Content, Idsection) VALUES ($subject, $message, $idsec)');
	echo 'test2';
	//redirect();
?>
