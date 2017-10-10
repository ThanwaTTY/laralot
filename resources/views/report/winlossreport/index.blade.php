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
  <style>
  input.form-control, .input-group-addon, select, select:focus, select.form-control, .form-control {
    font-family: Arial;
    color: #333;
    border: 1px solid #999 !important;
}
.input-group-addon:last-child {
    border-left: 0 !important;
}
.input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee !important;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.btn, .btn-default, .btn:focus, .btn-default:focus {
    background-color: #abbac3 !important;
    border-color: #abbac3;
}
.btn-minier {
    padding: 0 4px;
    line-height: 18px;
    border-width: 2px;
    font-size: 12px;
}
  </style>
@endsection
@section('footer')
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

@endsection

@section('content')
    
<div class="breadcrumbs">
    <ul id="breadcrumbs" class="breadcrumb">
        <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <!-- <a href="#">Home</a> -->
        </li>
        <li>			
            รายงานแพ้ชนะ 			
        </li>
        <li>					
            แพ้-ชนะ สุทธิ
        </li>
    </ul><!-- /.breadcrumb -->
  <span id="global-clock" class="pull-right"></span>
</div>

    @if($errors->all())
        <div class="box-body">
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>            
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                @foreach($errors->all() as $message)
                    {{ $message }}. <br>
                @endforeach
            </div>
        </div>        
    @endif
<div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
  <h1>
    แพ้-ชนะ สุทธิ
    <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                  3M3K
                  </small>
  </h1>
</div>


<div class="alert alert-info">แสดงข้อมูลงวดที่ <b>ออกรางวัลแล้ว</b> และเป็นผลรวม เท่านั้น</div>

