<!DOCTYPE html>
<html lang="fr" ng-app="CodeAnon">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="Imageboard based website created for a web architecture project by LECLER Hugo">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>CodeAnon - Accueil</title>

<!-- Bootstrap CSS -->
<link href="/lib/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="/front/css/reset.css" rel="stylesheet">
<link href="/front/css/globalStyle.css" rel="stylesheet">
<link href="/front/components/base/base.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
  
<?php include('header.php');?>
  
<h2> Présentation </h2>
<p> CodeAnon est un forum permettant de communiquer simplement et anonymement avec d'autres utilisateurs. Pas besoin de s'inscrire, il vous suffit de cliquer sur l'une des sections ci-dessous, et de créer un sujet de discussion ou de répondre à un sujet déjà existant. Pensez à lire les <a href ="regles.html">règles</a> avant de procéder, et de lire la <a href ="FAQ.html">FAQ</a> pour plus d'informations.

<h2> Liste des sections </h2>
<?php
	echo "<ul class=\"section\">";
	try
	{
		echo "bon"
	    $bdSection = new PDO('pgsql:host=ec2-54-246-108-119.eu-west-1.compute.amazonaws.com;dbname=d8mv81rvehr8or', 'wftpzmckvuzkzd','62630f127cd96b941e7d16720368016da8382ba48183c9f5c91825098e2914ea', array(PDO::ATTR_ERRMODE => PDO::	ERRMODE_EXCEPTION));
		echo "jour"
	}
	catch (Exception $e)
	{
			echo 'bonjour';
			die('Erreur : ' . $e->getMessage());
	}
	$reponse = $bdSection->query('SELECT * FROM section');
	while($donnees = $reponse -> fetch());
	{
	echo "<li><a href=\"$donnees['sectionname'].php\">$donnees['sectionname']</a></li>";
	}
	$reponse->closeCursor();
	?>
	echo "</ul>";
?>

  
  
<?php 
  include('section.php');
?>
  
<!-- HTML CODE BELOW -->

<!-- END HTML CODE -->
  
<?php 
  include('footer.php'); 
?>

</body>

</html>
