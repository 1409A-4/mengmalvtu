<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('index/front/index');
//});
Route::get('/','Index\IndexController@index');

Route::get('admin/login', 'Admin\LoginCoontroller@loadLogin');//登录路由
Route::post('admin/checklogin', 'Admin\LoginCoontroller@checkLogin');//验证登录
Route::any('admin/verify/{rand}', 'Admin\LoginCoontroller@Verify');//验证码
Route::group(['prefix' => 'admin','middleware'=>'login'],function () {
    Route::get('index', 'Admin\IndexController@Index');//首页
    Route::get('logout', 'Admin\LoginCoontroller@Logout');//退出登录
    Route::get('logout', 'Admin\LoginCoontroller@Logout');//修改密码
});


Route::get('index/index','Index\IndexController@index');//前台首页
Route::get('index/contacts','Index\IndexController@contacts');//前台客服  *联系我们
Route::get('index/offers','Index\IndexController@offers');//前台优惠
Route::get('index/book','Index\IndexController@book');//前台预约
Route::get('index/services','Index\IndexController@services');//前台服务
Route::get('index/safe','Index\IndexController@safe');//前台安全
Route::get('index/books','Index\IndexController@books');//前台登记

//sphinx搜索
Route::get('index/cesi','Index\SphinxController@cesi');//搜索sphinx

//地区管理
//Route::get('index/region','RegionController@region');//三级联动地区管理
Route::post('index/getcity','Index\IndexController@getcity');//三级联动地区管理



