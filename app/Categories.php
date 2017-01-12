<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {

    protected $details = array(
        "login" => "rest",
        "pass"  => "vKTUeyrt"
    );

    function getAll() {
        $url    = "http://grzegorz.demos.i-sklep.pl/rest_api/shop_api/v1/categories";
        $ch     = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER  => 1,
            CURLOPT_HTTPGET         => true,
            CURLOPT_HTTPHEADER      => array('Content-Type: application/json'),
            CURLOPT_HTTPHEADER      => array('Accept: application/json'),
            CURLOPT_HEADER          => 0,
            CURLOPT_USERPWD         => $this->details['login'] . ":" . $this->details['pass'],
            CURLOPT_URL             => $url,
        ));

        $data   = curl_exec($ch);
        $output = json_decode($data, TRUE);

        curl_close($ch);
        
        return $output;
    }

}
