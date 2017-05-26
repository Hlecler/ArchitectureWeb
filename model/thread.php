<?php class thread 
{
	public static function Add_thread($id_thread, $title, $idsession, $content) {
		require_once('Pdo.php');
		$bdCodeAnon = connexion();
		$req = $bdCodeAnon->prepare('INSERT INTO Thread (idthread, title, idsession, content) VALUES (:idthread, :title,:idsession, :content)');
		$req->bindParam(':idthread',$id_thread);
		$req->bindParam(':title',$title);
		$req->bindParam(':idsession',$idsession);
		$req->bindParam(':content',$content);
		$returnValue = $req->execute();
		//var_dump($returnValue);
		/*
		if($returnValue) {
			return true;
		}
		else {
			var_dump($req->errorInfo());
			return false;
		}
		*/
	}
