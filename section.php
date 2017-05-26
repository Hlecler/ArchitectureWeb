<!DOCTYPE html>
<html>
  <head>
		<?php include("header.php")
			if(isset($_GET['idsection']))
			{
        $dbSection = connect();
        
				//$reponse = $bdd->query('SELECT * FROM CONSTELLATION WHERE idconst='.$_GET['id']);
				$reponse = dbSection->prepare('SELECT * FROM Thread WHERE idsection = ?');
				$reponse->execute(array($_GET['idsection']));
			}
		?>
</head>
 
  
  <body>
    <?php
    while($donnees = $reponse->fetch())
    {
    echo $donnees['Title'].':'.$donnees['Content'].'\n';
    }
    ?>
  </body>
