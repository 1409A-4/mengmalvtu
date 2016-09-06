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


Route::get('/','Index\IndexController@index');


/*
 * 后台路由
 * */

Route::get('admin/login', 'Admin\LoginCoontroller@loadLogin');//登录路由
Route::post('admin/checklogin', 'Admin\LoginCoontroller@checkLogin');//验证登录
Route::get('admin/verify/{rand}', 'Admin\LoginCoontroller@Verify');//验证码
Route::group(['prefix' => 'admin','middleware'=>'login'],function () {
    Route::get('index', 'Admin\IndexController@Index');//首页
    Route::get('logout', 'Admin\LoginCoontroller@Logout');//退出登录
    Route::post('setpwd', 'Admin\LoginCoontroller@Setpwd');//修改密码
    Route::get('loaduseradd', 'Admin\UserController@LoadUserAdd');//加载用户添加
    Route::post('useradd', 'Admin\UserController@UserAdd');//用户添加
    Route::get('usershow', 'Admin\UserController@UserShow');//用户管理
    Route::get('useredit', 'Admin\UserController@UserEdit');//用户禁用
    Route::get('loadclassifyadd', 'Admin\ClassifyController@LoadClassifyAdd');//加载分类添加
    Route::post('classifyadd', 'Admin\ClassifyController@ClassifyAdd');//分类添加
    Route::get('classifyshow', 'Admin\ClassifyController@ClassifyShow');//分类管理
    Route::get('loadclassifyedit', 'Admin\ClassifyController@LoadClassifyEdit');//加载分类编辑
    Route::post('classifyedit', 'Admin\ClassifyController@ClassifyEdit');//分类编辑
    Route::get('classifydel', 'Admin\ClassifyController@ClassifyDel');//分类删除
    Route::get('loadgoodsadd', 'Admin\GoodsController@LoadGoodsAdd');//加载商品添加
    Route::post('goodsadd', 'Admin\GoodsController@GoodsAdd');//商品添加
    Route::get('goodsshow', 'Admin\GoodsController@GoodsShow');//商品管理
    Route::get('loadgoodsedit', 'Admin\GoodsController@LoadGoodsEdit');//加载商品编辑
    Route::post('goodsedit', 'Admin\GoodsController@GoodsEdit');//商品编辑
    Route::get('goodsdel', 'Admin\GoodsController@GoodsDel');//商品删除
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











