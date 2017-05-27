<!DOCTYPE html>
<html lang="fr" ng-app="CodeAnon">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="Forum based website created for a web architecture project by LECLER Hugo">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>CodeAnon - Thread </title>
<?php  
      require_once 'model/PDO.php';
			$dbThread = connect();
      if(isset($_GET['idthread']))
      {
          $post = $dbThread->prepare('SELECT * FROM Post WHERE Idthread = ?');
          $post->execute(array($_GET['idthread']));
          $first = $dbThread->prepare('SELECT * FROM Thread WHERE Idthread =  ?');
          $first->execute(array($_GET['idthread']));
      }
  
  
  ?>
  </head>
  
  <body>
  <?php
  include 'headersection.php';
	include 'header.php';
  while($donnees = $first->fetch())
	{
    echo '<h1>'.$donnees['Title'].'</h1>';
    echo '<p>'.$donnees['Content'].'</p>';
  }  
  while($donnees = $post->fetch())
	{
    echo '<br>';
    echo '<p>',$donnees['Content'].'</p>';
  }
  include 'newpost.php';
  echo '<br>';
  include 'footer.php';
  ?>
  </body>
