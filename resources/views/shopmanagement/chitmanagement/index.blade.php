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

.negative {
    color: #e3302c;
}
.positive {
    color: #508600;
}
  </style>
@endsection
@section('content')
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="modal-content">
            <div class="box box-info">      
                <br>
                <form class="" action="" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                     <h2 class="text-aqua">การจัดการโพย</h2>                            
                                </div>                                  
                            </div>
                             <div class="row">
                                <div class="col-xs-12">
                                     <h3>> ค้นหาโพยด้วยรหัส</h3>                            
                                </div>  
                                <div class="col-xs-4">
                                  <form class="form-group">
                                     <div class="col-xs-6">
                                        <input type="" class="form-control" id="" placeholder="">
                                     </div>
                                     <div class="col-xs-6">
                                        <button type="submit" class="btn btn-primary">ค้นหา</button>          
                                     </div>             
                                  </form>
                                </div>                                  
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                  <h3>> รายการโพย</h3>     
                                </div>
                                <div class="col-xs-12">
                                  <form class="form-group">
                                     <div class="col-xs-2">
                                        <label class="col-sm-12 control-label">วันที่</label>
                                        <input type="" class="form-control" id="" placeholder="DD/MM/YY">
                                     </div>
                                     <div class="col-xs-2">
                                        <label class="col-sm-12 control-label">ชนิดหวย</label>
                                        <select class="form-control">
                                            <option>ทั้งหมด</option>
                                            <option>รัฐบาล</option>
                                            <option>หวย ธกส</option>
                                            <option>หวยหุ้นไทย</option>
                                            <option>หวยลาว</option>
                                        </select>
                                     </div>
                                     <div class="col-xs-2">
                                        <label class="col-sm-12 control-label">คำต้น</label>
                                        <input type="" class="form-control" id="" placeholder="รหัส,ยอดรวม,หมายเหตุ">
                                     </div>
                                     <div class="col-xs-2">
                                        <label class="col-sm-12 control-label">สถานะ รับเข้า</label>
                                        <select class="form-control">
                                            <option>ทั้งหมด</option>
                                            <option>ยังไม่จัดการ</option>
                                            <option>ยืนยันเเล้ว</option>
                                            <option>ยกเลิกเเล้ว</option>
                                        </select>
                                     </div>
                                     <div class="col-xs-2">
                                        <label class="col-sm-12 control-label">สถานะ จ่ายออก</label>
                                        <select class="form-control">
                                            <option>ทั้งหมด</option>
                                            <option>ไม่ถูกรางวัล</option>
                                            <option>ถูกรางวัล-จ่ายเเล้ว</option>
                                            <option>ถูกรางวัล-ยังไม่จ่าย</option>
                                        </select>
                                     </div>
                                     <br>
                                     <div class="col-xs-2">
                                        <button type="submit" class="btn btn-primary">ค้นหา</button>          
                                     </div>             
                                  </form>
                                    <div class="col-xs-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                เเสดงรายละเอียด
                                            </label>
                                        </div>                                    
                                    </div> 
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p>วันที่:15/09/2017 ชนิดหวย: ทั้งหมด</p>                            
                                        </div>  
                                        <div class="col-xs-12">
                                            <div class="table-responsive"><!-- มี tab เลื่อนข้างล่าง  -->
                                                <table class="table table-bordered"style="background-color:#f2f2f2;">
                                                    <thead>
                                                        <tr style="background-color:#e6e6e6;">
                                                            <th class="text-center" colspan="3"></th>
                                                            <th class="text-center" colspan="2">งวดหวย</th>
                                                            <th class="text-center" colspan="9">โพย</th>
                                                            <th class="text-center" colspan="3">รับเข้า</th>
                                                            <th class="text-center" colspan="3">จ่ายออก</th>
                                                        </tr>
                                                            <th>#</th>
                                                            <th>เวลา</th>
                                                            <th>ชื่อผู้ใช้</th>
                                                            <th>ชนิดหวย</th>
                                                            <th>งวดหวย</th>
                                                            <th>รหัสโพย</th>
                                                            <th>อัตราจ่าย</th>
                                                            <th>การเเทง</th>
                                                            <th>ยอดเเทง</th>
                                                            <th>ค่าคอม</th>
                                                            <th>รวม</th>
                                                            <th>อายุโพย</th>
                                                            <th>หมายเหตุ</th>
                                                            <th>ดู</th>
                                                            <th>ยืนยัน</th>
                                                            <th>ลบ</th>
                                                            <th>ใบเสร็จ</th>
                                                            <th>รางวัล</th>
                                                            <th>ใบเสร็จ</th>
                                                        <tr> 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                        {{-- //////////////////////////////////////////////////// --}}
                                                <div class="col-xs-12">
                                                    <h4>สรุปยอด</h4>   
                                                </div>
                                                <div class="col-xs-12">
                                                    <p>วันที่:15/09/2017 ชนิดหวย: ทั้งหมด</p>                            
                                                </div>   
                                                <div class="col-xs-2">                       
                                                 <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>งวดหวย</th>
                                                            <th>0.00</th>
                                                        </tr>
                                                        <tr>
                                                            <th>จ่ายออก</th>
                                                            <th>0.00</th>
                                                        </tr>
                                                        <tr>
                                                            <th>รวมทั้งหมด</th>
                                                            <th>0.00</th>
                                                        </tr>
                                                  </table>
                                                 </div>
                                                </div>
                                            </div> 
                                        </div>  
                                     </div>       
                </form>
            
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