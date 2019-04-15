<?php
class Core{
	private $host, $user, $pw, $dbName;
	public static $conn = null;
	function __construct($host, $user, $pw, $dbName){
		$this->host = $host;
		$this->user = $user;
		$this->pw = $pw;
		$this->dbName = $dbName;
		try {
			self::$conn = new PDO("mysql:host=" . $this->host .";dbname=" . $this->dbName, $this->user, $this->pw);

	

            self::$conn->exec('SET NAMES utf8');

		} catch (\PDOException $e) {
			exit($e->getMessage());
		}

	}

	private function setHost($host){
		$this->host = $host;
	}
	private function setUser($user){
		$this->user = $user;
	}
	private function setPassword($pw){
		$this->pw = $pw;
	}
	private function setDatabase($dbName){
		$this->dbName = $dbName;
	}

	public function getHost(){
		return $this->host;
	}

	public function getDatabase(){
		return $this->dbName;
	}

	public static function getConnection(){
		return self::$conn;
	}

}
