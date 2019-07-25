<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        // $url = "https://app.jasmine.com/jpmapi/workschedule/v1/employeeid/".$employeeid2."/workdate"."/".$workdate;
        
        $url="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=13.803011,100.538813&radius=1500&type=restaurant&keyword=Bangsue&key=AIzaSyDtbkvX3zjP15y_1dQWzoxvAlMLsgJSEuw";
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
        // echo $response ; exit();
        // return $response;
        // return $this->render('index');
        // session_start() ;
        // $_SESSION['response'] =$response;
        $response2->setContent(json_encode($response));
        return $response2;
        // return new ViewModel();
    }
}