<form method="POST" action="https://agent.superlot999.com/reports/by-date/9306" accept-charset="UTF-8" id="filter-form2" class="form-inline"><input name="_token" type="hidden" value="wVCy2lw6Tr07FXXnoXGA4HgBONZHrhVZERn9GaXW">

  <div class="widget-box widget-color-blue2 width-800 max-width-1100">
    <div class="widget-header">
      <h5 class="widget-title bigger">
        ตัวเลือกการค้นหา
      </h5>
    </div>

    <div class="widget-body" id="game-type-list">
      <div class="widget-main">
        <table>
          <tbody><tr>
            <td class="padding-5" colspan="10">
              <label for="date"><input type="radio" id="date" name="filter" value="date" checked=""> วันนี้</label>
              <label for="yesterday" class="left-padding-10"><input type="radio" id="yesterday" name="filter" value="yesterday"> เมื่อวาน</label>
              <label for="week" class="left-padding-10"><input type="radio" id="week" name="filter" value="week"> สัปดาห์นี้ (จันทร์ - อาทิตย์)</label>
              <label for="prev_week" class="left-padding-10"><input type="radio" id="prev_week" name="filter" value="prev_week"> สัปดาห์ที่แล้ว (จันทร์ - อาทิตย์)</label>
            </td>
          </tr>
          <tr>
            <td class="padding-5">
              <input type="radio" name="filter" value="month">
            </td>
            <td>เดือน</td>
            <td class="left-padding-5">
              <select id="select-month" name="month"><option value="0" selected="selected">ตุลาคม - 10/2560</option><option value="1">กันยายน - 09/2560</option><option value="2">สิงหาคม - 08/2560</option><option value="3">กรกฎาคม - 07/2560</option><option value="4">มิถุนายน - 06/2560</option><option value="5">พฤษาภาคม - 05/2560</option><option value="6">เมษายน - 04/2560</option><option value="7">มีนาคม - 03/2560</option><option value="8">กุมภาพันธ์ - 02/2560</option><option value="9">มกราคม - 01/2560</option><option value="10">ธันวาคม - 12/2559</option><option value="11">พฤศจิกายน - 11/2559</option></select>
            </td>
          </tr>
          <tr>
            <td class="padding-5">
              <input type="radio" name="filter" value="range">
            </td>
            <td>ตั้งแต่วันที่</td>
            <td class="left-padding-5">
              <div class="input-group">
                <input type="text" name="from" id="input-from" class="form-control input-sm max-width-110 date-mask" value="10-10-2017">
                <span class="input-group-addon">
                  <i class="fa fa-calendar bigger-110"></i>
                </span>
              </div>
            </td>
            <td class="left-padding-10">ถึงวันที่</td>
            <td class="left-padding-10">
              <div class="input-group">
                <input type="text" name="to" id="input-to" class="form-control input-sm max-width-110 date-mask" value="10-10-2017">
                <span class="input-group-addon">
                  <i class="fa fa-calendar bigger-110"></i>
                </span>
              </div>
            </td>
          </tr>
        </tbody></table><br>

        <label class="right-padding-5 bolder">ชนิดหวย:</label>
        <input type="button" id="panel-toggle" class="btn btn-sm btn-warning" value="เลือก"><br><br>

        <div id="game-type-checkboxes" class="jquery-hide">
          <button class="btn btn-minier no-border" id="bulk-check-all"><i class="fa fa-check"></i> เลือกทั้งหมด</button>
          <button class="btn btn-minier no-border" id="bulk-uncheck-all"><i class="fa fa-times"></i> ล้าง</button>
          <br><br>

                                            <div class="row">
              <div class="col-xs-12 bolder bigger-110 padding-8 bot-margin-5 clearfix" style="background: #ddd;">
                <input class="group" data-group-id="1" name="game_type_groups[]" type="checkbox" value="1" checked="checked"> <span> รัฐบาล</span>
              </div>
            </div>

                        <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-1" name="game_types[]" type="checkbox" value="1" checked="checked"> <span> รัฐบาลไทย</span>
              </label>
            </div>
                                  <div class="row">
              <div class="col-xs-12 bolder bigger-110 padding-8 bot-margin-5 clearfix" style="background: #ddd;">
                <input class="group" data-group-id="16" name="game_type_groups[]" type="checkbox" value="16" checked="checked"> <span> หวย ธกส.</span>
              </div>
            </div>

                        <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-16" name="game_types[]" type="checkbox" value="39" checked="checked"> <span> หวย ธกส. (BAAC1)</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-16" name="game_types[]" type="checkbox" value="110" checked="checked"> <span> หวย ธกส. (BAAC2)</span>
              </label>
            </div>
                                  <div class="row">
              <div class="col-xs-12 bolder bigger-110 padding-8 bot-margin-5 clearfix" style="background: #ddd;">
                <input class="group" data-group-id="2" name="game_type_groups[]" type="checkbox" value="2" checked="checked"> <span> หวยหุ้นไทย</span>
              </div>
            </div>

                        <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="2" checked="checked"> <span> &lt;&lt;&lt; หวยหุ้นไทย รอบเปิดเช้า &gt;&gt;&gt;</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="111" checked="checked"> <span> หุ้นไทยเปิดเช้าคู่ 2</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="112" checked="checked"> <span> หุ้นไทยเปิดเช้าคู่ 3</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="113" checked="checked"> <span> หุ้นไทยเปิดเช้าคู่ 4</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="114" checked="checked"> <span> หุ้นไทยเปิดเช้าคู่ 5</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="115" checked="checked"> <span> หุ้นไทยเปิดเช้าคู่ 6</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="116" checked="checked"> <span> หุ้นไทยเปิดเช้าคู่ 7</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="117" checked="checked"> <span> หุ้นไทยเปิดเช้าคู่ 8</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="118" checked="checked"> <span> หุ้นไทยเปิดเช้าคู่ 9</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="119" checked="checked"> <span> หุ้นไทยเปิดเช้าคู่ 10</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="3" checked="checked"> <span> &lt;&lt;&lt; หวยหุ้นไทย รอบปิดเที่ยง &gt;&gt;&gt;</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="4" checked="checked"> <span> &lt;&lt;&lt; หวยหุ้นไทย รอบเปิดบ่าย &gt;&gt;&gt;</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="124" checked="checked"> <span> หุ้นไทยเปิดบ่ายคู่ 2</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="125" checked="checked"> <span> หุ้นไทยเปิดบ่ายคู่ 3</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="126" checked="checked"> <span> หุ้นไทยเปิดบ่ายคู่ 4</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="127" checked="checked"> <span> หุ้นไทยเปิดบ่ายคู่ 5</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="128" checked="checked"> <span> หุ้นไทยเปิดบ่ายคู่ 6</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="129" checked="checked"> <span> หุ้นไทยเปิดบ่ายคู่ 7</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="130" checked="checked"> <span> หุ้นไทยเปิดบ่ายคู่ 8</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="131" checked="checked"> <span> หุ้นไทยเปิดบ่ายคู่ 9</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="132" checked="checked"> <span> หุ้นไทยเปิดบ่ายคู่ 10</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="137" checked="checked"> <span> ไทยก่อนปิดเย็น Pre-Close</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-2" name="game_types[]" type="checkbox" value="5" checked="checked"> <span> &lt;&lt;&lt; หวยหุ้นไทย รอบปิดเย็น &gt;&gt;&gt;</span>
              </label>
            </div>
                                  <div class="row">
              <div class="col-xs-12 bolder bigger-110 padding-8 bot-margin-5 clearfix" style="background: #ddd;">
                <input class="group" data-group-id="6" name="game_type_groups[]" type="checkbox" value="6" checked="checked"> <span> หวยลาว</span>
              </div>
            </div>

                        <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-6" name="game_types[]" type="checkbox" value="139" checked="checked"> <span> หวยลาว วันพุธ</span>
              </label>
            </div>
                                  <div class="row">
              <div class="col-xs-12 bolder bigger-110 padding-8 bot-margin-5 clearfix" style="background: #ddd;">
                <input class="group" data-group-id="5" name="game_type_groups[]" type="checkbox" value="5" checked="checked"> <span> หวยมาเลย์ (Magnum4D)</span>
              </div>
            </div>

                        <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-5" name="game_types[]" type="checkbox" value="25" checked="checked"> <span> หวยมาเลย์ วันพุธ</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-5" name="game_types[]" type="checkbox" value="22" checked="checked"> <span> หวยมาเลย์ วันเสาร์</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-5" name="game_types[]" type="checkbox" value="24" checked="checked"> <span> หวยมาเลย์ วันอาทิตย์</span>
              </label>
            </div>
                                  <div class="row">
              <div class="col-xs-12 bolder bigger-110 padding-8 bot-margin-5 clearfix" style="background: #ddd;">
                <input class="group" data-group-id="3" name="game_type_groups[]" type="checkbox" value="3" checked="checked"> <span> หวยหุ้นต่างประเทศ</span>
              </div>
            </div>

                        <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="6" checked="checked"> <span> นิเคอิ รอบเช้า</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="11" checked="checked"> <span> หุ้นจีน รอบเช้า</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="7" checked="checked"> <span> ฮั่งเส็ง รอบเช้า</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="12" checked="checked"> <span> หุ้นไต้หวัน</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="13" checked="checked"> <span> หุ้นเกาหลี</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="8" checked="checked"> <span> นิเคอิ รอบบ่าย</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="14" checked="checked"> <span> หุ้นจีน รอบบ่าย</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="9" checked="checked"> <span> ฮั่งเส็ง รอบบ่าย</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="15" checked="checked"> <span> หุ้นสิงคโปร์</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="16" checked="checked"> <span> หุ้นอินเดีย</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="17" checked="checked"> <span> หุ้นอียิปต์</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="18" checked="checked"> <span> หุ้นรัสเซีย</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="19" checked="checked"> <span> หุ้นอังกฤษ</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="20" checked="checked"> <span> หุ้นเยอรมัน</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-3" name="game_types[]" type="checkbox" value="10" checked="checked"> <span> หุ้นดาวน์โจน</span>
              </label>
            </div>
                                  <div class="row">
              <div class="col-xs-12 bolder bigger-110 padding-8 bot-margin-5 clearfix" style="background: #ddd;">
                <input class="group" data-group-id="15" name="game_type_groups[]" type="checkbox" value="15" checked="checked"> <span> หวยเวียดนาม</span>
              </div>
            </div>

                        <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="73" checked="checked"> <span> ฮานอย Hà Nội</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="74" checked="checked"> <span> คั้ญฮหว่า Khánh Hòa</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="75" checked="checked"> <span> กอนตูม Kon Tum</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="76" checked="checked"> <span> ฟู้เอียน Phú Yên</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="77" checked="checked"> <span> เถื่อเทียน-เว้ Thừa Thiên Huế</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="78" checked="checked"> <span> ดั๊กลัก Đắc Lắc</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="79" checked="checked"> <span> กว๋างนาม Quảng Nam</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="80" checked="checked"> <span> ดานัง Đà Nẵng</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="82" checked="checked"> <span> บิ่ญดิ่ญ Bình Định</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="83" checked="checked"> <span> กว๋างบิ่ญ Quảng Bình</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="84" checked="checked"> <span> กว๋างจิ Quảng Trị</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="85" checked="checked"> <span> ซาลาย Gia Lai</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="86" checked="checked"> <span> นิญถ่วน Ninh Thuận</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="87" checked="checked"> <span> ดั๊กนง Đắc Nông</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="88" checked="checked"> <span> กว๋างหงาย Quảng Ngãi</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="89" checked="checked"> <span> เกียนซาง Kiên Giang</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="90" checked="checked"> <span> เลิมด่ง Lâm Đồng</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="91" checked="checked"> <span> เตี่ยนซาง Tiền Giang</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="92" checked="checked"> <span> กำเมา Cà Mau</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="93" checked="checked"> <span> ด่งท้าบ Đồng Tháp</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="94" checked="checked"> <span> โฮจิมินห์ Thanh pho Ho Chi Minh</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="95" checked="checked"> <span> บักเลียว Bạc Liêu</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="96" checked="checked"> <span> เบ๊นแจ Bến Tre</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="97" checked="checked"> <span> หวงเต่า Vũng Tàu</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="98" checked="checked"> <span> เกิ้นเทอ Cần Thơ</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="99" checked="checked"> <span> ด่งนาย Đồng Nai</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="100" checked="checked"> <span> ซ้อกจัง Sóc Trăng</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="101" checked="checked"> <span> อานชาง An Giang</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="102" checked="checked"> <span> บิ่ญถ่วน Bình Thuận</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="103" checked="checked"> <span> เต็ยนิญ Tây Ninh</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="104" checked="checked"> <span> บิ่ญเชือง Bình Dương</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="105" checked="checked"> <span> จ่าวิญ Trà Vinh</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="106" checked="checked"> <span> หวิญล็อง Vĩnh Long</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="107" checked="checked"> <span> บิ่ญเฟื้อก Bình Phước</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="108" checked="checked"> <span> เหิ่วชาง Hậu Giang</span>
              </label>
            </div>
                                  <div class="col-xs-3" style="padding-left: 8px">
              <label class="width-100">
                <input class="item group-15" name="game_types[]" type="checkbox" value="109" checked="checked"> <span> ล็องอาน Long An</span>
              </label>
            </div>
                  </div>

        <div class="clearfix"></div>
      </div>

      <div class="widget-toolbox padding-8 clearfix">
        <button class="btn btn-primary btn-sm">
          <i class="fa fa-search"></i>
          <span class="bigger-110">ค้นหา</span>
        </button>
      </div>
    </div>
  </div>
