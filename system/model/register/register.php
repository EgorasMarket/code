<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Registration extends dbObject{
	protected static $tName = "user_info";
    protected static $db_fields  = array('id', 'walletId', 'first_name', 'last_name', 'email', 'address', 'state', 'created_at');
	public $id;
	public $walletId;
	public $first_name;
	public $last_name;
	public $email;
	public $address;
	public $state;
	public $created_at;

}
?>
