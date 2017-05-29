<?php //TODO
	function IdMax() {
        	$idmax = connect()->query('SELECT MAX(idsection) FROM thread');
        	return $idmax->fetch()[0];
	}

	function newthread($Title, $Content, $idsection) {
	require_once 'PDO.php';
        $idthread = $this->IdMax() + 1;
        $code = "INSERT INTO thread VALUES (:idthread, :title, :content, :idsection)";
	$req = connect()->prepare($code);
	$params = [
          ':idthread' => $idthread,
          ':title' => $Title,
          ':content' => $Content,
          ':idsection' => $idsection
        ];
	echo $idthread;
	echo $Title;
	echo $Content;
	echo $idsection;
	$req->execute($params);
    	}
