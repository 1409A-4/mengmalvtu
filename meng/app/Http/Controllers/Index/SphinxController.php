<?php

namespace App\Http\Controllers\Index;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Request;

class SphinxController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function cesi(){
        include "sphinx/coreseek/api/sphinxapi.php";
        $sphinx = new \SphinxClient();	//实例化
        $sphinx -> SetServer('127.0.0.1',9312);	//连接
        //山东可以写成活的  后期修改
        $res = $sphinx->Query("山东","*");	//查询的字段第二参数是你配置文件里面写的规则这里是*就会匹配所有的规则
        print_r($res);
    }
    public function search1(){
        //接值
        $set_place = Request::input('set_place');
        $to_place = Request::input('to_place');
        $Outbound_time = Request::input('Outbound_time');
        $back_time = Request::input('back_time');
        $adults = Request::input('adults');
        $children = Request::input('children');
        $arr = array([
            'set_place' => $set_place,
            'to_place' => $to_place,
            'Outbound_time' => $Outbound_time,
            'back_time' => $back_time,
            'adults' => $adults,
            'children' => $children
        ]);
        print_r($arr);die;
    }
    public function search2(){
        echo '2';die;
    }
}