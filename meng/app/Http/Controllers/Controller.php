<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //测试sphinx
    public function cesi(){
        include "sphinx/coreseek/api/sphinxapi.php";
        $sphinx = new \SphinxClient();	//实例化
        $sphinx -> SetServer('127.0.0.1',9312);	//连接
        $res = $sphinx->Query("山东","*");	//查询的字段第二参数是你配置文件里面写的规则这里是*就会匹配所有的规则
        print_r($res);
//        if($res==false){
//            echo "00";
//        }else{
//            echo "11";
//        }
    }
}
