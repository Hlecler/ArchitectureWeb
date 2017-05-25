<link rel="stylesheet" type="text/css" href="css/headersection.css">

<?php 
$listsession = array('General','Aide','Divers','FAQ'); 
displaysection($section);
?>
<br>


<?php


function displaysession($listsession)
{
	echo "<ul class=\"session\">";
	foreach($listsession as $element)
	{
		echo "<li><a href=\"$element.php\">$element</a></li>";
	}
	echo "</ul>";
}

?>
