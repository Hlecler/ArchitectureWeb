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
				$ans = $dbSection->prepare('SELECT * FROM Thread WHERE Idsection = ?');
				$ans->execute(array($_GET['idsection']));
			}
?>
</head>
 
  
  <body>
<?php
 	include 'headersection.php';
	include 'header.php';
  	include 'newtopic.php';
	while($donnees = $ans->fetch())
	{
		echo '<p class="post"><a href="thread.php?idthread='.$donnees['idthread'].'">'.$donnees['Title'].'</a></p>';
		echo '<p class="desc">'.$donnees['Content'].'</p>';
		echo '<br>';
 	}
	$ans->closeCursor();?>
	<?php
	  include 'footer.php';
	?>
</body>	

