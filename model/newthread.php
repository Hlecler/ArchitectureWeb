<?php //TODO
	function IdMax() {
        	$idmax = connect()->query('SELECT MAX(idsection) FROM thread');
        	return $idmax->fetch()[0];
	}

	function newthread($Title, $Content, $idsection) {
        $idthread = $this->IdMax() + 1;
        $code = "INSERT INTO thread VALUES (:idthread, :title, :content, :idsection)";
	$req = connect()->prepare($code);
	$params = [
          ':idthread' => $idthread,
          ':title' => $Title,
          ':content' => $Content,
          ':idsection' => $idsection
        ];
	$req->execute($params);
    	}
