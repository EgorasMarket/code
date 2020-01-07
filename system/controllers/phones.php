<?php
class Phones extends Controller
{

    public function getGadgetBy($id = "")
    {
        $param = new stdClass();
        $object = new stdClass();

        $param->id = $id;


        $object->name = "fetch_gadget_by_id";
        $object->param = $param;

        $form_data  = json_encode($object);




        $response = curl_without_auth($form_data);
        $res = json_decode($response, true);
        echo  json_encode($res['response']['data']);
    }
    public function index()
    {


        $param = new stdClass();
        $object = new stdClass();

        $param->code = "NA";


        $object->name = "fetch_open_listings";
        $object->param = $param;

        $form_data  = json_encode($object);




        $response = curl_without_auth($form_data);

        $res = json_decode($response, true);
        // var_dump($response);

        // die();

        $this->view('products/phones', $res);
    }
}
