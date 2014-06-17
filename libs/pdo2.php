<?php
class PDO2 extends PDO {
	private static $_instance;
	// constructeur par défaut
public function __construct( ) {

}

public static function getInstance() {
	if (!isset(self::$_instance)) {
		try {
			self::$_instance = new PDO(BASE_DE_DONNEES, NOM_UTILISATEUR, MOT_DE_PASSE);
			} catch (PDOException $e) {
			echo $e;
			}
		}
		return self::$_instance;
	}
}