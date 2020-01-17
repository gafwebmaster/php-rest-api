<?php
class Database{
	//DB Parameters
	private $host = 'localhost';
	private $db_name = 'scanar41_restapi';
	private $username = 'scanar41_restapi';
	private $password = '$Bm;5cFFGGO)';
	private $conn;

	//DB Connect
	 public function connect() {
		$this->conn = null;
		
		try{
			$this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo 'Connection error: ' . $e->getMessage();
		}
		return $this->conn;
	}
}