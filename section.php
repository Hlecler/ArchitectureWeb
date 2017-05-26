<?php 
<?php
  require_once 'model/PDO.php';
  $bdSection = connect();
  $listsection = $bdd->query('SELECT sectionname from section');

affichersection($listsection);

echo '<br />';

//Permet d'afficher chaque section existante dans une liste html
function affichersection($listsection)
{
	echo "<ul class=\"section\">";
	foreach($listsection as $element)
	{
		echo "<li><a href=\"$element.php\">$element</a></li>";
	}
	echo "</ul>";
}

$listsection->closeCursor(); // Termine le traitement de la requête

?>
