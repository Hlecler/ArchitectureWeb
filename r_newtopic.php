<?php
	require_once 'model/PDO.php';
	
	function redirect() {
		header('Location: accueil.php');
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	if(empty($subject) or empty($message)) {
		redirect();
	}
	
	$dbSection = connect();
	$query = $dbSection->query('INSERT INTO Thread (Title, Content) VALUES (\''.$subject.'\', \''.$message.'\');');
	$query->closeCurator()
	
	redirect();
