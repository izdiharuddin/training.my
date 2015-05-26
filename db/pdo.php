<?php
//pdo.php

//db config
$db_host = 'localhost';
$db_name = 'kursus';
$db_user = 'root';
$db_pass = 'root';

//create connection
try
{
	$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user, $db_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
	echo 'DB Error ' .$ex->getMessage();
	exit;
	
}