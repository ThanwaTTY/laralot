@extends('master')
@section('head')
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="/css/custom2.css">
  {{-- <style>
  .table {
    width: 77%;
    margin-bottom: 20px;
    }
    </style> --}}
@endsection
@section('content')

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
                          <tr class="odd">
                <td class="bolder">
                  <span class="pull-left">ซื้อ</span>
                  <span class="pull-right n2c sum-buy-1"><span class="positive" id="sumbuy"></span></span>
                </td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_1">{{$buytop3}}</span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_2"></span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_3"></span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_4"></span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_5"></span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_6"></span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_7"></span></td>
                          <td class="align-center bg-yellow n2c buy-1"><span class="positive" id="buy_8"></span></td>
                    </tr>
                <tr class="even">
                <td class="bolder">
                  <span class="pull-left">คอม</span>
                  <span class="pull-right n2c sum-com-1"><span class="negative" id="sumcom"></span></span>
                </td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_1">-</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_2">-</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_3">-</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_4">-</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_5">-</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_6">-</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_7">-</span></td>
                      <td class="align-center bg-yellow n2c com-1"><span class="negative" id="com_8">-</span></td>
                </tr>
                          <tr class="odd">
                <td class="bolder">
                  <span class="pull-left">รับ</span>
                  <span class="pull-right n2c sum-take-1"><span class="positive"><span class="positive" id="sumtake"></span></span>
                </td>
                                  <td class="align-center bg-yellow n2c take-1"><span class="positive" id="take_1"></span></td>
                                  <td class="align-center bg-yellow n2c take-2"><span class="positive" id="take_2"></span></td>
                                  <td class="align-center bg-yellow n2c take-3"><span class="positive" id="take_3"></span></td>
                                  <td class="align-center bg-yellow n2c take-4"><span class="positive" id="take_4"></span></td>
                                  <td class="align-center bg-yellow n2c take-5"><span class="positive" id="take_5"></span></td>
                                  <td class="align-center bg-yellow n2c take-6"><span class="positive" id="take_6"></span></td>
                                  <td class="align-center bg-yellow n2c take-7"><span class="positive" id="take_7"></span></td>
                                  <td class="align-center bg-yellow n2c take-8"><span class="positive" id="take_8"></span></td>
                              </tr>
                          <tr class="even">
                <td class="bolder">
                  <span class="pull-left">จ่าย</span>
                  <span class="pull-right n2c sum-pay-1"><span class="positive" id="sumpay"></span></span>
                </td>
                                  <td class="align-center bg-yellow n2c pay-1"><span class="positive" id="pay_1"></span></td>
                                  <td class="align-center bg-yellow n2c pay-2"><span class="positive" id="pay_2"></span></td>
                                  <td class="align-center bg-yellow n2c pay-3"><span class="positive" id="pay_3"></span></td>
                                  <td class="align-center bg-yellow n2c pay-4"><span class="positive" id="pay_4"></span></td>
                                  <td class="align-center bg-yellow n2c pay-5"><span class="positive" id="pay_5"></span></td>
                                  <td class="align-center bg-yellow n2c pay-6"><span class="positive" id="pay_6"></span></td>
                                  <td class="align-center bg-yellow n2c pay-7"><span class="positive" id="pay_7"></span></td>
                                  <td class="align-center bg-yellow n2c pay-8"><span class="positive" id="pay_8"></span></td>
                              </tr>
                      </tbody>

          <!-- Bet Limit -->
          <tbody class="control">
            <tr class="odd">
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


@endsection
@section('footer')
<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip ridgn);
</script>
<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="/dist/js/pages/dashboard.js"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script language="JavaScript" type="text/javascript">
  $(function(){
    $('.getdatelot').on('click', function(){    
      
      var id = $(this).attr("vaule");
     // console.log(id);
      $.get('/listlottery/listlotpoint2', {
        id
      }).done(function(response){
        if(response.tickets){
          console.log(response.tickets[0].id);
          $("#buy_1").html(response.buytop3);
          $("#buy_2").html(response.buybottom3);
          $("#buy_3").html(response.buytod3);
          $("#buy_4").html(response.buytop2);
          $("#buy_5").html(response.buybottom2);
          $("#buy_6").html(response.buytod2);
          $("#buy_7").html(response.buytop1);
          $("#buy_8").html(response.buybottom1);
          //////////////////////////////////////////////
          $("#com_1").html(response.comtop3);
          $("#com_2").html(response.combottom3);
          $("#com_3").html(response.comtod3);
          $("#com_4").html(response.comtop2);
          $("#com_5").html(response.combottom2);
          $("#com_6").html(response.comtod2);
          $("#com_7").html(response.comtop1);
          $("#com_8").html(response.combottom1);
          //////////////////////////////////////////////
          $("#take_1").html(response.taketop3);
          $("#take_2").html(response.takebottom3);
          $("#take_3").html(response.taketod3);
          $("#take_4").html(response.taketop2);
          $("#take_5").html(response.takebottom2);
          $("#take_6").html(response.taketod2);
          $("#take_7").html(response.taketop1);
          $("#take_8").html(response.takebottom1);
          //////////////////////////////////////////////
          $("#pay_1").html(response.paytop3);
          $("#pay_2").html(response.paybottom3);
          $("#pay_3").html(response.paytod3);
          $("#pay_4").html(response.paytop2);
          $("#pay_5").html(response.paybottom2);
          $("#pay_6").html(response.paytod2);
          $("#pay_7").html(response.paytop1);
          $("#pay_8").html(response.paybottom1);
          /////////////////////////////////////////////
          $("#sumbuy").html(response.sumbuy);
          $("#sumcom").html(response.sumcom);
          $("#sumtake").html(response.sumtake);
          $("#sumpay").html(response.sumpay);
        }

       
        console.log(response.lotto.name);
        $('#navbar-game-title').html(response.lotto.name);
        $('#lottodate').html(response.lotto.name);
      });

      });
    });
 
</script>
@endsection