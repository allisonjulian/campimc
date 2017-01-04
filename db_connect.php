<?php
	$dbConnection = new PDO('mysql:dbname=campimc_actm;host=localhost;charset=utf8', 'root', 'root');

	$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>