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
Route::group(['prefix' => 'admin','middleware'=>'login'],function () {
});


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



