<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="ba2c66054f4ce5";$this->pass="e84f8ad3";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_9f80669238ae6fc";
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
