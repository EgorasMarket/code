<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Dispute extends dbObject{
	protected static $tName = "dispute_message";
    protected static $db_fields  = array('id', 'slug', 'sender', 'message', 'upload', 'date_added');
	public $id;
	public $slug;
	public $sender;
	public $message;
	public $upload;
	public $date_added;

}
?>
