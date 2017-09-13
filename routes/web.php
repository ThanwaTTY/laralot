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

Route::get('/test', function () {
    return view('portest');
    //return view('welcome');
    // return 'welcome';
});

Route::get('/', function () {
    return view('index');
    //return view('welcome');
    // return 'welcome';
});

//รายการเเทง
Route::get('/listpoint', function () {
    return view('listlottery/listpoint/index'); 
});
Route::get('/index/user/create', function () {
    return view('user.create');
});


