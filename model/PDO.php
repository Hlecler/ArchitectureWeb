<?php
function connect()
{
	try
	{
	    $bd = new PDO('pgsql:host=ec2-54-246-108-119.eu-west-1.compute.amazonaws.com;port=5432;dbname=d8mv81rvehr8or', 'wftpzmckvuzkzd','62630f127cd96b941e7d16720368016da8382ba48183c9f5c91825098e2914ea');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($bd);
}
?>
