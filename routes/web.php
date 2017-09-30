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

Route::get('/login', 'AuthController@getlogin')->name('login');
Route::post('/login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@logout');




Route::group(['middleware'=>['auth']], function () {

        Route::get('/members/create', 'Members\MemberController@create');
        Route::post('/members', 'Members\MemberController@store')->name('members.store');

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
        Route::get('/listlottery/listlotpoint', function () {
            return view('listlottery.listlotpoint.index');
        });

        Route::get('/user/adduser', function () {
            return view('user.adduser.create');
        });

        Route::get('/user/general', function () {
            return view('user.general.index');
        });
        Route::get('/listlottery/listlotuser', function () {
            return view('listlottery.listlotuser.index');
        });

        Route::get('/listlottery/listresult', function () {
            return view('listlottery.listresult.index');
        });

        Route::get('/listlottery/settingof', function () {
            return view('listlottery.settingof.index');
        });

        Route::get('/listlottery/settingtype', function () {
            return view('listlottery.settingtype.index');
        });

        Route::get('/listlottery/cancellot', function () {
            return view('listlottery.cancellot.index');
        });

        Route::get('/user/useronline', function () {
            return view('user.useronline.index');
        });

        Route::get('/user/listkeep', function () {
            return view('user.listkeep.index');
        });

        Route::get('/user/high-low-number', function () {
            return view('user.high-low-number.index');
        });

        Route::get('/user/open-close-lottery', function () {
            return view('user.open-close-lottery.index');
        });

        Route::get('/user/commission', function () {
            return view('user.commission.index');
        });

        Route::get('/shopmanagement/chitmanagement', function () {
            return view('shopmanagement.chitmanagement.index');
        });

        Route::get('/shopmanagement/settinguser', function () {
            return view('shopmanagement.settinguser.index');
        });

        Route::get('/money/manage-balance', function () {
            return view('money.manage-balance.index');
        });

        Route::get('/money/history', function () {
            return view('money.history.index');
        });

        Route::get('/index2', function () {
            return view('index2');
        });
    });































        Route::get('/report/userreport', function () {
            return view('report.userreport.index');
        });

        Route::get('/report/winlossreport', function () {
            return view('report.winlossreport.index');
        });

        Route::get('/report/jackpot', function () {
            return view('report.jackpot.index');
        });

        Route::get('/report/resultjackpot', function () {
            return view('report.resultjackpot.index');
        });
