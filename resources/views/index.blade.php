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

  </style>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="sidebar-shortcuts-large bot-margin-3">
      {{--  <h1>
        Dashboard
        <small>Control panel</small>
      </h1>  --}}
      <div class="row">
        {{--  <div class="pull-left">  --}}
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i></li>
            <li class="active">ยินดีต้อนรับ</li>
          </ol>
        {{--  </div>  --}}
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="line-button"></div>
      <h2 id="text-primary" class="text-primary">ยินดีต้อนรับเอเย่นต์ [3M3K]</h2>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
        <div class="alert alert-warning alert-dismissible">
                {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> --}}
                <h4 class="text-red"><i class="icon fa fa-warning"></i> เรียนท่านที่ต้องการ หุ้น หรือ เก็บของ</h4>
                <span class="black">กรุณาตั้งจำนวนการรับของต่อตัวในหน้า <a href="https://agent.superlot999.com/items/settings">ตั้งค่าการรับของ</a> เพื่อกำหนดว่าท่านจะรับของสูงสุดต่อตัวตัวละเท่าไร หากไม่มีการตั้ง ระบบจะถือว่าท่านไม่ต้องการสู้</span>
              </div>
        </div>
        <div class="col-xs-12">
          <h2><i class="text-primary">></i> จำนวนสมาชิก</h2>
        </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="box">
                  <div class="box-header  text-center">
                    <h3 class="box-title">เมมเบอร์</h3>
                  </div>
                <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-striped  text-center">
                      <tbody>
                        <tr>
                          <th style="padding: 12px;">4</th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>


      </div>
        <div class="col-xs-12">
          <h2><i class="text-primary">></i> จำนวนสมาชิก</h2>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="col-xs-12">
              <div class="box">
                <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table-bordered">
                      <tbody>
                        <tr>
                          <th style="padding: 12px;"  class="text-center">ชนิดหวย</th>
                          <th style="padding: 12px;" class="text-center">วันที่</th>
                          <th style="padding: 12px;">ประกาศ</th>
                        </tr>
                        <tr>
                          <td style="padding: 12px;">ประกาศระบบ</td>
                          <td style="padding: 12px;">25-08-2017 09:49:00</td>
                          <td style="padding: 12px;"><b>ประกาศข่าว...หวยลาว<br>
                            <br>
                            หวยลาวจะเปลี่ยนการออกผลรางวัล จากเดิมสัปดาห์ละ 2 ครั้ง <br>
                            วันจันทร์ และพฤหัส จะเปลี่ยนเป็น สัปดาห์ละ 1 ครั้ง คือวัน พุธ วันเดียว<br>
                            เริ่มงวดแรกวันพุธที่ 30 ส.ค. 60  <br>
                            <br>
                            โดยบริษัทขอเลื่อนเวลาปิดรับเร็วขึ้นชั่วคราว เฉพาะงวดแรก เป็นเวลา 19.45 น. หลังจากนั้นหากตรวจสอบแล้วว่า <br>
                            สามารถปิดรับเวลาเดิมได้ก็จะทำการปรับเวลาให้ปิดตามเดิม คือ 20.10 น. <br>
                            <br>
                            แนะนำเอเย่นต์ ให้เข้าไปเช็คการตั้งค่ารับของต่างๆด้วย เพื่อความถูกต้อง ขออภัยในความไม่สะดวก</b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>
        </div>


        
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
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
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
@endsection