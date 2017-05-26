<?php
	$bd = new PDO('pgsql:host=ec2-54-246-108-119.eu-west-1.compute.amazonaws.com;port=5432;dbname=d8mv81rvehr8or;CHARSET=utf8', 'wftpzmckvuzkzd','62630f127cd96b941e7d16720368016da8382ba48183c9f5c91825098e2914ea');
	echo "<ul class=\"section\">";
	require_once 'model/PDO.php';
	$bdSection = connect();
	$reponse = $bd->query('SELECT * FROM section');
	while($donnees = $reponse -> fetch());
	{
	echo "<li><a href=\"$donnees['sectionname'].php\"> $donnees['sectionname']</a></li>";
	}
	$reponse->closeCursor();
	?>
	echo "</ul>";
echo '<br/>';
?>
