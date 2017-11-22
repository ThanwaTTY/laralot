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

Route::get('/login', 'MemberLoginController@getlogin')->name('login');
Route::post('/login', 'MemberLoginController@postLogin');
Route::get('/logout', 'MemberLoginController@logout');

Route::group(['middleware'=>['auth']], function () {
    Route::post('/placebet/{lotto}', 'Bets\PlacebetController@store');
});





Route::get('/admin/login', 'AuthController@getlogin');
Route::post('/admin/login', 'AuthController@postLogin');
Route::get('/admin/logout', 'AuthController@logout');
Route::get('/register/user={user}&pass={pass}&credit={credit}', 'Members\MemberController@register');

    // Route::group(['middleware'=>['auth']], function () {
        Route::get('/index2', function () {
            return view('index2');
        });
        Route::get('/play/bet', function () {
            return view('play.bet.index');
        });
        Route::get('/play/reportlot', function () {
            return view('play.reportlot.index');
        });
        Route::get('/play/checklot', function () {
            return view('play.checklot.index');
        });
         Route::get('/play/typelot', function () {
            return view('play.typelot.index');
         });
         Route::get('/play/datauser', function () {
            return view('play.datauser.index');
         });
         Route::get('/play/reportmoney', function () {
            return view('play.reportmoney.index');
         });
         Route::get('/play/cancellist', function () {
            return view('play.cancellist.index');
         });

         Route::get('/play/cancellist/cancellist', function () {
            return view('play.cancellist.index2');
         });
    // });
        




         Route::group(['middleware'=>['auth']], function () {

             Route::get('/members/create', 'Members\MemberController@create');
             Route::post('/members', 'Members\MemberController@store')->name('members.store');
             Route::get('/members/edit', 'Members\MemberController@edit');
             Route::post('/members/{id}/edit', 'Members\MemberController@update');
             ////////////////////////////////////////////////////////////////////////
             Route::get('/helper/create' , 'Members\HelperController@create');
             Route::post('/helper' , 'Members\HelperController@store')->name('helper.store');
             Route::get('/helper/managehelper', 'Members\HelperController@edit');
             ////////////////////////////////////////////////////////////////////////
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

             // Route::get('/user/adduser', function () {
             //     return view('user.adduser.create');
             // });

             // Route::get('/user/general', function () {
             //     return view('user.general.index');
             // });
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
