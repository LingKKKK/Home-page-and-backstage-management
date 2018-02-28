<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('homepage.index');});
Route::get('/eventInformation', function () {return view('homepage.eventInformation');});
Route::get('/match', function () {return view('homepage.match');});
Route::get('/doc', function () {return view('homepage.doc');});
Route::get('/video', function () {return view('homepage.video');});
Route::get('/aboutus', function () {return view('homepage.aboutus');});
// upload
Route::get('/adminUpload', 'Home\upLoadController@upLoad');
Route::get('/delete/{id}', 'Home\upLoadController@delete');
Route::post('/uploadDocs', 'Home\upLoadController@uploadDocs');
// 后台管理
Route::get('/cms', 'Cms\CmsController@base');
Route::get('/index', 'Cms\CmsController@index');
Route::get('/documentManage', 'Cms\CmsController@documentManage');
Route::get('/documentUpload', 'Cms\CmsController@documentUpload');
Route::get('/newsManage', 'Cms\CmsController@newsManage');
Route::get('/newsUpload', 'Cms\CmsController@newsUpload');
Route::get('/setting', 'Cms\CmsController@setting');

// login|register
Route::get('/login', 'Auth\AuthController@login');
Route::post('/doLogin', 'Auth\AuthController@doLogin');
Route::get('/register', 'Auth\AuthController@register');
Route::post('/doRegister', 'Auth\AuthController@doRegister');

Route::post('/uploadNews', 'Cms\CmsController@uploadNews');
Route::get('/deleteNews/{id}', 'Cms\CmsController@delete');
Route::get('/news/{id}', 'Cms\CmsController@showNews');

