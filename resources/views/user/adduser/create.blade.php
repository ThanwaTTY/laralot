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
        1.เพิ่มสมาชิก
      </h1>
</section>


<section class="content">
<form class="form-horizontal" action="" method="post">
    {{ csrf_field() }}
        <div class="modal-content">
            <div class="box box-info">
                <div class="box-header with-border with-border">
                    <b>ข้อมูลสมาชิก</b>
                </div>
                        {{-- <form class="form-horizontal" action="" method="post"> --}}
                           
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <lable for="inputname" class="col-sm-2 control-label">ระดับ</lable>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="inputname" placeholder="Input name" value="">
                                                </div>

                                                <lable for="inpassword" class="col-sm-2 control-label">เครดิต</lable>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="inpassword" placeholder="Input password" value="">
                                                    *สูงสุด 0</p>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="inputname" class="col-sm-2 control-label">ชื่อผู้ใช้</lable>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="inputname" placeholder="Input name" value="">
                                                </div>

                                                <lable for="inpassword" class="col-sm-2 control-label">รหัสผ่าน</lable>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="inpassword" placeholder="Input password" value="">
                                                    <p>*อย่างน้อย 6 ตัวอักษร</p>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="inputname" class="col-sm-2 control-label">ชื่อ-สกุล</lable>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="inputname" placeholder="Input name" value="">
                                                </div>

                                                <lable for="inpassword" class="col-sm-2 control-label">เบอร์โทร</lable>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="inpassword" placeholder="Input password" value="">
                                                </div>
                                            </div>
                                    </div>                                  
                                </div>
   
                            </div>
            </div>
        
        </div>

        <div class="modal-content">
                <div class="box box-info">
                        <div class="box-header with-border with-border">
                            <b>แบ่งหุ้น / เก็บของ</b>
                        </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                    <lable for="inputname" class="col-sm-2 control-label">ได้รับ:90.00%</lable>
                                                    <div class="col-sm-2">
                                                            <select class="form-control" id="" name="">
                                                                <option value="">0.0%</option>
                                                                {{-- <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                                                                <option value="ธนาคารไทยพาญิชย์">ธนาคารไทยพาญิชย์</option>
                                                                <option value="ธนาคารกรุงไทย">ธนาคารกรุงเทพ</option>
                                                                <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                                                                <option value="ธนาคารทีเอ็มบีไทย">ธนาคารทีเอ็มบีไทย</option> --}}
                                                            </select>
                                                    </div>

                                                    <lable for="inpassword" class="col-sm-2 control-label">เก็บของ:</lable>
                                                    <div class="col-sm-2">
                                                        <select class="form-control" id="" name="">
                                                                <option value="">90.0%</option>
                                                                {{-- <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                                                                <option value="ธนาคารไทยพาญิชย์">ธนาคารไทยพาญิชย์</option>
                                                                <option value="ธนาคารกรุงไทย">ธนาคารกรุงเทพ</option>
                                                                <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                                                                <option value="ธนาคารทีเอ็มบีไทย">ธนาคารทีเอ็มบีไทย</option> --}}
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> เก็บของที่เกิน
                                                            </label>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>                                  
                                    </div>

                                </div>
                            
                </div>
        </div>

        <div class="modal-content">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <b>ข้อมูลการแทง</b>
                        <p class="pull-right">คัดลอกจาก
                            <select name="" class="" id="">
                                <option value="">สูงสุด</option>
                            </select>
                        </p>
                    </div>
                        <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    
                                        <div class="table-responsive"><!-- มี tab เลื่อนข้างล่าง  -->
                                            <table class="table table-bordered bg-gray">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" rowspan="2" style="padding-top:20px;">ประเภท</th>
                                                        <th class="text-center" colspan="3">จำนวนรายการ</th>
                                                    </tr>
                                                    <tr> 
                                                        <th>ขั้นต่ำ</th>
                                                        <th>สูงสุด</th>
                                                        <th>สูงสุดต่อเลข</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3 ตัวบน</td>
                                                        <td><input type="text" placeholder="5">/5</td>
                                                        <td><input type="text" placeholder="3000">/3,000</td>
                                                        <td><input type="text" placeholder="10000">/10,000</td>
                                                    </tr>

                                                    <tr>
                                                        <td>3 ตัวล่าง</td>
                                                        <td><input type="text" placeholder="5">/5</td>
                                                        <td><input type="text" placeholder="3000">/3,000</td>
                                                        <td><input type="text" placeholder="100000">/100,000</td>
                                                    </tr>

                                                        <tr>
                                                        <td>3 ตัวโต็ด</td>
                                                        <td><input type="text" placeholder="5">/5</td>
                                                        <td><input type="text" placeholder="3000">/3,000</td>
                                                        <td><input type="text" placeholder="30000">/30,000</td>
                                                    </tr>

                                                        <tr>
                                                        <td>2 ตัวบน</td>
                                                        <td><input type="text" placeholder="5">/5</td>
                                                        <td><input type="text" placeholder="10000">/10,000</td>
                                                        <td><input type="text" placeholder="100000">/100,000</td>
                                                    </tr>

                                                        <tr>
                                                        <td>2 ตัวล่าง</td>
                                                        <td><input type="text" placeholder="5">/5</td>
                                                        <td><input type="text" placeholder="10000">/10,000</td>
                                                        <td><input type="text" placeholder="100000">/100,000</td>
                                                    </tr>

                                                        <tr>
                                                        <td>2 ตัวโต็ด</td>
                                                        <td><input type="text" placeholder="5">/5</td>
                                                        <td><input type="text" placeholder="10000">/10,000</td>
                                                        <td><input type="text" placeholder="100000">/100,000</td>
                                                    </tr>

                                                        <tr>
                                                        <td>วิ่งบน</td>
                                                        <td><input type="text" placeholder="5">/5</td>
                                                        <td><input type="text" placeholder="100000">/100,000</td>
                                                        <td><input type="text" placeholder="300000">/300,000</td>
                                                    </tr>

                                                        <tr>
                                                        <td>วิ่งล่าง</td>
                                                        <td><input type="text" placeholder="5">/5</td>
                                                        <td><input type="text" placeholder="100000">/100,000</td>
                                                        <td><input type="text" placeholder="300000">/300,000</td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>                                  
                                </div>

                        </div>
                            
                </div>
        </div>

        <div class="modal-content">
                <div class="box box-info">
                        <div class="box-header with-border">
                            <b>อัตราจ่าย และ คอมมิชชั่น</b>
                            <p class="pull-right">คัดลอกจาก
                            <select name="" class="" id="">
                                <option value="">สูงสุด</option>
                            </select>
                        </p>
                        </div>
                       <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-12 connectedSortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="nav-tabs-custom">
                                <!-- Tabs within a box -->
                                    <ul class="nav nav-tabs pull-left">
                                        <li class="bg-primary active" style=""><a href="#tab1" data-toggle="tab">อัตราจ่าย/การแทง</a></li>
                                        <li class="bg-primary"><a href="#tab2" data-toggle="tab">3ตัวท้าย</a></li>
                                        {{-- <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li> --}}
                                    </ul>
                                    <div class="tab-content no-padding">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="tab1" style="position: relative; height: 300px;">
                                            <div class="col-sm-4">
                                                <table class="table table-bordered bg-gray">
                                                    <thead> 
                                                        <tr> 
                                                            <th class="text-center">เปิด/ปิด อัตราจ่าย</th>
                                                            <th class="text-center">เปิด/ปิด การแทง</th>
                                                        </tr>
                                                        <tr> 
                                                            <th></th>
                                                            <th class="text-center">3 ตัวท้าย</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class=""><input type="checkbox">หวยรัฐ 70</td>
                                                            <td class="text-center"><input type="checkbox"></td>
                                                        </tr>

                                                        <tr>
                                                            <td class=""><input type="checkbox">หวย 70</td>
                                                            <td class="text-center"><input type="checkbox"></td>
                                                        </tr>

                                                    </tbody>
                                                </table> 
                                            </div>
                                        </div>
                                        <div class="chart tab-pane" id="tab2" style="position: relative; height: 300px;">
                                                <div class="col-sm-12">
                                            <table class="table table-bordered bg-gray">
                                                    <thead> 
                                                        <tr> 
                                                            <th></th>
                                                            <th></th>
                                                            <th class="text-center">3 ตัวบน</th>
                                                            <th class="text-center">3 ตัวล่าง</th>
                                                            <th class="text-center">3 ตัวโต๊ด</th>
                                                            <th class="text-center">2 ตัวบน</th>
                                                            <th class="text-center">2 ตัวล่าง</th>
                                                            <th class="text-center">2 ตัวโต๊ด</th>
                                                            <th class="text-center">วิ่งบน</th>
                                                            <th class="text-center">วิ่งล่าง</th>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center" rowspan="2" style="padding-top:10px;">หวยรัฐ 70 <br> 3ตัวท้าย</th>
                                                            <td>อัตราจ่าย</td>
                                                            <td><input type="text" placeholder="550">/550</td>
                                                            <td><input type="text" placeholder="125">/125</td>
                                                            <td><input type="text" placeholder="105">/105</td>
                                                            <td><input type="text" placeholder="70">/70</td>
                                                            <td><input type="text" placeholder="70">/70</td>
                                                            <td><input type="text" placeholder="12">/12</td>
                                                            <td><input type="text" placeholder="3">/3</td>
                                                            <td><input type="text" placeholder="4">/4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>คอมมิชชั่น</td>
                                                            <td><input type="text" placeholder="33">/33</td>
                                                            <td><input type="text" placeholder="33">/33</td>
                                                            <td><input type="text" placeholder="33">/33</td>
                                                            <td><input type="text" placeholder="28">/28</td>
                                                            <td><input type="text" placeholder="28">/28</td>
                                                            <td><input type="text" placeholder="28">/28</td>
                                                            <td><input type="text" placeholder="12">/12</td>
                                                            <td><input type="text" placeholder="12">/12</td>
                                                        </tr>

                                                        <tr>
                                                            <th class="text-center" rowspan="2" style="padding-top:10px;">หวยรัฐ 70 <br> 3ตัวท้าย</th>
                                                            <td>อัตราจ่าย</td>
                                                            <td><input type="text" placeholder="550">/550</td>
                                                            <td><input type="text" placeholder="125">/125</td>
                                                            <td><input type="text" placeholder="105">/105</td>
                                                            <td><input type="text" placeholder="70">/70</td>
                                                            <td><input type="text" placeholder="70">/70</td>
                                                            <td><input type="text" placeholder="12">/12</td>
                                                            <td><input type="text" placeholder="3">/3</td>
                                                            <td><input type="text" placeholder="4">/4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>คอมมิชชั่น</td>
                                                            <td><input type="text" placeholder="33">/33</td>
                                                            <td><input type="text" placeholder="33">/33</td>
                                                            <td><input type="text" placeholder="33">/33</td>
                                                            <td><input type="text" placeholder="28">/28</td>
                                                            <td><input type="text" placeholder="28">/28</td>
                                                            <td><input type="text" placeholder="28">/28</td>
                                                            <td><input type="text" placeholder="12">/12</td>
                                                            <td><input type="text" placeholder="12">/12</td>
                                                        </tr>       
                                                    </tbody>
                                                </table> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                </div>  
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">เพิ่มสมาชิก</button>
        </div>
           
    </form>
</section>
@endsection

 