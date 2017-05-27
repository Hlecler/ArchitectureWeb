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
	$maxId = $dbnewpost->query('SELECT MAX(idpost) FROM post');
	$maxId ++;
	$dbnewpost->exec('INSERT INTO post VALUES (maxId, $message,$idthread)');
	
	redirect($idthread);
?>
