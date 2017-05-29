<?php
	require_once 'model/PDO.php';
	function redirect($idsection) {
		header('Location: section.php?idsection='.$idsection);
		exit;
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$idsection = $_POST['idsection'];
	$idsection = (int) $idsection;
	$idmax = connect()->query('SELECT MAX(idsection) FROM thread');
        $idthread = $idmax->fetch()[0] +1;

	if(empty($subject) or empty($message)) {
		redirect($idsection);
	}
	
	$dbquery = connect();
	$dbquery->exec("INSERT INTO Thread VALUES (1,ab,cd,1)");
	//$dbquery->exec("INSERT INTO Thread VALUES ($idthread,$subject,$message,$idsection)");
	redirect($idsection);
?>
