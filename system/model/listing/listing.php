<?php
require_once (LIB_PATH.DS.'dbclass'.DS.'dbclass.php');
require_once (LIB_PATH.DS.'dbobject'.DS.'dbobject.php');
class Listing extends dbObject{
	protected static $tName = "gadgets";
    protected static $db_fields  = array('id', 'walletId', 'tokon_id', 'is_added', 'is_lock', 'category',	'sub_category',	'brand', 'd_condition', 'storage_capacity', 'screen_size', 
    'selfie_camera', 'main_camera', 'model', 'ram', 'colour', 'operaing_system', 'sim', 'card_slot', 'battery', 'state', 'description', 'price', 'img', 'img2', 'img3', 'img4', 'img5', 'slug', 'status', 'lockBy', 'date_created');
	public $id;
	public $walletId;
	public $tokon_id;
	public $is_added;
	public $is_lock;
	public $category;
	public $sub_category;
	public $brand;
	public $d_condition;
	public $storage_capacity;
	public $screen_size;
	public $selfie_camera;
	public $main_camera;
    public $model;
    public $ram;
    public $colour;
    public $operaing_system;
    public $sim;
    public $card_slot;
    public $battery;
    public $state;
    public $description;
    public $price;
    public $img;
    public $img2;
    public $img3;
    public $img4;
    public $img5;
    public $slug;
	public $status;
	public $lockBy;
	public $date_created;
	
    
}