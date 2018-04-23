<div class="breadcrumbs">
  <ul id="breadcrumbs" class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <!-- <a href="#">Home</a> -->
    </li>
    <li>
        รายการแทง
    </li>
    <li>
        ดูของรวม / คาดคะเนได้เสีย
    </li>
  </ul><!-- /.breadcrumb -->
  <span id="global-clock" class="pull-right"></span>
</div>

<div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"> <div class="page-header">
  <h1>ดูของรวม [3M3K]</h1>
  <h4 class="sub">
    <i class="fa fa-angle-right orange"></i>
    <span class="deep-blue">รัฐบาลไทย</span>,<span class="" id="lottodate">งวดวันที่ 16 ตุลาคม 2560</span>
    <span class="smaller near-white"><i>(เปลี่ยนได้ที่แถบเมนูด้านบน)</i></span>
  </h4>
</div>

  
  
<div class="alert alert-info">
  <span class="negative">ตัวเลขสีแดง</span> = เต็มแล้ว, <span class="positive">พื้นหลังสีเขียว</span> = ถูกรางวัล<br>
  <b>กด Ctrl+F เพื่อค้นหา</b>
</div>

<input type="hidden" name="user_id" value="9306">

<!-- Filter -->
<form method="GET" action="https://agent.superlot999.com/get-items" accept-charset="UTF-8" class="form-inline overall-table-filter">
  <label for="show-kind" class="right-padding-5 bolder">ดู :</label>

  <select class="form-control input-sm bigger-110 update-trigger" id="show-kind" name=""><option value="item" selected="selected">ของรวม</option><option value="predict">คาดคะเนได้เสีย</option></select>

  <label for="show-num-rows" class="left-padding-10 right-padding-5 bolder">จำนวนแถว :</label>

  <select class="form-control input-sm bigger-110 update-trigger" id="show-num-rows" name=""><option value="50">50</option><option value="250">250</option><option value="500">500</option><option value="750">750</option><option value="1000">all</option></select>

  <label for="show-order" class="left-padding-10 right-padding-5 bolder">เรียง :</label>

  <select class="form-control input-sm bigger-110 update-trigger" id="show-order" name=""><option value="predict_desc">คาดคะเนยอดเสีย มาก-&gt;น้อย</option><option value="predict_asc">คาดคะเนยอดเสีย น้อย-&gt;มาก</option><option value="take_desc">ยอดแทง มาก-&gt;น้อย</option><option value="take_asc">ยอดแทง น้อย-&gt;มาก</option><option value="num_asc">หมายเลข น้อย-&gt;มาก</option><option value="num_desc">หมายเลข มาก-&gt;น้อย</option></select>

      <input id="show-filter" name="show-filter" type="hidden" value="all">
  
  <button type="button" class="btn btn-primary btn-sm left-margin-10" id="btn-refresh">รีเฟรช</button>

  <span class="align-middle left-margin-10">
    <span id="overall-timer">รีเฟรชใน 36 วินาที</span>
  </span>
</form>

<div class="space-4"></div>

<div class="tabbable">
  <ul class="nav nav-tabs tab-color-blue">
                  <li class="active">
          <a data-toggle="tab" href="#bet_type_group_1">3 ตัวท้าย</a>
        </li>
                                                    </ul>
</div>

