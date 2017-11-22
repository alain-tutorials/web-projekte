<?php 
	/*
	$con = mysqli_connect("localhost","root", "", "projects");
	if (mysqli_connect_errno()) {
		$message = "Fail to connect to Mysql";
		echo message . mysqli_connect_error();
	}
	*/

	$host = 'mysql:host=localhost';
	$username = 'root';
	$passwd = '';
	$db = 'dbname=projects';

	$datasource = $host . ';' . $db . ';charset=utf8';

	//error mode initialisieren
	$erreur = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

	try {
		
		$bdd = new PDO($datasource, $username, $passwd, $erreur);	
		
	} catch (Exception $e) {

		die('Erreur : ' . $e->getMessage());
	}
