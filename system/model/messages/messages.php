<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Messages extends dbObject{
	protected static $tName = "messages";
    protected static $db_fields  = array('id', 'seller', 'buyer', 'message', 'date_created');
	public $id;
	public $seller;
	public $buyer;
	public $message;
	public $date_created;

}
?>
