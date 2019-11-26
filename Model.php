<?php
class DatabaseAdapter {
	private $DB;                                                                                                                                                                                                                                      a based named 'first'
	public function __construct() {
		$dataBase ='mysql:dbname=game_store;charset=utf8;host=127.0.0.1';
		$user ='root';
		$password =''; // Empty string with XAMPP install
		try {
			$this->DB = new PDO ( $dataBase, $user, $password );
			$this->DB->setAttribute ( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
			}
		catch ( PDOException $e ) {
			echo ('Error establishing Connection');
			exit ();
			}
		}
	public function tryLogin($user, $pass){
		$stmt = $this->DB->prepare
		("Select users.name from user ". "WHERE user.name = '" . $user . "' && user.pass = '" . $pass . "';");
		$stmt->execute ();
		return $stmt->fetchAll ( PDO::FETCH_ASSOC );
	}