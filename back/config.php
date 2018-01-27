<?php
define("SQL_HOST","localhost");
define("SQL_USER","root");
define("SQL_PASS","root");
define("SQL_DBNAME","sharework");

try
{
	$mysql = new PDO("mysql:dbname=".SQL_DBNAME.";host=".SQL_HOST,SQL_USER,SQL_PASS,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$mysql->exec("SET CHARACTER SET utf8");
}
catch(Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>
