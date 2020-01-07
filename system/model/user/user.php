<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Customer extends dbObject{
	protected static $tName = "customers";
	protected static $db_fields  = array('id', 'driver_id', 'first_name', 
	'last_name', 'email', 'password', 'email_auth_code', 
	'birth_date', 'phone', 'address', 'city', 'state', 
	'points', 'status', 'type', 'wages', 'create_at', 'update_at' );
	public $id;
	public $driver_id;
	public $first_name;
	public $last_name;
	public $email;
	public $password;
	public $email_auth_code;
	public $birth_date;
	public $phone;
	public $address;
	public $city;
	public $create_at;
	public $update_at;
	public $state;
	public $points;
	public $status;
	public $type;
	public $wages;





	public static function authenticate($email="", $password="") {
		global $db;
		$email = $db->SQLEscape($email);
		$password = $db->SQLEscape($password);

		$sql  = "SELECT * FROM  ".static::$tName;
		$sql .= " WHERE email ='{$email}' ";
		$sql .= "AND password ='".sha1($password)."' ";
		$sql .= "LIMIT 1";
		$rsArray = static::findBySql($sql);
		return !empty($rsArray) ? array_shift($rsArray) : false;
	}

	public static function authenticateadmin($email="", $password="") {
		global $db;
		$email = $db->SQLEscape($email);
		$password = $db->SQLEscape($password);
		$type = "admin";

		$sql  = "SELECT * FROM  ".static::$tName;
		$sql .= " WHERE email ='{$email}' ";
		$sql .= "AND password ='".sha1($password)."' ";
		$sql .= "AND type ='{$type}' ";
		$sql .= "LIMIT 1";
		$rsArray = static::findBySql($sql);
		return !empty($rsArray) ? array_shift($rsArray) : false;
	}

	public static function activate($email="", $code="") {
		global $db;
		$email = $db->SQLEscape($email);
		$code = $db->SQLEscape($code);

		$sql  = "SELECT * FROM  ".static::$tName;
		$sql .= " WHERE email ='{$email}' ";
		$sql .= "AND email_auth_code ='{$code}' ";
		$sql .= "LIMIT 1";
		$rsArray = static::findBySql($sql);
		return !empty($rsArray) ? array_shift($rsArray) : false;
	}



}
