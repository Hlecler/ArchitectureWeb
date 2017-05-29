<?php
	require_once 'model/PDO.php';

	function redirect($idthread) {
		header('Location: thread.php?idthread='.$idthread);
		exit;
	}

	$message = $_POST['message'];
	$idthread = $_POST['idthread'];

	$idmax = connect()->query('SELECT MAX(idpost) FROM post');
        $idpost = $idmax->fetch()[0] +1;

	if(empty($message) or empty($idthread)) {
		redirect($idthread);
	}
	$dbnewpost = connect();
	$dbnewpost->exec('INSERT INTO Post VALUES ($idpost,$message,$idthread)');
	redirect($idthread);
?>
