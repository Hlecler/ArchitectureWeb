					<ul type="disk">
						<?php
							try
							{
								$bdd = new PDO('pgsql:host=ec2-54-247-166-129.eu-west-1.compute.amazonaws.com;dbname=d8d5o1h0870hg', 'tkiiknfwbenkoe', '52a255680d0d2409a7ccefbd3da3cba1740f34c9e7e879d3d331faad1796ab02', array(PDO::ATTR_ERRMODE => PDO::	ERRMODE_EXCEPTION)); // Connexion à la bdd
							}
							catch (Exception $e)
							{
			        			die('Erreur : ' . $e->getMessage());
							}
		
							$reponse = $bdd->query('SELECT nomconst, idconst FROM CONSTELLATION WHERE hemisnord=b\'1\'');
							while($donnees = $reponse->fetch())
							{
						?>
								<li><a href=<?php echo 'constellation.php'.'?'.'id='.$donnees['idconst']; ?>><?php echo $donnees['nomconst']; ?></a></li>
						<?php
							}
							$reponse->closeCursor();
						?>
					</ul>
