<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServicePrvoider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 主页等部分页面显示:
// Route::get('/', function () {return view('homepage.index');});
// Route::get('/eventInformation', function () {return view('homepage.eventInformation');});
// Route::get('/match', function () {return view('homepage.match');});
// Route::get('/doc', function () {return view('homepage.doc');});
// Route::get('/video', function () {return view('homepage.video');});
// Route::get('/aboutus', function () {return view('homepage.aboutus');});
Route::get('/', 'Home\IndexController@index');
Route::get('/competition', 'Home\IndexController@eventInformation');
Route::get('/event', 'Home\IndexController@match');
Route::get('/enroll', 'Home\IndexController@doc');
Route::get('/video', 'Home\IndexController@video');
Route::get('/aboutus', 'Home\IndexController@aboutus')  ;

// 注册 登录 退出
Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/doRegister', 'Auth\AuthController@doRegister');
Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/doLogin', 'Auth\AuthController@doLogin');
Route::any('/logout', 'Auth\AuthController@logout')->name('logout');

// 后台管理 ajax加载块页面
Route::get('/cms', 'Cms\CmsController@base');
Route::get('/index', 'Cms\CmsController@index');
Route::get('/documentManage', 'Cms\CmsController@documentManage');
Route::get('/documentUpload', 'Cms\CmsController@documentUpload');
Route::get('/newsManage', 'Cms\CmsController@newsManage');
Route::get('/newsUpload', 'Cms\CmsController@newsUpload');
Route::get('/bannerManage', 'Cms\CmsController@bannerManage');
Route::get('/bannerUpload', 'Cms\CmsController@bannerManage');
Route::get('/videoManage', 'Cms\CmsController@videoManage');
Route::get('/videoUpload', 'Cms\CmsController@videoUpload');
Route::get('/pictureManage', 'Cms\CmsController@pictureManage');
Route::get('/pictureUpload', 'Cms\CmsController@pictureUpload');

Route::get('/eventManage', 'Cms\CmsController@eventManage');
Route::get('/getEvents/{event}/item/{competition}', 'Cms\CmsController@getEvents');

Route::get('/eventRelease', 'Cms\CmsController@eventRelease');
Route::get('/competitionRelease', 'Cms\CmsController@competitionRelease');
Route::get('/introRelease', 'Cms\CmsController@introRelease');

Route::get('/setting', 'Cms\CmsController@setting');






// 文档: 上传 删除
Route::get('/adminUpload', 'Home\upLoadController@upLoad');
Route::get('/delete/{id}', 'Home\upLoadController@delete');
Route::post('/uploadDocs', 'Home\upLoadController@uploadDocs');\

// 新闻: 上传 删除
Route::post('/uploadNews', 'Cms\CmsController@uploadNews');
Route::get('/deleteNews/{id}', 'Cms\CmsController@delete');
Route::get('/news/{id}', 'Cms\CmsController@showNews');
    // 新闻中图片上传
Route::post('/uploadNewsPicture', 'Cms\CmsController@uploadNewsPicture');


// 视频链接: 上传 删除
Route::post('/uploadvideo', 'Cms\CmsController@uploadvideo');
Route::get('/deletevideo/{id}', 'Cms\CmsController@delete');
Route::get('/video/{id}', 'Cms\CmsController@showvideo');

// 图片: 上传 删除
Route::post('/uploadpicture', 'Cms\CmsController@uploadpicture');
Route::get('/deletepicture/{id}', 'Cms\CmsController@pictureDelete');
// Route::get('/picture/{id}', 'Cms\CmsController@showpicture');


// banner: 上传 删除
Route::post('/uploadbanner', 'Cms\CmsController@uploadbanner');
Route::get('/deletebanner/{id}', 'Cms\CmsController@bannerDelete');

// 发布大赛信息
Route::post('/eventPost', 'Cms\CmsController@eventPost');
// 编辑赛项信息
Route::post('/competitionPost', 'Cms\CmsController@competitionPost');
// 子赛项详情页面
Route::post('/introPost', 'Cms\CmsController@introPost');

// 大赛->赛项 页面跳转
Route::get('/toCompetition/{id}', 'Home\IndexController@toCompetition');
// 赛项->详情 页面跳转
Route::get('/toIntro/{id}', 'Home\IndexController@toIntro');




