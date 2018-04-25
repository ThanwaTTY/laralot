@extends('master')
@section('head')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="/css/custom2.css">

  
  {{-- <style>
  table, td, th {

    border: 1px solid grey !important;
}
</style> --}}
{{--   <style>
  .row {
    margin-right: -8px;
    margin-left: -15px;
    padding-top: 3px;
}
  .info-boxcreate {
    display: block;
    min-height: 40px;
    background: #fff;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    border-radius: 2px;
    margin-bottom: 15px;
    
}
  #size{
    height: 49px;
    width: 55px;
    line-height: 0px;
    min-height: 0px;
  }

  </style> --}}
  <style>
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: unset;
}
  </style>
@endsection
@section('content')

<div class="main-content">
      <!-- #section:basics/content.breadcrumbs -->
  <div class="breadcrumbs">
    <ul id="breadcrumbs" class="breadcrumb">
      <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <!-- <a href="#">Home</a> -->
      </li>
    <li>ยินดีต้อนรับ</li></ul><!-- /.breadcrumb -->

    <span id="global-clock" class="pull-right"></span>
  </div>

<!-- /section:basics/content.breadcrumbs -->
  <div class="page-content" id="user-content">
    <div class="row">
      <div id="content" class="col-xs-12">
        <div class="page-header">
            <h1>ยินดีต้อนรับเอเย่นต์ [3M3K]</h1>
        </div>

            <style>#content table * {font-family: Arial}</style>


            <div class="alert alert-danger">
              <h4><i class="fa fa-warning"></i> เรียนท่านที่ต้องการ หุ้น หรือ เก็บของ</h4>
              <span class="black">กรุณาตั้งจำนวนการรับของต่อตัวในหน้า <a href="https://agent.superlot999.com/items/settings">ตั้งค่าการรับของ</a> เพื่อกำหนดว่าท่านจะรับของสูงสุดต่อตัวตัวละเท่าไร หากไม่มีการตั้ง ระบบจะถือว่าท่านไม่ต้องการสู้</span>
            </div>

            <!-- <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap">
              <thead class="thin-border-bottom">
                      <th class="align-center bigger-125">เอเย่นต์</th>
                    <th class="align-center bigger-125">สมาชิก</th>
              </thead>
              <tbody>
                <tr>
                          <td>
                      <h3 class="align-center no-margin padding-10"><b><span class="n2c">0.00</span></b><br>บาท</h3>
                                        </td>
                        <td>
                    <h3 class="align-center no-margin padding-10"><b><span class="n2c">-0</span></b><br>บาท</h3>
                                  </td>
                </tr>
              </tbody>
            </table> -->

            <h3><i class="fa fa-angle-right blue"></i> จำนวนสมาชิก</h3>

            <table class="table table-bordered table-border-dark table-auto table-nowrap">
              <thead class="thin-border-bottom">
                <tr>
                  <th class="align-center bigger-125">เมมเบอร์</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-center">
                    <b class="bigger-150">
                      4<br>
                    </b>
                  </td>
                </tr>
              </tbody>
            </table>

            <h3><i class="fa fa-angle-right blue"></i> ข้อความประกาศ</h3>

            <table class="table table-bordered table-nowrap table-border-dark">
              <thead class="thin-border-bottom">
                <tr>
                  <th class="align-center">ชนิดหวย</th>
                  <th class="align-center">วันที่</th>
                  <th>ประกาศ</th>
                </tr></thead>
              <tbody>
                <tr>
                  <td class="align-center bigger-110 width-1">ประกาศระบบ</td>
                  <td class="bigger-110 width-1">25-08-2017 09:49:00</td>
                  <td class="bigger-110"><b>ประกาศข่าว...หวยลาว<br>
                    <br>
                    หวยลาวจะเปลี่ยนการออกผลรางวัล จากเดิมสัปดาห์ละ 2 ครั้ง <br>
                    วันจันทร์ และพฤหัส จะเปลี่ยนเป็น สัปดาห์ละ 1 ครั้ง คือวัน พุธ วันเดียว<br>
                    เริ่มงวดแรกวันพุธที่ 30 ส.ค. 60  <br>
                    <br>
                    โดยบริษัทขอเลื่อนเวลาปิดรับเร็วขึ้นชั่วคราว เฉพาะงวดแรก เป็นเวลา 19.45 น. หลังจากนั้นหากตรวจสอบแล้วว่า <br>
                    สามารถปิดรับเวลาเดิมได้ก็จะทำการปรับเวลาให้ปิดตามเดิม คือ 20.10 น. <br>
                    <br>
                    แนะนำเอเย่นต์ ให้เข้าไปเช็คการตั้งค่ารับของต่างๆด้วย เพื่อความถูกต้อง ขออภัยในความไม่สะดวก</b>
                  </td>
                </tr>
              </tbody>
            </table>

            {{-- <script>
              $.each($('.n2c'), function(key, value) {
                $(this).html(n2c($(this).text()));
              });
            </script> --}}
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.page-content -->
</div>

@endsection
@section('footer')
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> --}}
{{-- <script src="plugins/morris/morris.min.js"></script> --}}
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="dist/js/pages/dashboard.js"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
@endsection