</form>

<div class="space-4"></div>

<span class="bigger-125">
  ข้อมูลรวม <span class="deep-blue">1</span> วัน,
  ตั้งแต่วันที่ <span class="deep-blue">10-10-2017</span> ถึง <span class="deep-blue">10-10-2017</span>
</span>

<div class="space-4"></div>


<table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap" id="by-member-table">
  <thead class="thin-border-bottom">
    <tr>
      <th rowspan="2" class="ac width-90px">
        ชื่อผู้ใช้<br>
                  <label class="inline">
            <input class="" type="checkbox" id="input-checkbox-name">
            <span class="lbl"> แสดงชื่อ</span>
          </label>
              </th>
      <th rowspan="2" class="ac width-90px">ระดับชั้น</th>
      <th rowspan="2" class="ac width-90px">ยอดทั้งหมด</th>
      <th colspan="4" class="ac">สมาชิก</th>
      <th colspan="4" class="ac">เอเย่นต์ [3M3K]</th>
              <th colspan="4" class="ac">บริษัท</th>
          </tr>

    <tr>
      <th class="ac width-90px">ยอดส่งออก</th>
      <th class="ac width-90px">ถูกรางวัล</th>
      <th class="ac width-90px">ค่าคอม</th>
      <th class="ac width-90px">รวม</th>
      <th class="ac width-90px">ถือหุ้น</th>
      <th class="ac width-90px">ถูกรางวัล</th>
      <th class="ac width-90px">คอม</th>
      <th class="ac width-90px">รวม</th>
              <th class="ac width-90px">ถือหุ้น</th>
        <th class="ac width-90px">ถูกรางวัล</th>
        <th class="ac width-90px">คอม</th>
        <th class="ac width-90px">รวม</th>
          </tr>
  </thead>

  </table>

