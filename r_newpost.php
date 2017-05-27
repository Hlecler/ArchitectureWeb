<?php
	require_once 'model/PDO.php';
	
	function redirect() {
		header('Location: accueil.php');
	}
	
	$message = $_POST['message'];
	$idthread = $_GET['idthread']
	if(empty($message)) {
		redirect();
	}
	
	$dbnewpost = connect();
	$dbnewpost->exec('INSERT INTO Post(Content,Idthread) VALUES ($message,$idthread)');
	
	redirect();
