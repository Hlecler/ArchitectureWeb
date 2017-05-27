<?php
	require_once 'model/PDO.php';
	
	function redirect() {
		header('Location: accueil.php');
	}
	
	$message = $_POST['message'];
	$idthread = $_POST['idthread'];
	if(empty($message) or empty($idthread)) {
		redirect();
	}
	
	$dbnewpost = connect();
	$dbnewpost->exec('INSERT INTO Post(Content,idthread) VALUES ($message,$idthread)');
	
	redirect();
?>
