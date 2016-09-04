<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /*
     * 展示商家大厅
     */
    public function businessHome(){
        return view('business/index/index');
    }
}
