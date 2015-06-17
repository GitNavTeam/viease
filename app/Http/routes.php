<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ServerController@server');
Route::post('/', 'ServerController@server');

/**
 * Admin
 */
$admin = [
            'prefix'     => 'admin',
            'namespace'  => 'Admin',
         ];

Route::group($admin, function(){
    //我的公众号列表页
    Route::get('/', 'AccountController@getManage');
    Route::controllers([
        'auth'             => 'AuthController',
        'user'             => 'UserController',
        'fan'              => 'FanController',
        'fan-group'        => 'FanGroupController',
        'account'          => 'AccountController',
        'menu'             => 'MenuController',
        'material/article' => 'ArticleController',
        'material'         => 'MaterialController',
        'analysis'         => 'AnalysisController',
        'staff'            => 'StaffController',
        'tool'             => 'ToolController',
        'message'          => 'MessageController',
        'notice'           => 'NoticeController',
        'qrcode'           => 'QRCodeController',
        'auto-reply'       => 'AutoReplyController',
    ]);
});