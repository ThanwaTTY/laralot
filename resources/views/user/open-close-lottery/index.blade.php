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
    </style>
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

<section class="content-header">
      <h1>
        5. เปิด-ปิด อัตราจ่าย/หวย >> 3M3K
      </h1>
</section>


<section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="one">
                         <p class="bold">อ่านคำอธิบายระบบใหม่ได้ที่ <a href="#">คู่มือการใช้งาน</a></p> 
                         <b>สถานะ:</b> <b style="background:#ffe066;">เหลือง = ระงับ,</b> <b style="background:#ff6666;">แดง = ล็อค</b>
                    </div>
                </div>                                 
            </div>
        <br>
    <form class="form-horizontal" action="" method="post">
        {{ csrf_field() }}
                <input type="checkbox"> แสดงชื่อ <br>
                <input type="checkbox"> ดูอัตราจ่าย-กลุ่มหวย 
                
        <div class="row">
                <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <br>
                <!-- Custom tabs (Charts with tabs)-->
                    <div class="nav-tabs-custom">
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-left" style="padding-bottom: 5px">
                        <li class="bg-primary active" style=""><a href="#tab1" data-toggle="tab">เปิด/ปิด กลุ่มหวย</a></li>
                        <li class="bg-primary"><a href="#tab2" data-toggle="tab">เปิด/ปิด ชนิดการแทง</a></li>
                        <li class="bg-primary"><a href="#tab3" data-toggle="tab">เปิด/ปิด อัตราจ่าย</a></li>
                        {{-- <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li> --}}
                        </ul>
                        <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="tab1" style="position: relative; height: 300px;">
                                <div class="row">
                                    <!-- Left col -->
                                    <section class="col-lg-12 connectedSortable">
                                    <!-- Custom tabs (Charts with tabs)-->
                                        <div class="nav-tabs-custom">
                                            <!-- Tabs within a box -->
                                            <ul class="nav nav-tabs pull-left"  style="padding-bottom: 5px">
                                            <li class="active bg-primary" style=""><a href="#tab11" data-toggle="tab">รัฐบาล</a></li>
                                            <li class="bg-primary"><a href="#tab22" data-toggle="tab">หวย ธกส</a></li>
                                            <li class="bg-primary"><a href="#tab33" data-toggle="tab">หวยหุ้นไทย</a></li>
                                            <li class="bg-primary"><a href="#tab44" data-toggle="tab">หวยลาว</a></li>
                                            <li class="bg-primary"><a href="#tab55" data-toggle="tab">หวยมาเลย์ (Magnum4D)</a></li>
                                            <li class="bg-primary"><a href="#tab66" data-toggle="tab">หวยหุ้นต่างประเทศ</a></li>
                                            <li class="bg-primary"><a href="#tab77" data-toggle="tab">หวยเวียดนาม</a></li>
                                            {{-- <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li> --}}
                                            </ul>
                                                    <div class="tab-content no-padding">
                                                        <!-- Morris chart - Sales -->
                                                        <div class="chart tab-pane active" id="tab11" style="position: relative; height: 300px;">
                                                            <div class="col-xs-4">
                                                                <table class="table table-bordered bg-gray">
                                                                    <thead> 
                                                                        <tr> 
                                                                            <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด กลุ่มหวย รํฐบาล</th>
                                                                        </tr>
                                                                        <tr> 
                                                                            <th class="text-center" colspan="3" style="padding:15px;">
                                                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                                            </th>
                                                                            <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                                            <th class="text-center" style="padding:15px;">การใช้งาน 
                                                                                <select name="" id="">
                                                                                    <option value="">เปิด</option>
                                                                                    <option value="">ปิด</option>
                                                                                </select>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">3M3K001</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">3M3K002</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="chart tab-pane" id="tab22" style="position: relative; height: 300px;">
                                                        <div class="col-xs-4">
                                                                <table class="table table-bordered bg-gray">
                                                                    <thead> 
                                                                        <tr> 
                                                                            <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด กลุ่มหวย หวย ธกส</th>
                                                                        </tr>
                                                                        <tr> 
                                                                            <th class="text-center" colspan="3" style="padding:15px;">
                                                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                                            </th>
                                                                            <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                                            <th class="text-center" style="padding:15px;">การใช้งาน 
                                                                                <select name="" id="">
                                                                                    <option value="">เปิด</option>
                                                                                    <option value="">ปิด</option>
                                                                                </select>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">3M3K001</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">3M3K002</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="chart tab-pane" id="tab33" style="position: relative; height: 300px;">
                                                        <div class="col-xs-4">
                                                                <table class="table table-bordered bg-gray">
                                                                    <thead> 
                                                                        <tr> 
                                                                            <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด กลุ่มหวย หวยหุ้นไทย</th>
                                                                        </tr>
                                                                        <tr> 
                                                                            <th class="text-center" colspan="3" style="padding:15px;">
                                                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                                            </th>
                                                                            <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                                            <th class="text-center" style="padding:15px;">การใช้งาน 
                                                                                <select name="" id="">
                                                                                    <option value="">เปิด</option>
                                                                                    <option value="">ปิด</option>
                                                                                </select>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">3M3K001</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">3M3K002</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="chart tab-pane" id="tab44" style="position: relative; height: 300px;">
                                                        <div class="col-xs-4">
                                                                <table class="table table-bordered bg-gray">
                                                                    <thead> 
                                                                        <tr> 
                                                                            <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด กลุ่มหวย หวยลาว</th>
                                                                        </tr>
                                                                        <tr> 
                                                                            <th class="text-center" colspan="3" style="padding:15px;">
                                                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                                            </th>
                                                                            <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                                            <th class="text-center" style="padding:15px;">การใช้งาน 
                                                                                <select name="" id="">
                                                                                    <option value="">เปิด</option>
                                                                                    <option value="">ปิด</option>
                                                                                </select>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">3M3K001</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">3M3K002</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="chart tab-pane" id="tab55" style="position: relative; height: 300px;">
                                                        <div class="col-xs-4">
                                                                <table class="table table-bordered bg-gray">
                                                                    <thead> 
                                                                        <tr> 
                                                                            <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด กลุ่มหวย หวยมาเลย์ (Magnum4D)</th>
                                                                        </tr>
                                                                        <tr> 
                                                                            <th class="text-center" colspan="3" style="padding:15px;">
                                                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                                            </th>
                                                                            <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                                            <th class="text-center" style="padding:15px;">การใช้งาน 
                                                                                <select name="" id="">
                                                                                    <option value="">เปิด</option>
                                                                                    <option value="">ปิด</option>
                                                                                </select>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">3M3K001</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">3M3K002</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="chart tab-pane" id="tab66" style="position: relative; height: 300px;">
                                                        <div class="col-xs-4">
                                                                <table class="table table-bordered bg-gray">
                                                                    <thead> 
                                                                        <tr> 
                                                                            <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด กลุ่มหวย หวยหุ้นต่างประเทศ</th>
                                                                        </tr>
                                                                        <tr> 
                                                                            <th class="text-center" colspan="3" style="padding:15px;">
                                                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                                            </th>
                                                                            <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                                            <th class="text-center" style="padding:15px;">การใช้งาน 
                                                                                <select name="" id="">
                                                                                    <option value="">เปิด</option>
                                                                                    <option value="">ปิด</option>
                                                                                </select>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">3M3K001</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">3M3K002</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="chart tab-pane" id="tab77" style="position: relative; height: 300px;">
                                                        <div class="col-xs-4">
                                                                <table class="table table-bordered bg-gray">
                                                                    <thead> 
                                                                        <tr> 
                                                                            <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด กลุ่มหวย หวยเวียดนาม</th>
                                                                        </tr>
                                                                        <tr> 
                                                                            <th class="text-center" colspan="3" style="padding:15px;">
                                                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                                            </th>
                                                                            <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                                            <th class="text-center" style="padding:15px;">การใช้งาน 
                                                                                <select name="" id="">
                                                                                    <option value="">เปิด</option>
                                                                                    <option value="">ปิด</option>
                                                                                </select>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">3M3K001</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">3M3K002</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            
                                                        </div>
                                                    </div>

                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="chart tab-pane" id="tab2" style="position: relative; height: 300px;">
                                    <div class="col-xs-4">
                                        <table class="table table-bordered bg-gray">
                                            <thead> 
                                                <tr> 
                                                    <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด ชนิดการแทง</th>
                                                </tr>
                                                <tr> 
                                                    <th class="text-center" colspan="3" style="padding:15px;">
                                                        <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                        <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                    </th>
                                                    <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                    <th class="text-center" style="padding:15px;">การใช้งาน 
                                                        <select name="" id="">
                                                            <option value="">เปิด</option>
                                                            <option value="">ปิด</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">3M3K001</td>
                                                    <td class="text-center">เมมเบอร์</td>
                                                    <td class="text-center"><input type="checkbox"></td>
                                                    <td class="text-center">เปิด</td>
                                                </tr>

                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">3M3K002</td>
                                                    <td class="text-center">เมมเบอร์</td>
                                                    <td class="text-center"><input type="checkbox"></td>
                                                    <td class="text-center">เปิด</td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                                
                                    </div>
                            </div>
                            
                            <div class="chart tab-pane" id="tab3" style="position: relative; height: 300px;">
                                <div class="row">
                                    <!-- Left col -->
                                    <section class="col-lg-12 connectedSortable">
                                    <!-- Custom tabs (Charts with tabs)-->
                                        <div class="nav-tabs-custom">
                                            <!-- Tabs within a box -->
                                            <ul class="nav nav-tabs pull-left"  style="padding-bottom: 5px">
                                            <li class="active bg-primary" style=""><a href="#tab10" data-toggle="tab">หวยรัฐ 70</a></li>
                                            <li class="bg-primary"><a href="#tab20" data-toggle="tab">หวย 70</a></li>
                                            {{-- <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li> --}}
                                            </ul>
                                                    <div class="tab-content no-padding">
                                                        <!-- Morris chart - Sales -->
                                                        <div class="chart tab-pane active" id="tab10" style="position: relative; height: 300px;">
                                                            <div class="col-xs-4">
                                                                <table class="table table-bordered bg-gray">
                                                                    <thead> 
                                                                        <tr> 
                                                                            <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด อัตราจ่าย หวยรัฐ 70</th>
                                                                        </tr>
                                                                        <tr> 
                                                                            <th class="text-center" colspan="3" style="padding:15px;">
                                                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                                            </th>
                                                                            <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                                            <th class="text-center" style="padding:15px;">การใช้งาน 
                                                                                <select name="" id="">
                                                                                    <option value="">เปิด</option>
                                                                                    <option value="">ปิด</option>
                                                                                </select>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">3M3K001</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">3M3K002</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="chart tab-pane" id="tab20" style="position: relative; height: 300px;">
                                                        <div class="col-xs-4">
                                                                <table class="table table-bordered bg-gray">
                                                                    <thead> 
                                                                        <tr> 
                                                                            <th class="text-center" colspan="5" style="color:#0000ff;">เปิด/ปิด อัตราจ่าย หวย 70</th>
                                                                        </tr>
                                                                        <tr> 
                                                                            <th class="text-center" colspan="3" style="padding:15px;">
                                                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                                                            </th>
                                                                            <th class="text-center" style="padding:15px;"><input type="checkbox"></th>
                                                                            <th class="text-center" style="padding:15px;">การใช้งาน 
                                                                                <select name="" id="">
                                                                                    <option value="">เปิด</option>
                                                                                    <option value="">ปิด</option>
                                                                                </select>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">3M3K001</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">3M3K002</td>
                                                                            <td class="text-center">เมมเบอร์</td>
                                                                            <td class="text-center"><input type="checkbox"></td>
                                                                            <td class="text-center">เปิด</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            
                                                        </div>
                                                    </div>

                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        

                    </div>
            </section>
        </div>

    </form>
</section>
@endsection

 