<?php
	echo "<ul class=\"section\">";
	require_once 'model/PDO.php';
	$bdSection = connect();
	$reponse = $bdSection->query('SELECT * FROM Section');
	while($donnees = $reponse -> fetch());
	{
	echo "<li><a href=\"$donnees['Sectionname'].php\">$donnees['Sectionname']</a></li>";
	}
	$reponse->closeCursor();
	?>
	echo "</ul>";
?>
