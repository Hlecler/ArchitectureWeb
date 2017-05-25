<link rel="stylesheet" type="text/css" href="css/headersection.css">

<?php 
$listsection = array('General','Aide','Divers','FAQ'); 
displaysection($section);
?>
<br>


<?php


function displaysection($listsection)
{
	echo "<ul class=\"section\">";
	foreach($listsection as $element)
	{
		echo "<li><a href=\"$element.php\">$element</a></li>";
	}
	echo "</ul>";
}

?>
