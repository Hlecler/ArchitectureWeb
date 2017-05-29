<?php
	require_once 'model/PDO.php';
	function redirect($idsection) {
		header('Location: section.php?idsection='.$idsection);
		exit;
	}
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$idsection = $_POST['idsection'];
	$idmax = connect()->query('SELECT MAX(idsection) FROM thread');
        $idthread = $idmax->fetch()[0] +1;

	if(empty($subject) or empty($message)) {
		redirect($idsection);
	}
	
	$dbquery = connect();
	//$dbquery->exec('UPDATE Thread SET idsection = 1 WHERE idsection = 3');
	//$dbquery->exec('DELETE FROM Thread WHERE idthread = 3');
	//$test = "INSERT INTO Thread (idthread, idsection) VALUES (5,5)";
 	$test = "INSERT INTO Thread (idthread, idsection) VALUES (".$idthread.", ".$idsection.")";
	//$test = "INSERT INTO Thread (idthread, title, content, idesction) VALUES (5, /"ab/", /"bc/", 5);";

	//$test = "INSERT INTO Thread (idthread, title, content, idsection) VALUES (5,'ab','cd',5)";
        //$sql = "INSERT INTO Thread VALUES (:idthread, :idsection)";
	$dbquery->exec($test);
	redirect($idsection);
?>
