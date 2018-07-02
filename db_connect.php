<?php 
class DbConnect{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname  = "googlemap";
	
	public function connect(){
		
		// Create connection
		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		} 
		return $conn;
	}
}



