<?php ini_set("error_reporting", E_ALL);

class Map
{
	private $id;
	private $loc_name;
	private $loc_address;
	private $loc_cat;
	private $latitude;
	private $longitude;
	private $conn;
	private $table_name = "map_form";
	
	public function __construct(){
		require_once "db_connect.php";
		$db = new DbConnect;
		$this->conn = $db->connect();	
	}
	
	public function insertFormData($loc_name, $loc_address, $loc_cat ){
		$sql = "INSERT INTO $this->table_name (loc_name, loc_address, loc_cat) VALUES ('$loc_name', '$loc_address', '$loc_cat' )";
		if(mysqli_query($this->conn, $sql )){
			return "1";
		}else{
			return "0";
		}	
	}
	
	public function getLocationsBlankLatLong(){
		$sql = "SELECT * FROM $this->table_name WHERE latitude IS NULL AND longitude IS NULL";
		return mysqli_query($this->conn, $sql );
	}

	function setId($id) { 
		$this->id = $id; 
	}
	function getId() { 
		return $this->id; 
	}
	function setLoc_name($loc_name) { 
		$this->loc_name = $loc_name; 
	}
	function getLoc_name() { 
		return $this->loc_name; 
	}
	function setLoc_address($loc_address) { 
		$this->loc_address = $loc_address; 
	}
	function getLoc_address() { 
		return $this->loc_address; 
	}
	function setLoc_cat($loc_cat) { 
		$this->loc_cat = $loc_cat; 
	}
	function getLoc_cat() { 
		return $this->loc_cat; 
	}
	function setLatitude($latitude) { 
		$this->latitude = $latitude; 
	}
	function getLatitude() { 
		return $this->latitude; 
	}
	function setLongitude($longitude) { 
		$this->longitude = $longitude; 
	}
	function getLongitude() { 
		return $this->longitude; 
	}

}