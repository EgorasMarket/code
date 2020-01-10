<?php
class Submit_message extends Controller {

    public function index(){

        // var_dump($_POST);
        $success = array();
        $error = array();
        $data = array();

        if (isset($_COOKIE['walletId'])) {
            $seller = $_COOKIE['walletId'];
        }
  
        if (isset($_POST['buyer']) && isset($_POST['msg_content'])){


            $buyer = $_POST['buyer'];
            $msg_content = $_POST['msg_content'];

            $split = explode("=",$buyer);
            $split2 = explode("=",$msg_content);

            $seller_id = $split[1];
            $mcontent = $split2[1];

            if (empty($mcontent)) {
                $error["msg"] = "Please write a message";
                $data["error"] = $error;
            } else {
                // var_dump($reportee_id);
            
                $param = new stdClass();
                $object = new stdClass();
        
                $param->seller = $seller_id;
                $param->buyer = $buyer;
                $param->content = $mcontent;
                
        
                $object->name = "insert_seller_message";
                $object->param = $param;
        
                $form_data  = json_encode($object);
        
                // echo $form_data;
                // print_r($object);
                
        
                $response = curl_without_auth($form_data);


                if (empty($response)) {
                    $error["msg"] = "Can't complete your request at the moment.";
                    $data["error"] = $error;
                } else {
                    $rs =  json_decode($response,  true);
                
                    if(isset($rs['error'])){
                            $error["msg"] = $rs['error']['message'];
                            $data["error"] = $error;
                    }else if(isset($rs['response'])){
                    //time()+3600
                    $success["msg"] = $rs['response']['data']['message'];
                        $success["status"] = "OK";
                        $data["success"] = $success;
                    
                    
                    }
                    
                } 
            }
    
              
        }else{
          $error["msg"] = "Error occurred. Try again later";
          $data["error"] = $error;
        }
      
    
      echo json_encode($data);
    
    
      }
}



?>