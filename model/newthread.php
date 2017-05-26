<?php //TODO
{
	function newthread($title, $content, $idsection) {
		require_once('PDO.php');
		$thread = connect();
		$chg = $thread->prepare('INSERT INTO Thread (Title, Content, idsection) VALUES (:title, :content,:idsection)');
		$chg->bindParam(':title',$title);
		$chg->bindParam(':content',$content);
		$chg->bindParam(':idsection',$idsection);
		$returnValue = $chg->execute();
	}
