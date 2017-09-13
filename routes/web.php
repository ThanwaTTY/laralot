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
    return view('listlottery/listlotpoint/index'); 
});

<<<<<<< HEAD
Route::get('/index/user/adduser', function () {
    return view('user.adduser.create');
});

Route::get('/index/user/general', function () {
    return view('user.general.index');
=======
Route::get('/listlotuser', function () {
    return view('listlottery/listlotuser/index'); 
});

Route::get('/listresult', function () {
    return view('listlottery/listresult/index'); 
});

Route::get('/settingof', function () {
    return view('listlottery/settingof/index'); 
});

Route::get('/index/user/create', function () {
    return view('user.create');
>>>>>>> b849e8845fb9c1b519d67c501f63842afaa27aa7
});

Route::get('/index/user/useronline', function () {
    return view('user.useronline.index');
});

Route::get('/index/user/listkeep', function () {
    return view('user.listkeep.index');
});

