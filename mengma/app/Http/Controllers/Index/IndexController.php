<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /*
     * 首页
     * */
    public function index()
    {
        return view('welcome');
    }
    /*
     * 景区详情
     * */
    public function scenicSpot()
    {
        return view('index.scenicSpot');
    }
    /*
     * 酒店
     * */
    public function hotel()
    {
        return view('index.hotel');
    }
}
