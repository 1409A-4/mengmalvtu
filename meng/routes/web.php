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
Route::any('admin/verify/{rand}', 'Admin\LoginCoontroller@Verify');  //验证码

Route::group(['prefix' => 'admin','middleware'=>'login'],function () {
    Route::get('index', 'Admin\IndexController@Index');              //首页
    Route::get('logout', 'Admin\LoginCoontroller@Logout');           //退出登录
    Route::get('logout', 'Admin\LoginCoontroller@Logout');           //修改密码
});


Route::get('index/index','Index\IndexController@index');              //前台首页
Route::get('index/contacts','Index\IndexController@contacts');
Route::get('index/offers','Index\IndexController@offers');
Route::get('index/book','Index\IndexController@book');
Route::get('index/services','Index\IndexController@services');
Route::get('index/safe','Index\IndexController@safe');
Route::get('index/books','Index\IndexController@books');






/*
 *商户模块
 */
Route::group(['prefix' => 'business'],function () {
Route::get('login', 'Business\LoginController@businessLogin');             //商户登录
Route::post('login_pro', 'Business\LoginController@businessLogin_pro');    //商户登录验证
Route::get('logout', 'Business\LoginController@businessLogout');           //商户退出
Route::get('home', 'Business\IndexController@businessHome');               //商户大厅
Route::post('add', 'Business\LoginController@businessAdd');                //商户入驻

});



