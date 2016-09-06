<?php





/*
 *商户模块
 */
Route::get('business/login', 'Business\LoginController@businessLogin');                 //商户登录
Route::post('business/login_pro', 'Business\LoginController@businessLogin_pro');        //商户登录验证

Route::group(['prefix' => 'business','middleware'=>'business'],function () {

        Route::get('logout', 'Business\LoginController@businessLogout');                //商户退出
        Route::get('home', 'Business\IndexController@businessHome');                    //商户大厅
        Route::post('add', 'Business\LoginController@businessAdd');                     //商户入驻
        Route::get('info', 'Business\IndexController@businessInfo');                    //商户信息
        Route::get('openEmail', 'Business\IndexController@businessEmail');              //邮箱激活
        Route::post('checkCode', 'Business\IndexController@businessCode');              //验证码验证
        Route::get('typeAdd', 'Business\GoodsController@typeAdd');                      //分类添加
        Route::post('typeAdd_pro', 'Business\GoodsController@typeAdd_pro');             //执行添加
        Route::get('myType', 'Business\GoodsController@myType');                         //分类展示
        Route::get('type_del', 'Business\GoodsController@type_del');                     //分类删除
        Route::get('type_upd', 'Business\GoodsController@type_upd');                     //分类编辑
        Route::post('typeUpd_pro', 'Business\GoodsController@typeUpd_pro');             //执行编辑
        Route::get('goodsAdd', 'Business\GoodsController@goodsAdd');                     //商品添加

});




