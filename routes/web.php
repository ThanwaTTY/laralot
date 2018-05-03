<?php

use App\Member;
use App\Limite;
use App\Limite_paybet;
Route::get('/usertest', function() {
    $user = Member::find(15);

    // dump($user->limit->top3);

    foreach( $user->getParents() as $user )
    {
        // $limit_admin = Limite::where('member_id',$user->id)->latest()->first();
        // dump("id :".$user->id." ".$user->limit->top3);
        // dump($user->level);
        // dump("id :".$limit_admin->id." ".$limit_admin->top3);

        // $limit_admin[$user->id] = $user->getLimit();
        // $user->getLatepaygov();
        // dump($user->getLatepaygov());

        // $user->getKeep();
        // dump($user->getKeep());
        $limite_paybets = Limite_paybet::where('member_id',$user->id)->where('lotto_id',2)->where('type','top3')->where('bet_num',"000")->first();
        if($limite_paybets){
           dump($limite_paybets->bet_num); 
        }
        
        // dump($limite_paybets->bet_num);
        // dump($user->id);
    }


    dd( 'end' );
});
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
Route::get('/testjs', function () {
    return view('testjs');
});


Route::get('/login', 'MemberLoginController@getlogin')->name('login');
Route::post('/login', 'MemberLoginController@postLogin');
Route::get('/logout', 'MemberLoginController@logout');
Route::get('/register', 'Members\MemberController@register');
Route::post('/register', 'Members\MemberController@registerstore');



Route::group(['middleware'=>['auth']], function () {
    Route::post('/placebet/{lotto}', 'Bets\PlacebetController@store');




});





Route::get('/admin/login', 'AuthController@getlogin');
Route::post('/admin/login', 'AuthController@postLogin');
Route::get('/admin/logout', 'AuthController@logout');
Route::get('/register/user={user}&pass={pass}&credit={credit}', 'Members\MemberController@register');


