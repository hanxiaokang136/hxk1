<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('/','IndexController@index');
//是显示前台的首页
Route::get('/','FrontendController@index');
//Route::get('/index','IndexController@index');
//显示关于我们的页面
Route::get('/about','FrontendController@about');
//显示娱乐新闻的页面
Route::get('/yule','FrontendController@yule');
//显示时尚新闻的页面
Route::get("/shishang",'FrontendController@shishang');
//显示新闻详情页的页面
Route::get("/NewsDetails",'FrontendController@NewsDetails');

//显示后台登录页面
Route::get("/admin",'AdminController@login1');
Route::get("/index",'IndexController@index');
Route::get("/index",'IndexController@in');
//显示后台的左侧页面
//Route::get("/index",'IndexController@filelist');
Route::get("/left",'IndexController@left');
//显示后台的右面页面
Route::get("/right",'IndexController@right');
//显示后台的上面页面
Route::get("/top",'IndexController@top');
//显示整个后台的页面
Route::get("/main",'IndexController@index');
//显示后台底部页面
Route::get("/footer",'IndexController@footer');
//显示导航添加页面
Route::get("/form",'IndexController@form');
//Route::get("/",'Controller@login1');

Route::post("/update",'AdminController@update');
//导航删除
Route::get("/dao_del",'IndexController@dao_del');
//导航的修改链接
Route::get("/dao_update",'IndexController@dao_update');
//做导航
Route::post("/dodao_update",'IndexController@dodao_update');
//Route::get("/formupdate",'IndexController@dao_update');
//Route::get("/formupdate",'IndexController@dodao_update');
//导航添加
Route::post("/dao_add",'IndexController@dao_add');
//Route::post("/index",'IndexController@filelist');
//导航列表
Route::get("/filelist",'IndexController@filelist');
Route::get("/news_insert",'IndexController@news_insert');
Route::get("/excel",'IndexController@excel');
Route::get("/word",'IndexController@word');
Route::get("/news_content_word",'IndexController@news_content_word');
//Route::get("admin_index",'Admin_indexController@index');
//Route::get("/admin",'AdminController@update');
//显示执行登录的方法
//Route::get("admin_index",'IndexController@index');
//Route::get("admin",'AdminController@update');
//Route::get("admin_index",'Admin1Controller@update');
//Route::get('/about','FrontendController@about our introduction')
//Route::post('/*index/adds','IndexController@adds');
//显示留言列表
//Route::get('/','SayController@index');
//Route::get('/index','FrontendController@index');
//Route::get('/about','FrontendController@about');
//Route::get('/yule','FrontendController@yule');
//Route::get('/yule','FrontendController@yule');
//Route::get('/', function () {
 //  return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
