<?php

$host = 'mysql:host=localhost';
$username = 'root';
$passwd = '';
$db = 'dbname=ratespiel';
$encoding = ';charset=utf8';

$datasource = $host . ';' . $db . $encoding;

$erreur = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {

	$bdd = new PDO($datasource, $username, $passwd, $erreur);	


} catch (Exception $e) {
	
	die('Erreur : ' . $e->getMessage());
}
