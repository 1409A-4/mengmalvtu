<?php
namespace APP\Http\Controllers\Index;

use App\Http\Controllers\Controller;


class IndexController extends Controller{

    public function index(){
        echo 111;die;
        return view('index.front.index');
    }
}