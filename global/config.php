<?php
// Identifiants pour la base de données. Nécessaires a PDO2.
define('BASE_DE_DONNEES','mysql:dbname=ecommerce;host=localhost');
define('NOM_UTILISATEUR', 'root');
define('MOT_DE_PASSE', '');

// Chemins à utiliser pour accéder aux vues/modeles/librairies
$module = 'general';
define('CHEMIN_VUE',    'modules/'.$module.'/vues/');
define('CHEMIN_CONTROLEUR','/controleurs/');
define('CHEMIN_MODELE', 'modeles/');
define('CHEMIN_LIB',    'libs/');
$_SESSION['article']= array();