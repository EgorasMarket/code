<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Branddetails extends dbObject{
	protected static $tName = "models";
    protected static $db_fields  = array('id', 'phone_id', 'model', 'full_info');
	public $id;
	public $phone_id;
	public $model;
	public $full_info;

}
?>
