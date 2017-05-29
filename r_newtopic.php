<?php
	require_once 'model/PDO.php';
	require_once 'model/newthread.php';
	function redirect($idsection) {
		header('Location: section.php?idsection='.$idsection);
		exit;
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$idsection = $_POST['idsection'];
	
	echo $idsection;
	echo $subject;
	echo $message;
	$idmax = connect()->query('SELECT MAX(idsection) FROM thread');
        $idthread = $idmax->fetch()[0] +1;
	echo $idthread;
	if(empty($subject) or empty($message)) {
		redirect($idsection);
	}
	
	newthread($subject, $message, $idsection);
	$dbquery = connect();
	$dbquery->exec("INSERT INTO thread VALUES (: ($idthread, $subject, $message, $idsection)");
	//redirect($idsection)
?>
