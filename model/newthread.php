<?php //TODO
	function newthread($title, $content, $idsection) {
		require_once('PDO.php');
		$thread = connect();
		$chg = $thread->prepare('INSERT INTO thread (Title, Content, idsection) VALUES (:title, :content,:idsection)');
		$chg->bindParam(':title',$title);
		$chg->bindParam(':content',$content);
		$chg->bindParam(':idsection',$idsection);
		$returnValue = $chg->execute();
	}

	function IdMax() {
        	$idmax = connect()->query('SELECT MAX(idsection) FROM thread');
        	return $idmax->fetch()[0];
	}

	public function newthread($Title, $Content, $idsection) {
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
