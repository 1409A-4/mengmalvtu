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
        return view('index/front/index');
    }
    public function new(){
        return view('index/front/new');
    }
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
}