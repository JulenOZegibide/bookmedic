<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b960afdba24807";$this->pass="180592c5";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_119ea448af80abc";
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
