 <?php

 class DataAccessHelper {
 	private $conn;

 	public function connect(){
 		$servername = "localhost:3306";
 		$username = "root";
 		$password = "";
 		$dbname = "web-final-project";

 		// Create connection
 		$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);

 	}
 	public function executeQuery($sql){
 		$result = $GLOBALS['conn']->query($sql);
 		return $result;
 	}

 	public function close(){
 		mysqli_close($GLOBALS['conn']);
 	}
 	public function executeNonQuery($sql){
 		$GLOBALS['conn']->query($sql);
 	}
 }
 ?> 