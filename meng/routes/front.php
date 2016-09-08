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



/*
 * 后台路由
 * */

//Route::get('/', function () {
//    return view('index/front/index');
//});
Route::get('/','Index\IndexController@index');

//前台
Route::get('index/contacts','Index\IndexController@contacts');//前台客服  *联系我们
Route::get('index/offers','Index\IndexController@offers');//前台优惠
Route::get('index/book','Index\IndexController@book');//前台预约
Route::get('index/services','Index\IndexController@services');//前台服务
Route::get('index/safe','Index\IndexController@safe');//前台安全
Route::get('index/books','Index\IndexController@books');//前台登记
Route::get('index/around','Index\IndexController@around');//本地周边游

//sphinx搜索
Route::get('index/cesi','Index\SphinxController@cesi');//搜索sphinx
Route::post('index/sflight','Index\SphinxController@sflight');//航班搜索
Route::get('index/flight','Index\SphinxController@flight');//航班展示
Route::post('index/shotel','Index\SphinxController@shotel');//酒店搜索展示
Route::get('index/hotel','Index\SphinxController@hotel');//酒店展示
Route::post('index/rental','Index\SphinxController@rental');//租车搜索展示

//详情  ajax无刷新评论
Route::get('index/details','Index\SphinxController@details');//ajax无刷新评论

//地区管理
//Route::get('index/region','RegionController@region');//三级联动地区管理
Route::post('index/getcity','Index\IndexController@getcity');//三级联动地区管理