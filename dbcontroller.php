<?php
class dbcontroller {
	private $host = "127.0.0.1:49533";
	private $user = "azure";
	private $password = "6#vWHD_$";
	private $database = "shopping_cart";
	private $conn;
	
	 function __construct() {
	// 	$this->conn = $this->connectDB();
	$this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
		exit();
	}
	 }
	
	
// 	function connectDB() {
// 		$conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
// 		// Check connection
// 		if (!$conn) {
//   		die("Connection failed: " . mysqli_connect_error());
// 		}
// echo "Connected successfully";
// 		return $conn;
// 	}
	 
	function runQuery($query) {
		$result = mysqli_query($this->conn, $query);
		
		while($row = mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result = mysqli_query($this->conn, $query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
	
	
}
?>
