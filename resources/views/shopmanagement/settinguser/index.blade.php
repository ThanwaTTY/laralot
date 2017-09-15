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
.sidebar .sidebar-shortcuts-large {
    line-height: 45px;
}
.bot-margin-3 {
    margin-bottom: 13px !important;
    margin-left: 18px !important;
    border-button: 2px;
}

.bot-margin-3 i {
    font-size: 28px;
}

  </style>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="modal-content">
            <div class="box box-info">      
                <br>
                <form class="form-horizontal" action="" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                     <h2 class="text-aqua">ตั่งค่าสมาชิก >>3M3K</h2>                            
                                </div>                                  
                            </div>
                            <br>
                             <div class="row">
                                <div class="col-xs-12">
                                     <div style="background-color:#b3d9ff;color:black;padding:5px;border: 3px solid #3399ff; ">
                                        <h4 style="color:#1a8cff;">คำเเนะนำ</h4>
                                        <p>-เพิ่มสมาชิกหน้าร้าน ได้ที่เมนู <b style="color:#3399ff;">เพิ่มสมาชิก</b></p>
                                        <p>-เพิ่มผู้ช่วยหน้าร้าน ได้ที่เมนู <b style="color:#3399ff;">เพิ่มผู้ช่วย</b></p>
                                       
                                     </div>                           
                                </div>                                  
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="table-responsive"><!-- มี tab เลื่อนข้างล่าง  -->
                                        <table class="table table-bordered"style="background-color:#f2f2f2;">
                                            <thead>
                                                <tr style="background-color:#e6e6e6;">
                                                    <th colspan="2"class="center"style="padding-top:20px"><button class="btn btn-primary">เเก้ไข</button></th>
                                                    <th colspan="2"class="center"style="padding-top:20px"><button class="btn btn-primary">ยกเลิก</button></th>
                                                    <th class="text-center"style="padding-top:25px"> <input type="checkbox" value=""></th>
                                                    <th class="text-center">ระบบหน้าร้าน<select class="form-control">
                                                                                            <option></option>
                                                                                            <option>เปิด</option>
                                                                                            <option>ปิด</option>
                                                                                        </select></th>
                                                    <th class="text-center"  rowspan="2">อายุโพย<input type="" class="form-control" id="" placeholder="">
                                                    <p><=0นาที</p></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                </form>
                            <br>
            </div>    
    </div> 
</section>
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