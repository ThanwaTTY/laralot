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

    {{-- <style>
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

    .one {
    border-style: solid;
    border-color: #006699;
    padding: 15px;
    background: #b3e6ff;
    }

    p.bold {
    font-weight: bold;
    }
.nav-tabs-custom>.nav-tabs>li>a {
    color: #fff;
    border-radius: 0;
}
    </style> --}}
    <link rel="stylesheet" href="/css/custom2.css">
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

<div class="main-content">
      <!-- #section:basics/content.breadcrumbs -->
    <div class="breadcrumbs">
        <ul id="breadcrumbs" class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
            <!-- <a href="#">Home</a> -->
            </li>
                <li>
                    รายการเเพ้ชนะ 
                </li>
                <li>
                     เเพ้ชนะ สุทธิ
                </li>
        </ul><!-- /.breadcrumb -->
        <span id="global-clock" class="pull-right"></span>
    </div>

<!-- /section:basics/content.breadcrumbs -->
    <div class="page-content" id="user-content">
        <div class="row">
            <div id="content" class="col-xs-12">
                    <div class="page-header">
                        <h1>
                             เเพ้ชนะ สุทธิ
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                <a href="#" class="ajax">3M3K</a>
                            </small>
                        </h1>
                    </div>

                    <div class="min-width-800 max-width-1100">
                        <div class="alert alert-info">
                           แสดงข้อมูลงวดที่ ออกรางวัลแล้ว และเป็นผลรวม เท่านั้น</span>
                        </div>
                    </div>
                    <div class="widget-box widget-color-blue2 width-1100 max-width-1100">
                        <div class="widget-header">
                    <form method="POST" action="" accept-charset="UTF-8" id="create-user-form" class="form-horizontal" autocomplete="off"><input name="_token" type="hidden" value="uxxSpiZ338ZTX1mxPhKq1ql7p446dvtlqPlNnN6n">
                      {{ csrf_field() }}
                        
                                <h5 class="widget-title bigger">
                                    ข้อมูลสมาชิก
                                </h5>
                            </div>
                    
                            <div class="widget-body">
                            <div class="widget-main no-padding-bottom">
                                
                            <table id="unborder">
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
                                
                                <button class="btn btn-primary">ค้นหา</button>
                               

                               <br>
                                    
                           
                    </form>
                   
                 </div>

             </div>
                   <h4 class="sub">
                    <i class="fa fa-angle-right orange"></i>
                    <span class="smaller near-white">ข้อมูลรวม</span><span class="deep-blue">1</span><span class="smaller near-white">ตั่งเเต่วันที่ ,</span>
                    <span class="deep-blue">08-10-2017</span><span class="smaller near-white">ถึง</span><span class="deep-blue">08-10-2017</span>
                   </h4>

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
                                                    
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>

                            <div class="col-xs-12">
                                <h3> รวมทั้งหมด </h3>                            
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
                
                <script>
                $(document).ready(function() {
                    $('#content > .tab-content > .tab-pane').each(function (key, val) {
                    if ($(val).find('.tab-pane.active').length == 0) {
                        $(val).find('.nav-tabs li:first').addClass('active');
                        $(val).find('.tab-content .tab-pane:first').addClass('in active');
                    }
                    });
                });
                </script>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>
@endsection

 
         