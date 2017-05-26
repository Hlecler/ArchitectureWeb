<link rel="stylesheet" type="text/css" href="css/headersection.css">

<body>
<?php 
$listsection = array('General','Aide','Divers','FAQ'); 
affichersection($listsection);

echo '<br />';

function affichersection($listsection)
{
	echo "<ul class=\"section\">";
	foreach($listsection as $element)
	{
		echo "<li><a href=\"$element.php\">$element</a></li>";
	}
	echo "</ul>";
}

?>
</body>
