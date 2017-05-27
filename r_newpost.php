<?php
	require_once 'model/PDO.php';
	
	function redirect($idthread) {
		header('Location: thread.php?idthread='.$idthread);
	}
	
	$message = $_POST['message'];
	$idthread = $_POST['idthread'];
	if(empty($message) or empty($idthread)) {
		redirect($idthread);

	}
	
	$dbnewpost = connect();
	$dbnewpost->exec("INSERT INTO post VALUES (1, $message,$idthread)");
	
	redirect($idthread);
?>
