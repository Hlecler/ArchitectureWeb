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
	//$dbquery->exec('UPDATE Thread SET idsection = 1 WHERE idsection = 3');
	//$dbquery->exec('DELETE FROM Thread WHERE idthread = 3');
	//$test = 'INSERT INTO Thread VALUES ($idthread, $subject, $message, $idsection)';
	//MARCHE: $test = 'INSERT INTO Thread (idthread, idsection) VALUES (5,5)';
	$test = 'INSERT INTO Thread (idthread) VALUES (';
	$test = $test + $idthread + ')\'';
	$dbquery->exec($test);
	redirect($idsection);
?>
