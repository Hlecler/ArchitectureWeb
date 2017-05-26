<?php
	echo "<ul class=\"section\">";
	try
	{
	    $bdSection = new PDO('pgsql:host=ec2-54-246-108-119.eu-west-1.compute.amazonaws.com;dbname=d8mv81rvehr8or', 'wftpzmckvuzkzd','62630f127cd96b941e7d16720368016da8382ba48183c9f5c91825098e2914ea', array(PDO::ATTR_ERRMODE => PDO::	ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
			echo 'bonjour';
			die('Erreur : ' . $e->getMessage());
	}
	$reponse = $bdSection->query('SELECT * FROM section');
	while($donnees = $reponse -> fetch());
	{
	echo "<li><a href=\"$donnees['sectionname'].php\">$donnees['sectionname']</a></li>";
	}
	$reponse->closeCursor();
	?>
	echo "</ul>";
?>
