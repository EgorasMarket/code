<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Contact extends dbObject{
	protected static $tName = "contact_us";
    protected static $db_fields  = array('id', 'full_name', 'email', 'message', 'date_added');
	public $id;
	public $full_name;
	public $email;
	public $message;
	public $date_added;

}
?>