<div class="tab-content no-border no-padding">
      <div class="tab-pane in active" id="bet_type_group_1">

      <form method="POST" action="" id="formlistpoint" accept-charset="UTF-8" data-method="put" data-feedback="mixed" class="js-ajax-form"><input name="_token" type="hidden" value="VE0U8lpB8pFrbxFHyLnWN4AUhCKdErLrG5yBD0sy">

        <input name="game_type_id" type="hidden" value="1">
        <input name="bet_type_group_id" type="hidden" value="1">
        <table class="table table-bordered table-border-dark table-nano-compact table-fancy table-auto table-nowrap no-margin-bottom overall-table">
          <!-- Bet Types -->
          <thead class="thin-border-bottom">
            <tr>
              <th class="width-160">
                              </th>
                              <th class="align-center">3 ตัวบน</th>
                              <th class="align-center">3 ตัวล่าง</th>
                              <th class="align-center">3 ตัวโต๊ด</th>
                              <th class="align-center">2 ตัวบน</th>
                              <th class="align-center">2 ตัวล่าง</th>
                              <th class="align-center">2 ตัวโต๊ด</th>
                              <th class="align-center">วิ่งบน</th>
                              <th class="align-center">วิ่งล่าง</th>
                          </tr>
          </thead>

          <!-- Summary -->
          <tbody class="summary">
                <tr class="">
                <td class="bolder">
                  <span class="pull-left">ซื้อ</span>
                  <span class="pull-right n2c sum-buy-1"><span class="positive" id="sumbuy"></span></span>
                </td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_1">{{number_format($buytop3,2)}}</span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_2">{{number_format($buybottom3,2)}}</span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_3">{{number_format($buytod3,2)}}</span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_4">{{number_format($buytop2,2)}}</span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_5">{{number_format($buybottom2,2)}}</span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_6">{{number_format($buytod2,2)}}</span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_7">{{number_format($buytop1,2)}}</span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_8">{{number_format($buybottom1,2)}}</span></td>
                    </tr>
                <tr class="">
                <td class="bolder">
                  <span class="pull-left">คอม</span>
                  <span class="pull-right n2c sum-com-1"><span class="negative" id="sumcom"></span></span>
                </td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_1">{{number_format($comtop3,2)}}</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_2">{{number_format($combottom3,2)}}</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_3">{{number_format($comtod3,2)}}</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_4">{{number_format($comtop2,2)}}</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_5">{{number_format($combottom2,2)}}</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_6">{{number_format($comtod2,2)}}</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_7">{{number_format($comtop1,2)}}</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_8">{{number_format($combottom1,2)}}</span></td>
                </tr>
                          <tr class="">
                <td class="bolder">
                  <span class="pull-left">รับ</span>
                  <span class="pull-right n2c sum-take-1"><span class="positive"><span class="positive" id="sumtake"></span></span>
                </td>
                                  <td class="align-center bg-yellow n2c take-1"><span class="positive" id="take_1">{{number_format($buytop3-$comtop3,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c take-2"><span class="positive" id="take_2">{{number_format($buybottom3-$combottom3,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c take-3"><span class="positive" id="take_3">{{number_format($buytod3-$comtod3,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c take-4"><span class="positive" id="take_4">{{number_format($buytop2-$comtop2,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c take-5"><span class="positive" id="take_5">{{number_format($buybottom2-$combottom2,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c take-6"><span class="positive" id="take_6">{{number_format($buytod2-$comtod2,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c take-7"><span class="positive" id="take_7">{{number_format($buytop1-$comtop1,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c take-8"><span class="positive" id="take_8">{{number_format($buybottom1-$combottom1,2)}}</span></td>
                              </tr>
                          <tr class="">
                <td class="bolder">
                  <span class="pull-left">จ่าย</span>
                  <span class="pull-right n2c sum-pay-1"><span class="positive" id="sumpay"></span></span>
                </td>
                                  <td class="align-center bg-yellow n2c pay-1"><span class="positive" id="pay_1">{{number_format($paytop3,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c pay-2"><span class="positive" id="pay_2">{{number_format($paybottom3,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c pay-3"><span class="positive" id="pay_3">{{number_format($paytod3,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c pay-4"><span class="positive" id="pay_4">{{number_format($paytop2,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c pay-5"><span class="positive" id="pay_5">{{number_format($paybottom2,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c pay-6"><span class="positive" id="pay_6">{{number_format($paytod2,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c pay-7"><span class="positive" id="pay_7">{{number_format($paytop1,2)}}</span></td>
                                  <td class="align-center bg-yellow n2c pay-8"><span class="positive" id="pay_8">{{number_format($paybottom1,2)}}</span></td>
                              </tr>
                      </tbody>

          <!-- Bet Limit -->
          <tbody class="control">
            <tr class="">
              <td class="align-middle bolder">
                <span class="pull-left">ตั้งสู้</span>
                                  <span class="pull-right">
                    <button type="text" class="btn btn-primary btn-xs bigger-110" id="btn-update-bet-limit" data-game-type-id="1">
                      บันทึก
                    </button>
                  </span>
                              </td>
                                                <td>
                                          <div class="input-group-limit_1 input-icon input-icon-left">
                        <input type="text" name="limit_1" value="100" class="form-control input-sm input-small align-right width-110">
                        <i class="ace-icon fa fa-check green success hidden"></i>
                        <i class="ace-icon fa fa-times red error hidden"></i>
                      </div>
                                      </td>
                                                                <td>
                                          <div class="input-group-limit_2 input-icon input-icon-left">
                        <input type="text" name="limit_2" value="100" class="form-control input-sm input-small align-right width-110">
                        <i class="ace-icon fa fa-check green success hidden"></i>
                        <i class="ace-icon fa fa-times red error hidden"></i>
                      </div>
                                      </td>
                                                                <td>
                                          <div class="input-group-limit_3 input-icon input-icon-left">
                        <input type="text" name="limit_3" value="100" class="form-control input-sm input-small align-right width-110">
                        <i class="ace-icon fa fa-check green success hidden"></i>
                        <i class="ace-icon fa fa-times red error hidden"></i>
                      </div>
                                      </td>
                                                                <td>
                                          <div class="input-group-limit_4 input-icon input-icon-left">
                        <input type="text" name="limit_4" value="500" class="form-control input-sm input-small align-right width-110">
                        <i class="ace-icon fa fa-check green success hidden"></i>
                        <i class="ace-icon fa fa-times red error hidden"></i>
                      </div>
                                      </td>
                                                                <td>
                                          <div class="input-group-limit_5 input-icon input-icon-left">
                        <input type="text" name="limit_5" value="500" class="form-control input-sm input-small align-right width-110">
                        <i class="ace-icon fa fa-check green success hidden"></i>
                        <i class="ace-icon fa fa-times red error hidden"></i>
                      </div>
                                      </td>
                                                                <td>
                                          <div class="input-group-limit_6 input-icon input-icon-left">
                        <input type="text" name="limit_6" value="100" class="form-control input-sm input-small align-right width-110">
                        <i class="ace-icon fa fa-check green success hidden"></i>
                        <i class="ace-icon fa fa-times red error hidden"></i>
                      </div>
                                      </td>
                                                                <td>
                                          <div class="input-group-limit_7 input-icon input-icon-left">
                        <input type="text" name="limit_7" value="1000" class="form-control input-sm input-small align-right width-110">
                        <i class="ace-icon fa fa-check green success hidden"></i>
                        <i class="ace-icon fa fa-times red error hidden"></i>
                      </div>
                                      </td>
                                                                <td>
                                          <div class="input-group-limit_8 input-icon input-icon-left">
                        <input type="text" name="limit_8" value="1000" class="form-control input-sm input-small align-right width-110">
                        <i class="ace-icon fa fa-check green success hidden"></i>
                        <i class="ace-icon fa fa-times red error hidden"></i>
                      </div>
                                      </td>
                                          </tr>
          </tbody>

          <!-- Content -->
          <tbody class="data" data-bet-type-group-id="1"></tbody>
        
      </form>

    </div>
  


</div></div><!-- /.col -->
        </div><!-- /.row -->
      </div>
      

