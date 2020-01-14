<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Branddetails extends dbObject{
	protected static $tName = "models";
    protected static $db_fields  = array('id', 'phone_id', 'name', 'model', 'img', 'full_info');
	public $id;
	public $phone_id;
	public $name;
	public $model;
	public $img;
	public $full_info;

}
?>
