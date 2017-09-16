@extends('master')
@section('head')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
<div id="content" class="col-xs-12"><div class="page-header">
  <h1>
    เเพ้-ชนะ สุทธิ
    <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                  3M3K
                  </small>
  </h1>
</div>


  <div class="alert alert-info">
    <h5 class="no-margin">แสดงข้อมูลงวดที่ ออกรางวัลแล้ว และเป็นผลรวม เท่านั้น</a></h5>
  </div>
  <form class="form-horizontal" action="" method="post">
    {{ csrf_field() }}
        <div class="modal-content">
            <div class="box box-solid box-primary">
                <div class="box-header with-border with-border">
                    <b>ตัวเลือกการค้นหา</b>
                </div>
                        {{-- <form class="form-horizontal" action="" method="post"> --}}
                           
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="user_type" class="control-label col-xs-1" autofill="false">ระดับ:</label>
                                                <div class="col-xs-3">
                                                    <select class="form-control" id="user_type" name="user_type"><option value="1">เมมเบอร์</option></select>
                                                </div>
                                            <div class="col-xs-2"></div>
                                            <label for="credit" class="control-label col-xs-1">เครดิต:</label>
                                            <div class="col-xs-3">
                                                <input class="form-control" name="max_credit" type="text">
                                            </div>
                                            <span class="help-inline col-xs-2">
                                                <span class="middle">* สูงสุด 0</span>
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="control-label col-xs-1" =""="">ชื่อผู้ใช้:</label>
                                            <div class="col-xs-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">3M3K</span>
                                                    <input id="username" class="form-control" name="username" type="text">
                                                </div>
                                            </div>
                                            <span class="help-inline col-xs-2">
                                                <span class="middle bigger-125" id="username-availability"></span>
                                            </span>

                                            <label for="password" class="control-label col-xs-1">รหัสผ่าน:</label>
                                            <div class="col-xs-3">
                                                <input class="form-control" name="password" type="password" value="" id="password">
                                            </div>
                                            <span class="help-inline col-xs-2">
                                                <span class="middle">* อย่างน้อย 6 ตัวอักษร</span>
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="control-label col-xs-1">ชื่อ-สกุล:</label>
                                            <div class="col-xs-3">
                                                <input class="form-control" name="name" type="text" id="name">
                                            </div>

                                            <div class="col-xs-2"></div>

                                            <label for="phone" class="control-label col-xs-1">เบอร์โทร:</label>
                                            <div class="col-xs-3">
                                                <input class="form-control" name="phone" type="text" id="phone">
                                            </div>
                                        </div>





                                    </div>                                  
                                </div>
   
                            </div>
            </div>
    </form>
  </div>
  



    <!-- /.content -->
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
<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
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