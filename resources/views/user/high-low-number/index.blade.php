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

					
				</li><li>
								
								3. ขั้นต่ำ/สูงสุด/สูงสุดต่อเลข
							</li></ul><!-- /.breadcrumb -->

  <span id="global-clock" class="pull-right"></span>
</div>

<!-- /section:basics/content.breadcrumbs -->
      <div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
  <h1>
    3. ขั้นต่ำ/สูงสุด/สูงสุดต่อเลข
    <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
                <a href="#" class="ajax">3M3K</a>
          </small>
  </h1>
</div>



<div class="alert alert-info">
  <b>สูงสุด</b> = สูงสุดต่อ1โพย<br>
  <b>สูงสุดต่อหมายเลข</b> = สูงสุดต่อหมายเลขต่อ1สมาชิก<br>
  <b>สถานะ:</b> <span class="bg-warning">เหลือง=ระงับ</span>, <span class="bg-danger">แดง=ล็อค</span>
</div>

<label class="inline">
  <input type="checkbox" id="input-checkbox-name" data-target="page">
  <span class="lbl"> แสดงชื่อ</span>
</label>

<div class="min-width-800 max-width-1100">
  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
    <li class="js-change-tab active" data-tab1="min"><a href="#min" data-toggle="tab">ขั้นต่ำ</a></li>
    <li class="js-change-tab " data-tab1="max"><a href="#max" data-toggle="tab">สูงสุด</a></li>
    <li class="js-change-tab " data-tab1="max_per_num"><a href="#max_per_num" data-toggle="tab">
    สูงสุดต่อเลข</a></li>

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

