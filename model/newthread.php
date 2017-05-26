<?php 
{
	function newthread($title, $content, $idsection) {
		require_once('PDO.php');
		$bdd = connect();
		$chg = $bdd->prepare('INSERT INTO Thread (Title, Content, idsection) VALUES (:title, :content,:idsection)');
		$chg->bindParam(':title',$title);
		$chg->bindParam(':content',$content);
		$chg->bindParam(':idsection',$idsection);
		$returnValue = $chg->execute();
	}
