<?php
function connect()
{
	try
	{
	    $bdd = new PDO('pgsql:host=ec2-54-246-108-119.eu-west-1.compute.amazonaws.com;dbname=d8mv81rvehr8or;CHARSET=UTF-8', 'wftpzmckvuzkzd','62630f127cd96b941e7d16720368016da8382ba48183c9f5c91825098e2914ea');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($bd);
}
?>
