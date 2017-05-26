<?php
	echo "<ul class=\"section\">";
	require_once 'model/PDO.php';
	$bdSection = connect();
	$reponse = $bdSection->query('SELECT * FROM section');
	while($donnees = $reponse -> fetch());
	{
	echo "<li><a href=\"$donnees['sectionname'].php\"> $donnees['sectionname']</a></li>";
	}
	$reponse->closeCursor();
	?>
	echo "</ul>";
echo '<br/>';
?>
