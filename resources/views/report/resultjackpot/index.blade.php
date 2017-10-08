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
                     ผลการออกรางวัล
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
                             ผลการออกรางวัล
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                <a href="#" class="ajax">3M3K</a>
                            </small>
                        </h1>
                    </div>

               

             </div>
                   <h4 class="sub">
                    <i class="fa fa-angle-right orange"></i>
                    <span class="deep-blue">รัฐบาลไทยงวดที่</span><span class="smaller near-white">16 กันยายน 2560 (เปลี่ยนเเถบเมนูได้ด้านบน)</span>
                   </h4>
                                   
                            <div class="col-sm-6">
                                <table class="table table-bordered bg-gray">
                                    <thead>
                                        <tr style="background-color:#e6e6e6;">
                                            <th class="text-center" style="padding-top:40px;" rowspan="2" colspan="2">ชื่อ งวด</th>
                                            <th class="text-center" style="padding-top:10px;" colspan="4">3 ตัวท้าย</th>
                                        </tr>
                                        <tr style="background-color:#e6e6e6;">
                                            <th class="text-center" style="padding-top:20px;">3 ตัวบน</th>
                                            <th class="text-center" style="padding-top:20px;">2 ตัวบน</th>
                                            <th class="text-center" style="padding-top:20px;">2ตัวล่าง</th>
                                            <th class="text-center" style="padding-top:20px;"  colspan="2">3ตัวล่าง</th>
                                        </tr>
                                       
                                    </thead>
                                    <body>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>16</b> กันยา<b>2560</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>1</b> กันยา<b>2560</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>16</b> สิงหาคม<b>2560</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>1</b> สิงหาคม<b>2560</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>1</b> กรกฎาคม<b>2560</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>22</b></td>
                                                <td class="text-center deep-blue"><b>333</b></td>
                                            </tr>
                                        <body>
                                </table> 
                            </div> 
                            <div class="col-sm-8">
                                <table class="table table-bordered bg-gray">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="padding-top:40px;" rowspan="2">ชนิดหวย</th>
                                            <th class="text-center" style="padding-top:40px;" rowspan="2">ชื่อ งวด</th>
                                            <th class="text-center" style="padding-top:10px;" colspan="3">3 ตัวท้าย</th>
                                           
                                        </tr>
                                        <tr>
                                            <th class="text-center" style="padding-top:20px;">3 ตัวบน</th>
                                            <th class="text-center" style="padding-top:20px;">2 ตัวบน</th>
                                            <th class="text-center" style="padding-top:20px;">2ตัวล่าง</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
      {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                                      <tr>
                                        <th class="text-center" style="background-color:#66b3ff;" colspan="5">หวย ธกส.</th>
                                      </tr>                                                                  
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวย ธกส. (BAAC1)</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวย ธกส. (BAAC2)</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
    {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                                     <tr>
                                        <th class="text-center"style="background-color:#66b3ff;" colspan="5">หวย หุ้นไทย.</th>
                                     </tr>                                                                  
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center"><b><<หวยหุ้นไทยรอบเปิดเช้า>></b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่ <b>2</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่ <b>3</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่ <b>4</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่ <b>5</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่ <b>6</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่ <b>7</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่ <b>8</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่ <b>9</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่ <b>10</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ไทยก่อนปิดเย็น <b>Per-Close</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center"><b><<หวยหุ้นไทยรอบปิดเย็น>></b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
    {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                                        <tr>
                                            <th class="text-center" style="background-color:#66b3ff;" colspan="5">หวยลาว</th>
                                        </tr>                                                                  
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยลาว วันจันทร์</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยลาว วันพุธ</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยลาว วันพฤหัส</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
    {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                                        <tr>
                                            <th class="text-center" style="background-color:#66b3ff;" colspan="5">หวยมาเลย์ <b>(Magnum4D)</b></th>
                                        </tr>                                                                  
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยมาเลย์ วันพุธ</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยมาเลย์ วันเสาร์</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยมาเลย์ วันอาทิตย์</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
    {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                                     <tr>
                                        <th class="text-center" style="background-color:#66b3ff;" colspan="5">หวย หุ้นต่างประเทศ.</th>
                                     </tr>                                                                  
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center"><b>นิเคอิ รอบเช้า</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นจีน รอบเช้า</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ฮั่งเส็ง รอบเช้า</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวยหุ้นไทยเปิดเช้าคู่</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นไต้หวัน</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นเกาหลี</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">นิเคอิ รอบบ่าย</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นจีน รอบบ่าย</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นจีน รอบบ่าย</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นสิงคโปร์</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นอินเดีย</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นอียิปต์</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นรัสเซีย</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นอังกฤษ</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นเยอรมัน</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หุ้นดาวน์โจน</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
    {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                                     <tr>
                                        <th class="text-center" style="background-color:#66b3ff;" colspan="5">หวยเวียดนาม</th>
                                     </tr>                                                                  
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center"><b>ฮานอย Hà Nội</b></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">คั้ญฮหว่า Khánh Hòa</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">กอนตูม Kon Tum</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ฟู้เอียน Phú Yên</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">เถื่อเทียน-เว้ Thừa Thiên Huế</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ดั๊กลัก Đắc Lắc</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">กว๋างนาม Quảng Nam</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">กว๋างนาม Quảng Nam</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ดานัง Đà Nẵng</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">บิ่ญดิ่ญ Bình Định</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">กว๋างบิ่ญ Quảng Bình</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">กว๋างจิ Quảng Trị</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ซาลาย Gia Lai</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">นิญถ่วน Ninh Thuận</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ดั๊กนง Đắc Nông</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">กว๋างหงาย Quảng Ngãi</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">เกียนซาง Kiên Giang</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">เลิมด่ง Lâm Đồng</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">เตี่ยนซาง Tiền Giang</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">กำเมา Cà Mau</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ด่งท้าบ Đồng Tháp</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">โฮจิมินห์ Thanh pho Ho Chi Minh</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">บักเลียว Bạc Liêu</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">เบ๊นแจ Bến Tre</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวงเต่า Vũng Tàu</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">เกิ้นเทอ Cần Thơ</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ด่งนาย Đồng Nai</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ซ้อกจัง Sóc Trăng</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">อานชาง An Giang</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">บิ่ญถ่วน Bình Thuận</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">เต็ยนิญ Tây Ninh</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">บิ่ญเชือง Bình Dương</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">จ่าวิญ Trà Vinh</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">หวิญล็อง Vĩnh Long</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">บิ่ญเฟื้อก Bình Phước</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">เหิ่วชาง Hậu Giang</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>
                                     <form class="form-horizontal" action="" method="post">
                                        <tr>
                                           <td class="text-center">ล็องอาน Long An</td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                           <td><input type="text"size="1" class="form-control" id="" placeholder="" value=""></td>
                                          
                                        </tr>
                                     </form>


       {{-- /////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                                        <tr>
                                                                                 
                                            <th colspan="2"><button class="btn btn-primary">บันทึกทั้งหมด</button></th>
                                            
                                           
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

 
         

    