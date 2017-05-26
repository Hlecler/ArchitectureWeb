<link rel="stylesheet" type="text/css" href="css/headersection.css">

<?php
	echo "<ul class=\"section\">";
	require_once 'model/PDO.php';
	$bdSection = connect();
	$reponse = $bdSection->query('SELECT * FROM section');
	while($donnees = $reponse -> fetch())
	{?>
			<li><a href=<?php echo 'section.php?id='.$donnees['idsection']';> 
	 		echo $donnees['sectionname']; ?></a></li>

<?php	}
	$reponse->closeCursor();
	echo "</ul>";
?>
