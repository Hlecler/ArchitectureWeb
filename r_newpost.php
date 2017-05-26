<?php
	require_once 'model/PDO.php';
	
	function redirect() {
		header('Location: accueil.php');
	}
	
	$message = $_POST['message'];
	
	if(empty($message)) {
		redirect();
	}
	
	$dbSection = connect();
	$query = $dbSection->query('INSERT INTO Post (Content) VALUES (\''.$message.'\');');
	$query->closeCurator()
	
	redirect();
