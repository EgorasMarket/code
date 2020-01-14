<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Messages extends dbObject{
	protected static $tName = "messages";
    protected static $db_fields  = array('id', 'product_slug', 'reply_to', 'seller', 'buyer', 'message', 'date_created');
	public $id;
	public $product_slug;
	public $reply_to;
	public $seller;
	public $buyer;
	public $message;
	public $date_created;

}
?>
