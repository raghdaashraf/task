<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent :: __construct();

        $this->load->helper(array('form', 'url'));
    }

    public function index() {

//    $curlSession = curl_init();
//    curl_setopt($curlSession, CURLOPT_URL, 'https://api.myjson.com/bins/tl0bp');
//    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
//    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
//
//    $jsonData = (curl_exec($curlSession));
//    curl_close($curlSession);
//  print_r( json_decode ($jsonData,true));die;
//print_r( $json);


        if ($this->input->post()) {
            $hotelName = trim($this->input->post('hotelName', TRUE));
            $city = trim($this->input->post('city', TRUE));
            $price = trim($this->input->post('price', TRUE));
            $dateFrom = trim($this->input->post('dateFrom', TRUE));
            $dateTo = trim($this->input->post('dateTo', TRUE));
            $json = (array) json_decode(file_get_contents('https://api.myjson.com/bins/tl0bp'), true);

//print_r($json);die;
//foreach($json as $value)
//{
//
//    $array_city[] = $value['hotels'];	
//
//}
//print_r($array_city);die;



            $match = false;
            $newArray = array();
            foreach ($json as $key => $value) {//print_r($value);
                foreach ($value as $key2 => $value2) {
                    if ($value2['city'] == $city) {

                        if (!in_array($newArray, $value[$key2])) {
                            (array_push($newArray, $value[$key2]));
                        }
                    }
                    if ($value2['name'] == $hotelName) {

                        if (!in_array($newArray, $value[$key2])) {
                            (array_push($newArray, $value[$key2]));
                        }
                    }

                    if ($value2['price'] == $price) {

                        if (!in_array($newArray, $value[$key2])) {
                            (array_push($newArray, $value[$key2]));
                        }
                    }


                    foreach ($value2['availability'] as $key3 => $value3) {

                        if ($value3['from'] == $dateFrom) {

                            if (!in_array($newArray, $value[$key3])) {
                                (array_push($newArray, $value[$key3]));
                            }
                        }

                        if ($value3['to'] == $dateTo) {

                            if (!in_array($newArray, $value[$key3])) {
                                (array_push($newArray, $value[$key3]));
                            }
                        }
                    }
                }
            } //print_r($newArray);
            //die;
foreach($newArray as $key=>$value)
{
   if($value['name']==$hotelName && $value['city']==$city) 
   {
       echo "kk";
   }
}die;
            $data['result'] = $hotelName;
            $this->load->view('header', $data);
            $this->load->view('search');
            $this->load->view('footer');
        } else {
            $data['result'] = '';
            $this->load->view('header', $data);
            $this->load->view('search');
            $this->load->view('footer');
        }
    }

}
