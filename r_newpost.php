<?php
	require_once 'model/PDO.php';
	
	function redirect($idthread) {
		header('Location: thread.php?idthread='.$idthread);
	}
	
	$message = $_POST['message'];
	$idthread = $_POST['idthread'];
	if(empty($message) or empty($idthread)) {
		//redirect($idthread);
		echo 'test1';
	}
	
	$dbnewpost = connect();
	$dbnewpost->exec('INSERT INTO Post(Content,Idthread) VALUES ($message,$idthread)');
	echo 'test2';
	//redirect($idthread);
?>
