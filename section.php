<?php 
<?php
	echo "<ul class=\"section\">";
	require_once 'model/PDO.php';
	$bdSection = connect();
	$reponse = $bdd->query('SELECT * FROM section');
	while($donnees = $reponse -> fetch());
	{
	echo "<li><a href=<?php echo "$donnees['sectionname'].php?id=".$donnees['idsection']; </a></li>";
	}
	$reponse->closeCursor();
	?>
	echo '</ul>';
echo '<br />';
?>
