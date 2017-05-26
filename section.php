<!DOCTYPE html>
<html lang="fr" ng-app="CodeAnon">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="Forum based website created for a web architecture project by LECLER Hugo">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>CodeAnon - Section</title>
<?php
			require_once 'model/PDO.php';
			$dbSection = connect();
			if(isset($_GET['idsection']))
			{     
				$reponse = $dbSection->prepare('SELECT * FROM Thread WHERE Idsection = ?');
				$reponse->execute(array($_GET['idsection']));
			}
?>
</head>
 
  
  <body>
<?php
 	//include 'headersection.php';
	//include 'header.php';
  	while($donnees = $reponse->fetch())
	{
		echo $donnees['Title'].':'.$donnees['Content'];
 	}
	$reponse->closeCursor();
	//include 'footer.php';
?>
</body>

