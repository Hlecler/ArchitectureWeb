<?php
	echo "<ul class=\"section\">";
	try
	{
		echo "bon"
	    	$bdd = new PDO('pgsql:host=ec2-54-247-166-129.eu-west-1.compute.amazonaws.com;dbname=d8d5o1h0870hg', 'tkiiknfwbenkoe', '52a255680d0d2409a7ccefbd3da3cba1740f34c9e7e879d3d331faad1796ab02', array(PDO::ATTR_ERRMODE => PDO::	ERRMODE_EXCEPTION));
		echo "jour"
	}
	catch (Exception $e)
	{
			echo 'bonjour';
			die('Erreur : ' . $e->getMessage());
	}
	$reponse = $bdd->query('SELECT * FROM section');
	while($donnees = $reponse -> fetch());
	{
		?><li><a href=<?php echo 'constellation.php'.'?'.'id='.$donnees['idconst']; ?>><?php echo $donnees['nomconst']; ?></a></li>
<?php	}
	$reponse->closeCursor();
	?>
	echo "</ul>";
?>
