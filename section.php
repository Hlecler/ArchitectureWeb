<?php

try

{

    $bdd = new PDO('pgsql:host=ec2-54-247-166-129.eu-west-1.compute.amazonaws.com;dbname=d8d5o1h0870hg', 'tkiiknfwbenkoe', '52a255680d0d2409a7ccefbd3da3cba1740f34c9e7e879d3d331faad1796ab02');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


$bdd->exec('INSERT INTO Section(idsection, sectionname) VALUES(\'1\', \'General\')');
$bdd->exec('INSERT INTO Section(idsection, sectionname) VALUES(\'2\', \'Aide\')');
$bdd->exec('INSERT INTO Section(idsection, sectionname) VALUES(\'3\', \'Divers\')');

echo 'test';

?>
