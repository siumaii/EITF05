<?php
/*
 * Class Database: interface to the movie database from PHP.
 *
 * You must:
 *
 * 1) Change the function userExists so the SQL query is appropriate for your tables.
 * 2) Write more functions.
 *
 */
class Database {
	private $host;
	private $username;
	private $password;
	private $database;
	private $conn;
	
	/**
	 * Constructs a database object for the specified user.
	 */
	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->userName = $username;
		$this->password = $password;
		$this->database = $database;
	}
	
	/** 
	 * Opens a connection to the database, using the earlier specified user
	 * name and password.
	 *
	 * @return true if the connection succeeded, false if the connection 
	 * couldn't be opened or the supplied user name and password were not 
	 * recognized.
	 */
	public function openConnection() {
		
	
			try {
			$this->dbConnection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username,  $this->password);
			$this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			$error = $e->getMessage();
			print $error;
			unset($this->conn);
			return false;
		}
		return false;
		
		
	}
	
	/**
	 * Closes the connection to the database.
	 */
	public function closeConnection() {
		$this->conn = null;
		unset($this->conn);
	}

	/**
	 * Checks if the connection to the database has been established.
	 *
	 * @return true if the connection has been established
	 */
	public function isConnected() {
		return isset($this->conn);
	}
	
	public function userExists($userId) { 
 		$sql = "SELECT username FROM user WHERE username = ?"; 
 		$result = $this->executeQuery($sql, array($userId)); 
 		return count($result) == 1; 
 	} 

	
	
	

}
?>