Route::group(['middleware'=>['auth','user']], function () {
        
        //รายการเเทง
        Route::get('/play/bet', 'UserbetController@index');
        Route::get('/home', 'UserbetController@home');
        Route::post('/storebet', 'UserbetController@store');
        // Route::post('/storebet2', 'UserbetController@store2');

    // Route::group(['middleware'=>['auth']], function () {
        Route::get('/index2', function () {
            return view('index2');
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
});
        




         Route::group(['middleware'=>['auth','admin']], function () {
            Route::get('/', 'Members\FormController@index');
             Route::get('/members/create', 'Members\MemberController@create');
             Route::post('/members', 'Members\MemberController@store')->name('members.store');
             Route::get('/members/edit', 'Members\MemberController@edit');
             Route::post('/members/{id}/edit', 'Members\MemberController@update');
             ////////////////////////////////////////////////////////////////////////
             Route::get('/helper/create', 'Members\HelperController@create');
             Route::post('/helper', 'Members\HelperController@store')->name('helper.store');
             Route::get('/helper/managehelper', 'Members\HelperController@edit');
             Route::get('/helper/{id}/edit', 'Members\HelperController@editin');
             Route::post('/helper/{id}/update', 'Members\HelperController@update');
             Route::get('/show/helper', 'Members\HelperController@show');
             Route::get('/helper/{id}/del', 'Members\HelperController@destroy');
             ////////////////////////////////////////////////////////////////////////
             Route::get('/user/high-low-number', 'Members\PlaysetController@index');
             Route::post('/min', 'Members\PlaysetController@min');
             Route::post('/max', 'Members\PlaysetController@max');
             Route::post('/max_per_num', 'Members\PlaysetController@max_per_num');
             ///////////////////////////////////////////////////////////////////////
             Route::get('/user/commission', 'Members\RateController@index');
             Route::post('/payoutg','Members\RateController@payoutg');
             Route::post('/payout','Members\RateController@payout');
             Route::post('/comg','Members\RateController@comg');
             Route::post('/com','Members\RateController@com');
             //////////////////////////////////////////////////////////////////////
             Route::get('/user/open-close-lottery','Members\OpencloseController@index');
             Route::post('/govlot','Members\OpencloseController@govlot');
             Route::post('/tkslot','Members\OpencloseController@tkslot');
             Route::post('/setlot','Members\OpencloseController@setlot');
             Route::post('/loaslot','Members\OpencloseController@loaslot');
             Route::post('/malalot','Members\OpencloseController@malalot');
             Route::post('/setabroad','Members\OpencloseController@setabroad');
             Route::post('/vnlot','Members\OpencloseController@vnlot');
             Route::post('/typebet','Members\OpencloseController@typebet');
             Route::post('/lotgovuse','Members\OpencloseController@lotgovuse');
             Route::post('/lotuse','Members\OpencloseController@lotuse');
             ///////////////////////////////////////////////////////////////////////////
             Route::get('/listlottery/listlotpoint2', 'Members\BetController@listlotpoint2');
             Route::get('/listlottery/listlotpoint', 'Members\BetController@listlotpoint');

             Route::get('/listlottery/listlotuser', 'Members\BetController@listlotuser');
             Route::get('/listlottery/listlotuser2', 'Members\BetController@listlotuser2');
             Route::get('/{id}/list_id', 'Members\BetController@list');
             Route::get('/list2', 'Members\BetController@list2');
             
             //////////////////////////////////////////////////////////////////////////
             Route::get('/datelotto/create', 'Members\DatelottoController@create');
             Route::post('/dateon-off','Members\DatelottoController@store');

             Route::get('/listlottery/settingof', 'Members\LimiteController@index');
             Route::post('/limite_bet', 'Members\LimiteController@store');
             Route::post('/limite', 'Members\LimiteController@limite');

             Route::get('/listlottery/settingtype','Members\SettingtypeController@index');

             Route::get('/listlottery/cancellot','Members\CancellotController@index');
            });
             Route::get('/test', function () {
                return view('portest');
            //return view('welcome');
            // return 'welcome';
             });

             


             Route::get('/listlottery/listresult', 'Members\ListresultController@index');

             Route::get('/user/useronline','Members\MemberonlineController@index'); 

             Route::get('/user/listkeep','Members\ListkeepController@index');     

             Route::get('/shopmanagement/chitmanagement','Members\ChitmanagementController@index');

             Route::get('/shopmanagement/settinguser','Members\SettinguserController@index');

             Route::get('/report/userreport','Members\UserreportController@index');

             Route::get('/report/winlossreport', 'Members\WinlossreportController@index');

             Route::get('/report/jackpot','Members\JackpotController@index');

             Route::get('/report/resultjackpot','Members\ResultjackpotController@index');
            
             Route::get('/money/manage-balance','Members\ManagebalanceController@index');

             Route::get('/money/history', 'Members\HistoryController@index');
             


Route::get('/closed-nums/1/1', function(){
    return '{"success":true,"alive":true,"credit":"10002.00","used":"0.00","remain":"10003.00","max_credit":"10004.00","credit_balance":"10005.00","bet_balance":-474.8,"available":9526.2,"total_bet":620,"total_com":145.2,"bet_type_group_ids":[1],"bet_type_ids":{"1":[1,2,3,4,5,6,7,8]},"closed_nums":{"1":["123","456"],"2":["34"],"3":[],"4":[],"5":[],"6":[],"7":[],"8":[]}}';
});

Route::get('/check-num/1/{number}/1', function($number){

    return '{"success":true,"n":"456","col":3,"0":10,"1":20,"2":30}';
});

Route::post('/store/{lotto}', function($lotto){
    return request()->all();

    return '{"success":true,"time":0.079425096511841,"error_inputs":{"1":{"n":"10","0":"-","1":"-","2":"-"},"col":3,"lines":["1"]},"tokens":{"1":[1]},"member_summary":{"credit":"10001.00","used":"0.00","remain":"10001.00","max_credit":"10001.00","credit_balance":"10001.00","bet_balance":-482,"available":9519,"total_bet":630,"total_com":148}}';
});

Route::get('/bet-list/{num1}/{num2}/{num3}', function($num1,$num2,$num3){
    return '{"payout":{"1":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 A","2":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 B","3":"\u0e2b\u0e27\u0e22\u0e2b\u0e38\u0e49\u0e19 A","4":"\u0e2b\u0e27\u0e22\u0e2b\u0e38\u0e49\u0e19 B","5":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 70","6":"\u0e2b\u0e27\u0e22\u0e43\u0e15\u0e49","7":"\u0e2b\u0e27\u0e22\u0e43\u0e15\u0e492","8":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 N","9":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 D","10":"\u0e2b\u0e27\u0e22 \u0e18.\u0e01.\u0e2a.","11":"\u0e2b\u0e27\u0e22 70","12":"\u0e2b\u0e27\u0e22 80","13":"\u0e2b\u0e27\u0e22 90","14":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 T","15":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 80","16":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 90","17":"\u0e2b\u0e38\u0e49\u0e19","18":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e1065","19":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 B","20":"\u0e2b\u0e27\u0e22\u0e2b\u0e38\u0e49\u0e19 B","21":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10"},"max_bill_id":747216,"bills":[{"id":739976,"remark":"","deleted_at":null},{"id":739984,"remark":"","deleted_at":null},{"id":740053,"remark":"","deleted_at":null},{"id":741453,"remark":"","deleted_at":null},{"id":741628,"remark":"","deleted_at":null},{"id":744412,"remark":"","deleted_at":null},{"id":744413,"remark":"","deleted_at":null},{"id":747216,"remark":"","deleted_at":null}],"bill":{"number":8,"time":"14:36","payout":"\u0e2b\u0e27\u0e22\u0e23\u0e31\u0e10 70","btg_name":"3 \u0e15\u0e31\u0e27\u0e17\u0e49\u0e32\u0e22","remark":""},"brief_lines":[{"game_bill_id":747216,"number":8,"created_at":"2017-12-13 14:36:20","payout_id":5,"bet_type_id":4,"num":"10","qty":"10.00","com":"2.80","total":"-7.20","bundle":"1.00","deleted_at":null}],"sum_table_name":"3 \u0e15\u0e31\u0e27\u0e17\u0e49\u0e32\u0e22","is_bundle":0,"sum_lines":{"1":{"col_1":10,"col_2":0,"col_3":0},"10":{"col_1":20,"col_2":0,"col_3":0},"11":{"col_1":10,"col_2":10,"col_3":10},"111":{"col_1":10,"col_2":10,"col_3":10},"112":{"col_1":10,"col_2":10,"col_3":10},"113":{"col_1":0,"col_2":0,"col_3":60},"12":{"col_1":20,"col_2":30,"col_3":40},"124":{"col_1":0,"col_2":0,"col_3":60},"13":{"col_1":10,"col_2":20,"col_3":30},"131":{"col_1":40,"col_2":50,"col_3":0},"214":{"col_1":40,"col_2":50,"col_3":0},"223":{"col_1":0,"col_2":0,"col_3":20},"232":{"col_1":20,"col_2":20,"col_3":0}},"bet_cols":["\u0e1a\u0e19","\u0e25\u0e48\u0e32\u0e07","\u0e42\u0e15\u0e4a\u0e14"],"success":true}';
});

Route::get('/groupby', 'Members\BetController@index');