
<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bedfa9a8fd763d";$this->pass="2d67e3cf";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_2911e8c00c5b102";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
