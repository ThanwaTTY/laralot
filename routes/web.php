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
    return view('master');
    //return view('welcome');
    // return 'welcome';
});

Route::get('/index', function () {
    return view('index');
    //return view('welcome');
    // return 'welcome';
});

//รายการเเทง
Route::get('/listlotpoint', function () {
    return view('listlottery/listlotpoint/index'); 
});

Route::get('/listlotuser', function () {
    return view('listlottery/listlotuser/index'); 
});

Route::get('/index/user/create', function () {
    return view('user.create');
});


