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
.nav-tabs {
    border-color: #C5D0DC;
    margin-bottom: 0 !important;
    margin-left: 0;
    position: relative;
    top: 1px;
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

<div class="breadcrumbs">
  <ul id="breadcrumbs" class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <!-- <a href="#">Home</a> -->
    </li>
        <li>					
					 การเงิน 					
				</li>
        <li>						
					 ประวัติการเงิน
				</li>
  </ul><!-- /.breadcrumb -->

      <span id="global-clock" class="pull-right"></span>
</div>

<div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
    <h1>
      ประวัติการเงิน
      <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                      <a href="" class="ajax">3M3K</a>                 
                  <i class="ace-icon fa fa-angle-double-right"></i>
              <select class="top-margin-10 member-list">
                    <option value="">เมมเบอร์</option>
                    <option value="">3M3K001</option>
                    <option value="">3M3K002</option>
                    <option value="">3M3KPALM</option>
                    <option value="">3M3KTOR</option>
                    <option value="">3M3K003</option>
              </select>
              </small>
    </h1>
  </div>
  <form method="GET" action="" id="filter-form" class="form-inline bot-margin-20">
    <div class="widget-box widget-color-blue2 width-800 max-width-1100">
      <div class="widget-header">
        <h5 class="widget-title bigger">
          ตัวเลือกการค้นหา
        </h5>
      </div>
      <div class="widget-body">
        <div class="widget-main">
          <table>
            <tbody>
            <tr>
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
                <select id="select-month" name="month"><option value="0" selected="selected">ตุลาคม - 10/2017</option><option value="1">กันยายน - 09/2017</option><option value="2">สิงหาคม - 08/2017</option><option value="3">กรกฎาคม - 07/2017</option><option value="4">มิถุนายน - 06/2017</option><option value="5">พฤษาภาคม - 05/2017</option><option value="6">เมษายน - 04/2017</option><option value="7">มีนาคม - 03/2017</option><option value="8">กุมภาพันธ์ - 02/2017</option><option value="9">มกราคม - 01/2017</option><option value="10">ธันวาคม - 12/2016</option><option value="11">พฤศจิกายน - 11/2016</option></select>
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
            </tbody>
          </table>
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

<div class="max-width-1100">
  <ul class="nav nav-tabs thick-border" id="tab-financial-requests">
    <li class="bigger-110 bolder active">
      <a href="#" class="width-110 center" data-toggle="tab" data-url="">ได้เสียสุทธิ</a>
    </li>
    <li class="bigger-110 bolder ">
      <a href="#" class="width-110 center" data-toggle="tab" data-url="">เครดิต</a>
    </li>
  </ul>
</div>

<div class="tab-content no-border no-padding width-800 max-width-1100" id="tab-content-financial-requests">
  <div class="tab-pane active">
    <table class="table table-bordered table-ks table-nowrap table-vertical-border-0 top-margin-10">
      <thead class="thin-border-bottom">
        <tr>
          <th class="align-center" width="150">วันที่-เวลา</th>
          <th class="align-center">รายละเอียด</th>
          <th class="align-center" width="150">เงินออก</th>
          <th class="align-center" width="150">เงินเข้า</th>
          <th class="align-center" width="150">คงเหลือ</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<script>
  $('.date-mask').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'dd-mm-yyyy'
  });

  $.each($('.n2'), function(key, value) {
    $(this).html(n2($(this).text()));
  });
  $.each($('.n2c'), function(key, value) {
    $(this).html(n2c($(this).text()));
  });
  $.each($('.clear0'), function(key, value) {
    if ($(this).text() == 0)
      $(this).text('');
  });
</script>

</div><!-- /.col -->
        </div><!-- /.row -->
      </div>
@endsection

 