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
  <link rel="stylesheet" href="/css/custom2.css">

@endsection
@section('content')
    <div class="breadcrumbs">
        <ul id="breadcrumbs" class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <!-- <a href="#">Home</a> -->
                </li>
            <li>
                รายการแทง 
            </li>
            <li>
                ตั้งค่ารับของแยกตามชนิด
            </li>
        </ul><!-- /.breadcrumb -->
        <span id="global-clock" class="pull-right"></span>
    </div>
    <div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"> <div class="page-header">
  <h1>
    ตั้งค่ารับของแยกตามชนิด
  </h1>
</div>



<div class="alert alert-info">
  กรุณาใส่จำนวนเงินที่ท่านต้องการถือสู้ <span class="deep-red">ต่อตัว</span> ของแต่ละประเภทลงในช่องด้านล่าง เพื่อเปิดรับของ หากไม่ต้องการถือสู้ในประเภทใด ๆ ให้ใส่ 0
</div>

<h3>
  <i class="fa fa-angle-right blue"></i>
  ตั้งค่าการรับของ
</h3>

<div class="tabbable">
  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
          <li class="active">
        <a data-toggle="tab" href="#bet_type_group_1">3 ตัวท้าย</a>
      </li>
      </ul>

  <div class="space-4"></div>

  <div class="tab-content no-padding no-border">
          <div id="bet_type_group_1" class="tab-pane in active">
        <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap enable-check-all">
          <thead class="thin-border-bottom">
            <tr>
              <th class="align-center">ชนิด</th>
                              <th class="align-center width-100px">3 ตัวบน</th>
                              <th class="align-center width-100px">3 ตัวล่าง</th>
                              <th class="align-center width-100px">3 ตัวโต๊ด</th>
                              <th class="align-center width-100px">2 ตัวบน</th>
                              <th class="align-center width-100px">2 ตัวล่าง</th>
                              <th class="align-center width-100px">2 ตัวโต๊ด</th>
                              <th class="align-center width-100px">วิ่งบน</th>
                              <th class="align-center width-100px">วิ่งล่าง</th>
                            <th colspan="2"></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="align-center align-middle deep-blue bolder bigger-110">กรอกทุกแถว</td>
                              <td class="align-center">
                  <input type="text" class="form-control input-sm input-small align-right width-90px input-copy" data-type="1">
                </td>
                              <td class="align-center">
                  <input type="text" class="form-control input-sm input-small align-right width-90px input-copy" data-type="2">
                </td>
                              <td class="align-center">
                  <input type="text" class="form-control input-sm input-small align-right width-90px input-copy" data-type="3">
                </td>
                              <td class="align-center">
                  <input type="text" class="form-control input-sm input-small align-right width-90px input-copy" data-type="4">
                </td>
                              <td class="align-center">
                  <input type="text" class="form-control input-sm input-small align-right width-90px input-copy" data-type="5">
                </td>
                              <td class="align-center">
                  <input type="text" class="form-control input-sm input-small align-right width-90px input-copy" data-type="6">
                </td>
                              <td class="align-center">
                  <input type="text" class="form-control input-sm input-small align-right width-90px input-copy" data-type="7">
                </td>
                              <td class="align-center">
                  <input type="text" class="form-control input-sm input-small align-right width-90px input-copy" data-type="8">
                </td>
              
              <td></td>
              <td>
                <div class="inline checkbox no-margin">
                  <label><input class="check-all" checked="checked" name="" type="checkbox"> <span class="lbl"></span></label>
                </div>
              </td>
            </tr>
                                                                      <tr><td colspan="99" class="ac bolder bg-green3">รัฐบาล</td></tr>
              
              <tr class="bet-limit-container bet-limit-container-1" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">รัฐบาลไทย</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="100" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="100" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="100" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="500" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="500" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="100" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="1000" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="1000" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="1" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="1"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                                                          <tr><td colspan="99" class="ac bolder bg-green3">หวย ธกส.</td></tr>
              
              <tr class="bet-limit-container bet-limit-container-39" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หวย ธกส. (BAAC1)</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="39" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="39"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-110" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หวย ธกส. (BAAC2)</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="110" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="110"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                                                          <tr><td colspan="99" class="ac bolder bg-green3">หวยหุ้นไทย</td></tr>
              
              <tr class="bet-limit-container bet-limit-container-2" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดเช้า &gt;&gt;&gt;</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="2" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="2"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-111" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดเช้าคู่ 2</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="111" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="111"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-112" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดเช้าคู่ 3</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="112" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="112"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-113" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดเช้าคู่ 4</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="113" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="113"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-114" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดเช้าคู่ 5</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="114" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="114"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-115" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดเช้าคู่ 6</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="115" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="115"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-116" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดเช้าคู่ 7</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="116" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="116"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-117" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดเช้าคู่ 8</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="117" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="117"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-118" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดเช้าคู่ 9</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="118" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="118"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-119" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดเช้าคู่ 10</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="119" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="119"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-3" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเที่ยง &gt;&gt;&gt;</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="3" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="3"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-4" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดบ่าย &gt;&gt;&gt;</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="4" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="4"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-124" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดบ่ายคู่ 2</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="124" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="124"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-125" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดบ่ายคู่ 3</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="125" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="125"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-126" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดบ่ายคู่ 4</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="126" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="126"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-127" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดบ่ายคู่ 5</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="127" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="127"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-128" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดบ่ายคู่ 6</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="128" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="128"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-129" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดบ่ายคู่ 7</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="129" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="129"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-130" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดบ่ายคู่ 8</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="130" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="130"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-131" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดบ่ายคู่ 9</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="131" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="131"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-132" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไทยเปิดบ่ายคู่ 10</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="132" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="132"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-137" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ไทยก่อนปิดเย็น Pre-Close</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="137" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="137"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-5" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเย็น &gt;&gt;&gt;</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="5" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="5"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                                                          <tr><td colspan="99" class="ac bolder bg-green3">หวยลาว</td></tr>
              
              <tr class="bet-limit-container bet-limit-container-139" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หวยลาว วันพุธ</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="139" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="139"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                                                          <tr><td colspan="99" class="ac bolder bg-green3">หวยมาเลย์ (Magnum4D)</td></tr>
              
              <tr class="bet-limit-container bet-limit-container-25" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หวยมาเลย์ วันพุธ</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="25" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="25"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-22" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หวยมาเลย์ วันเสาร์</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="22" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="22"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-24" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หวยมาเลย์ วันอาทิตย์</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="24" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="24"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                                                          <tr><td colspan="99" class="ac bolder bg-green3">หวยหุ้นต่างประเทศ</td></tr>
              
              <tr class="bet-limit-container bet-limit-container-6" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">นิเคอิ รอบเช้า</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="6" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="6"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-11" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นจีน รอบเช้า</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="11" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="11"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-7" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ฮั่งเส็ง รอบเช้า</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="7" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="7"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-12" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นไต้หวัน</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="12" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="12"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-13" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นเกาหลี</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="13" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="13"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-8" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">นิเคอิ รอบบ่าย</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="8" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="8"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-14" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นจีน รอบบ่าย</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="14" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="14"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-9" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ฮั่งเส็ง รอบบ่าย</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="9" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="9"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-15" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นสิงคโปร์</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="15" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="15"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-16" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นอินเดีย</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="16" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="16"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-17" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นอียิปต์</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="17" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="17"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-18" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นรัสเซีย</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="18" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="18"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-19" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นอังกฤษ</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="19" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="19"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-20" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นเยอรมัน</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="20" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="20"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-10" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หุ้นดาวน์โจน</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="10" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="10"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                                                          <tr><td colspan="99" class="ac bolder bg-green3">หวยเวียดนาม</td></tr>
              
              <tr class="bet-limit-container bet-limit-container-73" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ฮานอย Hà Nội</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="73" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="73"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-74" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">คั้ญฮหว่า Khánh Hòa</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="74" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="74"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-75" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">กอนตูม Kon Tum</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="75" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="75"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-76" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ฟู้เอียน Phú Yên</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="76" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="76"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-77" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">เถื่อเทียน-เว้ Thừa Thiên Huế</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="77" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="77"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-78" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ดั๊กลัก Đắc Lắc</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="78" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="78"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-79" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">กว๋างนาม Quảng Nam</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="79" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="79"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-80" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ดานัง Đà Nẵng</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="80" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="80"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-82" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">บิ่ญดิ่ญ Bình Định</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="82" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="82"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-83" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">กว๋างบิ่ญ Quảng Bình</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="83" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="83"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-84" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">กว๋างจิ Quảng Trị</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="84" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="84"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-85" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ซาลาย Gia Lai</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="85" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="85"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-86" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">นิญถ่วน Ninh Thuận</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="86" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="86"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-87" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ดั๊กนง Đắc Nông</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="87" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="87"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-88" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">กว๋างหงาย Quảng Ngãi</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="88" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="88"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-89" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">เกียนซาง Kiên Giang</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="89" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="89"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-90" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">เลิมด่ง Lâm Đồng</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="90" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="90"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-91" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">เตี่ยนซาง Tiền Giang</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="91" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="91"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-92" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">กำเมา Cà Mau</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="92" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="92"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-93" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ด่งท้าบ Đồng Tháp</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="93" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="93"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-94" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">โฮจิมินห์ Thanh pho Ho Chi Minh</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="94" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="94"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-95" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">บักเลียว Bạc Liêu</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="95" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="95"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-96" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">เบ๊นแจ Bến Tre</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="96" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="96"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-97" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หวงเต่า Vũng Tàu</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="97" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="97"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-98" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">เกิ้นเทอ Cần Thơ</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="98" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="98"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-99" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ด่งนาย Đồng Nai</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="99" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="99"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-100" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ซ้อกจัง Sóc Trăng</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="100" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="100"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-101" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">อานชาง An Giang</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="101" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="101"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-102" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">บิ่ญถ่วน Bình Thuận</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="102" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="102"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-103" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">เต็ยนิญ Tây Ninh</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="103" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="103"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-104" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">บิ่ญเชือง Bình Dương</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="104" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="104"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-105" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">จ่าวิญ Trà Vinh</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="105" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="105"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-106" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">หวิญล็อง Vĩnh Long</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="106" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="106"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-107" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">บิ่ญเฟื้อก Bình Phước</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="107" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="107"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-108" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">เหิ่วชาง Hậu Giang</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="108" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="108"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                          
              <tr class="bet-limit-container bet-limit-container-109" data-bet-type-group-id="1">
                <td class="align-middle odd bolder">ล็องอาน Long An</td>
                                                  <td>
                    <div class="input-group-limit_1 input-icon input-icon-left">
                      <input type="text" class="limit-1 form-control input-sm input-small align-right width-90px" name="limit_1" value="0" data-bet-type-id="1">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_2 input-icon input-icon-left">
                      <input type="text" class="limit-2 form-control input-sm input-small align-right width-90px" name="limit_2" value="0" data-bet-type-id="2">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_3 input-icon input-icon-left">
                      <input type="text" class="limit-3 form-control input-sm input-small align-right width-90px" name="limit_3" value="0" data-bet-type-id="3">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_4 input-icon input-icon-left">
                      <input type="text" class="limit-4 form-control input-sm input-small align-right width-90px" name="limit_4" value="0" data-bet-type-id="4">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_5 input-icon input-icon-left">
                      <input type="text" class="limit-5 form-control input-sm input-small align-right width-90px" name="limit_5" value="0" data-bet-type-id="5">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_6 input-icon input-icon-left">
                      <input type="text" class="limit-6 form-control input-sm input-small align-right width-90px" name="limit_6" value="0" data-bet-type-id="6">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_7 input-icon input-icon-left">
                      <input type="text" class="limit-7 form-control input-sm input-small align-right width-90px" name="limit_7" value="0" data-bet-type-id="7">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                  <td>
                    <div class="input-group-limit_8 input-icon input-icon-left">
                      <input type="text" class="limit-8 form-control input-sm input-small align-right width-90px" name="limit_8" value="0" data-bet-type-id="8">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                    </div>
                  </td>
                                <td>
                  <button class="btn btn-primary btn-xs bigger-110 btn-update-bet-limit" data-game-type-id="109" data-bet-type-group-id="1">บันทึก</button>
                </td>

                <td>
                  <div class="inline checkbox no-margin">
                    <label><input checked="checked" name="game_type_id" type="checkbox" value="109"> <span class="lbl"></span></label>
                  </div>
                </td>
              </tr>
                      </tbody>
          <tfoot>
            <tr>
              <td colspan="9"></td>
              <td colspan="2">
                <button class="btn btn-primary btn-xs bigger-110 btn-multi-update-bet-limit" data-bet-type-group-id="1">บันทึกที่เลือก</button>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
      </div>
</div>
</div><!-- /.col -->
        </div><!-- /.row -->
      </div>

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