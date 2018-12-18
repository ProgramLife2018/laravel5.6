<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/15 0015
 * Time: 下午 10:22
 */

Route::get('/', function () {
    return view('welcome');
});
//dd($_SERVER);
Route::name('admin.email.test')->get('test', 'EmailController@test');
//dd(Route::current());
//Route::get('email/test', 'EmailController@test');
//Route::get('email/ab', 'EmailController@ab');

/*Route::group(['middleware' =>'auth'],function(){
    //邮件管理
    Route::name('admin.email.test')->get('test', 'EmailController@test');
});*/
