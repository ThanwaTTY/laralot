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
            ดูของ สมาชิก/ประเภท
        </li>
        </ul><!-- /.breadcrumb -->

        <span id="global-clock" class="pull-right"></span>
    </div>
    <div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"> <div class="page-header">
  <h1>
    ดูของ สมาชิก/ประเภท
    <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                  3M3K
                  </small>
  </h1>
  <h4 class="sub">
    <i class="fa fa-angle-right orange"></i>
    <span class="deep-blue">รัฐบาลไทย</span>, งวดวันที่ 16 ตุลาคม 2560
    <span class="smaller near-white"><i>(เปลี่ยนได้ที่แถบเมนูด้านบน)</i></span>
  </h4>
</div>




<ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
  <li class="active">
    <a href="https://agent.superlot999.com/items/by-member" class="ajax">แยกตามสมาชิก</a>
  </li>

  <li>
    <a href="https://agent.superlot999.com/items/by-type" class="ajax">แยกตามประเภท</a>
  </li>
</ul>

<div class="space-4"></div>

<table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap enable-check-all" id="by-member-table">
  <thead class="thin-border-bottom">
    <tr>
      <th rowspan="2" class="align-center width-90px">
        ชื่อผู้ใช้<br>
        <label class="inline">
          <input class="check-all" type="checkbox" id="input-checkbox-name">
          <span class="lbl"> แสดงชื่อ</span>
        </label>
      </th>
      <th rowspan="2" class="align-center width-90px">ระดับชั้น</th>
      <th rowspan="2" class="align-center width-90px">ยอดทั้งหมด</th>
      <th colspan="3" class="align-center">สมาชิก</th>
      <th colspan="3" class="align-center">เอเย่นต์ [3M3K]</th>
              <th colspan="3" class="align-center">บริษัท</th>
          </tr>

    <tr>
      <th class="align-center width-90px">ยอดส่งออก</th>
      <th class="align-center width-90px">ค่าคอม</th>
      <th class="align-center width-90px">รวม</th>
      <th class="align-center width-90px">ถือหุ้น</th>
      <th class="align-center width-90px">คอม</th>
      <th class="align-center width-90px">รวม</th>
              <th class="align-center width-90px">ถือหุ้น</th>
        <th class="align-center width-90px">คอม</th>
        <th class="align-center width-90px">รวม</th>
          </tr>
  </thead>

  <tbody>
    
                                    </tbody>

  <tfoot class="thin-border-bottom">
    <tr class="odd">
      <td colspan="2" class="bolder">รวม :</td>
      <td class="align-right dark-blue bolder n2 bg-blue">0.00</td>
      <td class="align-right n2c">0.00</td>
      <td class="align-right n2c">0.00</td>
      <td class="align-right n2c">0.00</td>
      <td class="align-right n2c bg-yellow">0.00</td>
      <td class="align-right n2c bg-yellow">0.00</td>
      <td class="align-right n2c bg-yellow">0.00</td>
              <td class="align-right n2c">0.00</td>
        <td class="align-right n2c">0.00</td>
        <td class="align-right n2c">0.00</td>
          </tr>
  </tfoot>
</table>

<script>
  $.each($('tbody tr, tfoot tr'), function(key, value) {
    $(this).addClass(key % 2 == 0 ? 'odd' : 'even');
  });
  $.each($('.n2'), function(key, value) {
    $(this).html(n2($(this).text()));
  });
  $.each($('.n2c'), function(key, value) {
    $(this).html(n2c($(this).text()));
  });
</script>
</div><!-- /.col -->
        </div><!-- /.row -->
      </div>
@endsection
@section('footer')
<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
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
@endsection