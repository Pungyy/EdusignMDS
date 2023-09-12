<?php
//définition des paramètres de la BDD
	define('HOST_DB','localhost');
	define('USER_DB','root');
	define('MDP_DB','');
	define('PORT_DB',3306);
	define('NAME_DB','edusign');

//fonction de connexion à la BDD à partir de ses paramètres
function connexionPDO() {
	$login = USER_DB;
	$mdp = MDP_DB;
	$db= NAME_DB;
	$serveur = HOST_DB;
	$port = PORT_DB;

	try {
		$conn = new PDO("mysql:host=$serveur;dbname=$db;port=$db",$login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	} catch (PDOException $e) {
		echo $e->getMessage();
		die();
	}
	return $conn;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
	// programme de test
	header('Content-Type:text/plain');

	echo "connexionPDO() : \n";
	print_r(connexionPDO());
}
?>