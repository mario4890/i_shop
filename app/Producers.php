<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producers extends Model
{
    protected $details = array(
        "login" => "rest",
        "pass"  => "vKTUeyrt"
    );
    
    function createProducer($name, $website, $logo) {
        $url        = "http://grzegorz.demos.i-sklep.pl/rest_api/shop_api/v1/producers";
        $postArray  = [
            'producer' => [
                'id'                => '',
                'name'              => $name,
                'site_url'          => $website,
                'logo_filename'     => $logo,
                'ordering'          => '',
                'source_id'         => ''
            ],
        ];
        
        $data       = json_encode($postArray);
        
        $ch         = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL             => $url,
            CURLOPT_POST            => 1,
            CURLOPT_POSTFIELDS      => $data,
            CURLOPT_RETURNTRANSFER  => 1,
            CURLOPT_USERPWD         => $this->details['login'] . ":" . $this->details['pass'],
        ));

        $output = curl_exec($ch);

        curl_close($ch);
        
        return $output;
    }
    
    function getAllProducers() {
        $url    = "http://grzegorz.demos.i-sklep.pl/rest_api/shop_api/v1/producers";
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
