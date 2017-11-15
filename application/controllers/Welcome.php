<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent :: __construct();

        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        if ($this->input->post()) {
            $hotelName = trim($this->input->post('hotelName', TRUE));
            $city = trim($this->input->post('city', TRUE));
            $price = trim($this->input->post('price', TRUE));
            $dateFrom = trim($this->input->post('dateFrom', TRUE));
            $dateTo = trim($this->input->post('dateTo', TRUE));

            $json = $this->getArray('https://api.myjson.com/bins/tl0bp');

            $match = false;
            $newArray = array();
            $newArray2 = array();
            foreach ($json as $key => $value) {
                foreach ($value as $key2 => $value2) {

                    if ($value2['city'] == $city) {

                        if (!in_array($newArray, $value[$key2])) {
                            //$newArray['city']=$value2['city'];
                            array_push($newArray, $value[$key2]);
                        }
                    }



                    if ($value2['name'] == $hotelName) {

                        if (!in_array($newArray, $value[$key2])) {

                            //$newArray['name']=$value2['name'];
                            array_push($newArray, $value[$key2]);
                        }
                    }



                    if ($value2['price'] == $price) {

                        if (!in_array($newArray, $value[$key2])) {
                            //  $newArray['price']=$value2['price'];
                            array_push($newArray, $value[$key2]);
                        }
                    }

                    foreach ($value2['availability'] as $key3 => $value3) {

                        if ((date($value3['from']) >= date($dateFrom)) && (date($value3['to']) <= date($dateTo))) {

                            if (!in_array($newArray, $value[$key3])) {
                                (array_push($newArray, $value[$key3]));
                            }
                        }
                    }
                }
            }


            $data['result'] = $newArray;
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

    /**
     * 
     * @param type $url for file json api
     * @return array data of json
     */
    private function getArray($url) {
        $curlSession = curl_init();
        curl_setopt($curlSession, CURLOPT_URL, $url);
        curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

        $jsonData = (curl_exec($curlSession));
        curl_close($curlSession);
        return ((array) ( json_decode($jsonData, true)));
        //$json = (array) json_decode(file_get_contents('https://api.myjson.com/bins/tl0bp'), true);
    }

}
