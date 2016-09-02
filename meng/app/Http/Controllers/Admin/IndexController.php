<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function Index(){
        $data=Admin::where('uid',session('uid'))->first();
        return view('admin/public/index',['data'=>$data]);
    }
}
