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
                จัดการสมาชิก 
            </li>
            <li>
                4. อัตราจ่าย/คอมมิชชั่น
            </li>
        </ul><!-- /.breadcrumb -->
             <span id="global-clock" class="pull-right"></span>
    </div>

        <!-- /section:basics/content.breadcrumbs -->
      <div class="page-content" id="user-content">
        <div class="row">
            <div id="content" class="col-xs-12"><div class="page-header">
                <h1>
                4. อัตราจ่าย/คอมมิชชั่น
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        <a href="#" class="ajax">3M3K</a>
                    </small>
                </h1>
            </div>
            <div class="min-width-800 max-width-1100">
                <div class="alert alert-info">
                    <b>คัดลอก</b> 1. เลือกว่าต้องการคัดลอกจากใคร 2. ติ๊กเลือกว่าจะตั้งค่าดังกล่าวให้ใคร 3. กดปุ่มแก้ไข<br>
                    *** ระบบจะทำการกรอกข้อมูลให้ทั้ง อัตราจ่าย และคอมมิชชั่น<br>
                    <b>สถานะ:</b> 
                    <span class="bg-warning">เหลือง=ระงับ</span>, 
                    <span class="bg-danger">แดง=ล็อค</span> 
                    <span class="bg-dark">เทา=อัตราจ่ายหรือชนิดการแทงถูกปิด</span>
                </div>
            </div>
                <label class="inline">
                    <input type="checkbox" id="input-checkbox-name" data-target="page">
                    <span class="lbl"> แสดงชื่อ</span>
                </label>
            <div class="min-width-800 max-width-1100">
              <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
                    <li class="active"><a href="#" class="ajax">อัตราจ่าย</a></li>
                    <li class=""><a href="#" class="ajax">คอมมิชชั่น</a></li>

                    
                <li class="pull-right right-padding-10 users__edit-options">
                 <span class="bolder">คัดลอก</span>
                    <select class="js-users__copy-payout-settings" name=""><option value="0"></option>
                        <option value="9306">สูงสุด</option><option value="9474">3M3K001</option><option value="10230">3M3K002</option>
                        <option value="11239">3M3KPALM</option><option value="11240">3M3KTOR</option>
                    </select>
            
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

                <ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
                    <li class="active">
                        <a href="#" class="nowrap ajax">หวยรัฐ 70</a>
                    </li>
                    <li class="">
                        <a href="#" class="nowrap ajax">หวย 70</a>
                    </li>
                </ul>
                <ul class="nav nav-tabs padding-24 tab-color-blue background-blue">
                    <li class="active">
                     <a href="#" class="nowrap ajax">
                      3 ตัวท้าย</a>
                    </li>
                </ul>
            </div>
            <div class="min-width-800 max-width-1100">
                <div id="payout_5" class="tab-pane active" data-action="update-payout" data-parent-id="9306">
                    <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
                        <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit ">
                        <thead>
                            <tr>
                                <th colspan="99">
                                    <span class="deep-blue caption">อัตราจ่าย หวยรัฐ 70 3 ตัวท้าย</span>
                                <br>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="3" class="vm">
                                    <input name="action" type="hidden" value="payout">
                                    <input name="payout_id" type="hidden" value="5">
                                    <input name="bet_type_group_id" type="hidden" value="1">
                                    <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                    <a class="btn btn-primary btn-xs">ยกเลิก</a>
                                </th>
                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                <th>
                                    3 ตัวบน<br>
                                    <input class="form-control input-sm ac" data-col="payout_1" name="payout_1" type="text" value="">
                                    &lt;= <a href="#" class="fill-input" tabindex="-1">550</a>
                                </th>
                                <th>
                                    3 ตัวล่าง<br>
                                    <input class="form-control input-sm ac" data-col="payout_2" name="payout_2" type="text" value="">
                                    &lt;= <a href="#" class="fill-input" tabindex="-1">125</a>
                                </th>
                                <th>
                                    3 ตัวโต๊ด<br>
                                    <input class="form-control input-sm ac" data-col="payout_3" name="payout_3" type="text" value="">
                                    &lt;= <a href="#" class="fill-input" tabindex="-1">105</a>
                                </th>
                                <th>
                                    2 ตัวบน<br>
                                    <input class="form-control input-sm ac" data-col="payout_4" name="payout_4" type="text" value="">
                                    &lt;= <a href="#" class="fill-input" tabindex="-1">70</a>
                                </th>
                                <th>
                                    2 ตัวล่าง<br>
                                    <input class="form-control input-sm ac" data-col="payout_5" name="payout_5" type="text" value="">
                                    &lt;= <a href="#" class="fill-input" tabindex="-1">70</a>
                                </th>
                                <th>
                                    2 ตัวโต๊ด<br>
                                    <input class="form-control input-sm ac" data-col="payout_6" name="payout_6" type="text" value="">
                                    &lt;= <a href="#" class="fill-input" tabindex="-1">12</a>
                                </th>
                                <th>
                                    วิ่งบน<br>
                                    <input class="form-control input-sm ac" data-col="payout_7" name="payout_7" type="text" value="">
                                    &lt;= <a href="#" class="fill-input" tabindex="-1">3</a>
                                </th>
                                <th>
                                    วิ่งล่าง<br>
                                    <input class="form-control input-sm ac" data-col="payout_8" name="payout_8" type="text" value="">
                                    &lt;= <a href="#" class="fill-input" tabindex="-1">4</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr data-id="9474" data-status="1" class=" ">
                                    <td class="id">1</td>
                                    <td>
                                        3M3K001 <span class="span-name jquery-hide">()</span>
                                    </td>
                                    <td class="type" nowrap="">
                                        เมมเบอร์
                                    </td>
                                    <td class="check">
                                        <input name="member_ids[]" type="checkbox" value="9474">
                                    </td>
                                    <td class="table-payout-5-row-9474-col-payout_1 ">
                                        550
                                    </td>
                                    <td class="table-payout-5-row-9474-col-payout_2 ">
                                        125
                                    </td>
                                    <td class="table-payout-5-row-9474-col-payout_3 ">
                                        105
                                    </td>
                                    <td class="table-payout-5-row-9474-col-payout_4 ">
                                        70
                                    </td>
                                    <td class="table-payout-5-row-9474-col-payout_5 ">
                                        70
                                    </td>
                                    <td class="table-payout-5-row-9474-col-payout_6 ">
                                        12
                                    </td>
                                    <td class="table-payout-5-row-9474-col-payout_7 ">
                                        3
                                    </td>
                                    <td class="table-payout-5-row-9474-col-payout_8 ">
                                        4
                                    </td>
                                </tr>
                                <tr data-id="10230" data-status="1" class=" ">
                                    <td class="id">2</td>
                                    <td>
                                        3M3K002 <span class="span-name jquery-hide">()</span>
                                    </td>
                                    <td class="type" nowrap="">
                                        เมมเบอร์
                                    </td>
                                    <td class="check"><input name="member_ids[]" type="checkbox" value="10230">
                                    </td>
                                    <td class="table-payout-5-row-10230-col-payout_1 ">
                                        550
                                    </td>
                                    <td class="table-payout-5-row-10230-col-payout_2 ">
                                        125
                                    </td>
                                    <td class="table-payout-5-row-10230-col-payout_3 ">
                                        105
                                    </td>
                                    <td class="table-payout-5-row-10230-col-payout_4 ">
                                        70
                                    </td>
                                    <td class="table-payout-5-row-10230-col-payout_5 ">
                                        70
                                    </td>
                                    <td class="table-payout-5-row-10230-col-payout_6 ">
                                        12
                                    </td>
                                    <td class="table-payout-5-row-10230-col-payout_7 ">
                                        3
                                    </td>
                                    <td class="table-payout-5-row-10230-col-payout_8 ">
                                        4
                                    </td>
                                </tr>
                                <tr data-id="11239" data-status="1" class=" ">
                                    <td class="id">3</td>
                                    <td>
                                        3M3KPALM <span class="span-name jquery-hide">(ปัทนพงษ์)</span>
                                    </td>
                                    <td class="type" nowrap="">
                                        เมมเบอร์
                                    </td>
                                    <td class="check"><input name="member_ids[]" type="checkbox" value="11239">
                                    </td>
                                    <td class="table-payout-5-row-11239-col-payout_1 ">
                                        550
                                    </td>
                                    <td class="table-payout-5-row-11239-col-payout_2 ">
                                        125
                                    </td>
                                    <td class="table-payout-5-row-11239-col-payout_3 ">
                                        105
                                    </td>
                                    <td class="table-payout-5-row-11239-col-payout_4 ">
                                        70
                                    </td>
                                    <td class="table-payout-5-row-11239-col-payout_5 ">
                                        70
                                    </td>
                                    <td class="table-payout-5-row-11239-col-payout_6 ">
                                        12
                                    </td>
                                    <td class="table-payout-5-row-11239-col-payout_7 ">
                                        3
                                    </td>
                                    <td class="table-payout-5-row-11239-col-payout_8 ">
                                        4
                                    </td>
                                </tr>
                                <tr data-id="11240" data-status="1" class=" ">
                                    <td class="id">4</td>
                                    <td>
                                        3M3KTOR <span class="span-name jquery-hide">(thanwa)</span>
                                    </td>
                                    <td class="type" nowrap="">
                                        เมมเบอร์
                                    </td>
                                    <td class="check"><input name="member_ids[]" type="checkbox" value="11240">
                                    </td>
                                    <td class="table-payout-5-row-11240-col-payout_1 ">
                                        550
                                    </td>
                                    <td class="table-payout-5-row-11240-col-payout_2 ">
                                        125
                                    </td>
                                    <td class="table-payout-5-row-11240-col-payout_3 ">
                                        105
                                    </td>
                                    <td class="table-payout-5-row-11240-col-payout_4 ">
                                        70
                                    </td>
                                    <td class="table-payout-5-row-11240-col-payout_5 ">
                                        70
                                    </td>
                                    <td class="table-payout-5-row-11240-col-payout_6 ">
                                        12
                                    </td>
                                    <td class="table-payout-5-row-11240-col-payout_7 ">
                                        3
                                    </td>
                                    <td class="table-payout-5-row-11240-col-payout_8 ">
                                        4
                                    </td>
                                </tr>
                        </tbody>
                        </table>
                    </form>

                </div>
            </div>
        </div><!-- /.col -->
      </div>
</div>
   

@endsection

 