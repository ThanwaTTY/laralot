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
      <section class="sidebar-shortcuts-large bot-margin-3">
      {{--  <h1>
        Dashboard
        <small>Control panel</small>
      </h1>  --}}
      <div class="row">
        {{--  <div class="pull-left">  --}}
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i></li>
            <li class="active">เเพ้ ชนะ</li>
            <li class="active">การออกรางวัล</li>
          </ol>
        {{--  </div>  --}}
      </div>
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
                                     <h2 class="text-aqua">ผลการออกรางวัล</h2>                            
                                </div>  
                               
                                <div class="col-xs-12">
                                     <h3 style="color:#0000ff">><b style="color:#1a1a1a"> หวยรัฐ</b> 5 งวดล่าสุด</h3> 
                                                            
                                </div>                                  
                            </div>
                            <br>
                             <div class="row">
                                <div class="col-xs-12">
                                  <div class="table-responsive col-xs-5"><!-- มี tab เลื่อนข้างล่าง  -->
                                    <table class="table table-bordered bg-gray">
                                        <thead>
                                            <tr style="background-color:#4d4d4d;color:#ffffff">
                                                <th class="text-center" style="padding-top:40px;" rowspan="2" colspan="2">ชื่อ งวด</th>
                                                <th class="text-center" style="padding-top:10px;" colspan="4">3 ตัวท้าย</th>
                                            
                                            </tr>
                                            <tr style="background-color:#4d4d4d;color:#ffffff">
                                                <th class="text-center" style="padding-top:20px;">3 ตัวบน</th>
                                                <th class="text-center" style="padding-top:20px;">2 ตัวบน</th>
                                                <th class="text-center" style="padding-top:20px;">2ตัวล่าง</th>
                                                <th class="text-center" style="padding-top:20px;"  colspan="2">3ตัวล่าง</th>
                                            </tr>
                                        </thead> 
                                        <body>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>16</b> กันยา<b>2560</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>1</b> กันยา<b>2560</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>16</b> สิงหาคม<b>2560</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>1</b> สิงหาคม<b>2560</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="padding-top:20px;" colspan="2">งวดที่ <b>1</b> กรกฎาคม<b>2560</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>22</b></td>
                                                <td class="text-center" style="padding-top:20px; color:#66b3ff"><b>333</b></td>
                                            </tr>
                                        <body>   
                                    </table>
                                 </div>                                                                   
                             </div>
                            </div> 
                            <br>
                            <div class="row">
                                <div class="col-xs-12">
                                     <h3 style="color:#0000ff">><b style="color:#1a1a1a"> หวยหุ้น วันที่ 17-09-2017</h3> 
                                      <div class="col-xs-4">
                                            <div class="form-group">
                                                <label for="" class="col-sm-4 control-label">เลือกวันที่:</label>
                                                <div class="col-sm-8">
                                                <input type="" class="form-control" id="" placeholder="">
                                                </div>
                                      </div>                           
                                </div>
                             </div>                                 
                            </div>
                            <div class="table-responsive col-xs-7"><!-- มี tab เลื่อนข้างล่าง  -->
                                <table class="table table-bordered bg-gray">
                                    <thead>
                                        <tr style="background-color:#4d4d4d;color:#ffffff">
                                            <th class="text-center" style="padding-top:40px;" rowspan="2">ชนิดหวย</th>
                                            <th class="text-center" style="padding-top:40px;" rowspan="2">ชื่อ งวด</th>
                                            <th class="text-center" style="padding-top:10px;" colspan="3">3 ตัวท้าย</th>
                                           
                                        </tr>
                                        <tr style="background-color:#4d4d4d;color:#ffffff">
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
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
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