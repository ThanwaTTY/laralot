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
  <style>
    #unborder table, td, th {
    border: 0px solid gray !important;
    }
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
<div id="content" class="col-xs-12"><div class="page-header">
  <h1>
    เเพ้-ชนะ สุทธิ
    <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                  3M3K
                  </small>
  </h1>
</div>
                        {{-- <form class="form-horizontal" action="" method="post"> --}}
                          
<div class="alert alert-info">แสดงข้อมูลงวดที่ <b>ออกรางวัลแล้ว</b> และเป็นผลรวม เท่านั้น</div>

                <div class="modal-content">
                    <div class="box box-solid box-primary">
                        <div class="box-header with-border with-border">
                        ตัวเลือกการค้นหา
                         </h5>
                    </div>
          <form method="POST" action="https://agent.superlot999.com/reports/by-date/9306" accept-charset="UTF-8" id="filter-form2" class="form-inline"><input name="_token" type="hidden" value="j5nbY9HBoZe0b52McGVHurzhSek0wQ2t3BuLU4Vy">
                {{ csrf_field() }}
                    <div class="box-body">
                        <div class="widget-main">
                            <table id="unborder">
                            <tbody><tr>
                                <td class="padding-5" colspan="10">
                                <label for="date"><input type="radio" id="date" name="filter" value="date" checked=""> วันนี้</label>
                                <label for="yesterday" class="left-padding-10"><input type="radio" id="yesterday" name="filter" value="yesterday"> เมื่อวาน</label>
                                <label for="week" class="left-padding-10"><input type="radio" id="week" name="filter" value="week"> สัปดาห์นี้ (จันทร์ - อาทิตย์)</label>
                                <label for="prev_week" class="left-padding-10"><input type="radio" id="prev_week" name="filter" value="prev_week"> สัปดาห์ที่แล้ว (จันทร์ - อาทิตย์)</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                <input type="radio" name="filter" value="month">
                                </td>
                                <td>เดือน</td>
                                <td class="">
                                <input id="username" class="form-control" name="username" type="text">
                                </td>
                            </tr>

                            <tr>
                                <td class="padding-5">
                                <input type="radio" name="filter" value="range">
                                </td>
                                <td>ตั้งแต่วันที่</td>
                                <td class="left-padding-5">
                                <div class="input-group">
                                    <input id="username" class="form-control" name="username" type="text">
                                    <span class="input-group-addon">
                                    <i class="fa fa-calendar bigger-110"></i>
                                    </span>
                                </div>
                                </td>
                                <td class="left-padding-10">ถึงวันที่</td>
                                <td class="left-padding-10">
                                <div class="input-group">
                                    <input id="username" class="form-control" name="username" type="text">
                                    <span class="input-group-addon">
                                    <i class="fa fa-calendar bigger-110"></i>
                                    </span>
                                </div>
                                </td>
                            </tr>
                            </tbody>
                            </table>
                            <br>
                                 <label>ชนิดหวย :</label>
                                 <button class="btn btn-warning">เลือก</button>
                            </div>  
                            <br>
                            <br>
                            <div style="border: 3px solid #4da6ff; ">
                            </div>   
                            <br>
                             <button class="btn btn-primary">ค้นหา</button>

                   
             </form>
                            <div class="col-xs-12">
                                    <h4> ข้อมูลรวม 1 วันตั่งเเต่วันที่ </h4>                            
                            </div>
                            <div class="col-sm-10">
                                        <table class="table table-bordered bg-gray">
                                            <thead>
                                                <tr style="background-color:#e6e6e6;">
                                                <th class="text-center" rowspan="2" style="padding-top:20px;">ชื่อผู้ใช้ <br>
                                                <input type="checkbox" name="" value="">เเสดงชื่อ
                                                </th>
                                                <th class="text-center" rowspan="2" style="padding-top:20px;">ระดับชั้น</th>
                                                <th class="text-center" rowspan="2" style="padding-top:20px;">ยอดทั้งหมด</th>
                                                <th class="text-center" colspan="3">สมาชิก</th>
                                                <th class="text-center" colspan="3">เอเย่นต์[3M3K]</th>
                                                <th class="text-center" colspan="3">บริษัท</th>
                                                </tr>
                                                <tr> 
                                                    <th class="text-center">ยอดส่งออก</th>
                                                    <th class="text-center">ค่าคอม</th>
                                                    <th class="text-center">รวม</th>
                                                    <th class="text-center">ถือหุ้น</th>
                                                    <th class="text-center">คอม</th>
                                                    <th class="text-center">รวม</th>
                                                    <th class="text-center">ถือหุ้น</th>
                                                    <th class="text-center">คอม</th>
                                                    <th class="text-center">รวม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" colspan="2"><b>รวม :</b></td>
                                                    <td class="text-right">0.00</td>
                                                    {{-- สมาชิก --}}
                                                    <td class="text-right">0.00</td>
                                                    <td class="text-right">0.00</td>
                                                    <td class="text-right"></td>
                                                    {{-- เอเย่นต์ --}}
                                                    <td style="background-color:#ffe6cc;">0.00</td>
                                                    <td style="background-color:#ffe6cc;">0.00</td>
                                                    <td style="background-color:#ffe6cc;">0.00</td>
                                                    {{-- บรษัท --}}
                                                    <td class="text-right">0.00</td>
                                                    <td class="text-right">0.00</td>
                                                    <td class="text-right">0.00</td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>
                            <div class="col-xs-12">
                                <h4> รวมทั้งหมด </h4>                            
                            </div>
                            <div class="col-sm-10">
                                        <table class="table table-bordered bg-gray">
                                            <thead>
                                                <tr style="background-color:#e6e6e6;">
                                                <th class="text-center" rowspan="2" style="padding-top:20px;">ชื่อผู้ใช้ <br>
                                                <input type="checkbox" name="" value="">เเสดงชื่อ
                                                </th>
                                                <th class="text-center" rowspan="2" style="padding-top:20px;">ระดับชั้น</th>
                                                <th class="text-center" rowspan="2" style="padding-top:20px;">ยอดทั้งหมด</th>
                                                <th class="text-center" colspan="3">สมาชิก</th>
                                                <th class="text-center" colspan="3">เอเย่นต์[3M3K]</th>
                                                <th class="text-center" colspan="3">บริษัท</th>
                                                </tr>
                                                <tr> 
                                                    <th class="text-center">ยอดส่งออก</th>
                                                    <th class="text-center">ค่าคอม</th>
                                                    <th class="text-center">รวม</th>
                                                    <th class="text-center">ถือหุ้น</th>
                                                    <th class="text-center">คอม</th>
                                                    <th class="text-center">รวม</th>
                                                    <th class="text-center">ถือหุ้น</th>
                                                    <th class="text-center">คอม</th>
                                                    <th class="text-center">รวม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" colspan="2"><b>รวม :</b></td>
                                                    <td class="text-right">0.00</td>
                                                    {{-- สมาชิก --}}
                                                    <td class="text-right">0.00</td>
                                                    <td class="text-right">0.00</td>
                                                    <td class="text-right"></td>
                                                    {{-- เอเย่นต์ --}}
                                                    <td style="background-color:#ffe6cc;">0.00</td>
                                                    <td style="background-color:#ffe6cc;">0.00</td>
                                                    <td style="background-color:#ffe6cc;">0.00</td>
                                                    {{-- บรษัท --}}
                                                    <td class="text-right">0.00</td>
                                                    <td class="text-right">0.00</td>
                                                    <td class="text-right">0.00</td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>              
     </div>
</div>
    

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