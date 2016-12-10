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
    return view('welcome');
});

Route::get('admin', 'Admin\LoginController@login');
Route::any('admin/login', 'Admin\LoginController@login')->middleware('adminislogin');
Route::get('admin/code', 'Admin\LoginController@code');
Route::get('admin/logout', 'Admin\LoginController@logout');




/*
 * 'middleware' => ['web','admin.login']  中间件
 * 'prefix' => 'admin'      前缀
 * 'namespace' => 'Admin'   命名空间
 * */
//admin.login  自定义的中间件  判断用户是否登录，如未登录将转跳到登录页
Route::group(['middleware' => ['web','admin.login'], 'prefix' => 'admin', 'namespace' => 'Admin'],function (){
    Route::get('index', 'IndexController@index');
    Route::get('welcome', 'IndexController@welcome');   //欢迎页面

    /*菜谱分类*/
    Route::resource('caipu_category', 'CaipuCategoryController');
    Route::resource('caipu_category/changeorder', 'CaipuCategoryController@changeOrder');

    /*食材分类*/
    Route::resource('shicai_category', 'ShicaiCategoryController');
    Route::resource('shicai_category/changeorder', 'ShicaiCategoryController@changeOrder');

    /*菜谱列表*/
    Route::resource('cookbook', 'CookbookController');
    Route::resource('cookbook/changeorder', 'CookbookController@changeOrder');
});