<h3>รวมทั้งหมด</h3>

<table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap" id="by-member-table">
  <thead class="thin-border-bottom">
    <tr>
      <th rowspan="2" class="ac width-90px">
        ชื่อผู้ใช้<br>
                  <label class="inline">
            <input class="" type="checkbox" id="input-checkbox-name">
            <span class="lbl"> แสดงชื่อ</span>
          </label>
              </th>
      <th rowspan="2" class="ac width-90px">ระดับชั้น</th>
      <th rowspan="2" class="ac width-90px">ยอดทั้งหมด</th>
      <th colspan="4" class="ac">สมาชิก</th>
      <th colspan="4" class="ac">เอเย่นต์ [3M3K]</th>
              <th colspan="4" class="ac">บริษัท</th>
          </tr>

    <tr>
      <th class="ac width-90px">ยอดส่งออก</th>
      <th class="ac width-90px">ถูกรางวัล</th>
      <th class="ac width-90px">ค่าคอม</th>
      <th class="ac width-90px">รวม</th>
      <th class="ac width-90px">ถือหุ้น</th>
      <th class="ac width-90px">ถูกรางวัล</th>
      <th class="ac width-90px">คอม</th>
      <th class="ac width-90px">รวม</th>
              <th class="ac width-90px">ถือหุ้น</th>
        <th class="ac width-90px">ถูกรางวัล</th>
        <th class="ac width-90px">คอม</th>
        <th class="ac width-90px">รวม</th>
          </tr>
  </thead>

  <tbody>
      </tbody>

  <tfoot class="thin-border-bottom">
    <tr>
      <td colspan="2" class="bolder">รวม :</td>
      <td class="ar dark-blue bolder n2 bg-blue">0.00</td>
      <td class="ar n2c">0.00</td>
      <td class="ar n2c">0.00</td>
      <td class="ar n2c">0.00</td>
      <td class="ar n2c">0.00</td>
      <td class="ar n2c bg-yellow">0.00</td>
      <td class="ar n2c bg-yellow">0.00</td>
      <td class="ar n2c bg-yellow">0.00</td>
      <td class="ar n2c bg-yellow">0.00</td>
              <td class="ar n2c">0.00</td>
        <td class="ar n2c">0.00</td>
        <td class="ar n2c">0.00</td>
        <td class="ar n2c">0.00</td>
          </tr>
  </tfoot>
</table>

<script>
  $.each($('#by-member-table').find('tbody tr, tfoot tr'), function(key, value) {
    $(this).addClass(key % 2 == 0 ? 'odd' : 'even');
  });
  $.each($('.n2'), function(key, value) {
    $(this).html(n2($(this).text()));
  });
  $.each($('.n2c'), function(key, value) {
    $(this).html(n2c($(this).text()));
  });
  $('.date-mask').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'dd-mm-yyyy'
  });
  var list = '';
  if (list == '') {
    $('#game-type-checkboxes input:checkbox').attr('checked', true);
  } else {
    $.each(list.split(','), function(key, value){
      $('#game-type-checkboxes input.item[value="'+value+'"]').attr('checked', true);
    });
  }
</script>
</div><!-- /.col -->
        </div><!-- /.row -->
      </div>

@endsection

 
         