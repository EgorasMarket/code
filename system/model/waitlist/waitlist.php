<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Waitlist extends dbObject{
	protected static $tName = "waitlist";
    protected static $db_fields  = array('id', 'full_name', 'email', 'date_added');
	public $id;
	public $full_name;
	public $email;
	public $date_added;

}
?>
