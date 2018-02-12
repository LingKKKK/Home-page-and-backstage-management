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

Route::get('/', function () {
    return view('homepage.index');
});
// 赛事信息
Route::get('/eventInformation', function () {
    return view('homepage.eventInformation');
});
// 参赛报名
Route::get('/match', function () {
    return view('homepage.match');
});
