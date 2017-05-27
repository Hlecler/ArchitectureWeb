<?php
	require_once 'model/PDO.php';
	
	function redirect() {
		header('Location: accueil.php');
	}
	
	$message = $_POST['message'];
	$idthread = $_POST['idthread1'];
	if(empty($message) or empty($idthread)) {
		redirect();
	}
	
	$dbnewpost = connect();
	$dbnewpost->exec('INSERT INTO Post(Content,Idthread) VALUES ($message,$idthread)');
	
	redirect();
?>
