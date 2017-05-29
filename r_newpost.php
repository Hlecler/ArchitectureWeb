<?php
	require_once 'model/PDO.php';

	function redirect($idthread) {
		header('Location: thread.php?idthread='.$idthread);
		exit;
	}

	$message = $_POST['message'];
	$idthread = $_POST['idthread'];

	$idmax = connect()->query('SELECT MAX(idpost) FROM post');
        $idpost = $idmax->fetch()[0];
	$idpost = $idpost +1;

	if(empty($message) or empty($idthread)) {
		redirect($idthread);
	}
	//$test = 'INSERT INTO Post (idpost, content, idthread) VALUES (".$idpost.",\'".$message."\',".$idthread.")';
	//echo "INSERT INTO Post (idpost, content, idthread) VALUES (".$idpost.",\'".$message."\',".$idthread.")";
	echo "INSERT INTO a VALUES ('a')";
	$dbnewpost = connect();
	$dbnewpost->exec("INSERT INTO Post VALUES (".$idpost.",'".$message."',".$idthread.")");
	//redirect($idthread);
?>
