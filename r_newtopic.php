<?php
	require_once 'model/PDO.php';
	function redirect($idsection) {
		header('Location: section.php?idsection='.$idsection);
		exit;
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$idsection = $_POST['idsection'];
	$idmax = connect()->query('SELECT MAX(idthread) FROM thread');
        $idthread = $idmax->fetch()[0];
	$idthread = $idthread +1;

	if(empty($subject) or empty($message)) {
		redirect($idsection);
	}
	
	$dbquery = connect();
	$dbquery->exec("INSERT INTO Thread VALUES (".$idthread.",'".$subject."','".$message."',".$idsection.")");
	redirect($idsection);
?>
