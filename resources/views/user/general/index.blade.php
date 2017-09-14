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

    p.one {
    border-style: solid;
    border-color: #006699;
    padding: 15px;
    background: #b3e6ff;
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
        2.ข้อมูลทั่วไป/เก็บของ
      </h1>
</section>


<section class="content">
        <div class="row">
            <div class="col-sm-8">
                <p class="one"> <b>สถานะ:</b> <b style="background:#ffe066;">เหลือง = ระงับ,</b> <b style="background:#ff6666;">แดง = ล็อค</b><p>
            </div>
        </div>
        <br>
    <form class="form-horizontal" action="" method="post">
        {{ csrf_field() }}
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-left">
                    <li class="active" style=""><a href="#tab1" data-toggle="tab">ข้อมูลทั่วไป</a></li>
                    <li><a href="#tab2" data-toggle="tab">รหัสผ่าน</a></li>
                    <li><a href="#tab3" data-toggle="tab">แบ่งหุ้น/เก็บของ</a></li>
                    {{-- <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li> --}}
                    </ul>
                    <div class="tab-content no-padding">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="tab1" style="position: relative; height: 300px;">
                            <div class="col-sm-10">
                                <table class="table table-bordered bg-gray">
                                    <thead> 
                                        <tr> 
                                            <th class="text-center">#</th>
                                            <th class="text-center">ชื่อผู้ใช้</th>
                                            <th class="text-center">ระดับ</th>
                                            <th class="text-center">ชื่อ</th>
                                            <th class="text-center">โทร</th>
                                            <th class="text-center">สถานะ</th>
                                            <th class="text-center">บันทึก</th>
                                            <th class="text-center">เครดิต</th>
                                            <th class="text-center">ได้เสียสุทธิ</th>
                                            <th class="text-center">ใช้งานล่าสุด</th>
                                            <th class="text-center">Login ล่าสุด</th>
                                            <th class="text-center">IP ล่าสุด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">3m3k001</td>
                                            <td class="text-center">เมมเบอร์</td>
                                            <td class="text-center"><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td class="text-center"><select name="" id="">
                                                    <option value="">ปกติ</option>
                                                </select>
                                            </td>
                                            <td></td>
                                            <td class="text-right">0</td>
                                            <td class="text-right">0</td>
                                            <td></td>
                                            <td class="text-center">19-07-2017 20:32:09</td>
                                            <td class="text-center">134.196.33.166</td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                    </div>
                    <div class="chart tab-pane" id="tab2" style="position: relative; height: 300px;">
                            <div class="col-sm-4">
                                <table class="table table-bordered bg-gray">
                                    <thead> 
                                        <tr> 
                                            <th class="text-center">#</th>
                                            <th class="text-center">ชื่อผู้ใช้</th>
                                            <th class="text-center">ระดับ</th>
                                            <th class="text-center">รหัสผ่าน</th>
                                            <th class="text-center">บันทึก</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">3m3k001</td>
                                            <td class="text-center">เมมเบอร์</td>
                                            <td class="text-center"><input type="text"></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                    </div>
                     <div class="chart tab-pane" id="tab3" style="position: relative; height: 300px;">
                            <div class="col-sm-4">
                                <table class="table table-bordered bg-gray">
                                    <thead> 
                                        <tr> 
                                            <th class="text-center">#</th>
                                            <th class="text-center">ชื่อผู้ใช้</th>
                                            <th class="text-center">ระดับ</th>
                                            <th class="text-center">แบ่งหุ้น</th>
                                            <th class="text-center">เก็บของ</th>
                                            <th class="text-center">บันทึก</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">3m3k001</td>
                                            <td class="text-center">เมมเบอร์</td>
                                            <td class="text-center"><select name="" id="">
                                                    <option value="">0.0%</option>
                                                </select>
                                            </td>
                                             <td class="text-center"><select name="" id="">
                                                    <option value="">90.0%</option>
                                                </select>
                                                <input type="checkbox"> (เก็บของี่เกิน)
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                    </div>
                    </div>
                </div>
                </section>
            </div>
            
          
            
    </form>
</section>
@endsection

 