<?php
	require_once 'model/PDO.php';
	
	function IdMax() {
        	$maxId = connect()->query('SELECT MAX(idpost) FROM post');
        	return $maxId->fetch()[0];
    	}

	function redirect($idthread) {
		header('Location: thread.php?idthread='.$idthread);
	}

	$message = $_POST['message'];
	$idthread = $_POST['idthread'];
	if(empty($message) or empty($idthread)) {
		redirect($idthread);

	}
	echo 'test1';
	$dbnewpost = connect();
	echo 'test2';
	$Idpost =IdMax() + 1;
	echo 'test3';
	$dbnewpost->exec('INSERT INTO post VALUES ($Idpost, $message,$idthread)');
	
	redirect($idthread);
?>
