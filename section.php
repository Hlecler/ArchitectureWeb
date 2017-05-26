<?php

try

{

    // On se connecte à MySQL

    $bdd = new PDO('pgsql:host=ec2-54-246-108-119.eu-west-1.compute.amazonaws.com;port=5432;dbname=d8mv81rvehr8or', 'wftpzmckvuzkzd','62630f127cd96b941e7d16720368016da8382ba48183c9f5c91825098e2914ea');
}

catch(Exception $e)

{

    // En cas d'erreur, on affiche un message et on arrête tout

        die('Erreur : '.$e->getMessage());

}


$reponse = $bdd->query('SELECT * FROM Section');

while ($donnees = $reponse->fetch())
{
?>
    <p>

    <?php echo $donnees['Sectionname']; ?>
   </p>

<?php

}


$reponse->closeCursor(); // Termine le traitement de la requête


?>
