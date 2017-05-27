<?php
	require_once 'model/PDO.php';
	
	function redirect() {
		header('Location: section.php?idsection='.$idthread);
	}
	
	$message = $_POST['message'];
	$idthread = $_POST['idthread'];
	if(empty($message) or empty($idthread)) {
		redirect();
	}
	
	$dbnewpost = connect();
	$dbnewpost->exec('INSERT INTO Post(Content,Idthread) VALUES ($message,$idthread)');
	
	redirect();
?>
