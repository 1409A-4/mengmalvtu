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

Route::get('/', function () {
    return view('index/front/index');
});
Route::get('admin/login', 'Admin\LoginCoontroller@loadLogin');//登录路由
Route::post('admin/checklogin', 'Admin\LoginCoontroller@checkLogin');//验证登录
Route::any('admin/verify/{rand}', 'Admin\LoginCoontroller@Verify');//验证码
Route::group(['prefix' => 'admin','middleware'=>'login'],function () {
    Route::get('index', 'Admin\IndexController@Index');//首页
    Route::get('logout', 'Admin\LoginCoontroller@Logout');//退出登录
    Route::get('logout', 'Admin\LoginCoontroller@Logout');//修改密码
});


Route::get('index/index','Index\IndexController@index');//前台首页
Route::get('index/contacts','Index\IndexController@contacts');
Route::get('index/offers','Index\IndexController@offers');
Route::get('index/book','Index\IndexController@book');
Route::get('index/services','Index\IndexController@services');
Route::get('index/safe','Index\IndexController@safe');
Route::get('index/books','Index\IndexController@books');

/** 前台登录路由 **/

Route::get('index/login','Index\LoginController@index');//登录页面
Route::post('login/loginin','Index\LoginController@loginin');//登录验证
Route::get('login/third','Index\LoginController@thirdlogin');//第三方登录
Route::get('login/wei','Index\LoginController@weixin');//微信登录
Route::post('login/regiswei','Index\LoginController@RegisWeixin');//微信注册

//Route::get('index/register','Index\LoginController@register');
//Route::get('index/send','Index\LoginController@send');
//Route::get('index/regis','Index\LoginController@registration');

Route::group(['prefix'=>'index'],function(){
    Route::get('register','Index\LoginController@register');//注册
    Route::get('send','Index\LoginController@send');//注册时发验证码
    Route::post('regis','Index\LoginController@registration');//注册验证

});

Route::get('login/loginout','Index\LoginController@loginout');//退出
Route::get('index/center','Index\LoginController@usercenter');//用户中心