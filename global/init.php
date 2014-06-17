<?php
// Inclusion du fichier de configuration (qui définit des constantes)
include 'global/config.php';
// Utilisation et démarrage des sessions
session_start();
// Inclusion de Pdo2, potentiellement utile partout
include CHEMIN_LIB.'pdo2.php';

function user_connected() {
	return !empty($_SESSION['type']);
	}


function get_rubrique(){
		$bdd = PDO2::getInstance();
		$req = $bdd->query("select * from rubrique");
		return $req;
}