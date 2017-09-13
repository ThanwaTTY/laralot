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

// Route::get('/', function () {
//     return view('master');
//     //return view('welcome');
//     // return 'welcome';
// });

Route::get('/', function () {
    return view('index');
    //return view('welcome');
    // return 'welcome';
});

//รายการเเทง
Route::get('/listpoint', function () {
    return view('listlottery/listpoint/index'); 
});

Route::get('/index/user/adduser', function () {
    return view('user.adduser.create');
});

Route::get('/index/user/general', function () {
    return view('user.general.index');
});

Route::get('/index/user/useronline', function () {
    return view('user.useronline.index');
});

Route::get('/index/user/listkeep', function () {
    return view('user.listkeep.index');
});

