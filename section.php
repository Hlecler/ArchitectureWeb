					<ul type="section">
						<?php
							try
							{
								$bdd = new PDO('pgsql:host=ec2-54-246-108-119.eu-west-1.compute.amazonaws.com;port=5432;dbname=d8mv81rvehr8or', 'wftpzmckvuzkzd','62630f127cd96b941e7d16720368016da8382ba48183c9f5c91825098e2914ea'));
							}
							catch (Exception $e)
							{
			        			die('Erreur : ' . $e->getMessage());
							}
		
							$reponse = $bdd->query('SELECT idsection, sectionname FROM Section');
							while($donnees = $reponse->fetch())
							{
						?>
								<li><a href=<?php echo 'General.php'.'?'.'id='.$donnees['idsection']; ?>><?php echo $donnees['sectionname']; ?></a></li>
						<?php
							}
							$reponse->closeCursor();
						?>
					</ul>
