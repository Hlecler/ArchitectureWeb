<?php

try

{

    // On se connecte à MySQL

    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

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
