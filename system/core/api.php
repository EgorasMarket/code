<?php


require_once('rest.php');


class Api extends Rest
{
  public function __construct()
  {
    parent::__construct();
  }

  public function generate_token()
  {
    $email = $this->validate_parameter("email", $this->param['email'], STRING);
    $password = $this->validate_parameter("password", $this->param['password'], STRING);




    $auth_user = Customer::authenticate($email, $password);
    if (!$auth_user) {
      $this->throw_error(INVALID_USER_PASS, "Email or password is incorrect.");
    }
    $token = generate_token_with_time($auth_user->id);
    $data = ['token' => $token, 'user' => $auth_user];
    $this->return_response(SUCCESS_RESPONSE, $data);
  }


  //  public function generate_token_admin()
  //  {
  //    $email = $this->validate_parameter("email", $this->param['email'], STRING);
  //    $password = $this->validate_parameter("password", $this->param['password'], STRING);




  //     $auth_user = Customer::authenticateadmin($email, $password);
  //     if(!$auth_user){
  //       $this->throw_error(INVALID_USER_PASS, "Email or password is incorrect.");
  //     }
  //     $token = generate_token_with_time($auth_user->id);
  //     $data = ['token' => $token, 'user' => $auth_user];
  //     $this->return_response(SUCCESS_RESPONSE, $data);

  //  }

