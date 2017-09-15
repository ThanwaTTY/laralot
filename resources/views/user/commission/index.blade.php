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
        4. อัตราจ่าย/คอมมิชชั่น >> 3M3K
      </h1>
</section>


<section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="one">
                         <p class="bold">คัดลอก
                         <b>1. เลือกว่าต้องการคัดลอกจากใคร 2. ติ๊กเลือกว่าจะตั้งค่าดังกล่าวให้ใคร 3. กดปุ่มแก้ไข</b></p>
                         <p class="bold">*** ระบบทจะำการกรอกข้อมูลให้ทั้ง อัตราจ่าย และคอมมิชชั่น</p>
                         <b>สถานะ:</b> <b style="background:#ffe066;">เหลือง = ระงับ,</b> <b style="background:#ff6666;">แดง = ล็อค,</b> 
                         <b style="background:#b3b3b3;">เทา = อัตราจ่ายหรือชนิดการแทงถูกปิด</b>
                    </div>
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
                    <li class="bg-primary active" style=""><a href="#tab1" data-toggle="tab">อัตราจ่าย</a></li>
                    <li class="bg-primary"><a href="#tab2" data-toggle="tab">คอมมิชชั่น</a></li>
                    {{-- <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li> --}}
                    </ul>
                    <div class="tab-content no-padding">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="tab1" style="position: relative; height: 300px;">
                            <div class="col-sm-10">
                                <table class="table table-bordered bg-gray">
                                    <thead> 
                                        <tr> 
                                            <th class="text-center" colspan="12" style="color:#0000ff;">ขั้นต่ำ 3 ตัวท้าย</th>
                                        </tr>
                                         <tr> 
                                            <th class="text-center" colspan="3" style="padding-top:20px;">
                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                            </th>
                                            <th class="text-center" style="padding-top:20px;"><input type="checkbox"></th>
                                            <th class="text-center">3 ตัวบน<input type="text">>=5</th>
                                            <th class="text-center">3 ตัวล่าง<input type="text">>=5</th>
                                            <th class="text-center">3 ตัวโต๊ด<input type="text">>=5</th>
                                            <th class="text-center">2 ตัวบน<input type="text">>=5</th>
                                            <th class="text-center">2 ตัวล่าง<input type="text">>=5</th>
                                            <th class="text-center">2 ตัวโต๊ด<input type="text">>=5</th>
                                            <th class="text-center">วิ่งบน<input type="text">>=5</th>
                                            <th class="text-center">วิ่งล่าง<input type="text">>=5</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">3M3K001</td>
                                            <td class="text-center">เมมเบอร์</td>
                                            <td class="text-center"><input type="checkbox"></td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">3M3K002</td>
                                            <td class="text-center">เมมเบอร์</td>
                                            <td class="text-center"><input type="checkbox"></td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                    </div>
                    <div class="chart tab-pane" id="tab2" style="position: relative; height: 300px;">
                            <div class="col-sm-10">
                                <table class="table table-bordered bg-gray">
                                    <thead> 
                                        <tr> 
                                            <th class="text-center" colspan="12" style="color:#0000ff;">สูงสุด 3 ตัวท้าย</th>
                                        </tr>
                                         <tr> 
                                            <th class="text-center" colspan="3" style="padding-top:20px;">
                                                <button type="submit" class="btn btn-primary btn-sm">แก้ไข</button>
                                                <button type="submit" class="btn btn-primary btn-sm">ยกเลิก</button>
                                            </th>
                                            <th class="text-center" style="padding-top:20px;"><input type="checkbox"></th>
                                            <th class="text-center">3 ตัวบน<input type="text">>=3000</th>
                                            <th class="text-center">3 ตัวล่าง<input type="text">>=3000</th>
                                            <th class="text-center">3 ตัวโต๊ด<input type="text">>=3000</th>
                                            <th class="text-center">2 ตัวบน<input type="text">>=10000</th>
                                            <th class="text-center">2 ตัวล่าง<input type="text">>=10000</th>
                                            <th class="text-center">2 ตัวโต๊ด<input type="text">>=10000</th>
                                            <th class="text-center">วิ่งบน<input type="text">>=10000</th>
                                            <th class="text-center">วิ่งล่าง<input type="text">>=10000</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">3M3K001</td>
                                            <td class="text-center">เมมเบอร์</td>
                                            <td class="text-center"><input type="checkbox"></td>
                                            <td>3000</td>
                                            <td>3000</td>
                                            <td>3000</td>
                                            <td>10000</td>
                                            <td>10000</td>
                                            <td>10000</td>
                                            <td>10000</td>
                                            <td>10000</td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">3M3K002</td>
                                            <td class="text-center">เมมเบอร์</td>
                                            <td class="text-center"><input type="checkbox"></td>
                                            <td>3000</td>
                                            <td>3000</td>
                                            <td>3000</td>
                                            <td>10000</td>
                                            <td>10000</td>
                                            <td>10000</td>
                                            <td>10000</td>
                                            <td>10000</td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                    </div>
                   
                </div>
                </section>
            </div>
            
          
            
    </form>
</section>
@endsection

 