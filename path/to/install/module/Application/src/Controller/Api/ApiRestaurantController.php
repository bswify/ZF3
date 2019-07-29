<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller\Api;




class ApiRestaurantController
{

    public function getRestaurants($lat,$long,$keyword){
        $lat1 =  $lat;
        $long1 =  $long;
        $keyword1 =  $keyword;
        $key = "AIzaSyDtbkvX3zjP15y_1dQWzoxvAlMLsgJSEuw";

        $url="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$lat1.",".$long1."&radius=1500&type=restaurant&keyword=".$keyword1."&key=".$key;
        $headers = array(
            'Content-type: application/json; charset=UTF-8'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPGET , 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
//        $character = json_decode($response);
            echo  $response;exit();
        $data = $character->results;
        return $data ;
    }

}
