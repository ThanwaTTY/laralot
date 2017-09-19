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

    p.one {
    border-style: solid;
    border-color: #006699;
    padding: 15px;
    background: #b3e6ff;
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
            จัดการสมาชิก 
        </li>
        <li>
            2. ข้อมูลทั่วไป/เก็บของ
        </li>
      </ul><!-- /.breadcrumb -->
      <span id="global-clock" class="pull-right"></span>
    </div>

<!-- /section:basics/content.breadcrumbs -->
      <div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
<<<<<<< HEAD
              <h1>
                2. ข้อมูลทั่วไป/เก็บของ
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  <a href="https://agent.superlot999.com/users/edit1/9306?tab1=general&amp;order=username_asc" class="ajax">3M3K</a>
                </small>
              </h1>
          </div>

          <div class="min-width-800 max-width-1100">
            <div class="alert alert-info">
              <b>สถานะ:</b> <span class="bg-warning">เหลือง=ระงับ</span>, <span class="bg-danger">แดง=ล็อค</span>
            </div>
          </div>

          <div class="min-width-800 max-width-1100">
            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
              <li class="js-change-tab active" data-tab1="general"><a href="#general" data-toggle="tab">ข้อมูลทั่วไป</a></li>
              <li class="js-change-tab" data-tab1="password"><a href="#password" data-toggle="tab">รหัสผ่าน</a></li>
              <li class="js-change-tab" data-tab1="credit"><a href="#credit" data-toggle="tab">แบ่งหุ้น/เก็บของ</a></li>
              <li class="pull-right right-padding-10 users__edit-options">
                <span class="bolder">แสดง</span>
                <select id="users-edit-filter">
                    <option value="4">ทั้งหมด</option>
                    <option value="1" selected="selected">ปกติ</option>
                    <option value="2">ระงับ</option>
                    <option value="3">ล็อค</option>
                </select>
                <span class="bolder">เรียง</span>
                <select id="users-edit-order">
                  <option value="https://agent.superlot999.com/users/edit1/9306?tab1=general&amp;order=username_asc" selected="selected">ชื่อสมาชิก ก่อน -&gt; หลัง</option>
                  <option value="https://agent.superlot999.com/users/edit1/9306?tab1=general&amp;order=username_desc">ชื่อสมาชิก หลัง -&gt; ก่อน</option>
                  <option value="https://agent.superlot999.com/users/edit1/9306?tab1=general&amp;order=id_asc">เวลาที่สร้าง ก่อน -&gt; หลัง</option>
                  <option value="https://agent.superlot999.com/users/edit1/9306?tab1=general&amp;order=id_desc">เวลาที่สร้าง หลัง -&gt; ก่อน</option>
                </select>
              </li>
            </ul>
          </div>

          <div class="tab-content no-margin-top no-padding width-800 max-width-1100">
            <!-- Tab 1 General -->
                <div class="tab-pane simple active" id="general">
                    <table class="table table-bordered table-border-dark table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>ชื่อผู้ใช้</th>
                            <th class="ac">ระดับ</th>
                            <th>ชื่อ</th>
                            <th>โทร</th>
                            <th>สถานะ</th>
                            <th class="ac">บันทึก</th>
                            <th class="ac">เครดิต</th>
                            <th class="ac">ได้เสียสุทธิ</th>
                            <th class="ac">ใช้งานล่าสุด</th>
                            <th class="ac">Login ล่าสุด</th>
                            <th class="ac">IP ล่าสุด</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr data-parent-id="9306" data-member-id="9474" data-status="1" class=" ">
                            <td class="id">1</td>
                            <td>3M3K001 </td>
                            <td class="type">เมมเบอร์</td>
                            <td class="name"><input class="form-control input-sm" data-old="" name="name" type="text" value=""></td>
                            <td class="phone"><input class="form-control input-sm" data-old="" name="phone" type="text" value=""></td>
                            <td class="status">
                              <select data-old="1" name="status">
                              <option value="1" selected="selected">ปกติ</option>
                              <option value="2">ระงับ</option>
                              <option value="3">ล็อค</option>
                              </select>
                            </td>
                            <td class="control child-hidden">
                              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                            </td>
                            <td class="ar">0</td>
                            <td class="ar n2c">0</td>
                            <td class="ac am p5"></td>
                            <td class="ac am p5">19-07-2017<br>20:32:09</td>
                            <td class="ac am p5">134.196.33.166</td>
                          </tr>
                          <tr data-parent-id="9306" data-member-id="10230" data-status="1" class="bg-info">
                            <td class="id">2</td>
                            <td>3M3K002</td>
                            <td class="type">เมมเบอร์</td>
                            <td class="name"><input class="form-control input-sm" data-old="" name="name" type="text" value=""></td>
                            <td class="phone"><input class="form-control input-sm" data-old="" name="phone" type="text" value=""></td>
                            <td class="status">
                              <select data-old="1" name="status">
                                <option value="1" selected="selected">ปกติ</option>
                                <option value="2">ระงับ</option>
                                <option value="3">ล็อค</option>
                              </select>
                            </td>
                            <td class="control child-hidden">
                              <button class="btn-save btn btn-xs btn-success no-border" style="display: inline-block;"><i class="ace-icon fa fa-check"></i></button>
                              <button class="btn-cancel btn btn-xs btn-danger no-border" style="display: inline-block;"><i class="ace-icon fa fa-times"></i></button>
                            </td>
                            <td class="ar">0</td>
                            <td class="ar n2c">0</td>
                            <td class="ac am p5"></td>
                            <td class="ac am p5">04-07-2017<br>21:01:16</td>
                            <td class="ac am p5">110.77.175.52</td>
                          </tr>
                          <tr data-parent-id="9306" data-member-id="11239" data-status="1" class=" ">
                            <td class="id">3</td>
                            <td>3M3KPALM</td>
                            <td class="type">เมมเบอร์</td>
                            <td class="name"><input class="form-control input-sm" data-old="ปัทนพงษ์" name="name" type="text" value="ปัทนพงษ์"></td>
                            <td class="phone"><input class="form-control input-sm" data-old="0812223334" name="phone" type="text" value="0812223334"></td>
                            <td class="status">
                              <select data-old="1" name="status">
                                <option value="1" selected="selected">ปกติ</option>
                                <option value="2">ระงับ</option>
                                <option value="3">ล็อค</option>
                              </select>
                            </td>
                            <td class="control child-hidden">
                              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                            </td>
                            <td class="ar">0</td>
                            <td class="ar n2c">0</td>
                            <td class="ac am p5"></td>
                            <td class="ac am p5">30-08-2017<br>10:12:57</td>
                            <td class="ac am p5">183.89.107.58</td>
                          </tr>
                          <tr data-parent-id="9306" data-member-id="11240" data-status="1" class=" ">
                            <td class="id">4</td>
                            <td>3M3KTOR</td>
                            <td class="type">เมมเบอร์</td>
                            <td class="name"><input class="form-control input-sm" data-old="thanwa" name="name" type="text" value="thanwa"></td>
                            <td class="phone"><input class="form-control input-sm" data-old="0854203799" name="phone" type="text" value="0854203799"></td>
                            <td class="status">
                              <select data-old="1" name="status">
                                <option value="1" selected="selected">ปกติ</option>
                                <option value="2">ระงับ</option>
                                <option value="3">ล็อค</option>
                              </select>
                            </td>
                            <td class="control child-hidden">
                              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                            </td>
                            <td class="ar">0</td>
                            <td class="ar n2c">0</td>
                            <td class="ac am p5"></td>
                            <td class="ac am p5"></td>
                            <td class="ac am p5"></td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            <!-- Tab 2 Password -->
                <div class="tab-pane simple" id="password">
                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>ชื่อผู้ใช้</th>
                            <th>ระดับ</th>
                            <th>รหัสผ่าน</th>
                            <th>บันทึก</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr data-parent-id="9306" data-member-id="9474" class=" ">
                            <td class="id">1</td>
                            <td>3M3K001</td>
                            <td class="type">เมมเบอร์</td>
                            <td class="password"><input class="form-control input-sm" data-old="" name="password" type="password" value=""></td>
                            <td class="control child-hidden">
                              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                            </td>
                          </tr>
                          <tr data-parent-id="9306" data-member-id="10230" class=" ">
                            <td class="id">2</td>
                            <td>3M3K002</td>
                            <td class="type">เมมเบอร์</td>
                            <td class="password"><input class="form-control input-sm" data-old="" name="password" type="password" value=""></td>
                            <td class="control child-hidden">
                              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                            </td>
                          </tr>
                          <tr data-parent-id="9306" data-member-id="11239" class=" ">
                            <td class="id">3</td>
                            <td>3M3KPALM</td>
                            <td class="type">เมมเบอร์</td>
                            <td class="password"><input class="form-control input-sm" data-old="" name="password" type="password" value=""></td>
                            <td class="control child-hidden">
                              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                            </td>
                          </tr>
                          <tr data-parent-id="9306" data-member-id="11240" class=" ">
                            <td class="id">4</td>
                            <td>3M3KTOR</td>
                            <td class="type">เมมเบอร์</td>
                            <td class="password"><input class="form-control input-sm" data-old="" name="password" type="password" value=""></td>
                            <td class="control child-hidden">
                              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            <!-- Tab 3 Credit -->
                <div class="tab-pane simple" id="credit">
                      <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>ชื่อผู้ใช้</th>
                            <th>ระดับ</th>
                            <th>แบ่งหุ้น</th>
                            <th>เก็บของ <a href="https://agent.superlot999.com/help" target="_blank"><i class="fa fa-question-circle"></i></a></th>
                            <th>บันทึก</th>
                          </tr>
                        </thead>
                        <tbody>
=======
  <h1>
    2. ข้อมูลทั่วไป/เก็บของ
    <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
                <a href="#" class="ajax">3M3K</a>
          </small>
  </h1>
</div>



<div class="min-width-800 max-width-1100">
  <div class="alert alert-info">
    <b>สถานะ:</b> <span class="bg-warning">เหลือง=ระงับ</span>, <span class="bg-danger">แดง=ล็อค</span>
  </div>
</div>

<div class="min-width-800 max-width-1100">
  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
    <li class="js-change-tab active" data-tab1="general"><a href="#general" data-toggle="tab">ข้อมูลทั่วไป</a></li>
    <li class="js-change-tab" data-tab1="password"><a href="#password" data-toggle="tab">รหัสผ่าน</a></li>
    <li class="js-change-tab" data-tab1="credit"><a href="#credit" data-toggle="tab">แบ่งหุ้น/เก็บของ</a></li>

    <li class="pull-right right-padding-10 users__edit-options">
  
  <span class="bolder">แสดง</span>
  <select id="users-edit-filter">
    <option value="4">ทั้งหมด</option>
    <option value="1" selected="selected">ปกติ</option>
    <option value="2">ระงับ</option>
    <option value="3">ล็อค</option>
  </select>

  <span class="bolder">เรียง</span>
  <select id="users-edit-order">
    <option value="#" selected="selected">ชื่อสมาชิก ก่อน -&gt; หลัง</option>
    <option value="#">ชื่อสมาชิก หลัง -&gt; ก่อน</option>
    <option value="#">เวลาที่สร้าง ก่อน -&gt; หลัง</option>
    <option value="#">เวลาที่สร้าง หลัง -&gt; ก่อน</option>
  </select>
</li>
  </ul>
</div>

<div class="tab-content no-margin-top no-padding width-800 max-width-1100">

  <!-- Tab 1 General -->
  <div class="tab-pane simple active" id="general">
    <table class="table table-bordered table-border-dark table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
      <thead>
        <tr>
          <th>#</th>
          <th>ชื่อผู้ใช้</th>
          <th class="ac">ระดับ</th>
          <th>ชื่อ</th>
          <th>โทร</th>
          <th>สถานะ</th>
          <th class="ac">บันทึก</th>
          <th class="ac">เครดิต</th>
          <th class="ac">ได้เสียสุทธิ</th>
          <th class="ac">ใช้งานล่าสุด</th>
          <th class="ac">Login ล่าสุด</th>
          <th class="ac">IP ล่าสุด</th>
        </tr>
      </thead>
      <tbody>
                            <tr data-parent-id="9306" data-member-id="9474" data-status="1" class=" ">
            <td class="id">1</td>

            <td>
                              3M3K001
                          </td>

            <td class="type">
              เมมเบอร์
                          </td>

            <td class="name"><input class="form-control input-sm" data-old="" name="name" type="text" value=""></td>

            <td class="phone"><input class="form-control input-sm" data-old="" name="phone" type="text" value=""></td>

            <td class="status"><select data-old="1" name="status"><option value="1" selected="selected">ปกติ</option><option value="2">ระงับ</option><option value="3">ล็อค</option></select></td>

            <td class="control child-hidden">
              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
            </td>

            <td class="ar">0</td>

            <td class="ar n2c">0</td>

            <td class="ac am p5">
                          </td>

            <td class="ac am p5">
                              19-07-2017<br>20:32:09
                          </td>

            <td class="ac am p5">134.196.33.166</td>
          </tr>
                            <tr data-parent-id="9306" data-member-id="10230" data-status="1" class="bg-info">
            <td class="id">2</td>

            <td>
                              3M3K002
                          </td>

            <td class="type">
              เมมเบอร์
                          </td>

            <td class="name"><input class="form-control input-sm" data-old="" name="name" type="text" value=""></td>

            <td class="phone"><input class="form-control input-sm" data-old="" name="phone" type="text" value=""></td>

            <td class="status"><select data-old="1" name="status"><option value="1" selected="selected">ปกติ</option><option value="2">ระงับ</option><option value="3">ล็อค</option></select></td>

            <td class="control child-hidden">
              <button class="btn-save btn btn-xs btn-success no-border" style="display: inline-block;"><i class="ace-icon fa fa-check"></i></button>
              <button class="btn-cancel btn btn-xs btn-danger no-border" style="display: inline-block;"><i class="ace-icon fa fa-times"></i></button>
            </td>

            <td class="ar">0</td>

            <td class="ar n2c">0</td>

            <td class="ac am p5">
                          </td>

            <td class="ac am p5">
                              04-07-2017<br>21:01:16
                          </td>

            <td class="ac am p5">110.77.175.52</td>
          </tr>
                            <tr data-parent-id="9306" data-member-id="11239" data-status="1" class=" ">
            <td class="id">3</td>

            <td>
                              3M3KPALM
                          </td>

            <td class="type">
              เมมเบอร์
                          </td>

            <td class="name"><input class="form-control input-sm" data-old="ปัทนพงษ์" name="name" type="text" value="ปัทนพงษ์"></td>

            <td class="phone"><input class="form-control input-sm" data-old="0812223334" name="phone" type="text" value="0812223334"></td>

            <td class="status"><select data-old="1" name="status"><option value="1" selected="selected">ปกติ</option><option value="2">ระงับ</option><option value="3">ล็อค</option></select></td>

            <td class="control child-hidden">
              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
            </td>

            <td class="ar">0</td>

            <td class="ar n2c">0</td>

            <td class="ac am p5">
                          </td>

            <td class="ac am p5">
                              30-08-2017<br>10:12:57
                          </td>

            <td class="ac am p5">183.89.107.58</td>
          </tr>
                            <tr data-parent-id="9306" data-member-id="11240" data-status="1" class=" ">
            <td class="id">4</td>

            <td>
                              3M3KTOR
                          </td>

            <td class="type">
              เมมเบอร์
                          </td>

            <td class="name"><input class="form-control input-sm" data-old="thanwa" name="name" type="text" value="thanwa"></td>

            <td class="phone"><input class="form-control input-sm" data-old="0854203799" name="phone" type="text" value="0854203799"></td>

            <td class="status"><select data-old="1" name="status"><option value="1" selected="selected">ปกติ</option><option value="2">ระงับ</option><option value="3">ล็อค</option></select></td>

            <td class="control child-hidden">
              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
            </td>

            <td class="ar">0</td>

            <td class="ar n2c">0</td>

            <td class="ac am p5">
                          </td>

            <td class="ac am p5">
                          </td>

            <td class="ac am p5"></td>
          </tr>
              </tbody>
    </table>
  </div>

  <!-- Tab 2 Password -->
  <div class="tab-pane simple" id="password">
    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
      <thead>
        <tr><th>#</th>
        <th>ชื่อผู้ใช้</th>
        <th>ระดับ</th>
        <th>รหัสผ่าน</th>
        <th>บันทึก</th>
      </tr></thead>
      <tbody>
                            <tr data-parent-id="9306" data-member-id="9474" class=" ">
            <td class="id">1</td>
            <td>
                              3M3K001
                          </td>
            <td class="type">
              เมมเบอร์
                          </td>
            <td class="password"><input class="form-control input-sm" data-old="" name="password" type="password" value=""></td>
            <td class="control child-hidden">
              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
            </td>
          </tr>
                            <tr data-parent-id="9306" data-member-id="10230" class=" ">
            <td class="id">2</td>
            <td>
                              3M3K002
                          </td>
            <td class="type">
              เมมเบอร์
                          </td>
            <td class="password"><input class="form-control input-sm" data-old="" name="password" type="password" value=""></td>
            <td class="control child-hidden">
              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
            </td>
          </tr>
                            <tr data-parent-id="9306" data-member-id="11239" class=" ">
            <td class="id">3</td>
            <td>
                              3M3KPALM
                          </td>
            <td class="type">
              เมมเบอร์
                          </td>
            <td class="password"><input class="form-control input-sm" data-old="" name="password" type="password" value=""></td>
            <td class="control child-hidden">
              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
            </td>
          </tr>
                            <tr data-parent-id="9306" data-member-id="11240" class=" ">
            <td class="id">4</td>
            <td>
                              3M3KTOR
                          </td>
            <td class="type">
              เมมเบอร์
                          </td>
            <td class="password"><input class="form-control input-sm" data-old="" name="password" type="password" value=""></td>
            <td class="control child-hidden">
              <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
              <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
            </td>
          </tr>
              </tbody>
    </table>
  </div>

  <!-- Tab 3 Credit -->
  <div class="tab-pane simple" id="credit">
    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
      <thead>
        <tr><th>#</th>
        <th>ชื่อผู้ใช้</th>
        <th>ระดับ</th>
        <th>แบ่งหุ้น</th>
        <th>เก็บของ <a href="#" target="_blank"><i class="fa fa-question-circle"></i></a></th>
        <th>บันทึก</th>
      </tr></thead>
      <tbody>
>>>>>>> 428f2e7aacc22047085b8ece7bae00ba9bafcd59
                            <tr data-parent-id="9306" data-member-id="9474" data-user-type-id="1" class=" ">
                              <td class="id">1</td>
                              <td>3M3K001</td>
                              <td class="type">เมมเบอร์</td>
                                <input id="sum-share-take" data-old="90.00" name="" type="hidden" value="90.00">
                              <td class="share">
                                <select data-old="0.0" name="share">
                                  <option value="0.0" selected="selected">0.0%</option>
                                </select>
                              </td>
                              <td class="take">
                                <select data-old="90.0" name="take">
                                  <option value="90.0" selected="selected">90.0%</option>
                                  <option value="89.5">89.5%</option>
                                  <option value="89.0">89.0%</option>
                                  <option value="88.5">88.5%</option>
                                  <option value="88.0">88.0%</option>
                                  <option value="87.5">87.5%</option>
                                  <option value="87.0">87.0%</option>
                                  <option value="86.5">86.5%</option>
                                  <option value="86.0">86.0%</option>
                                  <option value="85.5">85.5%</option>
                                  <option value="85.0">85.0%</option>
                                  <option value="84.5">84.5%</option>
                                  <option value="84.0">84.0%</option>
                                  <option value="83.5">83.5%</option>
                                  <option value="83.0">83.0%</option>
                                  <option value="82.5">82.5%</option>
                                  <option value="82.0">82.0%</option>
                                  <option value="81.5">81.5%</option>
                                  <option value="81.0">81.0%</option>
                                  <option value="80.5">80.5%</option>
                                  <option value="80.0">80.0%</option>
                                  <option value="79.5">79.5%</option>
                                  <option value="79.0">79.0%</option>
                                  <option value="78.5">78.5%</option>
                                  <option value="78.0">78.0%</option>
                                  <option value="77.5">77.5%</option>
                                  <option value="77.0">77.0%</option>
                                  <option value="76.5">76.5%</option>
                                  <option value="76.0">76.0%</option>
                                  <option value="75.5">75.5%</option>
                                  <option value="75.0">75.0%</option>
                                  <option value="74.5">74.5%</option>
                                  <option value="74.0">74.0%</option>
                                  <option value="73.5">73.5%</option>
                                  <option value="73.0">73.0%</option>
                                  <option value="72.5">72.5%</option>
                                  <option value="72.0">72.0%</option>
                                  <option value="71.5">71.5%</option>
                                  <option value="71.0">71.0%</option>
                                  <option value="70.5">70.5%</option>
                                  <option value="70.0">70.0%</option>
                                  <option value="69.5">69.5%</option>
                                  <option value="69.0">69.0%</option>
                                  <option value="68.5">68.5%</option>
                                  <option value="68.0">68.0%</option>
                                  <option value="67.5">67.5%</option>
                                  <option value="67.0">67.0%</option>
                                  <option value="66.5">66.5%</option>
                                  <option value="66.0">66.0%</option>
                                  <option value="65.5">65.5%</option>
                                  <option value="65.0">65.0%</option>
                                  <option value="64.5">64.5%</option>
                                  <option value="64.0">64.0%</option>
                                  <option value="63.5">63.5%</option>
                                  <option value="63.0">63.0%</option>
                                  <option value="62.5">62.5%</option>
                                  <option value="62.0">62.0%</option>
                                  <option value="61.5">61.5%</option>
                                  <option value="61.0">61.0%</option>
                                  <option value="60.5">60.5%</option>
                                  <option value="60.0">60.0%</option>
                                  <option value="59.5">59.5%</option>
                                  <option value="59.0">59.0%</option>
                                  <option value="58.5">58.5%</option>
                                  <option value="58.0">58.0%</option>
                                  <option value="57.5">57.5%</option>
                                  <option value="57.0">57.0%</option>
                                  <option value="56.5">56.5%</option>
                                  <option value="56.0">56.0%</option>
                                  <option value="55.5">55.5%</option>
                                  <option value="55.0">55.0%</option>
                                  <option value="54.5">54.5%</option>
                                  <option value="54.0">54.0%</option>
                                  <option value="53.5">53.5%</option>
                                  <option value="53.0">53.0%</option>
                                  <option value="52.5">52.5%</option>
                                  <option value="52.0">52.0%</option>
                                  <option value="51.5">51.5%</option>
                                  <option value="51.0">51.0%</option>
                                  <option value="50.5">50.5%</option>
                                  <option value="50.0">50.0%</option>
                                  <option value="49.5">49.5%</option>
                                  <option value="49.0">49.0%</option>
                                  <option value="48.5">48.5%</option>
                                  <option value="48.0">48.0%</option>
                                  <option value="47.5">47.5%</option>
                                  <option value="47.0">47.0%</option>
                                  <option value="46.5">46.5%</option>
                                  <option value="46.0">46.0%</option>
                                  <option value="45.5">45.5%</option>
                                  <option value="45.0">45.0%</option>
                                  <option value="44.5">44.5%</option>
                                  <option value="44.0">44.0%</option>
                                  <option value="43.5">43.5%</option>
                                  <option value="43.0">43.0%</option>
                                  <option value="42.5">42.5%</option>
                                  <option value="42.0">42.0%</option>
                                  <option value="41.5">41.5%</option>
                                  <option value="41.0">41.0%</option>
                                  <option value="40.5">40.5%</option>
                                  <option value="40.0">40.0%</option>
                                  <option value="39.5">39.5%</option>
                                  <option value="39.0">39.0%</option>
                                  <option value="38.5">38.5%</option>
                                  <option value="38.0">38.0%</option>
                                  <option value="37.5">37.5%</option>
                                  <option value="37.0">37.0%</option>
                                  <option value="36.5">36.5%</option>
                                  <option value="36.0">36.0%</option>
                                  <option value="35.5">35.5%</option>
                                  <option value="35.0">35.0%</option>
                                  <option value="34.5">34.5%</option>
                                  <option value="34.0">34.0%</option>
                                  <option value="33.5">33.5%</option>
                                  <option value="33.0">33.0%</option>
                                  <option value="32.5">32.5%</option>
                                  <option value="32.0">32.0%</option>
                                  <option value="31.5">31.5%</option>
                                  <option value="31.0">31.0%</option>
                                  <option value="30.5">30.5%</option>
                                  <option value="30.0">30.0%</option>
                                  <option value="29.5">29.5%</option>
                                  <option value="29.0">29.0%</option>
                                  <option value="28.5">28.5%</option>
                                  <option value="28.0">28.0%</option>
                                  <option value="27.5">27.5%</option>
                                  <option value="27.0">27.0%</option>
                                  <option value="26.5">26.5%</option>
                                  <option value="26.0">26.0%</option>
                                  <option value="25.5">25.5%</option>
                                  <option value="25.0">25.0%</option>
                                  <option value="24.5">24.5%</option>
                                  <option value="24.0">24.0%</option>
                                  <option value="23.5">23.5%</option>
                                  <option value="23.0">23.0%</option>
                                  <option value="22.5">22.5%</option>
                                  <option value="22.0">22.0%</option>
                                  <option value="21.5">21.5%</option>
                                  <option value="21.0">21.0%</option>
                                  <option value="20.5">20.5%</option>
                                  <option value="20.0">20.0%</option>
                                  <option value="19.5">19.5%</option>
                                  <option value="19.0">19.0%</option>
                                  <option value="18.5">18.5%</option>
                                  <option value="18.0">18.0%</option>
                                  <option value="17.5">17.5%</option>
                                  <option value="17.0">17.0%</option>
                                  <option value="16.5">16.5%</option>
                                  <option value="16.0">16.0%</option>
                                  <option value="15.5">15.5%</option>
                                  <option value="15.0">15.0%</option>
                                  <option value="14.5">14.5%</option>
                                  <option value="14.0">14.0%</option>
                                  <option value="13.5">13.5%</option>
                                  <option value="13.0">13.0%</option>
                                  <option value="12.5">12.5%</option>
                                  <option value="12.0">12.0%</option>
                                  <option value="11.5">11.5%</option>
                                  <option value="11.0">11.0%</option>
                                  <option value="10.5">10.5%</option>
                                  <option value="10.0">10.0%</option>
                                  <option value="9.5">9.5%</option>
                                  <option value="9.0">9.0%</option>
                                  <option value="8.5">8.5%</option>
                                  <option value="8.0">8.0%</option>
                                  <option value="7.5">7.5%</option>
                                  <option value="7.0">7.0%</option>
                                  <option value="6.5">6.5%</option>
                                  <option value="6.0">6.0%</option>
                                  <option value="5.5">5.5%</option>
                                  <option value="5.0">5.0%</option>
                                  <option value="4.5">4.5%</option>
                                  <option value="4.0">4.0%</option>
                                  <option value="3.5">3.5%</option>
                                  <option value="3.0">3.0%</option>
                                  <option value="2.5">2.5%</option>
                                  <option value="2.0">2.0%</option>
                                  <option value="1.5">1.5%</option>
                                  <option value="1.0">1.0%</option>
                                  <option value="0.5">0.5%</option>
                                  <option value="0.0">0.0%</option>
                                </select>
                                <div class="inline checkbox no-margin">
                                  <input name="take_remain" type="hidden" value="0">
                                  <label>
                                    ( <input data-old="0" class="" name="take_remain" type="checkbox" value="1"> <span class="lbl"> เก็บของที่เกิน</span> )
                                    <!-- <input data-old="0" class="hidden" name="take_remain" type="checkbox" value="1"> -->
                                  </label>
                                </div>
                              </td>
                              <td class="control child-hidden">
                                <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                                <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                              </td>
                            </tr>
                            <tr data-parent-id="9306" data-member-id="10230" data-user-type-id="1" class=" ">
                              <td class="id">2</td>
                              <td>3M3K002</td>
                              <td class="type">เมมเบอร์</td>
                                <input id="sum-share-take" data-old="90.00" name="" type="hidden" value="90.00">
                              <td class="share">
                                <select data-old="0.0" name="share">
                                  <option value="0.0" selected="selected">0.0%</option>
                                </select>
                              </td>
                              <td class="take">
                                <select data-old="90.0" name="take">
                                  <option value="90.0" selected="selected">90.0%</option>
                                  <option value="89.5">89.5%</option><option value="89.0">89.0%</option>
                                  <option value="88.5">88.5%</option><option value="88.0">88.0%</option>
                                  <option value="87.5">87.5%</option><option value="87.0">87.0%</option>
                                  <option value="86.5">86.5%</option><option value="86.0">86.0%</option>
                                  <option value="85.5">85.5%</option><option value="85.0">85.0%</option>
                                  <option value="84.5">84.5%</option><option value="84.0">84.0%</option>
                                  <option value="83.5">83.5%</option><option value="83.0">83.0%</option>
                                  <option value="82.5">82.5%</option><option value="82.0">82.0%</option>
                                  <option value="81.5">81.5%</option><option value="81.0">81.0%</option>
                                  <option value="80.5">80.5%</option><option value="80.0">80.0%</option>
                                  <option value="79.5">79.5%</option><option value="79.0">79.0%</option>
                                  <option value="78.5">78.5%</option><option value="78.0">78.0%</option>
                                  <option value="77.5">77.5%</option><option value="77.0">77.0%</option>
                                  <option value="76.5">76.5%</option><option value="76.0">76.0%</option>
                                  <option value="75.5">75.5%</option><option value="75.0">75.0%</option>
                                  <option value="74.5">74.5%</option><option value="74.0">74.0%</option>
                                  <option value="73.5">73.5%</option><option value="73.0">73.0%</option>
                                  <option value="72.5">72.5%</option><option value="72.0">72.0%</option>
                                  <option value="71.5">71.5%</option><option value="71.0">71.0%</option>
                                  <option value="70.5">70.5%</option><option value="70.0">70.0%</option>
                                  <option value="69.5">69.5%</option><option value="69.0">69.0%</option>
                                  <option value="68.5">68.5%</option><option value="68.0">68.0%</option>
                                  <option value="67.5">67.5%</option><option value="67.0">67.0%</option>
                                  <option value="66.5">66.5%</option><option value="66.0">66.0%</option>
                                  <option value="65.5">65.5%</option><option value="65.0">65.0%</option>
                                  <option value="64.5">64.5%</option><option value="64.0">64.0%</option>
                                  <option value="63.5">63.5%</option><option value="63.0">63.0%</option>
                                  <option value="62.5">62.5%</option><option value="62.0">62.0%</option>
                                  <option value="61.5">61.5%</option><option value="61.0">61.0%</option>
                                  <option value="60.5">60.5%</option><option value="60.0">60.0%</option>
                                  <option value="59.5">59.5%</option><option value="59.0">59.0%</option>
                                  <option value="58.5">58.5%</option><option value="58.0">58.0%</option>
                                  <option value="57.5">57.5%</option><option value="57.0">57.0%</option>
                                  <option value="56.5">56.5%</option><option value="56.0">56.0%</option>
                                  <option value="55.5">55.5%</option><option value="55.0">55.0%</option>
                                  <option value="54.5">54.5%</option><option value="54.0">54.0%</option>
                                  <option value="53.5">53.5%</option><option value="53.0">53.0%</option>
                                  <option value="52.5">52.5%</option><option value="52.0">52.0%</option>
                                  <option value="51.5">51.5%</option><option value="51.0">51.0%</option>
                                  <option value="50.5">50.5%</option><option value="50.0">50.0%</option>
                                  <option value="49.5">49.5%</option><option value="49.0">49.0%</option>
                                  <option value="48.5">48.5%</option><option value="48.0">48.0%</option>
                                  <option value="47.5">47.5%</option><option value="47.0">47.0%</option>
                                  <option value="46.5">46.5%</option><option value="46.0">46.0%</option>
                                  <option value="45.5">45.5%</option><option value="45.0">45.0%</option>
                                  <option value="44.5">44.5%</option><option value="44.0">44.0%</option>
                                  <option value="43.5">43.5%</option><option value="43.0">43.0%</option>
                                  <option value="42.5">42.5%</option><option value="42.0">42.0%</option>
                                  <option value="41.5">41.5%</option><option value="41.0">41.0%</option>
                                  <option value="40.5">40.5%</option><option value="40.0">40.0%</option>
                                  <option value="39.5">39.5%</option><option value="39.0">39.0%</option>
                                  <option value="38.5">38.5%</option><option value="38.0">38.0%</option>
                                  <option value="37.5">37.5%</option><option value="37.0">37.0%</option>
                                  <option value="36.5">36.5%</option><option value="36.0">36.0%</option>
                                  <option value="35.5">35.5%</option><option value="35.0">35.0%</option>
                                  <option value="34.5">34.5%</option><option value="34.0">34.0%</option>
                                  <option value="33.5">33.5%</option><option value="33.0">33.0%</option>
                                  <option value="32.5">32.5%</option><option value="32.0">32.0%</option>
                                  <option value="31.5">31.5%</option><option value="31.0">31.0%</option>
                                  <option value="30.5">30.5%</option><option value="30.0">30.0%</option>
                                  <option value="29.5">29.5%</option><option value="29.0">29.0%</option>
                                  <option value="28.5">28.5%</option><option value="28.0">28.0%</option>
                                  <option value="27.5">27.5%</option><option value="27.0">27.0%</option>
                                  <option value="26.5">26.5%</option><option value="26.0">26.0%</option>
                                  <option value="25.5">25.5%</option><option value="25.0">25.0%</option>
                                  <option value="24.5">24.5%</option><option value="24.0">24.0%</option>
                                  <option value="23.5">23.5%</option><option value="23.0">23.0%</option>
                                  <option value="22.5">22.5%</option><option value="22.0">22.0%</option>
                                  <option value="21.5">21.5%</option><option value="21.0">21.0%</option>
                                  <option value="20.5">20.5%</option><option value="20.0">20.0%</option>
                                  <option value="19.5">19.5%</option><option value="19.0">19.0%</option>
                                  <option value="18.5">18.5%</option><option value="18.0">18.0%</option>
                                  <option value="17.5">17.5%</option><option value="17.0">17.0%</option>
                                  <option value="16.5">16.5%</option><option value="16.0">16.0%</option>
                                  <option value="15.5">15.5%</option><option value="15.0">15.0%</option>
                                  <option value="14.5">14.5%</option><option value="14.0">14.0%</option>
                                  <option value="13.5">13.5%</option><option value="13.0">13.0%</option>
                                  <option value="12.5">12.5%</option><option value="12.0">12.0%</option>
                                  <option value="11.5">11.5%</option><option value="11.0">11.0%</option>
                                  <option value="10.5">10.5%</option><option value="10.0">10.0%</option>
                                  <option value="9.5">9.5%</option><option value="9.0">9.0%</option>
                                  <option value="8.5">8.5%</option><option value="8.0">8.0%</option>
                                  <option value="7.5">7.5%</option><option value="7.0">7.0%</option>
                                  <option value="6.5">6.5%</option><option value="6.0">6.0%</option>
                                  <option value="5.5">5.5%</option><option value="5.0">5.0%</option>
                                  <option value="4.5">4.5%</option><option value="4.0">4.0%</option>
                                  <option value="3.5">3.5%</option><option value="3.0">3.0%</option>
                                  <option value="2.5">2.5%</option><option value="2.0">2.0%</option>
                                  <option value="1.5">1.5%</option><option value="1.0">1.0%</option>
                                  <option value="0.5">0.5%</option><option value="0.0">0.0%</option>
                                </select>
                                <div class="inline checkbox no-margin">
                                  <input name="take_remain" type="hidden" value="0">
                                  <label>
                                    ( <input data-old="0" class="" name="take_remain" type="checkbox" value="1"> <span class="lbl"> เก็บของที่เกิน</span> )
                                    <!-- <input data-old="0" class="hidden" name="take_remain" type="checkbox" value="1"> -->
                                  </label>
                                </div>
                              </td>
                              <td class="control child-hidden">
                                <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                                <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                              </td>
                            </tr>
                            <tr data-parent-id="9306" data-member-id="11239" data-user-type-id="1" class=" ">
                              <td class="id">3</td>
                              <td>3M3KPALM</td>
                              <td class="type">เมมเบอร์</td>
                                <input id="sum-share-take" data-old="90.00" name="" type="hidden" value="90.00">
                              <td class="share">
                                <select data-old="0.0" name="share">
                                  <option value="0.0" selected="selected">0.0%</option>
                                </select>
                              </td>
                              <td class="take">
                                <select data-old="90.0" name="take">
                                  <option value="90.0" selected="selected">90.0%</option>
                                  <option value="89.5">89.5%</option><option value="89.0">89.0%</option>
                                  <option value="88.5">88.5%</option><option value="88.0">88.0%</option>
                                  <option value="87.5">87.5%</option><option value="87.0">87.0%</option>
                                  <option value="86.5">86.5%</option><option value="86.0">86.0%</option>
                                  <option value="85.5">85.5%</option><option value="85.0">85.0%</option>
                                  <option value="84.5">84.5%</option><option value="84.0">84.0%</option>
                                  <option value="83.5">83.5%</option><option value="83.0">83.0%</option>
                                  <option value="82.5">82.5%</option><option value="82.0">82.0%</option>
                                  <option value="81.5">81.5%</option><option value="81.0">81.0%</option>
                                  <option value="80.5">80.5%</option><option value="80.0">80.0%</option>
                                  <option value="79.5">79.5%</option><option value="79.0">79.0%</option>
                                  <option value="78.5">78.5%</option><option value="78.0">78.0%</option>
                                  <option value="77.5">77.5%</option><option value="77.0">77.0%</option>
                                  <option value="76.5">76.5%</option><option value="76.0">76.0%</option>
                                  <option value="75.5">75.5%</option><option value="75.0">75.0%</option>
                                  <option value="74.5">74.5%</option><option value="74.0">74.0%</option>
                                  <option value="73.5">73.5%</option><option value="73.0">73.0%</option>
                                  <option value="72.5">72.5%</option><option value="72.0">72.0%</option>
                                  <option value="71.5">71.5%</option><option value="71.0">71.0%</option>
                                  <option value="70.5">70.5%</option><option value="70.0">70.0%</option>
                                  <option value="69.5">69.5%</option><option value="69.0">69.0%</option>
                                  <option value="68.5">68.5%</option><option value="68.0">68.0%</option>
                                  <option value="67.5">67.5%</option><option value="67.0">67.0%</option>
                                  <option value="66.5">66.5%</option><option value="66.0">66.0%</option>
                                  <option value="65.5">65.5%</option><option value="65.0">65.0%</option>
                                  <option value="64.5">64.5%</option><option value="64.0">64.0%</option>
                                  <option value="63.5">63.5%</option><option value="63.0">63.0%</option>
                                  <option value="62.5">62.5%</option><option value="62.0">62.0%</option>
                                  <option value="61.5">61.5%</option><option value="61.0">61.0%</option>
                                  <option value="60.5">60.5%</option><option value="60.0">60.0%</option>
                                  <option value="59.5">59.5%</option><option value="59.0">59.0%</option>
                                  <option value="58.5">58.5%</option><option value="58.0">58.0%</option>
                                  <option value="57.5">57.5%</option><option value="57.0">57.0%</option>
                                  <option value="56.5">56.5%</option><option value="56.0">56.0%</option>
                                  <option value="55.5">55.5%</option><option value="55.0">55.0%</option>
                                  <option value="54.5">54.5%</option><option value="54.0">54.0%</option>
                                  <option value="53.5">53.5%</option><option value="53.0">53.0%</option>
                                  <option value="52.5">52.5%</option><option value="52.0">52.0%</option>
                                  <option value="51.5">51.5%</option><option value="51.0">51.0%</option>
                                  <option value="50.5">50.5%</option><option value="50.0">50.0%</option>
                                  <option value="49.5">49.5%</option><option value="49.0">49.0%</option>
                                  <option value="48.5">48.5%</option><option value="48.0">48.0%</option>
                                  <option value="47.5">47.5%</option><option value="47.0">47.0%</option>
                                  <option value="46.5">46.5%</option><option value="46.0">46.0%</option>
                                  <option value="45.5">45.5%</option><option value="45.0">45.0%</option>
                                  <option value="44.5">44.5%</option><option value="44.0">44.0%</option>
                                  <option value="43.5">43.5%</option><option value="43.0">43.0%</option>
                                  <option value="42.5">42.5%</option><option value="42.0">42.0%</option>
                                  <option value="41.5">41.5%</option><option value="41.0">41.0%</option>
                                  <option value="40.5">40.5%</option><option value="40.0">40.0%</option>
                                  <option value="39.5">39.5%</option><option value="39.0">39.0%</option>
                                  <option value="38.5">38.5%</option><option value="38.0">38.0%</option>
                                  <option value="37.5">37.5%</option><option value="37.0">37.0%</option>
                                  <option value="36.5">36.5%</option><option value="36.0">36.0%</option>
                                  <option value="35.5">35.5%</option><option value="35.0">35.0%</option>
                                  <option value="34.5">34.5%</option><option value="34.0">34.0%</option>
                                  <option value="33.5">33.5%</option><option value="33.0">33.0%</option>
                                  <option value="32.5">32.5%</option><option value="32.0">32.0%</option>
                                  <option value="31.5">31.5%</option><option value="31.0">31.0%</option>
                                  <option value="30.5">30.5%</option><option value="30.0">30.0%</option>
                                  <option value="29.5">29.5%</option><option value="29.0">29.0%</option>
                                  <option value="28.5">28.5%</option><option value="28.0">28.0%</option>
                                  <option value="27.5">27.5%</option><option value="27.0">27.0%</option>
                                  <option value="26.5">26.5%</option><option value="26.0">26.0%</option>
                                  <option value="25.5">25.5%</option><option value="25.0">25.0%</option>
                                  <option value="24.5">24.5%</option><option value="24.0">24.0%</option>
                                  <option value="23.5">23.5%</option><option value="23.0">23.0%</option>
                                  <option value="22.5">22.5%</option><option value="22.0">22.0%</option>
                                  <option value="21.5">21.5%</option><option value="21.0">21.0%</option>
                                  <option value="20.5">20.5%</option><option value="20.0">20.0%</option>
                                  <option value="19.5">19.5%</option><option value="19.0">19.0%</option>
                                  <option value="18.5">18.5%</option><option value="18.0">18.0%</option>
                                  <option value="17.5">17.5%</option><option value="17.0">17.0%</option>
                                  <option value="16.5">16.5%</option><option value="16.0">16.0%</option>
                                  <option value="15.5">15.5%</option><option value="15.0">15.0%</option>
                                  <option value="14.5">14.5%</option><option value="14.0">14.0%</option>
                                  <option value="13.5">13.5%</option><option value="13.0">13.0%</option>
                                  <option value="12.5">12.5%</option><option value="12.0">12.0%</option>
                                  <option value="11.5">11.5%</option><option value="11.0">11.0%</option>
                                  <option value="10.5">10.5%</option><option value="10.0">10.0%</option>
                                  <option value="9.5">9.5%</option><option value="9.0">9.0%</option>
                                  <option value="8.5">8.5%</option><option value="8.0">8.0%</option>
                                  <option value="7.5">7.5%</option><option value="7.0">7.0%</option>
                                  <option value="6.5">6.5%</option><option value="6.0">6.0%</option>
                                  <option value="5.5">5.5%</option><option value="5.0">5.0%</option>
                                  <option value="4.5">4.5%</option><option value="4.0">4.0%</option>
                                  <option value="3.5">3.5%</option><option value="3.0">3.0%</option>
                                  <option value="2.5">2.5%</option><option value="2.0">2.0%</option>
                                  <option value="1.5">1.5%</option><option value="1.0">1.0%</option>
                                  <option value="0.5">0.5%</option><option value="0.0">0.0%</option>
                                </select>
                                <div class="inline checkbox no-margin">
                                  <input name="take_remain" type="hidden" value="0">
                                  <label>
                                    ( <input data-old="1" class="" checked="checked" name="take_remain" type="checkbox" value="1"> <span class="lbl"> เก็บของที่เกิน</span> )
                                    <!-- <input data-old="1" class="hidden" checked="checked" name="take_remain" type="checkbox" value="1"> -->
                                  </label>
                                </div>
                              </td>
                              <td class="control child-hidden">
                                <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                                <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                              </td>
                            </tr>
                            <tr data-parent-id="9306" data-member-id="11240" data-user-type-id="1" class=" ">
                              <td class="id">4</td>
                              <td>3M3KTOR</td>
                              <td class="type">เมมเบอร์</td>
                                <input id="sum-share-take" data-old="90.00" name="" type="hidden" value="90.00">
                              <td class="share">
                                <select data-old="0.0" name="share">
                                  <option value="0.0" selected="selected">0.0%</option>
                                </select>
                              </td>
                              <td class="take">
                                <select data-old="90.0" name="take">
                                  <option value="90.0" selected="selected">90.0%</option>
                                  <option value="89.5">89.5%</option><option value="89.0">89.0%</option>
                                  <option value="88.5">88.5%</option><option value="88.0">88.0%</option>
                                  <option value="87.5">87.5%</option><option value="87.0">87.0%</option>
                                  <option value="86.5">86.5%</option><option value="86.0">86.0%</option>
                                  <option value="85.5">85.5%</option><option value="85.0">85.0%</option>
                                  <option value="84.5">84.5%</option><option value="84.0">84.0%</option>
                                  <option value="83.5">83.5%</option><option value="83.0">83.0%</option>
                                  <option value="82.5">82.5%</option><option value="82.0">82.0%</option>
                                  <option value="81.5">81.5%</option><option value="81.0">81.0%</option>
                                  <option value="80.5">80.5%</option><option value="80.0">80.0%</option>
                                  <option value="79.5">79.5%</option><option value="79.0">79.0%</option>
                                  <option value="78.5">78.5%</option><option value="78.0">78.0%</option>
                                  <option value="77.5">77.5%</option><option value="77.0">77.0%</option>
                                  <option value="76.5">76.5%</option><option value="76.0">76.0%</option>
                                  <option value="75.5">75.5%</option><option value="75.0">75.0%</option>
                                  <option value="74.5">74.5%</option><option value="74.0">74.0%</option>
                                  <option value="73.5">73.5%</option><option value="73.0">73.0%</option>
                                  <option value="72.5">72.5%</option><option value="72.0">72.0%</option>
                                  <option value="71.5">71.5%</option><option value="71.0">71.0%</option>
                                  <option value="70.5">70.5%</option><option value="70.0">70.0%</option>
                                  <option value="69.5">69.5%</option><option value="69.0">69.0%</option>
                                  <option value="68.5">68.5%</option><option value="68.0">68.0%</option>
                                  <option value="67.5">67.5%</option><option value="67.0">67.0%</option>
                                  <option value="66.5">66.5%</option><option value="66.0">66.0%</option>
                                  <option value="65.5">65.5%</option><option value="65.0">65.0%</option>
                                  <option value="64.5">64.5%</option><option value="64.0">64.0%</option>
                                  <option value="63.5">63.5%</option><option value="63.0">63.0%</option>
                                  <option value="62.5">62.5%</option><option value="62.0">62.0%</option>
                                  <option value="61.5">61.5%</option><option value="61.0">61.0%</option>
                                  <option value="60.5">60.5%</option><option value="60.0">60.0%</option>
                                  <option value="59.5">59.5%</option><option value="59.0">59.0%</option>
                                  <option value="58.5">58.5%</option><option value="58.0">58.0%</option>
                                  <option value="57.5">57.5%</option><option value="57.0">57.0%</option>
                                  <option value="56.5">56.5%</option><option value="56.0">56.0%</option>
                                  <option value="55.5">55.5%</option><option value="55.0">55.0%</option>
                                  <option value="54.5">54.5%</option><option value="54.0">54.0%</option>
                                  <option value="53.5">53.5%</option><option value="53.0">53.0%</option>
                                  <option value="52.5">52.5%</option><option value="52.0">52.0%</option>
                                  <option value="51.5">51.5%</option><option value="51.0">51.0%</option>
                                  <option value="50.5">50.5%</option><option value="50.0">50.0%</option>
                                  <option value="49.5">49.5%</option><option value="49.0">49.0%</option>
                                  <option value="48.5">48.5%</option><option value="48.0">48.0%</option>
                                  <option value="47.5">47.5%</option><option value="47.0">47.0%</option>
                                  <option value="46.5">46.5%</option><option value="46.0">46.0%</option>
                                  <option value="45.5">45.5%</option><option value="45.0">45.0%</option>
                                  <option value="44.5">44.5%</option><option value="44.0">44.0%</option>
                                  <option value="43.5">43.5%</option><option value="43.0">43.0%</option>
                                  <option value="42.5">42.5%</option><option value="42.0">42.0%</option>
                                  <option value="41.5">41.5%</option><option value="41.0">41.0%</option>
                                  <option value="40.5">40.5%</option><option value="40.0">40.0%</option>
                                  <option value="39.5">39.5%</option><option value="39.0">39.0%</option>
                                  <option value="38.5">38.5%</option><option value="38.0">38.0%</option>
                                  <option value="37.5">37.5%</option><option value="37.0">37.0%</option>
                                  <option value="36.5">36.5%</option><option value="36.0">36.0%</option>
                                  <option value="35.5">35.5%</option><option value="35.0">35.0%</option>
                                  <option value="34.5">34.5%</option><option value="34.0">34.0%</option>
                                  <option value="33.5">33.5%</option><option value="33.0">33.0%</option>
                                  <option value="32.5">32.5%</option><option value="32.0">32.0%</option>
                                  <option value="31.5">31.5%</option><option value="31.0">31.0%</option>
                                  <option value="30.5">30.5%</option><option value="30.0">30.0%</option>
                                  <option value="29.5">29.5%</option><option value="29.0">29.0%</option>
                                  <option value="28.5">28.5%</option><option value="28.0">28.0%</option>
                                  <option value="27.5">27.5%</option><option value="27.0">27.0%</option>
                                  <option value="26.5">26.5%</option><option value="26.0">26.0%</option>
                                  <option value="25.5">25.5%</option><option value="25.0">25.0%</option>
                                  <option value="24.5">24.5%</option><option value="24.0">24.0%</option>
                                  <option value="23.5">23.5%</option><option value="23.0">23.0%</option>
                                  <option value="22.5">22.5%</option><option value="22.0">22.0%</option>
                                  <option value="21.5">21.5%</option><option value="21.0">21.0%</option>
                                  <option value="20.5">20.5%</option><option value="20.0">20.0%</option>
                                  <option value="19.5">19.5%</option><option value="19.0">19.0%</option>
                                  <option value="18.5">18.5%</option><option value="18.0">18.0%</option>
                                  <option value="17.5">17.5%</option><option value="17.0">17.0%</option>
                                  <option value="16.5">16.5%</option><option value="16.0">16.0%</option>
                                  <option value="15.5">15.5%</option><option value="15.0">15.0%</option>
                                  <option value="14.5">14.5%</option><option value="14.0">14.0%</option>
                                  <option value="13.5">13.5%</option><option value="13.0">13.0%</option>
                                  <option value="12.5">12.5%</option><option value="12.0">12.0%</option>
                                  <option value="11.5">11.5%</option><option value="11.0">11.0%</option>
                                  <option value="10.5">10.5%</option><option value="10.0">10.0%</option>
                                  <option value="9.5">9.5%</option><option value="9.0">9.0%</option>
                                  <option value="8.5">8.5%</option><option value="8.0">8.0%</option>
                                  <option value="7.5">7.5%</option><option value="7.0">7.0%</option>
                                  <option value="6.5">6.5%</option><option value="6.0">6.0%</option>
                                  <option value="5.5">5.5%</option><option value="5.0">5.0%</option>
                                  <option value="4.5">4.5%</option><option value="4.0">4.0%</option>
                                  <option value="3.5">3.5%</option><option value="3.0">3.0%</option>
                                  <option value="2.5">2.5%</option><option value="2.0">2.0%</option>
                                  <option value="1.5">1.5%</option><option value="1.0">1.0%</option>
                                  <option value="0.5">0.5%</option><option value="0.0">0.0%</option>
                                </select>
                                <div class="inline checkbox no-margin">
                                  <input name="take_remain" type="hidden" value="0">
                                  <label>
                                    ( <input data-old="0" class="" name="take_remain" type="checkbox" value="1"> <span class="lbl"> เก็บของที่เกิน</span> )
                                    <!-- <input data-old="0" class="hidden" name="take_remain" type="checkbox" value="1"> -->
                                  </label>
                                </div>
                              </td>
                              <td class="control child-hidden">
                                <button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
                                <button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
                              </td>
                            </tr>
                        </tbody>
                      </table>
                </div>
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
</div><!-- /.page-content -->

@endsection

 