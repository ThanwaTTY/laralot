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
    <script src="../../js/main.js"></script>


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
<script src="../../js/main.js"></script>

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
          3. ขั้นต่ำ/สูงสุด/สูงสุดต่อเลข
          </li>
         </ul><!-- /.breadcrumb -->

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
                  <a href="https://agent.superlot999.com/users/edit2/9306?tab1=min&amp;tab2=1&amp;order=username_asc" class="ajax">3M3K</a>
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
              <li class="js-change-tab " data-tab1="max_per_num"><a href="#max_per_num" data-toggle="tab">สูงสุดต่อเลข</a></li>
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
                  <option value="" selected="selected">ชื่อสมาชิก ก่อน -&gt; หลัง</option>
                  <option value="">ชื่อสมาชิก หลัง -&gt; ก่อน</option>
                  <option value="">เวลาที่สร้าง ก่อน -&gt; หลัง</option>
                  <option value="">เวลาที่สร้าง หลัง -&gt; ก่อน</option>
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

                  <form method="POST" action="/min" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                  {{ csrf_field() }}
                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                      <thead clsss="thin-border-bottom">
                        <tr>
                          <th colspan="99" class="deep-blue caption">
                            ขั้นต่ำ 3 ตัวท้าย
                          </th>
                        </tr>

                        <tr>
                          <th colspan="3" class="vm text-center">
                            <input name="action" type="hidden" value="min">
                            <input name="bet_type_group_id" type="hidden" value="1">
                            <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                            <a class="btn btn-primary btn-xs">ยกเลิก</a>
                          </th>
                          <th><input class="check-all" name="" type="checkbox" value="0"></th>
                          <th>3 ตัวบน<br>
                            <input class="form-control input-sm ac" name="min_1" type="text" value="">
                            &gt;=
                            <a href="#" class="fill-input" tabindex="-1">5</a>
                          </th>
                          <th>3 ตัวล่าง<br>
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
                      @foreach($member as $members)
                      <tbody>
                          <tr data-id="9474" data-status="1" class=" ">
                            <td class="id">{{$members->playset->id}}</td>
                            <td>{{$members->username}} <span class="span-name jquery-hide"></span></td>
                            @if($members->level == 7)
                            <td class="type" nowrap="">Member</td>
                            @elseif($members->level == 6)
                            <td class="type" nowrap="">Agent</td>
                            @elseif($members->level == 5)
                            <td class="type" nowrap="">Master</td>
                            @elseif($members->level == 4)
                            <td class="type" nowrap="">Senior</td>
                            @elseif($members->level == 3)
                            <td class="type" nowrap="">Super Senior</td>
                            @elseif($members->level == 2)
                            <td class="type" nowrap="">Pathner</td>
                            @elseif($members->level == 1)
                            <td class="type" nowrap="">Admin</td>
                            @endif
                            <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>
                            <td class="table-min-1-row-9474-col-min_1">{{ $members->playset->min_1}}</td>
                            <td class="table-min-1-row-9474-col-min_2">{{ $members->playset->min_2}}</td>
                            <td class="table-min-1-row-9474-col-min_3">{{ $members->playset->min_3}}</td>
                            <td class="table-min-1-row-9474-col-min_4">{{ $members->playset->min_4}}</td>
                            <td class="table-min-1-row-9474-col-min_5">{{ $members->playset->min_5}}</td>
                            <td class="table-min-1-row-9474-col-min_6">{{ $members->playset->min_6}}</td>
                            <td class="table-min-1-row-9474-col-min_7">{{ $members->playset->min_7}}</td>
                            <td class="table-min-1-row-9474-col-min_8">{{ $members->playset->min_8}}</td>
                          </tr>
                      </tbody>
                    @endforeach
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
                    <form method="POST" action="" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
                      <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                        <thead clsss="thin-border-bottom">
                          <tr>
                            <th colspan="99" class="deep-blue caption">
                              สูงสุด 3 ตัวท้าย
                            </th>
                          </tr>

                          <tr>
                              <th colspan="3" class="vm text-center">
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
                         @foreach($member as $members)
                        <tbody>
                          <tr data-id="9474" data-status="1" class=" ">
                              <td class="id">{{$members->playset->id}}</td>
                              <td>{{$members->username}} <span class="span-name jquery-hide"></span></td>
                               @if($members->level == 7)
                              <td class="type" nowrap="">Member</td>
                              @elseif($members->level == 6)
                              <td class="type" nowrap="">Agent</td>
                              @elseif($members->level == 5)
                              <td class="type" nowrap="">Master</td>
                              @elseif($members->level == 4)
                              <td class="type" nowrap="">Senior</td>
                              @elseif($members->level == 3)
                              <td class="type" nowrap="">Super Senior</td>
                              @elseif($members->level == 2)
                              <td class="type" nowrap="">Pathner</td>
                              @elseif($members->level == 1)
                              <td class="type" nowrap="">Admin</td>
                              @endif
                              <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>
                              <td class="table-max-1-row-9474-col-max_1">{{$members->playset->max_1}}</td>
                              <td class="table-max-1-row-9474-col-max_2">{{$members->playset->max_2}}</td>
                              <td class="table-max-1-row-9474-col-max_3">{{$members->playset->max_3}}</td>
                              <td class="table-max-1-row-9474-col-max_4">{{$members->playset->max_4}}</td>
                              <td class="table-max-1-row-9474-col-max_5">{{$members->playset->max_5}}</td>
                              <td class="table-max-1-row-9474-col-max_6">{{$members->playset->max_6}}</td>
                              <td class="table-max-1-row-9474-col-max_7">{{$members->playset->max_7}}</td>
                              <td class="table-max-1-row-9474-col-max_8">{{$members->playset->max_8}}</td>
                          </tr>
                         @endforeach
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
                  <form method="POST" action="" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                      <thead clsss="thin-border-bottom">
                        <tr>
                          <th colspan="99" class="deep-blue caption">
                            สูงสุดต่อเลข 3 ตัวท้าย
                          </th>
                        </tr>

                        <tr>
                          <th colspan="3" class="vm text-center">
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
                      @foreach($member as $members)
                      <tbody>
                        <tr data-id="9474" data-status="1" class=" ">
                            <td class="id">{{$members->playset->id}}</td>
                            <td>{{$members->username}} <span class="span-name jquery-hide"></span></td>
                            @if($members->level == 7)
                              <td class="type" nowrap="">Member</td>
                              @elseif($members->level == 6)
                              <td class="type" nowrap="">Agent</td>
                              @elseif($members->level == 5)
                              <td class="type" nowrap="">Master</td>
                              @elseif($members->level == 4)
                              <td class="type" nowrap="">Senior</td>
                              @elseif($members->level == 3)
                              <td class="type" nowrap="">Super Senior</td>
                              @elseif($members->level == 2)
                              <td class="type" nowrap="">Pathner</td>
                              @elseif($members->level == 1)
                              <td class="type" nowrap="">Admin</td>
                              @endif
                            <td class="check"><input name="member_ids[]" type="checkbox" value="9474"></td>
                            <td class="table-max_per_num-1-row-9474-col-max_per_num_1">{{$members->playset->max_per_num1}}</td>
                            <td class="table-max_per_num-1-row-9474-col-max_per_num_2">{{$members->playset->max_per_num2}}</td>
                            <td class="table-max_per_num-1-row-9474-col-max_per_num_3">{{$members->playset->max_per_num3}}</td>
                            <td class="table-max_per_num-1-row-9474-col-max_per_num_4">{{$members->playset->max_per_num4}}</td>
                            <td class="table-max_per_num-1-row-9474-col-max_per_num_5">{{$members->playset->max_per_num5}}</td>
                            <td class="table-max_per_num-1-row-9474-col-max_per_num_6">{{$members->playset->max_per_num6}}</td>
                            <td class="table-max_per_num-1-row-9474-col-max_per_num_7">{{$members->playset->max_per_num7}}</td>
                            <td class="table-max_per_num-1-row-9474-col-max_per_num_8">{{$members->playset->max_per_num8}}</td>
                        </tr>    
                      </tbody>
                      @endforeach
                    </table>
                  </form>

                </div>

                         
              </div>
            </div>
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
</div><!-- /.page-content -->
<script type="text/javascript">

</script>
@endsection

 