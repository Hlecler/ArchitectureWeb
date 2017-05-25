<link rel="stylesheet" type="text/css" href="css/headersection.css">

<?php 
$section = array('General','Aide','Divers','FAQ'); 
affichersection($section);
?>
<br>


<?php


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