  public function request_wages()
  {
    $token = $this->check_api();

    $driver_id = check_user($token);

    $driver_name =           $this->validate_parameter("driver_name", $this->param['driver_name'], STRING);
    $amount =                $this->validate_parameter("amount", $this->param['amount'], INTEGER);
    $bank =                  $this->validate_parameter("bank", $this->param['bank'], STRING);
    $acc_name =              $this->validate_parameter("acc_name", $this->param['acc_name'], STRING);
    $acc_number =            $this->validate_parameter("acc_number", $this->param['acc_number'], INTEGER);


    $result = wages_insert($driver_id, $driver_name, $amount, $bank, $acc_name, $acc_number);

    //  echo $result;

    if ($result == true) {

      $data = ['message' => "Your request was successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }

  public function insert_brand()
  {

    $brand =       $this->validate_parameter("brand", $this->param['brand'], STRING);

    $list = new Phones();

    $list->phone             =  $brand;

    if ($list->save()) {

      $data = ['message' => "New Brand inserted"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }

  public function fetch_phones()
  {
    $findAll = Phones::findAll();

    //  print_r($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_models()
  {

    $brand_id =           $this->validate_parameter("id", $this->param['id'], INTEGER);
    $findAll = getModelById($brand_id);
    // print_r($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_model_info()
  {
    $model =           $this->validate_parameter("model", $this->param['model'], STRING);
    $findAll = getModelInfo($model);
    // print_r($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function insert_model_details()
  {


    $brand_id =       $this->validate_parameter("brand_id", $this->param['brand_id'], INTEGER);
    $model =          $this->validate_parameter("model", $this->param['model'], STRING);
    $details =        $this->validate_parameter("details", $this->param['details'], STRING);



    $list = new Branddetails();

    $list->phone_id        =  $brand_id;
    $list->model           =  $model;
    $list->full_info       =  $details;



    if ($list->save()) {

      $data = ['message' => "Model details inserted successfully"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }

  public function list_gadget()
  {

    $walletId =       $this->validate_parameter("walletId", $this->param['walletId'], STRING);
    $category =       $this->validate_parameter("category", $this->param['category'], STRING);
    $sub_category =   $this->validate_parameter("sub_category", $this->param['sub_category'], STRING);
    $brand =          $this->validate_parameter("brand", $this->param['brand'], STRING);
    $condition =      $this->validate_parameter("condition", $this->param['condition'], STRING);
    $storage_cap =    $this->validate_parameter("storage_cap", $this->param['storage_cap'], STRING);
    $screen_size =    $this->validate_parameter("screen_size", $this->param['screen_size'], STRING);
    $selfie_cam =     $this->validate_parameter("selfie_cam", $this->param['selfie_cam'], STRING);
    $main_cam =       $this->validate_parameter("main_cam", $this->param['main_cam'], STRING);
    $model =          $this->validate_parameter("model", $this->param['model'], STRING);
    $ram =            $this->validate_parameter("ram", $this->param['ram'], STRING);
    $colour =         $this->validate_parameter("colour", $this->param['colour'], STRING);
    $operating_sys =  $this->validate_parameter("operating_sys", $this->param['operating_sys'], STRING);
    $sim =            $this->validate_parameter("sim", $this->param['sim'], STRING);
    $card_slot =      $this->validate_parameter("card_slot", $this->param['card_slot'], STRING);
    $battery =        $this->validate_parameter("battery", $this->param['battery'], STRING);
    $state =          $this->validate_parameter("state", $this->param['state'], STRING);
    $description =    $this->validate_parameter("description", $this->param['description'], STRING);
    $price =          $this->validate_parameter("price", $this->param['price'], INTEGER);
    $img1 =            $this->validate_parameter("img1", $this->param['img1'], STRING);
    $img2 =            $this->validate_parameter("img2", $this->param['img2'], STRING);
    $img3 =            $this->validate_parameter("img3", $this->param['img3'], STRING);
    $img4 =            $this->validate_parameter("img4", $this->param['img4'], STRING);
    $img5 =            $this->validate_parameter("img5", $this->param['img5'], STRING);

    $text = $brand . ' ' . $model . ' ' . $screen_size . ' ' . $ram . ' ' . $operating_sys . ' ' . $sim . ' ' . $battery . 'mah ' . $colour . ' ' . rand(1000, 1000000);

    // $full_name = "";
    $full_name = $brand . ' ' . $model . ' (' . $colour . ', ' . $storage_cap . ')';

    $slugify = slugify($text);

    $slug = $slugify . '.html';

    $list = new Listing();

    $list->walletId             =  $walletId;
    $list->category             =  $category;
    $list->sub_category         =  $sub_category;
    $list->full_name            =  $full_name;
    $list->brand                =  $brand;
    $list->d_condition          =  $condition;
    $list->storage_capacity     =  $storage_cap;
    $list->screen_size          =  $screen_size;
    $list->selfie_camera        =  $selfie_cam;
    $list->main_camera          =  $main_cam;
    $list->model                =  $model;
    $list->ram                  =  $ram;
    $list->colour               =  $colour;
    $list->operaing_system      =  $operating_sys;
    $list->sim                  =  $sim;
    $list->card_slot            =  $card_slot;
    $list->battery              =  $battery;
    $list->state                =  $state;
    $list->description          =  $description;
    $list->price                =  $price;
    $list->img                  =  $img1;

    $list->slug                 =  $slug;

    if ($img2 != "none") {
      $list->img2                 =  $img2;
    }

    if ($img3 != "none") {
      $list->img3                 =  $img3;
    }

    if ($img4 != "none") {
      $list->img4                 =  $img4;
    }

    if ($img5 != "none") {
      $list->img5                 =  $img5;
    }

    if ($list->save()) {

      $data = ['message' => "This product has been listed successfully!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }

  public function register_user()
  {


    $walletId =     $this->validate_parameter("walletId", $this->param['walletId'], STRING);
    $first_name =   $this->validate_parameter("first_name", $this->param['first_name'], STRING);
    $email =        $this->validate_parameter("email", $this->param['email'], STRING);
    $last_name =    $this->validate_parameter("last_name", $this->param['last_name'], STRING);
    $state =        $this->validate_parameter("state", $this->param['state'], STRING);
    $address =      $this->validate_parameter("address", $this->param['address'], STRING);



    $list = new Registration();

    $list->walletId    =  $walletId;
    $list->first_name  =  $first_name;
    $list->email       =  $email;
    $list->last_name   =  $last_name;
    $list->state       =  $state;
    $list->address     =  $address;


    if ($list->save()) {

      $data = ['message' => "Your registration was successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }


  public function insert_waitlist()
  {


    $full_name =   $this->validate_parameter("full_name", $this->param['full_name'], STRING);
    $email =        $this->validate_parameter("email", $this->param['email'], STRING);



    $list = new Waitlist();

    $list->full_name  =  $full_name;
    $list->email       =  $email;



    if ($list->save()) {

      $data = ['message' => "Your registration was successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }

  public function insert_seller_message()
  {


    $seller =         $this->validate_parameter("seller", $this->param['seller'], STRING);
    $buyer =          $this->validate_parameter("buyer", $this->param['buyer'], STRING);
    $message =        $this->validate_parameter("content", $this->param['content'], STRING);



    $list = new Messages();

    $list->seller       =  $seller;
    $list->buyer        =  $buyer;
    $list->message      =  $message;



    if ($list->save()) {

      $data = ['message' => "successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }

  public function insert_contact_us()
  {


    $fullname =       $this->validate_parameter("fullname", $this->param['fullname'], STRING);
    $email2 =         $this->validate_parameter("email2", $this->param['email2'], STRING);
    $message =        $this->validate_parameter("message", $this->param['message'], STRING);



    $list = new Contact();

    $list->full_name      =  $fullname;
    $list->email          =  $email2;
    $list->message        =  $message;



    if ($list->save()) {

      $data = ['message' => "Your registration was successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }


  public function fetch_custodian_details()
  {
    $walletId =     $this->validate_parameter("walletId", $this->param['walletId'], STRING);
    // $id = 2;
    $findAll = fetch_user_info($walletId);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $findAll);
  }

  public function fetch_all_listings()
  {
    $findAll = fetch_phones_by_asc();

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_open_listings()
  {
    $findAll = fetch_open_phones();

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_open_listings_by_brand()
  {
    $brand =     $this->validate_parameter("brand", $this->param['brand'], STRING);

    $findAll = fetch_open_phones_by_brand($brand);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_listings_by_walletId()
  {
    $walletId =     $this->validate_parameter("walletId", $this->param['walletId'], STRING);
    $findAll = fetch_phones_by_walletid($walletId);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_seller_message()
  {
    $walletId =     $this->validate_parameter("walletId", $this->param['walletId'], STRING);
    $findAll = fetch_msg_by_sellerid($walletId);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_buyer_message()
  {
    $walletId =     $this->validate_parameter("walletId", $this->param['walletId'], STRING);
    $findAll = fetch_msg_by_buyerid($walletId);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function phone_search()
  {
    $input =     $this->validate_parameter("input", $this->param['input'], STRING);
    $findAll = SearchForPhones($input);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $findAll);
  }

  public function fetch_custodian_gadgets()
  {
    $walletId =     $this->validate_parameter("walletId", $this->param['walletId'], STRING);
    $findAll = findGadgetByCustodians($walletId);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $findAll);
  }

  public function fetch_sub_category_gadgets()
  {
    $sub_category =     $this->validate_parameter("sub_category", $this->param['sub_category'], STRING);
    $findAll = findGadgetBySubCategory($sub_category);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $findAll);
  }


  public function fetch_pending_order()
  {
    $walletId =     $this->validate_parameter("walletId", $this->param['walletId'], STRING);
    $findAll = pending_order($walletId);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_order_histroy()
  {
    $walletId =     $this->validate_parameter("walletId", $this->param['walletId'], STRING);
    $findAll = order_histroy($walletId);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_gadget_by_id()
  {
    $id =     $this->validate_parameter("id", $this->param['id'], INTEGER);
    // $id = 2;
    $findAll = Listing::findById($id);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $data);
  }

  public function fetch_listings_by_slug()
  {
    $listing_slug =     $this->validate_parameter("slug", $this->param['slug'], STRING);
    $findAll = findListingBySlug($listing_slug);

    // print_r ($findAll);
    $data = json_encode($findAll);
    $this->return_response(SUCCESS_RESPONSE,  $findAll);
  }



  public function partiallySellItem()
  {
    $token_id =  $this->validate_parameter("id", $this->param['id'], INTEGER);
    $wallet =  $this->validate_parameter("wallet", $this->param['wallet'], STRING);
    $result = updateGadgets("gadgets", "is_lock", 1, "status", 2, "lockBy", $wallet, "tokon_id", $token_id);
    if ($result == true) {

      $data = ['message' => "Update was successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }

  public function partiallysetBuyOrder()
  {
    $id =  $this->validate_parameter("id", $this->param['id'], INTEGER);
    $wallet =  $this->validate_parameter("wallet", $this->param['wallet'], STRING);

    $result = partialBuyOrder("gadgets", "partiallyAdded", 1, "id", $id, "walletId",  $wallet);

    if ($result == true) {

      $data = ['message' => "Update was successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }

  public function partiallyFinalized()
  {
    $token_id =  $this->validate_parameter("id", $this->param['id'], INTEGER);
    $wallet =  $this->validate_parameter("wallet", $this->param['wallet'], STRING);
    $result = updateStatus($token_id, $wallet, 1);
    if ($result == true) {

      $data = ['message' => "Updated was successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }

  public function cancel_listing()
  {

    $id =           $this->validate_parameter("id", $this->param['id'], INTEGER);

    $result = deleteById($id);

    if ($result == true) {

      $data = ['message' => "Delete was successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }


  public function add_to_blockchain()
  {

    $id =           $this->validate_parameter("id", $this->param['id'], INTEGER);
    $walletId =     $this->validate_parameter("walletId", $this->param['walletId'], STRING);

    $result = addtoblockchain($id, $walletId);

    if ($result == true) {

      $data = ['message' => "Update was successful!"];
      $this->return_response(SUCCESS_RESPONSE,  $data);
    } else {
      $this->throw_error(FAILED_QUERY, "Unknown error occurred.");
    }
  }


  public function check_api()
  {
    try {
      $token = $this->get_bearer_token();
      $payload = JWT::decode($token, SECRETE_KEY, ['HS256']);
      return $payload;
      //print_r($payload);
    } catch (\Throwable $th) {
      $this->throw_error(ACCESS_TOKEN_ERRORS, $th->getMessage());
    }

    // print_r($_SERVER);
  }
}
