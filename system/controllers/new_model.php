<?php 
    class New_model extends Controller
    {
    
        public function index(){


            $success = array();
            $error = array();
            $data = array();

      
            if (isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['OS']) && isset($_POST['sim']) && isset($_POST['card_slot']) && isset($_POST['main_cam']) && isset($_POST['selfie_cam']) && isset($_POST['battery'])){
    
    
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $OS = $_POST['OS'];
                $sim = $_POST['sim'];
                $card_slot = $_POST['card_slot'];
                $main_cam = $_POST['main_cam'];
                $selfie_cam = $_POST['selfie_cam'];
                $battery = $_POST['battery'];

                $pieces = explode("_", $brand);
                $brand_id = $pieces[1]; 

                $arr = array ( 
                    "OS"=> $OS, 
                    "sim"=> $sim, 
                    "card_slot"=> $card_slot,
                    "main_cam"=> $main_cam,
                    "selfie_cam"=> $selfie_cam,
                    "battery"=> $battery
                ); 
                  
                $details = json_encode($arr);
                // var_dump($details);
    
                if (empty($brand)) {
                    $error["msg"] = "Please select brand";
                    $data["error"] = $error;
                } else if (empty($model)) {
                    $error["msg"] = "Please provide model";
                    $data["error"] = $error;
                } else if (empty($OS)) {
                    $error["msg"] = "Please provide Operating system";
                    $data["error"] = $error;
                } else if (empty($sim)) {
                    $error["msg"] = "Please provide sim";
                    $data["error"] = $error;
                } else if (empty($card_slot)) {
                    $error["msg"] = "Please provide card slot";
                    $data["error"] = $error;
                } else if (empty($main_cam)) {
                    $error["msg"] = "Please provide main camera";
                    $data["error"] = $error;
                } else if (empty($selfie_cam)) {
                    $error["msg"] = "Please provide selfie capacity";
                    $data["error"] = $error;
                } else if (empty($battery)) {
                    $error["msg"] = "Please provide battery";
                    $data["error"] = $error;
                } else {
                    // var_dump($reportee_id);
                
                    $param = new stdClass();
                    $object = new stdClass();
            
                    $param->brand_id = $brand_id;
                    $param->model = $model;
                    $param->details = $details;
                    
            
                    $object->name = "insert_model_details";
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