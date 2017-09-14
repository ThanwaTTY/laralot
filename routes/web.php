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
Route::get('/listlotpoint', function () {
    return view('listlottery.listlotpoint.index'); 
});

Route::get('/index/user/adduser', function () {
    return view('user.adduser.create');
});

Route::get('/index/user/general', function () {
    return view('user.general.index');
});
Route::get('/listlotuser', function () {
    return view('listlottery.listlotuser.index'); 
});

Route::get('/listresult', function () {
    return view('listlottery.listresult.index'); 
});

Route::get('/settingof', function () {
    return view('listlottery.settingof.index'); 
});

Route::get('/settingtype', function () {
    return view('listlottery.settingtype.index'); 
});

Route::get('/cancellot', function () {
    return view('listlottery.cancellot.index'); 
});


Route::get('/index/user/create', function () {
    return view('user.create');
});

Route::get('/index/user/useronline', function () {
    return view('user.useronline.index');
});

Route::get('/index/user/listkeep', function () {
    return view('user.listkeep.index');
});

Route::get('/index/user/high-low-number', function () {
    return view('user.high-low-number.index');
});

Route::get('/index/user/open-close-lottery', function () {
    return view('user.open-close-lottery.index');
});