<div class="tab-content no-border no-margin-top no-padding width-800 max-width-1100" id="users-edit-tab-content">
      <div class="tab-pane active" id="min" data-action="update-min" data-parent-id="9306">
      <ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
                              <li class="js-change-tab active" data-tab2="1">
              <a data-toggle="tab" href="#min_1">3 ตัวท้าย</a>
            </li>
                                                                                                                                    </ul>

      <div class="tab-content no-padding">
                  <div id="min_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      ขั้นต่ำ 3 ตัวท้าย
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="min">
                      <input name="bet_type_group_id" type="hidden" value="1">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="min_1" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="min_2" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="min_3" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="min_4" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="min_5" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="min_6" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="min_7" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="min_8" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-min-1-row-9474-col-min_1">
                          5
                        </td>
                                              <td class="table-min-1-row-9474-col-min_2">
                          5
                        </td>
                                              <td class="table-min-1-row-9474-col-min_3">
                          5
                        </td>
                                              <td class="table-min-1-row-9474-col-min_4">
                          5
                        </td>
                                              <td class="table-min-1-row-9474-col-min_5">
                          5
                        </td>
                                              <td class="table-min-1-row-9474-col-min_6">
                          5
                        </td>
                                              <td class="table-min-1-row-9474-col-min_7">
                          5
                        </td>
                                              <td class="table-min-1-row-9474-col-min_8">
                          5
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-min-1-row-10230-col-min_1">
                          5
                        </td>
                                              <td class="table-min-1-row-10230-col-min_2">
                          5
                        </td>
                                              <td class="table-min-1-row-10230-col-min_3">
                          5
                        </td>
                                              <td class="table-min-1-row-10230-col-min_4">
                          5
                        </td>
                                              <td class="table-min-1-row-10230-col-min_5">
                          5
                        </td>
                                              <td class="table-min-1-row-10230-col-min_6">
                          5
                        </td>
                                              <td class="table-min-1-row-10230-col-min_7">
                          5
                        </td>
                                              <td class="table-min-1-row-10230-col-min_8">
                          5
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-min-1-row-11239-col-min_1">
                          5
                        </td>
                                              <td class="table-min-1-row-11239-col-min_2">
                          5
                        </td>
                                              <td class="table-min-1-row-11239-col-min_3">
                          5
                        </td>
                                              <td class="table-min-1-row-11239-col-min_4">
                          5
                        </td>
                                              <td class="table-min-1-row-11239-col-min_5">
                          5
                        </td>
                                              <td class="table-min-1-row-11239-col-min_6">
                          5
                        </td>
                                              <td class="table-min-1-row-11239-col-min_7">
                          5
                        </td>
                                              <td class="table-min-1-row-11239-col-min_8">
                          5
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-min-1-row-11240-col-min_1">
                          5
                        </td>
                                              <td class="table-min-1-row-11240-col-min_2">
                          5
                        </td>
                                              <td class="table-min-1-row-11240-col-min_3">
                          5
                        </td>
                                              <td class="table-min-1-row-11240-col-min_4">
                          5
                        </td>
                                              <td class="table-min-1-row-11240-col-min_5">
                          5
                        </td>
                                              <td class="table-min-1-row-11240-col-min_6">
                          5
                        </td>
                                              <td class="table-min-1-row-11240-col-min_7">
                          5
                        </td>
                                              <td class="table-min-1-row-11240-col-min_8">
                          5
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="min_2" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      ขั้นต่ำ 3 ตัวหัว
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="min">
                      <input name="bet_type_group_id" type="hidden" value="2">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="min_21" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="min_22" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="min_23" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="min_24" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="min_25" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="min_26" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="min_27" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">5</a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="min_28" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-min-2-row-9474-col-min_21">
                          5
                        </td>
                                              <td class="table-min-2-row-9474-col-min_22">
                          
                        </td>
                                              <td class="table-min-2-row-9474-col-min_23">
                          5
                        </td>
                                              <td class="table-min-2-row-9474-col-min_24">
                          5
                        </td>
                                              <td class="table-min-2-row-9474-col-min_25">
                          
                        </td>
                                              <td class="table-min-2-row-9474-col-min_26">
                          5
                        </td>
                                              <td class="table-min-2-row-9474-col-min_27">
                          5
                        </td>
                                              <td class="table-min-2-row-9474-col-min_28">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-min-2-row-10230-col-min_21">
                          5
                        </td>
                                              <td class="table-min-2-row-10230-col-min_22">
                          
                        </td>
                                              <td class="table-min-2-row-10230-col-min_23">
                          5
                        </td>
                                              <td class="table-min-2-row-10230-col-min_24">
                          5
                        </td>
                                              <td class="table-min-2-row-10230-col-min_25">
                          
                        </td>
                                              <td class="table-min-2-row-10230-col-min_26">
                          5
                        </td>
                                              <td class="table-min-2-row-10230-col-min_27">
                          5
                        </td>
                                              <td class="table-min-2-row-10230-col-min_28">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-min-2-row-11239-col-min_21">
                          5
                        </td>
                                              <td class="table-min-2-row-11239-col-min_22">
                          
                        </td>
                                              <td class="table-min-2-row-11239-col-min_23">
                          5
                        </td>
                                              <td class="table-min-2-row-11239-col-min_24">
                          5
                        </td>
                                              <td class="table-min-2-row-11239-col-min_25">
                          
                        </td>
                                              <td class="table-min-2-row-11239-col-min_26">
                          5
                        </td>
                                              <td class="table-min-2-row-11239-col-min_27">
                          5
                        </td>
                                              <td class="table-min-2-row-11239-col-min_28">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-min-2-row-11240-col-min_21">
                          5
                        </td>
                                              <td class="table-min-2-row-11240-col-min_22">
                          
                        </td>
                                              <td class="table-min-2-row-11240-col-min_23">
                          5
                        </td>
                                              <td class="table-min-2-row-11240-col-min_24">
                          5
                        </td>
                                              <td class="table-min-2-row-11240-col-min_25">
                          
                        </td>
                                              <td class="table-min-2-row-11240-col-min_26">
                          5
                        </td>
                                              <td class="table-min-2-row-11240-col-min_27">
                          5
                        </td>
                                              <td class="table-min-2-row-11240-col-min_28">
                          
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="min_3" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      ขั้นต่ำ 2 ตัวท้าย (หวยตัว)
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="min">
                      <input name="bet_type_group_id" type="hidden" value="3">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="min_31" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="min_32" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="min_33" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="min_34" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">0</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="min_35" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">0</a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="min_36" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="min_37" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="min_38" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-min-3-row-9474-col-min_31">
                          
                        </td>
                                              <td class="table-min-3-row-9474-col-min_32">
                          
                        </td>
                                              <td class="table-min-3-row-9474-col-min_33">
                          
                        </td>
                                              <td class="table-min-3-row-9474-col-min_34">
                          0
                        </td>
                                              <td class="table-min-3-row-9474-col-min_35">
                          0
                        </td>
                                              <td class="table-min-3-row-9474-col-min_36">
                          
                        </td>
                                              <td class="table-min-3-row-9474-col-min_37">
                          
                        </td>
                                              <td class="table-min-3-row-9474-col-min_38">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-min-3-row-10230-col-min_31">
                          
                        </td>
                                              <td class="table-min-3-row-10230-col-min_32">
                          
                        </td>
                                              <td class="table-min-3-row-10230-col-min_33">
                          
                        </td>
                                              <td class="table-min-3-row-10230-col-min_34">
                          0
                        </td>
                                              <td class="table-min-3-row-10230-col-min_35">
                          0
                        </td>
                                              <td class="table-min-3-row-10230-col-min_36">
                          
                        </td>
                                              <td class="table-min-3-row-10230-col-min_37">
                          
                        </td>
                                              <td class="table-min-3-row-10230-col-min_38">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-min-3-row-11239-col-min_31">
                          
                        </td>
                                              <td class="table-min-3-row-11239-col-min_32">
                          
                        </td>
                                              <td class="table-min-3-row-11239-col-min_33">
                          
                        </td>
                                              <td class="table-min-3-row-11239-col-min_34">
                          0
                        </td>
                                              <td class="table-min-3-row-11239-col-min_35">
                          0
                        </td>
                                              <td class="table-min-3-row-11239-col-min_36">
                          
                        </td>
                                              <td class="table-min-3-row-11239-col-min_37">
                          
                        </td>
                                              <td class="table-min-3-row-11239-col-min_38">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-min-3-row-11240-col-min_31">
                          
                        </td>
                                              <td class="table-min-3-row-11240-col-min_32">
                          
                        </td>
                                              <td class="table-min-3-row-11240-col-min_33">
                          
                        </td>
                                              <td class="table-min-3-row-11240-col-min_34">
                          0
                        </td>
                                              <td class="table-min-3-row-11240-col-min_35">
                          0
                        </td>
                                              <td class="table-min-3-row-11240-col-min_36">
                          
                        </td>
                                              <td class="table-min-3-row-11240-col-min_37">
                          
                        </td>
                                              <td class="table-min-3-row-11240-col-min_38">
                          
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="min_4" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      ขั้นต่ำ 2 ตัวหัว (หวยตัว)
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="min">
                      <input name="bet_type_group_id" type="hidden" value="4">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="min_41" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="min_42" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="min_43" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="min_44" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">0</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="min_45" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="min_46" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="min_47" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="min_48" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-min-4-row-9474-col-min_41">
                          
                        </td>
                                              <td class="table-min-4-row-9474-col-min_42">
                          
                        </td>
                                              <td class="table-min-4-row-9474-col-min_43">
                          
                        </td>
                                              <td class="table-min-4-row-9474-col-min_44">
                          0
                        </td>
                                              <td class="table-min-4-row-9474-col-min_45">
                          
                        </td>
                                              <td class="table-min-4-row-9474-col-min_46">
                          
                        </td>
                                              <td class="table-min-4-row-9474-col-min_47">
                          
                        </td>
                                              <td class="table-min-4-row-9474-col-min_48">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-min-4-row-10230-col-min_41">
                          
                        </td>
                                              <td class="table-min-4-row-10230-col-min_42">
                          
                        </td>
                                              <td class="table-min-4-row-10230-col-min_43">
                          
                        </td>
                                              <td class="table-min-4-row-10230-col-min_44">
                          0
                        </td>
                                              <td class="table-min-4-row-10230-col-min_45">
                          
                        </td>
                                              <td class="table-min-4-row-10230-col-min_46">
                          
                        </td>
                                              <td class="table-min-4-row-10230-col-min_47">
                          
                        </td>
                                              <td class="table-min-4-row-10230-col-min_48">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-min-4-row-11239-col-min_41">
                          
                        </td>
                                              <td class="table-min-4-row-11239-col-min_42">
                          
                        </td>
                                              <td class="table-min-4-row-11239-col-min_43">
                          
                        </td>
                                              <td class="table-min-4-row-11239-col-min_44">
                          0
                        </td>
                                              <td class="table-min-4-row-11239-col-min_45">
                          
                        </td>
                                              <td class="table-min-4-row-11239-col-min_46">
                          
                        </td>
                                              <td class="table-min-4-row-11239-col-min_47">
                          
                        </td>
                                              <td class="table-min-4-row-11239-col-min_48">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-min-4-row-11240-col-min_41">
                          
                        </td>
                                              <td class="table-min-4-row-11240-col-min_42">
                          
                        </td>
                                              <td class="table-min-4-row-11240-col-min_43">
                          
                        </td>
                                              <td class="table-min-4-row-11240-col-min_44">
                          0
                        </td>
                                              <td class="table-min-4-row-11240-col-min_45">
                          
                        </td>
                                              <td class="table-min-4-row-11240-col-min_46">
                          
                        </td>
                                              <td class="table-min-4-row-11240-col-min_47">
                          
                        </td>
                                              <td class="table-min-4-row-11240-col-min_48">
                          
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="min_5" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      ขั้นต่ำ สูง-ต่ำ
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="min">
                      <input name="bet_type_group_id" type="hidden" value="5">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        หลักแสน<br>
                        <input class="form-control input-sm ac" name="min_51" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักหมื่น<br>
                        <input class="form-control input-sm ac" name="min_52" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักพัน<br>
                        <input class="form-control input-sm ac" name="min_53" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักร้อย<br>
                        <input class="form-control input-sm ac" name="min_54" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักสิบ<br>
                        <input class="form-control input-sm ac" name="min_55" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักหน่วย<br>
                        <input class="form-control input-sm ac" name="min_56" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-min-5-row-9474-col-min_51">
                          50
                        </td>
                                              <td class="table-min-5-row-9474-col-min_52">
                          50
                        </td>
                                              <td class="table-min-5-row-9474-col-min_53">
                          50
                        </td>
                                              <td class="table-min-5-row-9474-col-min_54">
                          50
                        </td>
                                              <td class="table-min-5-row-9474-col-min_55">
                          50
                        </td>
                                              <td class="table-min-5-row-9474-col-min_56">
                          50
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-min-5-row-10230-col-min_51">
                          50
                        </td>
                                              <td class="table-min-5-row-10230-col-min_52">
                          50
                        </td>
                                              <td class="table-min-5-row-10230-col-min_53">
                          50
                        </td>
                                              <td class="table-min-5-row-10230-col-min_54">
                          50
                        </td>
                                              <td class="table-min-5-row-10230-col-min_55">
                          50
                        </td>
                                              <td class="table-min-5-row-10230-col-min_56">
                          50
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-min-5-row-11239-col-min_51">
                          50
                        </td>
                                              <td class="table-min-5-row-11239-col-min_52">
                          50
                        </td>
                                              <td class="table-min-5-row-11239-col-min_53">
                          50
                        </td>
                                              <td class="table-min-5-row-11239-col-min_54">
                          50
                        </td>
                                              <td class="table-min-5-row-11239-col-min_55">
                          50
                        </td>
                                              <td class="table-min-5-row-11239-col-min_56">
                          50
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-min-5-row-11240-col-min_51">
                          50
                        </td>
                                              <td class="table-min-5-row-11240-col-min_52">
                          50
                        </td>
                                              <td class="table-min-5-row-11240-col-min_53">
                          50
                        </td>
                                              <td class="table-min-5-row-11240-col-min_54">
                          50
                        </td>
                                              <td class="table-min-5-row-11240-col-min_55">
                          50
                        </td>
                                              <td class="table-min-5-row-11240-col-min_56">
                          50
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="min_6" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      ขั้นต่ำ คู่-คี่
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="min">
                      <input name="bet_type_group_id" type="hidden" value="6">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        หลักแสน<br>
                        <input class="form-control input-sm ac" name="min_61" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักหมื่น<br>
                        <input class="form-control input-sm ac" name="min_62" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักพัน<br>
                        <input class="form-control input-sm ac" name="min_63" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักร้อย<br>
                        <input class="form-control input-sm ac" name="min_64" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักสิบ<br>
                        <input class="form-control input-sm ac" name="min_65" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
                      </th>
                                          <th>
                        หลักหน่วย<br>
                        <input class="form-control input-sm ac" name="min_66" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">50</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-min-6-row-9474-col-min_61">
                          50
                        </td>
                                              <td class="table-min-6-row-9474-col-min_62">
                          50
                        </td>
                                              <td class="table-min-6-row-9474-col-min_63">
                          50
                        </td>
                                              <td class="table-min-6-row-9474-col-min_64">
                          50
                        </td>
                                              <td class="table-min-6-row-9474-col-min_65">
                          50
                        </td>
                                              <td class="table-min-6-row-9474-col-min_66">
                          50
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-min-6-row-10230-col-min_61">
                          50
                        </td>
                                              <td class="table-min-6-row-10230-col-min_62">
                          50
                        </td>
                                              <td class="table-min-6-row-10230-col-min_63">
                          50
                        </td>
                                              <td class="table-min-6-row-10230-col-min_64">
                          50
                        </td>
                                              <td class="table-min-6-row-10230-col-min_65">
                          50
                        </td>
                                              <td class="table-min-6-row-10230-col-min_66">
                          50
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-min-6-row-11239-col-min_61">
                          50
                        </td>
                                              <td class="table-min-6-row-11239-col-min_62">
                          50
                        </td>
                                              <td class="table-min-6-row-11239-col-min_63">
                          50
                        </td>
                                              <td class="table-min-6-row-11239-col-min_64">
                          50
                        </td>
                                              <td class="table-min-6-row-11239-col-min_65">
                          50
                        </td>
                                              <td class="table-min-6-row-11239-col-min_66">
                          50
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-min-6-row-11240-col-min_61">
                          50
                        </td>
                                              <td class="table-min-6-row-11240-col-min_62">
                          50
                        </td>
                                              <td class="table-min-6-row-11240-col-min_63">
                          50
                        </td>
                                              <td class="table-min-6-row-11240-col-min_64">
                          50
                        </td>
                                              <td class="table-min-6-row-11240-col-min_65">
                          50
                        </td>
                                              <td class="table-min-6-row-11240-col-min_66">
                          50
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="min_7" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      ขั้นต่ำ 4-5-6 ตัวตรง
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="min">
                      <input name="bet_type_group_id" type="hidden" value="7">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        4 ตัวตรง<br>
                        <input class="form-control input-sm ac" name="min_71" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">10</a>
                      </th>
                                          <th>
                        5 ตัวตรง<br>
                        <input class="form-control input-sm ac" name="min_72" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">10</a>
                      </th>
                                          <th>
                        6 ตัวตรง<br>
                        <input class="form-control input-sm ac" name="min_73" type="text" value="">
                        &gt;=
                        <a href="#" class="fill-input" tabindex="-1">10</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-min-7-row-9474-col-min_71">
                          10
                        </td>
                                              <td class="table-min-7-row-9474-col-min_72">
                          10
                        </td>
                                              <td class="table-min-7-row-9474-col-min_73">
                          10
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-min-7-row-10230-col-min_71">
                          10
                        </td>
                                              <td class="table-min-7-row-10230-col-min_72">
                          10
                        </td>
                                              <td class="table-min-7-row-10230-col-min_73">
                          10
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-min-7-row-11239-col-min_71">
                          10
                        </td>
                                              <td class="table-min-7-row-11239-col-min_72">
                          10
                        </td>
                                              <td class="table-min-7-row-11239-col-min_73">
                          10
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-min-7-row-11240-col-min_71">
                          10
                        </td>
                                              <td class="table-min-7-row-11240-col-min_72">
                          10
                        </td>
                                              <td class="table-min-7-row-11240-col-min_73">
                          10
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
              </div>
    </div>
      <div class="tab-pane " id="max" data-action="update-max" data-parent-id="9306">
      <ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
                              <li class="js-change-tab active" data-tab2="1">
              <a data-toggle="tab" href="#max_1">3 ตัวท้าย</a>
            </li>
                                                                                                                                    </ul>

      <div class="tab-content no-padding">
                  <div id="max_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุด 3 ตัวท้าย
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max">
                      <input name="bet_type_group_id" type="hidden" value="1">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_1" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">3000</a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_2" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">3000</a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_3" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">3000</a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_4" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_5" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_6" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="max_7" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">100000</a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="max_8" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">100000</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max-1-row-9474-col-max_1">
                          3000
                        </td>
                                              <td class="table-max-1-row-9474-col-max_2">
                          3000
                        </td>
                                              <td class="table-max-1-row-9474-col-max_3">
                          3000
                        </td>
                                              <td class="table-max-1-row-9474-col-max_4">
                          10000
                        </td>
                                              <td class="table-max-1-row-9474-col-max_5">
                          10000
                        </td>
                                              <td class="table-max-1-row-9474-col-max_6">
                          10000
                        </td>
                                              <td class="table-max-1-row-9474-col-max_7">
                          100000
                        </td>
                                              <td class="table-max-1-row-9474-col-max_8">
                          100000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max-1-row-10230-col-max_1">
                          3000
                        </td>
                                              <td class="table-max-1-row-10230-col-max_2">
                          3000
                        </td>
                                              <td class="table-max-1-row-10230-col-max_3">
                          3000
                        </td>
                                              <td class="table-max-1-row-10230-col-max_4">
                          10000
                        </td>
                                              <td class="table-max-1-row-10230-col-max_5">
                          10000
                        </td>
                                              <td class="table-max-1-row-10230-col-max_6">
                          10000
                        </td>
                                              <td class="table-max-1-row-10230-col-max_7">
                          100000
                        </td>
                                              <td class="table-max-1-row-10230-col-max_8">
                          100000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max-1-row-11239-col-max_1">
                          3000
                        </td>
                                              <td class="table-max-1-row-11239-col-max_2">
                          3000
                        </td>
                                              <td class="table-max-1-row-11239-col-max_3">
                          3000
                        </td>
                                              <td class="table-max-1-row-11239-col-max_4">
                          10000
                        </td>
                                              <td class="table-max-1-row-11239-col-max_5">
                          10000
                        </td>
                                              <td class="table-max-1-row-11239-col-max_6">
                          10000
                        </td>
                                              <td class="table-max-1-row-11239-col-max_7">
                          100000
                        </td>
                                              <td class="table-max-1-row-11239-col-max_8">
                          100000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max-1-row-11240-col-max_1">
                          3000
                        </td>
                                              <td class="table-max-1-row-11240-col-max_2">
                          3000
                        </td>
                                              <td class="table-max-1-row-11240-col-max_3">
                          3000
                        </td>
                                              <td class="table-max-1-row-11240-col-max_4">
                          10000
                        </td>
                                              <td class="table-max-1-row-11240-col-max_5">
                          10000
                        </td>
                                              <td class="table-max-1-row-11240-col-max_6">
                          10000
                        </td>
                                              <td class="table-max-1-row-11240-col-max_7">
                          100000
                        </td>
                                              <td class="table-max-1-row-11240-col-max_8">
                          100000
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_2" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุด 3 ตัวหัว
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max">
                      <input name="bet_type_group_id" type="hidden" value="2">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_21" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">3000</a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_22" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_23" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">3000</a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_24" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_25" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_26" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="max_27" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">100000</a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="max_28" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max-2-row-9474-col-max_21">
                          3000
                        </td>
                                              <td class="table-max-2-row-9474-col-max_22">
                          
                        </td>
                                              <td class="table-max-2-row-9474-col-max_23">
                          3000
                        </td>
                                              <td class="table-max-2-row-9474-col-max_24">
                          10000
                        </td>
                                              <td class="table-max-2-row-9474-col-max_25">
                          
                        </td>
                                              <td class="table-max-2-row-9474-col-max_26">
                          10000
                        </td>
                                              <td class="table-max-2-row-9474-col-max_27">
                          100000
                        </td>
                                              <td class="table-max-2-row-9474-col-max_28">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max-2-row-10230-col-max_21">
                          3000
                        </td>
                                              <td class="table-max-2-row-10230-col-max_22">
                          
                        </td>
                                              <td class="table-max-2-row-10230-col-max_23">
                          3000
                        </td>
                                              <td class="table-max-2-row-10230-col-max_24">
                          10000
                        </td>
                                              <td class="table-max-2-row-10230-col-max_25">
                          
                        </td>
                                              <td class="table-max-2-row-10230-col-max_26">
                          10000
                        </td>
                                              <td class="table-max-2-row-10230-col-max_27">
                          100000
                        </td>
                                              <td class="table-max-2-row-10230-col-max_28">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max-2-row-11239-col-max_21">
                          3000
                        </td>
                                              <td class="table-max-2-row-11239-col-max_22">
                          
                        </td>
                                              <td class="table-max-2-row-11239-col-max_23">
                          3000
                        </td>
                                              <td class="table-max-2-row-11239-col-max_24">
                          10000
                        </td>
                                              <td class="table-max-2-row-11239-col-max_25">
                          
                        </td>
                                              <td class="table-max-2-row-11239-col-max_26">
                          10000
                        </td>
                                              <td class="table-max-2-row-11239-col-max_27">
                          100000
                        </td>
                                              <td class="table-max-2-row-11239-col-max_28">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max-2-row-11240-col-max_21">
                          3000
                        </td>
                                              <td class="table-max-2-row-11240-col-max_22">
                          
                        </td>
                                              <td class="table-max-2-row-11240-col-max_23">
                          3000
                        </td>
                                              <td class="table-max-2-row-11240-col-max_24">
                          10000
                        </td>
                                              <td class="table-max-2-row-11240-col-max_25">
                          
                        </td>
                                              <td class="table-max-2-row-11240-col-max_26">
                          10000
                        </td>
                                              <td class="table-max-2-row-11240-col-max_27">
                          100000
                        </td>
                                              <td class="table-max-2-row-11240-col-max_28">
                          
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_3" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุด 2 ตัวท้าย (หวยตัว)
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max">
                      <input name="bet_type_group_id" type="hidden" value="3">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_31" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_32" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_33" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_34" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">0</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_35" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">0</a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_36" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="max_37" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="max_38" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max-3-row-9474-col-max_31">
                          
                        </td>
                                              <td class="table-max-3-row-9474-col-max_32">
                          
                        </td>
                                              <td class="table-max-3-row-9474-col-max_33">
                          
                        </td>
                                              <td class="table-max-3-row-9474-col-max_34">
                          0
                        </td>
                                              <td class="table-max-3-row-9474-col-max_35">
                          0
                        </td>
                                              <td class="table-max-3-row-9474-col-max_36">
                          
                        </td>
                                              <td class="table-max-3-row-9474-col-max_37">
                          
                        </td>
                                              <td class="table-max-3-row-9474-col-max_38">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max-3-row-10230-col-max_31">
                          
                        </td>
                                              <td class="table-max-3-row-10230-col-max_32">
                          
                        </td>
                                              <td class="table-max-3-row-10230-col-max_33">
                          
                        </td>
                                              <td class="table-max-3-row-10230-col-max_34">
                          0
                        </td>
                                              <td class="table-max-3-row-10230-col-max_35">
                          0
                        </td>
                                              <td class="table-max-3-row-10230-col-max_36">
                          
                        </td>
                                              <td class="table-max-3-row-10230-col-max_37">
                          
                        </td>
                                              <td class="table-max-3-row-10230-col-max_38">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max-3-row-11239-col-max_31">
                          
                        </td>
                                              <td class="table-max-3-row-11239-col-max_32">
                          
                        </td>
                                              <td class="table-max-3-row-11239-col-max_33">
                          
                        </td>
                                              <td class="table-max-3-row-11239-col-max_34">
                          0
                        </td>
                                              <td class="table-max-3-row-11239-col-max_35">
                          0
                        </td>
                                              <td class="table-max-3-row-11239-col-max_36">
                          
                        </td>
                                              <td class="table-max-3-row-11239-col-max_37">
                          
                        </td>
                                              <td class="table-max-3-row-11239-col-max_38">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max-3-row-11240-col-max_31">
                          
                        </td>
                                              <td class="table-max-3-row-11240-col-max_32">
                          
                        </td>
                                              <td class="table-max-3-row-11240-col-max_33">
                          
                        </td>
                                              <td class="table-max-3-row-11240-col-max_34">
                          0
                        </td>
                                              <td class="table-max-3-row-11240-col-max_35">
                          0
                        </td>
                                              <td class="table-max-3-row-11240-col-max_36">
                          
                        </td>
                                              <td class="table-max-3-row-11240-col-max_37">
                          
                        </td>
                                              <td class="table-max-3-row-11240-col-max_38">
                          
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_4" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุด 2 ตัวหัว (หวยตัว)
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max">
                      <input name="bet_type_group_id" type="hidden" value="4">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_41" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_42" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_43" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_44" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">0</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_45" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_46" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="max_47" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="max_48" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max-4-row-9474-col-max_41">
                          
                        </td>
                                              <td class="table-max-4-row-9474-col-max_42">
                          
                        </td>
                                              <td class="table-max-4-row-9474-col-max_43">
                          
                        </td>
                                              <td class="table-max-4-row-9474-col-max_44">
                          0
                        </td>
                                              <td class="table-max-4-row-9474-col-max_45">
                          
                        </td>
                                              <td class="table-max-4-row-9474-col-max_46">
                          
                        </td>
                                              <td class="table-max-4-row-9474-col-max_47">
                          
                        </td>
                                              <td class="table-max-4-row-9474-col-max_48">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max-4-row-10230-col-max_41">
                          
                        </td>
                                              <td class="table-max-4-row-10230-col-max_42">
                          
                        </td>
                                              <td class="table-max-4-row-10230-col-max_43">
                          
                        </td>
                                              <td class="table-max-4-row-10230-col-max_44">
                          0
                        </td>
                                              <td class="table-max-4-row-10230-col-max_45">
                          
                        </td>
                                              <td class="table-max-4-row-10230-col-max_46">
                          
                        </td>
                                              <td class="table-max-4-row-10230-col-max_47">
                          
                        </td>
                                              <td class="table-max-4-row-10230-col-max_48">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max-4-row-11239-col-max_41">
                          
                        </td>
                                              <td class="table-max-4-row-11239-col-max_42">
                          
                        </td>
                                              <td class="table-max-4-row-11239-col-max_43">
                          
                        </td>
                                              <td class="table-max-4-row-11239-col-max_44">
                          0
                        </td>
                                              <td class="table-max-4-row-11239-col-max_45">
                          
                        </td>
                                              <td class="table-max-4-row-11239-col-max_46">
                          
                        </td>
                                              <td class="table-max-4-row-11239-col-max_47">
                          
                        </td>
                                              <td class="table-max-4-row-11239-col-max_48">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max-4-row-11240-col-max_41">
                          
                        </td>
                                              <td class="table-max-4-row-11240-col-max_42">
                          
                        </td>
                                              <td class="table-max-4-row-11240-col-max_43">
                          
                        </td>
                                              <td class="table-max-4-row-11240-col-max_44">
                          0
                        </td>
                                              <td class="table-max-4-row-11240-col-max_45">
                          
                        </td>
                                              <td class="table-max-4-row-11240-col-max_46">
                          
                        </td>
                                              <td class="table-max-4-row-11240-col-max_47">
                          
                        </td>
                                              <td class="table-max-4-row-11240-col-max_48">
                          
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_5" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุด สูง-ต่ำ
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max">
                      <input name="bet_type_group_id" type="hidden" value="5">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        หลักแสน<br>
                        <input class="form-control input-sm ac" name="max_51" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักหมื่น<br>
                        <input class="form-control input-sm ac" name="max_52" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักพัน<br>
                        <input class="form-control input-sm ac" name="max_53" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักร้อย<br>
                        <input class="form-control input-sm ac" name="max_54" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักสิบ<br>
                        <input class="form-control input-sm ac" name="max_55" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักหน่วย<br>
                        <input class="form-control input-sm ac" name="max_56" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max-5-row-9474-col-max_51">
                          999999999
                        </td>
                                              <td class="table-max-5-row-9474-col-max_52">
                          999999999
                        </td>
                                              <td class="table-max-5-row-9474-col-max_53">
                          999999999
                        </td>
                                              <td class="table-max-5-row-9474-col-max_54">
                          999999999
                        </td>
                                              <td class="table-max-5-row-9474-col-max_55">
                          999999999
                        </td>
                                              <td class="table-max-5-row-9474-col-max_56">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max-5-row-10230-col-max_51">
                          999999999
                        </td>
                                              <td class="table-max-5-row-10230-col-max_52">
                          999999999
                        </td>
                                              <td class="table-max-5-row-10230-col-max_53">
                          999999999
                        </td>
                                              <td class="table-max-5-row-10230-col-max_54">
                          999999999
                        </td>
                                              <td class="table-max-5-row-10230-col-max_55">
                          999999999
                        </td>
                                              <td class="table-max-5-row-10230-col-max_56">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max-5-row-11239-col-max_51">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11239-col-max_52">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11239-col-max_53">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11239-col-max_54">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11239-col-max_55">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11239-col-max_56">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max-5-row-11240-col-max_51">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11240-col-max_52">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11240-col-max_53">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11240-col-max_54">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11240-col-max_55">
                          999999999
                        </td>
                                              <td class="table-max-5-row-11240-col-max_56">
                          999999999
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_6" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุด คู่-คี่
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max">
                      <input name="bet_type_group_id" type="hidden" value="6">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        หลักแสน<br>
                        <input class="form-control input-sm ac" name="max_61" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักหมื่น<br>
                        <input class="form-control input-sm ac" name="max_62" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักพัน<br>
                        <input class="form-control input-sm ac" name="max_63" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักร้อย<br>
                        <input class="form-control input-sm ac" name="max_64" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักสิบ<br>
                        <input class="form-control input-sm ac" name="max_65" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักหน่วย<br>
                        <input class="form-control input-sm ac" name="max_66" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max-6-row-9474-col-max_61">
                          999999999
                        </td>
                                              <td class="table-max-6-row-9474-col-max_62">
                          999999999
                        </td>
                                              <td class="table-max-6-row-9474-col-max_63">
                          999999999
                        </td>
                                              <td class="table-max-6-row-9474-col-max_64">
                          999999999
                        </td>
                                              <td class="table-max-6-row-9474-col-max_65">
                          999999999
                        </td>
                                              <td class="table-max-6-row-9474-col-max_66">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max-6-row-10230-col-max_61">
                          999999999
                        </td>
                                              <td class="table-max-6-row-10230-col-max_62">
                          999999999
                        </td>
                                              <td class="table-max-6-row-10230-col-max_63">
                          999999999
                        </td>
                                              <td class="table-max-6-row-10230-col-max_64">
                          999999999
                        </td>
                                              <td class="table-max-6-row-10230-col-max_65">
                          999999999
                        </td>
                                              <td class="table-max-6-row-10230-col-max_66">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max-6-row-11239-col-max_61">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11239-col-max_62">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11239-col-max_63">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11239-col-max_64">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11239-col-max_65">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11239-col-max_66">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max-6-row-11240-col-max_61">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11240-col-max_62">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11240-col-max_63">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11240-col-max_64">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11240-col-max_65">
                          999999999
                        </td>
                                              <td class="table-max-6-row-11240-col-max_66">
                          999999999
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_7" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุด 4-5-6 ตัวตรง
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max">
                      <input name="bet_type_group_id" type="hidden" value="7">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        4 ตัวตรง<br>
                        <input class="form-control input-sm ac" name="max_71" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">1000</a>
                      </th>
                                          <th>
                        5 ตัวตรง<br>
                        <input class="form-control input-sm ac" name="max_72" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">1000</a>
                      </th>
                                          <th>
                        6 ตัวตรง<br>
                        <input class="form-control input-sm ac" name="max_73" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">1000</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max-7-row-9474-col-max_71">
                          1000
                        </td>
                                              <td class="table-max-7-row-9474-col-max_72">
                          1000
                        </td>
                                              <td class="table-max-7-row-9474-col-max_73">
                          1000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max-7-row-10230-col-max_71">
                          1000
                        </td>
                                              <td class="table-max-7-row-10230-col-max_72">
                          1000
                        </td>
                                              <td class="table-max-7-row-10230-col-max_73">
                          1000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max-7-row-11239-col-max_71">
                          1000
                        </td>
                                              <td class="table-max-7-row-11239-col-max_72">
                          1000
                        </td>
                                              <td class="table-max-7-row-11239-col-max_73">
                          1000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max-7-row-11240-col-max_71">
                          1000
                        </td>
                                              <td class="table-max-7-row-11240-col-max_72">
                          1000
                        </td>
                                              <td class="table-max-7-row-11240-col-max_73">
                          1000
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
              </div>
    </div>
      <div class="tab-pane " id="max_per_num" data-action="update-max_per_num" data-parent-id="9306">
      <ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
                              <li class="js-change-tab active" data-tab2="1">
              <a data-toggle="tab" href="#max_per_num_1">3 ตัวท้าย</a>
            </li>
                                                                                                                                    </ul>

      <div class="tab-content no-padding">
                  <div id="max_per_num_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุดต่อเลข 3 ตัวท้าย
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max_per_num">
                      <input name="bet_type_group_id" type="hidden" value="1">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_1" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_2" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">100000</a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_per_num_3" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">30000</a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_4" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">100000</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_5" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">100000</a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_per_num_6" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">100000</a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_7" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">300000</a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_8" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">300000</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max_per_num-1-row-9474-col-max_per_num_1">
                          10000
                        </td>
                                              <td class="table-max_per_num-1-row-9474-col-max_per_num_2">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-9474-col-max_per_num_3">
                          30000
                        </td>
                                              <td class="table-max_per_num-1-row-9474-col-max_per_num_4">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-9474-col-max_per_num_5">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-9474-col-max_per_num_6">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-9474-col-max_per_num_7">
                          300000
                        </td>
                                              <td class="table-max_per_num-1-row-9474-col-max_per_num_8">
                          300000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max_per_num-1-row-10230-col-max_per_num_1">
                          10000
                        </td>
                                              <td class="table-max_per_num-1-row-10230-col-max_per_num_2">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-10230-col-max_per_num_3">
                          30000
                        </td>
                                              <td class="table-max_per_num-1-row-10230-col-max_per_num_4">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-10230-col-max_per_num_5">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-10230-col-max_per_num_6">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-10230-col-max_per_num_7">
                          300000
                        </td>
                                              <td class="table-max_per_num-1-row-10230-col-max_per_num_8">
                          300000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max_per_num-1-row-11239-col-max_per_num_1">
                          10000
                        </td>
                                              <td class="table-max_per_num-1-row-11239-col-max_per_num_2">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-11239-col-max_per_num_3">
                          30000
                        </td>
                                              <td class="table-max_per_num-1-row-11239-col-max_per_num_4">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-11239-col-max_per_num_5">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-11239-col-max_per_num_6">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-11239-col-max_per_num_7">
                          300000
                        </td>
                                              <td class="table-max_per_num-1-row-11239-col-max_per_num_8">
                          300000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max_per_num-1-row-11240-col-max_per_num_1">
                          10000
                        </td>
                                              <td class="table-max_per_num-1-row-11240-col-max_per_num_2">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-11240-col-max_per_num_3">
                          30000
                        </td>
                                              <td class="table-max_per_num-1-row-11240-col-max_per_num_4">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-11240-col-max_per_num_5">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-11240-col-max_per_num_6">
                          100000
                        </td>
                                              <td class="table-max_per_num-1-row-11240-col-max_per_num_7">
                          300000
                        </td>
                                              <td class="table-max_per_num-1-row-11240-col-max_per_num_8">
                          300000
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_per_num_2" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุดต่อเลข 3 ตัวหัว
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max_per_num">
                      <input name="bet_type_group_id" type="hidden" value="2">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_21" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_22" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_per_num_23" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">30000</a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_24" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">100000</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_25" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_per_num_26" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">100000</a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_27" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">200000</a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_28" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max_per_num-2-row-9474-col-max_per_num_21">
                          10000
                        </td>
                                              <td class="table-max_per_num-2-row-9474-col-max_per_num_22">
                          
                        </td>
                                              <td class="table-max_per_num-2-row-9474-col-max_per_num_23">
                          30000
                        </td>
                                              <td class="table-max_per_num-2-row-9474-col-max_per_num_24">
                          100000
                        </td>
                                              <td class="table-max_per_num-2-row-9474-col-max_per_num_25">
                          
                        </td>
                                              <td class="table-max_per_num-2-row-9474-col-max_per_num_26">
                          100000
                        </td>
                                              <td class="table-max_per_num-2-row-9474-col-max_per_num_27">
                          200000
                        </td>
                                              <td class="table-max_per_num-2-row-9474-col-max_per_num_28">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max_per_num-2-row-10230-col-max_per_num_21">
                          10000
                        </td>
                                              <td class="table-max_per_num-2-row-10230-col-max_per_num_22">
                          
                        </td>
                                              <td class="table-max_per_num-2-row-10230-col-max_per_num_23">
                          30000
                        </td>
                                              <td class="table-max_per_num-2-row-10230-col-max_per_num_24">
                          100000
                        </td>
                                              <td class="table-max_per_num-2-row-10230-col-max_per_num_25">
                          
                        </td>
                                              <td class="table-max_per_num-2-row-10230-col-max_per_num_26">
                          100000
                        </td>
                                              <td class="table-max_per_num-2-row-10230-col-max_per_num_27">
                          200000
                        </td>
                                              <td class="table-max_per_num-2-row-10230-col-max_per_num_28">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max_per_num-2-row-11239-col-max_per_num_21">
                          10000
                        </td>
                                              <td class="table-max_per_num-2-row-11239-col-max_per_num_22">
                          
                        </td>
                                              <td class="table-max_per_num-2-row-11239-col-max_per_num_23">
                          30000
                        </td>
                                              <td class="table-max_per_num-2-row-11239-col-max_per_num_24">
                          100000
                        </td>
                                              <td class="table-max_per_num-2-row-11239-col-max_per_num_25">
                          
                        </td>
                                              <td class="table-max_per_num-2-row-11239-col-max_per_num_26">
                          100000
                        </td>
                                              <td class="table-max_per_num-2-row-11239-col-max_per_num_27">
                          200000
                        </td>
                                              <td class="table-max_per_num-2-row-11239-col-max_per_num_28">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max_per_num-2-row-11240-col-max_per_num_21">
                          10000
                        </td>
                                              <td class="table-max_per_num-2-row-11240-col-max_per_num_22">
                          
                        </td>
                                              <td class="table-max_per_num-2-row-11240-col-max_per_num_23">
                          30000
                        </td>
                                              <td class="table-max_per_num-2-row-11240-col-max_per_num_24">
                          100000
                        </td>
                                              <td class="table-max_per_num-2-row-11240-col-max_per_num_25">
                          
                        </td>
                                              <td class="table-max_per_num-2-row-11240-col-max_per_num_26">
                          100000
                        </td>
                                              <td class="table-max_per_num-2-row-11240-col-max_per_num_27">
                          200000
                        </td>
                                              <td class="table-max_per_num-2-row-11240-col-max_per_num_28">
                          
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_per_num_3" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุดต่อเลข 2 ตัวท้าย (หวยตัว)
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max_per_num">
                      <input name="bet_type_group_id" type="hidden" value="3">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_31" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_32" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_per_num_33" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_34" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">0</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_35" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">0</a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_per_num_36" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_37" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_38" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max_per_num-3-row-9474-col-max_per_num_31">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-9474-col-max_per_num_32">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-9474-col-max_per_num_33">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-9474-col-max_per_num_34">
                          0
                        </td>
                                              <td class="table-max_per_num-3-row-9474-col-max_per_num_35">
                          0
                        </td>
                                              <td class="table-max_per_num-3-row-9474-col-max_per_num_36">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-9474-col-max_per_num_37">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-9474-col-max_per_num_38">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max_per_num-3-row-10230-col-max_per_num_31">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-10230-col-max_per_num_32">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-10230-col-max_per_num_33">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-10230-col-max_per_num_34">
                          0
                        </td>
                                              <td class="table-max_per_num-3-row-10230-col-max_per_num_35">
                          0
                        </td>
                                              <td class="table-max_per_num-3-row-10230-col-max_per_num_36">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-10230-col-max_per_num_37">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-10230-col-max_per_num_38">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max_per_num-3-row-11239-col-max_per_num_31">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11239-col-max_per_num_32">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11239-col-max_per_num_33">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11239-col-max_per_num_34">
                          0
                        </td>
                                              <td class="table-max_per_num-3-row-11239-col-max_per_num_35">
                          0
                        </td>
                                              <td class="table-max_per_num-3-row-11239-col-max_per_num_36">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11239-col-max_per_num_37">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11239-col-max_per_num_38">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max_per_num-3-row-11240-col-max_per_num_31">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11240-col-max_per_num_32">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11240-col-max_per_num_33">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11240-col-max_per_num_34">
                          0
                        </td>
                                              <td class="table-max_per_num-3-row-11240-col-max_per_num_35">
                          0
                        </td>
                                              <td class="table-max_per_num-3-row-11240-col-max_per_num_36">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11240-col-max_per_num_37">
                          
                        </td>
                                              <td class="table-max_per_num-3-row-11240-col-max_per_num_38">
                          
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_per_num_4" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุดต่อเลข 2 ตัวหัว (หวยตัว)
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max_per_num">
                      <input name="bet_type_group_id" type="hidden" value="4">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        3 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_41" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_42" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        3 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_per_num_43" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_44" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">0</a>
                      </th>
                                          <th>
                        2 ตัวล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_45" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        2 ตัวโต๊ด<br>
                        <input class="form-control input-sm ac" name="max_per_num_46" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งบน<br>
                        <input class="form-control input-sm ac" name="max_per_num_47" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
                      </th>
                                          <th>
                        วิ่งล่าง<br>
                        <input class="form-control input-sm ac" name="max_per_num_48" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1"></a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max_per_num-4-row-9474-col-max_per_num_41">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-9474-col-max_per_num_42">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-9474-col-max_per_num_43">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-9474-col-max_per_num_44">
                          0
                        </td>
                                              <td class="table-max_per_num-4-row-9474-col-max_per_num_45">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-9474-col-max_per_num_46">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-9474-col-max_per_num_47">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-9474-col-max_per_num_48">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max_per_num-4-row-10230-col-max_per_num_41">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-10230-col-max_per_num_42">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-10230-col-max_per_num_43">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-10230-col-max_per_num_44">
                          0
                        </td>
                                              <td class="table-max_per_num-4-row-10230-col-max_per_num_45">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-10230-col-max_per_num_46">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-10230-col-max_per_num_47">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-10230-col-max_per_num_48">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max_per_num-4-row-11239-col-max_per_num_41">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11239-col-max_per_num_42">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11239-col-max_per_num_43">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11239-col-max_per_num_44">
                          0
                        </td>
                                              <td class="table-max_per_num-4-row-11239-col-max_per_num_45">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11239-col-max_per_num_46">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11239-col-max_per_num_47">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11239-col-max_per_num_48">
                          
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max_per_num-4-row-11240-col-max_per_num_41">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11240-col-max_per_num_42">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11240-col-max_per_num_43">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11240-col-max_per_num_44">
                          0
                        </td>
                                              <td class="table-max_per_num-4-row-11240-col-max_per_num_45">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11240-col-max_per_num_46">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11240-col-max_per_num_47">
                          
                        </td>
                                              <td class="table-max_per_num-4-row-11240-col-max_per_num_48">
                          
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_per_num_5" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุดต่อเลข สูง-ต่ำ
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max_per_num">
                      <input name="bet_type_group_id" type="hidden" value="5">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        หลักแสน<br>
                        <input class="form-control input-sm ac" name="max_per_num_51" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักหมื่น<br>
                        <input class="form-control input-sm ac" name="max_per_num_52" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักพัน<br>
                        <input class="form-control input-sm ac" name="max_per_num_53" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักร้อย<br>
                        <input class="form-control input-sm ac" name="max_per_num_54" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักสิบ<br>
                        <input class="form-control input-sm ac" name="max_per_num_55" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักหน่วย<br>
                        <input class="form-control input-sm ac" name="max_per_num_56" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max_per_num-5-row-9474-col-max_per_num_51">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-9474-col-max_per_num_52">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-9474-col-max_per_num_53">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-9474-col-max_per_num_54">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-9474-col-max_per_num_55">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-9474-col-max_per_num_56">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max_per_num-5-row-10230-col-max_per_num_51">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-10230-col-max_per_num_52">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-10230-col-max_per_num_53">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-10230-col-max_per_num_54">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-10230-col-max_per_num_55">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-10230-col-max_per_num_56">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max_per_num-5-row-11239-col-max_per_num_51">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11239-col-max_per_num_52">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11239-col-max_per_num_53">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11239-col-max_per_num_54">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11239-col-max_per_num_55">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11239-col-max_per_num_56">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max_per_num-5-row-11240-col-max_per_num_51">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11240-col-max_per_num_52">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11240-col-max_per_num_53">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11240-col-max_per_num_54">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11240-col-max_per_num_55">
                          999999999
                        </td>
                                              <td class="table-max_per_num-5-row-11240-col-max_per_num_56">
                          999999999
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_per_num_6" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุดต่อเลข คู่-คี่
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max_per_num">
                      <input name="bet_type_group_id" type="hidden" value="6">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        หลักแสน<br>
                        <input class="form-control input-sm ac" name="max_per_num_61" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักหมื่น<br>
                        <input class="form-control input-sm ac" name="max_per_num_62" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักพัน<br>
                        <input class="form-control input-sm ac" name="max_per_num_63" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักร้อย<br>
                        <input class="form-control input-sm ac" name="max_per_num_64" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักสิบ<br>
                        <input class="form-control input-sm ac" name="max_per_num_65" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
                      </th>
                                          <th>
                        หลักหน่วย<br>
                        <input class="form-control input-sm ac" name="max_per_num_66" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">999999999</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max_per_num-6-row-9474-col-max_per_num_61">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-9474-col-max_per_num_62">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-9474-col-max_per_num_63">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-9474-col-max_per_num_64">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-9474-col-max_per_num_65">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-9474-col-max_per_num_66">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max_per_num-6-row-10230-col-max_per_num_61">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-10230-col-max_per_num_62">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-10230-col-max_per_num_63">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-10230-col-max_per_num_64">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-10230-col-max_per_num_65">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-10230-col-max_per_num_66">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max_per_num-6-row-11239-col-max_per_num_61">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11239-col-max_per_num_62">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11239-col-max_per_num_63">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11239-col-max_per_num_64">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11239-col-max_per_num_65">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11239-col-max_per_num_66">
                          999999999
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max_per_num-6-row-11240-col-max_per_num_61">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11240-col-max_per_num_62">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11240-col-max_per_num_63">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11240-col-max_per_num_64">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11240-col-max_per_num_65">
                          999999999
                        </td>
                                              <td class="table-max_per_num-6-row-11240-col-max_per_num_66">
                          999999999
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
                  <div id="max_per_num_7" class="tab-pane " data-action="update-min" data-parent-id="9306">

            <form method="POST" action="#" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
              <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                <thead clsss="thin-border-bottom">
                  <tr>
                    <th colspan="99" class="deep-blue caption">
                      สูงสุดต่อเลข 4-5-6 ตัวตรง
                    </th>
                  </tr>

                  <tr>
                    <th colspan="3" class="vm">
                      <input name="action" type="hidden" value="max_per_num">
                      <input name="bet_type_group_id" type="hidden" value="7">
                      <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                      <a class="btn btn-primary btn-xs">ยกเลิก</a>
                    </th>

                    <th><input class="check-all" name="" type="checkbox" value="0"></th>

                                          <th>
                        4 ตัวตรง<br>
                        <input class="form-control input-sm ac" name="max_per_num_71" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
                      </th>
                                          <th>
                        5 ตัวตรง<br>
                        <input class="form-control input-sm ac" name="max_per_num_72" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
                      </th>
                                          <th>
                        6 ตัวตรง<br>
                        <input class="form-control input-sm ac" name="max_per_num_73" type="text" value="">
                        &lt;=
                        <a href="#" class="fill-input" tabindex="-1">10000</a>
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>

                                              <td class="table-max_per_num-7-row-9474-col-max_per_num_71">
                          10000
                        </td>
                                              <td class="table-max_per_num-7-row-9474-col-max_per_num_72">
                          10000
                        </td>
                                              <td class="table-max_per_num-7-row-9474-col-max_per_num_73">
                          10000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="10230"></td>

                                              <td class="table-max_per_num-7-row-10230-col-max_per_num_71">
                          10000
                        </td>
                                              <td class="table-max_per_num-7-row-10230-col-max_per_num_72">
                          10000
                        </td>
                                              <td class="table-max_per_num-7-row-10230-col-max_per_num_73">
                          10000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11239"></td>

                                              <td class="table-max_per_num-7-row-11239-col-max_per_num_71">
                          10000
                        </td>
                                              <td class="table-max_per_num-7-row-11239-col-max_per_num_72">
                          10000
                        </td>
                                              <td class="table-max_per_num-7-row-11239-col-max_per_num_73">
                          10000
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

                      <td class="check"><input name="member_ids[]" type="checkbox" value="11240"></td>

                                              <td class="table-max_per_num-7-row-11240-col-max_per_num_71">
                          10000
                        </td>
                                              <td class="table-max_per_num-7-row-11240-col-max_per_num_72">
                          10000
                        </td>
                                              <td class="table-max_per_num-7-row-11240-col-max_per_num_73">
                          10000
                        </td>
                                          </tr>
                                  </tbody>
              </table>
            </form>

          </div>
              </div>
    </div>
  </div>
</div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.page-content -->
    </div>

@endsection

 