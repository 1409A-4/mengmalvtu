<?php

namespace App\Http\Controllers\Index;

use App\Model\Front\Flight;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Front\Hotel;
use App\Model\Front\Rental;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


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
    /*
     * 航班搜索
     */
    public function sflight(Request $request){
        $data = $request->except('_token');
        $out_time = strtotime($data['Outbound_time']);
        $back_time = strtotime($data['back_time']);
        if($data['set_place']==0 || $data['to_place']==0){
            $arr = Flight::where('f_Dtime','>',$out_time)->orwhere('f_Btime','>',$back_time)->get()->toArray();
            if($arr){
                return view('index/front/sflight',['arr'=>$arr]);
            }else{
                return back()->withCookie(cookie('name_1', '1'));
            }
        }else{
            $arr = Flight::where('f_Dtime','>',$out_time)->orwhere('f_Btime','>',$back_time)->orwhere('f_Oplace','=',$data['set_place'])->orwhere('f_Dplace','=',$data['to_place'])->get()->toArray();
            //print_r($arr);die;
            if($arr){
                return view('index/front/sflight',['arr'=>$arr]);
            }else{
                return back()->withCookie(cookie('name_1', '1'));
            }
        }
    }
    /*
     * 加载航班
     */
    public function flight(){
        return view('index/front/flight');
    }
    /*
     * 酒店搜索
     */
    public function shotel(Request $request){
        $data = $request->except('_token');
        if($data['to1_place']=='0'){
            return back()->withCookie(cookie('name_2', '2'));
        }else{
            $arr = Hotel::where('h_address','=',$data['to1_place'])->get()->toArray();
            if($arr){
                return view('index/front/shotel',['arr'=>$arr]);
            }else{
                return back()->withCookie(cookie('name_2', '2'));
            }
        }
    }
    public function hotel(){
        return view('index/front/hotel');
    }
    /*
     * 酒店搜索
     */
    public function rental(Request $request){
        $data = $request->except('_token');
        if($data['to2_place']=='0'){
            return back()->withCookie(cookie('name_3', '3'));
        }else{
            $arr = Rental::where('r_place','=',$data['to2_place'])->get()->toArray();
            if($arr){
                return view('index/front/rental',['arr'=>$arr]);
            }else{
                return back()->withCookie(cookie('name_3', '3'));
            }
        }
    }
    public function details(){
        return view('Index/front/details');
    }
}