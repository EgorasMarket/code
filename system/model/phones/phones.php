<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Phones extends dbObject{
	protected static $tName = "phones";
    protected static $db_fields  = array('id', 'phone');
	public $id;
	public $phone;

}
?>
