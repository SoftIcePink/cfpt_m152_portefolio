<?php

//  Projet      :   Portefolio - M152
//  Author      :   SoftIcePink
//  Git         :   https://github.com/SoftIcePink/cfpt_m152_portefolio
//  File        :   dbconnexion.php
//  Description :   This file is used as the model for the connexion with the database
//                  The user has restricted rights.
//  Last update :   19.02.2019

function connectDB(){
	$dbServer = "localhost";
	$dbName = "fb";
	$dbUser = "root";
	$dbPwd = "";
	
	static $bdd = null;
	
	if ($bdd === null) {
		$bdd = new PDO("mysql:host=$dbServer;dbname=$dbName;charset=utf8", $dbUser, $dbPwd);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
	return $bdd;
	
}