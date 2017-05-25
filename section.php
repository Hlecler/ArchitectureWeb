<?php 
$listsection = array('General','Aide','Divers','FAQ'); 
affichersection($listsection);

echo '<br />';

//Permet d'afficher chaque section existante dans une liste html
function affichersection($section)
{
	echo "<ul class=\"section\">";
	foreach($section as $element)
	{
		echo "<li><a href=\"$element.php\">$element</a></li>";
	}
	echo "</ul>";
}

?>
