<?php
/**
 * Created by PhpStorm.
 * User: qiao
 * Date: 2020/12/21
 * Time: 11:58
 */
namespace App\Logic\Index;
use Curl\Curl;

class Index
{
    public function index()
    {
        $curl = new Curl();
        $data = $curl->get('http://www.example.com/');
        var_dump($data);die;
        return 'fasfsaf';
    }
}