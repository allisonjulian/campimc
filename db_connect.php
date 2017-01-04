<?php
	// $dbConnection = new PDO('mysql:dbname=campimc_actm;host=localhost;charset=utf8', 'root', 'root');
	$dbConnection = new PDO('mysql:dbname=campimc_actm;host=localhost;charset=utf8', 'misaor5_campimc', 'm!54e53rV5');

	$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>