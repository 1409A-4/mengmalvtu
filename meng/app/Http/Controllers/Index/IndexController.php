<?php

namespace App\Http\Controllers\Index;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use DB;
use Redirect;

class IndexController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //前台首页
    public function index(){
        $arr = DB::table("region")->where("parent_id",'=','1')->get();
        return view('index/front/index',['list'=>$arr]);
    }
//    public function new(){
//        return view('index/front/new');
//    }
    public function contacts(){
        return view('index/front/Contacts');
    }
    public function offers(){
        return view('index/front/Offers');
    }
    public function book(){
        return view('index/front/Book');
    }
    public function services(){
        return view('index/front/Services');
    }
    public function safe(){
        return view('index/front/Safety');
    }
    public function books(){
        return view('index/front/Book2');
    }
    public function around(){
        $ip=$_SERVER["REMOTE_ADDR"];
        $url= "http://www.ip138.com/ips138.asp?ip=$ip&action=2";
        $yuan=file_get_contents($url);
        $address = '#<td height="30" align="center" valign="top">(.*)<td align="center"><div align="center">#isU';
        preg_match_all($address,$yuan,$content);
        $res = $content[0][0];
        // print_r($arr);
        return view('index/front/around',['arr'=>$res]);
    }
}