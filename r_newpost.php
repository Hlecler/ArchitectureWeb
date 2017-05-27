<?php
	require_once 'model/PDO.php';
	
	function redirect($idthread) {
		header('Location: thread.php?idthread='.$idthread);
	}
	$maxId = myPDO()->query('SELECT MAX(idpost) FROM post');
	$maxId ++;
	$message = $_POST['message'];
	$idthread = $_POST['idthread'];
	if(empty($message) or empty($idthread)) {
		redirect($idthread);

	}
	
	$dbnewpost = connect();
	$dbnewpost->exec("INSERT INTO post VALUES ($maxId, $message,$idthread)");
	
	redirect($idthread);
?>
