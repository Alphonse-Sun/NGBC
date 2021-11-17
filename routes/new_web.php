<?php
Route::group(['prefix' => 'member','namespace' => 'Member'],function ($router)
{
    Route::group(['middleware' => 'auth.member:member'],function ($router){
        $router->get('/user_fs', 'FsController@user_fs')->name('member.user_fs');
        $router->post('/send_fs', 'FsController@send_fs')->name('member.send_fs');
        //新加优惠活动申请
        $router->post('/apply_activity', 'IndexController@post_apply_activity')->name('member.apply_activity');
        $router->get('/my_activity', 'IndexController@my_activity')->name('member.my_activity');

        $router->post('/post_change_trans','IndexController@post_change_trans')->name('member.post_change_trans');
    });
});

Route::group(['prefix' => 'm','namespace' => 'Wap', 'middleware' => 'web.maintain'],function ($router)
{
    $router->post('gonggao','AjaxController@getGongGao')->name('wap.gonggao');
    //$router->get('game','AjaxController@getGames')->name('wap.get_games');
    Route::group(['middleware' => 'auth.member:member'],function ($router){
        $router->get('/user_fs', 'FsController@user_fs')->name('wap.user_fs');
        $router->post('/send_fs', 'FsController@send_fs')->name('wap.send_fs');
        $router->get('my_activity', 'IndexController@my_activity')->name('wap.my_activity');
        $router->post('apply_activity', 'IndexController@post_apply_activity')->name('wap.apply_activity');
    });
});

Route::group(['domain' => env('ADMIN_URL'), 'prefix' => 'admin','namespace' => 'Admin'],function ($router){
    $router->get('yh_notice', 'AdminController@yh_notice')->name('admin.yh_notice');
    Route::group(['middleware' => ['authorize']], function($router){
        //广告位
        Route::resource('advpos', 'AdvposController');//新加
        //活动申请审核
        Route::put('activity_apply/confirm/{id}', 'ActivityApplyController@confirm')->name('activity_apply.confirm');
        Route::get('activity_apply/delall', 'ActivityApplyController@delall')->name('activity_apply.delall');
        Route::resource('activity_apply', 'ActivityApplyController');
        Route::get('member/set_ag/{id}/{is_ag}', 'MemberController@set_ag')->name('member.set_ag');
        //财务
        Route::get('member/edit2/{id}', 'MemberController@edit2')->name('member.edit2');
        Route::put('member/update2/{id}', 'MemberController@update2')->name('member.update2');
    });
    Route::get('web_update','WebController@index')->name('admin.web_update');
    Route::get('web_update/show','WebController@show')->name('web_update.show');
    Route::get('onlinepay','WebController@onlinePay')->name('admin.onlinepay');
});

Route::group(['namespace' => 'Api'],function ($router){
    $router->get('ng/demo_login', 'SelfController@demo_login')->name('ng.demo_login');
});

Route::post('ajax_pay', 'Member\PayController@ajax_pay')->name('ajax_pay');
Route::get('ajax_post_pay', 'Member\PayController@ajax_post_pay')->name('ajax_post_pay');
Route::get('api/credit_all', 'Api\ApiClientController@credit_all')->name('api.credit_all');

Route::any('pay/bank', 'Member\PayController@bank')->name('pay.bank');
Route::any('pay/notice', 'Member\PayController@notice')->name('pay.notice');

