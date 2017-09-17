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

    /*.sidebar .sidebar-shortcuts-large {
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
    }*/
    </style>
      <link rel="stylesheet" href="/css/custom2.css">
@endsection
@section('footer')
<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

@endsection

@section('content')
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
          1. เพิ่มสมาชิก
      </li>
    </ul><!-- /.breadcrumb -->
  <span id="global-clock" class="pull-right"></span>
</div>
        
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

{{-- <section class="content-header">
    <div class="page-header">
        <h1>1. เพิ่มสมาชิก</h1>
    </div>
</section> --}}
<div class="page-content" id="user-content">
    <div class="row">
      <div id="content" class="col-xs-12">
        <div class="page-header">
          <h1>1. เพิ่มสมาชิก</h1>
        </div>

        <div class="alert alert-info hidden" id="info">กำลังโหลด...</div>
        <div class="alert alert-success hidden" id="success"></div>
        <div class="alert alert-danger hidden" id="error"></div>

        <form method="POST" action="https://agent.superlot999.com/users/create" accept-charset="UTF-8" id="create-user-form" class="form-horizontal" autocomplete="off"><input name="_token" type="hidden" value="uxxSpiZ338ZTX1mxPhKq1ql7p446dvtlqPlNnN6n">

                <div class="widget-box widget-color-blue2 width-1100 max-width-1100">
                      <div class="widget-header">
                          <h5 class="widget-title bigger">
                            ข้อมูลสมาชิก
                          </h5>
                      </div>

                    <div class="widget-body">
                      <div class="widget-main no-padding-bottom">
                        <div class="form-group">
                            <label for="user_type" class="control-label col-xs-1" autofill="false">ระดับ:</label>
                              <div class="col-xs-3">
                                  <select class="form-control" id="user_type" name="user_type"><option value="1">เมมเบอร์</option></select>
                              </div>

                            <div class="col-xs-2"></div>
                              <label for="credit" class="control-label col-xs-1">เครดิต:</label>
                            <div class="col-xs-3">
                              <input class="form-control" name="max_credit" type="text">
                            </div>
                            <span class="help-inline col-xs-2">
                              <span class="middle">* สูงสุด 0</span>
                            </span>
                        </div>
          
                        <div class="form-group">
                            <label for="username" class="control-label col-xs-1" =""="">ชื่อผู้ใช้:</label>
                              <div class="col-xs-3">
                                <div class="input-group">
                                    <span class="input-group-addon">3M3K</span>
                                    <input id="username" class="form-control" name="username" type="text">
                                </div>
                              </div>
                              <span class="help-inline col-xs-2">
                                <span class="middle bigger-125" id="username-availability"></span>
                              </span>
                              <label for="password" class="control-label col-xs-1">รหัสผ่าน:</label>
                                <div class="col-xs-3">
                                  <input class="form-control" name="password" type="password" value="" id="password">
                                </div>
                                <span class="help-inline col-xs-2">
                                  <span class="middle">* อย่างน้อย 6 ตัวอักษร</span>
                                </span>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label col-xs-1">ชื่อ-สกุล:</label>
                            <div class="col-xs-3">
                              <input class="form-control" name="name" type="text" id="name">
                            </div>
                            <div class="col-xs-2"></div>
                              <label for="phone" class="control-label col-xs-1">เบอร์โทร:</label>
                            <div class="col-xs-3">
                              <input class="form-control" name="phone" type="text" id="phone">
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="space-8"></div>
                <div class="widget-box widget-color-blue2 width-1100 max-width-1100">
                  <div class="widget-header">
                      <h5 class="widget-title bigger">
                      แบ่งหุ้น / เก็บของ
                      </h5>
                  </div>

                  <div class="widget-body">
                    <div class="widget-main no-padding-bottom">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">ได้รับ: 90.00%</label>
                            <input id="sum-share-take" name="" type="hidden" value="90">
                            <label for="share" class="control-label col-xs-1">แบ่งหุ้น:</label>
                            <div class="col-xs-2">
                              <select class="form-control" id="share" name="share">
                                <option value="0.0" selected="selected">0.0%</option>
                              </select>
                            </div>
                            <label for="take" class="control-label col-xs-1">เก็บของ:</label>
                            <div class="col-xs-2">
                              <select class="form-control" id="take" name="take">
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
                            </div>
                            <div class="col-xs-3 left-margin-10" style="margin-top: 5px">
                              <input name="take_remain" type="hidden" value="0">
                              <label class="width-100">
                                <input class="" name="take_remain" type="checkbox" value="1">
                                <span class="lbl"> เก็บของที่เกิน</span>
                                <a href="https://agent.superlot999.com/help" target="_blank"><i class="fa fa-question-circle"></i></a>
                              </label>
                            </div>
                        </div>
                    </div>
                  </div>
          </div>

            <div class="space-8"></div>
              <div class="widget-box widget-color-blue2 max-width-800">
                <div class="widget-header">
                  <h5 class="widget-title bigger">
                    ข้อมูลการแทง
                  </h5>

                    <div class="widget-toolbar no-border">
                      <span class="bigger-120 light">คัดลอกจาก</span>
                      <select id="user-bet-copy" class="bigger-120 no-margin-right">
                        <option value="9306">สูงสุด</option>
                                    <option value="9474">3M3K001</option>
                                    <option value="10230">3M3K002</option>
                                    <option value="11239">3M3KPALM</option>
                                    <option value="11240">3M3KTOR</option>
                      </select>
                    </div>
                </div>

                <div class="widget-body">
                  <div class="widget-main no-padding">
                    <div class="tabbable">
                      <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
                          <li class="active">
                            <a data-toggle="tab" href="#bet_setting_1">3 ตัวท้าย</a>
                          </li>
                      </ul>                                                                                                                            

                      <div class="tab-content padding-0 p-t-1">
                          <div id="bet_setting_1" class="tab-pane in active">
                            <table class="table table-bordered table-border-dark table-nowrap comm-and-pay-table">
                                <thead class="thin-border-bottom">
                                  <tr>
                                    <th class="ac" rowspan="2">ประเภท</th>
                                    <th class="ac deep-blue" colspan="3">3 ตัวท้าย</th>
                                  </tr>
                                  <tr>
                                    <th class="ac">ขั้นต่ำ</th>
                                    <th class="ac">สูงสุด</th>
                                    <th class="ac">สูงสุดต่อเลข</th>
                                  </tr>
                                </thead>
                                <tbody>
                                      <tr>
                                        <td class="ac am bolder">3 ตัวบน</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="min_1" type="text" value="5">/ 5</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_1" type="text" value="3000">/ 3,000</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num_1" type="text" value="10000">/ 10,000</td>
                                    </tr>
                                    <tr>
                                        <td class="ac am bolder">3 ตัวล่าง</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="min_2" type="text" value="5">/ 5</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_2" type="text" value="3000">/ 3,000</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num_2" type="text" value="100000">/ 100,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">3 ตัวโต๊ด</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_3" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_3" type="text" value="3000">/ 3,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num_3" type="text" value="30000">/ 30,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">2 ตัวบน</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_4" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_4" type="text" value="10000">/ 10,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num_4" type="text" value="100000">/ 100,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">2 ตัวล่าง</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_5" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_5" type="text" value="10000">/ 10,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num_5" type="text" value="100000">/ 100,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">2 ตัวโต๊ด</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_6" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_6" type="text" value="10000">/ 10,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num_6" type="text" value="100000">/ 100,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">วิ่งบน</td><td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_7" type="text" value="5">/ 5</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_7" type="text" value="100000">/ 100,000</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num_7" type="text" value="300000">/ 300,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">วิ่งล่าง</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_8" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_8" type="text" value="100000">/ 100,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num_8" type="text" value="300000">/ 300,000</td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>

                          <div id="bet_setting_2" class="tab-pane ">
                            <table class="table table-bordered table-border-dark table-nowrap comm-and-pay-table">
                                <thead class="thin-border-bottom">
                                    <tr>
                                      <th class="ac" rowspan="2">ประเภท</th>
                                      <th class="ac deep-blue" colspan="3">3 ตัวหัว</th>
                                    </tr>
                                    <tr>
                                      <th class="ac">ขั้นต่ำ</th>
                                      <th class="ac">สูงสุด</th>
                                      <th class="ac">สูงสุดต่อเลข</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <tr>
                                          <td class="ac am bolder">3 ตัวบน</td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="min_21" type="text" value="5">/ 5
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_21" type="text" value="3000">/ 3,000
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_per_num_21" type="text" value="10000">/ 10,000
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><input class="form-control vh" name="" type="text"></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td class="ac am bolder">3 ตัวโต๊ด</td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="min_23" type="text" value="5">/ 5
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_23" type="text" value="3000">/ 3,000
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_per_num_23" type="text" value="30000">/ 30,000
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="ac am bolder">2 ตัวบน</td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="min_24" type="text" value="5">/ 5
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_24" type="text" value="10000">/ 10,000
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_per_num_24" type="text" value="100000">/ 100,000
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><input class="form-control vh" name="" type="text"></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td class="ac am bolder">2 ตัวโต๊ด</td><td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="min_26" type="text" value="5">/ 5
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_26" type="text" value="10000">/ 10,000
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_per_num_26" type="text" value="100000">/ 100,000
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="ac am bolder">วิ่งบน</td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="min_27" type="text" value="5">/ 5
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_27" type="text" value="100000">/ 100,000
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_per_num_27" type="text" value="200000">/ 200,000
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><input class="form-control vh" name="" type="text"></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                    </tbody>
                            </table>
                          </div>

                          <div id="bet_setting_5" class="tab-pane ">
                              <table class="table table-bordered table-border-dark table-nowrap comm-and-pay-table">
                                  <thead class="thin-border-bottom">
                                      <tr>
                                          <th class="ac" rowspan="2">ประเภท</th>
                                          <th class="ac deep-blue" colspan="3">สูง-ต่ำ</th>
                                      </tr>
                                      <tr>
                                          <th class="ac">ขั้นต่ำ</th>
                                          <th class="ac">สูงสุด</th>
                                          <th class="ac">สูงสุดต่อเลข</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="ac am bolder">หลักแสน</td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="min_51" type="text" value="50">/ 50
                                          </td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_51" type="text" value="999999999">/ 999,999,999
                                          </td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_per_num_51" type="text" value="999999999">/ 999,999,999
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="ac am bolder">หลักหมื่น</td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="min_52" type="text" value="50">/ 50
                                          </td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_52" type="text" value="999999999">/ 999,999,999
                                          </td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_per_num_52" type="text" value="999999999">/ 999,999,999
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="ac am bolder">หลักพัน</td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="min_53" type="text" value="50">/ 50
                                          </td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_53" type="text" value="999999999">/ 999,999,999
                                          </td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_per_num_53" type="text" value="999999999">/ 999,999,999
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="ac am bolder">หลักร้อย</td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="min_54" type="text" value="50">/ 50
                                          </td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_54" type="text" value="999999999">/ 999,999,999
                                          </td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_per_num_54" type="text" value="999999999">/ 999,999,999
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="ac am bolder">หลักสิบ</td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="min_55" type="text" value="50">/ 50
                                          </td>
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_55" type="text" value="999999999">/ 999,999,999
                                          </td>

                                            <!-- max per num -->
                                          <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="max_per_num_55" type="text" value="999999999">
                                              / 999,999,999
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="ac am bolder">หลักหน่วย</td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="min_56" type="text" value="50">
                                              / 50
                                          </td>
                                          <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="max_56" type="text" value="999999999">
                                              / 999,999,999
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="max_per_num_56" type="text" value="999999999">
                                              / 999,999,999
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div id="bet_setting_6" class="tab-pane ">
                            <table class="table table-bordered table-border-dark table-nowrap comm-and-pay-table">
                                <thead class="thin-border-bottom">
                                  <tr>
                                    <th class="ac" rowspan="2">ประเภท</th>
                                    <th class="ac deep-blue" colspan="3">คู่-คี่</th>
                                  </tr>
                                  <tr>
                                    <th class="ac">ขั้นต่ำ</th>
                                    <th class="ac">สูงสุด</th>
                                    <th class="ac">สูงสุดต่อเลข</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                      <td class="ac am bolder">หลักแสน</td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_61" type="text" value="50">
                                        / 50
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_61" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_per_num_61" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="ac am bolder">หลักหมื่น</td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_62" type="text" value="50">
                                        / 50
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_62" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_per_num_62" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="ac am bolder">หลักพัน</td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_63" type="text" value="50">
                                        / 50
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_63" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_per_num_63" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="ac am bolder">หลักร้อย</td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_64" type="text" value="50">
                                        / 50
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_64" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_per_num_64" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="ac am bolder">หลักสิบ</td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_65" type="text" value="50">
                                        / 50
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_65" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_per_num_65" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="ac am bolder">หลักหน่วย</td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_66" type="text" value="50">
                                        / 50
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_66" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_per_num_66" type="text" value="999999999">
                                        / 999,999,999
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                          </div>
                          <div id="bet_setting_7" class="tab-pane ">
                            <table class="table table-bordered table-border-dark table-nowrap comm-and-pay-table">
                              <thead class="thin-border-bottom">
                                <tr>
                                  <th class="ac" rowspan="2">ประเภท</th>
                                  <th class="ac deep-blue" colspan="3">4-5-6 ตัวตรง</th>
                                </tr>
                                <tr>
                                  <th class="ac">ขั้นต่ำ</th>
                                  <th class="ac">สูงสุด</th>
                                  <th class="ac">สูงสุดต่อเลข</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="ac am bolder">4 ตัวตรง</td>

                                      <!-- min -->
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_71" type="text" value="10">
                                        / 10
                                      </td>

                                      <!-- max -->
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_71" type="text" value="1000">
                                        / 1,000
                                      </td>

                                      <!-- max per num -->
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_per_num_71" type="text" value="10000">
                                        / 10,000
                                      </td>
                                    </tr>
                                                                                                    <tr>
                                      <td class="ac am bolder">5 ตัวตรง</td>

                                      <!-- min -->
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_72" type="text" value="10">
                                        / 10
                                      </td>

                                      <!-- max -->
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_72" type="text" value="1000">
                                        / 1,000
                                      </td>

                                      <!-- max per num -->
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_per_num_72" type="text" value="10000">
                                        / 10,000
                                      </td>
                                    </tr>
                                                                                                    <tr>
                                      <td class="ac am bolder">6 ตัวตรง</td>

                                      <!-- min -->
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_73" type="text" value="10">
                                        / 10
                                      </td>

                                      <!-- max -->
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_73" type="text" value="1000">
                                        / 1,000
                                      </td>

                                      <!-- max per num -->
                                      <td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="max_per_num_73" type="text" value="10000">
                                        / 10,000
                                      </td>
                                    </tr>
                              </tbody>
                            </table>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="space-8"></div>

              <div class="widget-box widget-color-blue2 width-1100 max-width-1100">
                  <div class="widget-header widget-header-flat">
                      <h5 class="widget-title bigger">
                        อัตราจ่าย และ คอมมิชชั่น
                      </h5>
                    <div class="widget-toolbar no-border">
                        <span class="bigger-120 light">คัดลอกจาก</span>
                          <select name="" id="user-payout-copy" class="bigger-120 no-margin-right" style="">
                            <option value="9306">สูงสุด</option>
                            <option value="9474">3M3K001</option>
                            <option value="10230">3M3K002</option>
                            <option value="11239">3M3KPALM</option>
                            <option value="11240">3M3KTOR</option>
                          </select>
                    </div>
                  </div>

                  <div class="widget-body">
                    <div class="widget-main no-padding">
                      <div class="tabbable">
                          <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
                            <li class="right-padding-12 active">
                              <a data-toggle="tab" href="#payout_setting_0">อัตราจ่าย / การแทง</a>
                            </li>
                            <li>
                              <a data-toggle="tab" href="#payout_setting_1">3 ตัวท้าย</a>
                            </li>
                          </ul>

                          <div class="tab-content padding-0 p-t-1">
                              <div id="payout_setting_0" class="tab-pane in active">
                                    <table class="table table-bordered table-force-border table-border-dark table-auto table-nowrap">
                                        <thead class="thin-border-bottom">
                                          <tr>
                                            <th>เปิด/ปิด อัตราจ่าย</th>
                                            <th colspan="5">เปิด/ปิด การแทง</th>
                                          </tr>
                                          <tr>
                                            <th></th>
                                            <th class="ac">3 ตัวท้าย</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td class="deep-blue bolder">
                                                  <input name="payout_active[5]" type="hidden" value="0">
                                                  <input name="payout_active[5]" type="checkbox" value="1" checked="">
                                                  หวยรัฐ 70
                                                </td>
                                                <td class="ac am ">
                                                    <input name="btg_active[5][1]" type="hidden" value="0">
                                                    <input name="btg_active[5][1]" type="checkbox" value="1" checked="">
                                                </td>
                                                <td class="ac am hidden">
                                                    <input name="btg_active[5][2]" type="hidden" value="0">
                                                    <input name="btg_active[5][2]" type="checkbox" value="1" checked="">
                                                </td>
                                                <td class="ac am hidden">
                                                    <input name="btg_active[5][5]" type="hidden" value="0">
                                                    <input name="btg_active[5][5]" type="checkbox" value="1" checked="">
                                                </td>
                                                <td class="ac am hidden">
                                                    <input name="btg_active[5][6]" type="hidden" value="0">
                                                    <input name="btg_active[5][6]" type="checkbox" value="1" checked="">
                                                </td>
                                                <td class="ac am hidden">
                                                    <input name="btg_active[5][7]" type="hidden" value="0">
                                                    <input name="btg_active[5][7]" type="checkbox" value="1" checked="">
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td class="deep-blue bolder">
                                                  <input name="payout_active[11]" type="hidden" value="0">
                                                  <input name="payout_active[11]" type="checkbox" value="1" checked="">
                                                  หวย 70
                                                </td>
                                                <td class="ac am ">
                                                    <input name="btg_active[11][1]" type="hidden" value="0">
                                                    <input name="btg_active[11][1]" type="checkbox" value="1" checked="">
                                                </td>
                                                <td class="ac am hidden">
                                                    <input name="btg_active[11][2]" type="hidden" value="0">
                                                    <input name="btg_active[11][2]" type="checkbox" value="1" checked="">
                                                </td>
                                                <td class="ac am hidden">
                                                    <input name="btg_active[11][5]" type="hidden" value="0">
                                                    <input name="btg_active[11][5]" type="checkbox" value="1" checked="">
                                                </td>
                                                <td class="ac am hidden">
                                                    <input name="btg_active[11][6]" type="hidden" value="0">
                                                    <input name="btg_active[11][6]" type="checkbox" value="1" checked="">
                                                </td>
                                                <td class="ac am hidden">
                                                    <input name="btg_active[11][7]" type="hidden" value="0">
                                                    <input name="btg_active[11][7]" type="checkbox" value="1" checked="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                              </div>

                              <div id="payout_setting_1" class="tab-pane">
                                  <table id="comm-and-pay-table" class="table table-bordered table-border-dark table-auto table-nowrap">
                                      <thead class="thin-border-bottom">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th class="ac am bolder">3 ตัวบน</th>
                                            <th class="ac am bolder">3 ตัวล่าง</th>
                                            <th class="ac am bolder">3 ตัวโต๊ด</th>
                                            <th class="ac am bolder">2 ตัวบน</th>
                                            <th class="ac am bolder">2 ตัวล่าง</th>
                                            <th class="ac am bolder">2 ตัวโต๊ด</th>
                                            <th class="ac am bolder">วิ่งบน</th>
                                            <th class="ac am bolder">วิ่งล่าง</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr class=" ">
                                            <td class="am no-border" rowspan="2">
                                              <span class="deep-blue bolder">หวยรัฐ 70</span><br>
                                              <i>3 ตัวท้าย</i>
                                            </td>
                                            <td class="ac am bolder">อัตราจ่าย</td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[5][1]" type="text" value="550">
                                              / 550
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[5][2]" type="text" value="125">
                                              / 125
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[5][3]" type="text" value="105">
                                              / 105
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[5][4]" type="text" value="70">
                                              / 70
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[5][5]" type="text" value="70">
                                              / 70
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[5][6]" type="text" value="12">
                                              / 12
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[5][7]" type="text" value="3">
                                              / 3
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[5][8]" type="text" value="4">
                                              / 4
                                            </td>
                                        </tr>
                                        <tr class=" ">
                                            <td class="ac am bolder">คอมมิชชั่น</td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[5][1]" type="text" value="33">
                                                / 33
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[5][2]" type="text" value="33">
                                              / 33
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[5][3]" type="text" value="33">
                                              / 33
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[5][4]" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[5][5]" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[5][6]" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[5][7]" type="text" value="12">
                                              / 12
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[5][8]" type="text" value="12">
                                              / 12
                                            </td>
                                        </tr>
                                        <tr class=" ">
                                            <td class="am no-border" rowspan="2">
                                              <span class="deep-blue bolder">หวย 70</span><br>
                                              <i>3 ตัวท้าย</i>
                                            </td>
                                            <td class="ac am bolder">อัตราจ่าย</td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[11][1]" type="text" value="550">
                                              / 550
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[11][2]" type="text" value="1">
                                              / 1
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[11][3]" type="text" value="105">
                                              / 105
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[11][4]" type="text" value="70">
                                              / 70
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[11][5]" type="text" value="70">
                                              / 70
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[11][6]" type="text" value="12">
                                              / 12
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[11][7]" type="text" value="3">
                                              / 3
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout[11][8]" type="text" value="4">
                                              / 4
                                            </td>
                                        </tr>
                                        <tr class=" ">
                                            <td class="ac am bolder">คอมมิชชั่น</td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[11][1]" type="text" value="33">
                                              / 33
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[11][2]" type="text" value="0">
                                              / 0
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[11][3]" type="text" value="33">
                                              / 33
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[11][4]" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[11][5]" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[11][6]" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[11][7]" type="text" value="12">
                                              / 12
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com[11][8]" type="text" value="12">
                                              / 12
                                            </td>
                                        </tr>
                                      </tbody>
                                  </table>
                              </div>

                              <div id="payout_setting_2" class="tab-pane">
                                <table id="comm-and-pay-table" class="table table-bordered table-border-dark table-auto table-nowrap">
                                  <thead class="thin-border-bottom">
                                      <tr>
                                          <th></th>
                                          <th></th>
                                          <th class="ac am bolder">3 ตัวบน</th>
                                          <th class="ac am bolder">3 ตัวล่าง</th>
                                          <th class="ac am bolder">3 ตัวโต๊ด</th>
                                          <th class="ac am bolder">2 ตัวบน</th>
                                          <th class="ac am bolder">2 ตัวล่าง</th>
                                          <th class="ac am bolder">2 ตัวโต๊ด</th>
                                          <th class="ac am bolder">วิ่งบน</th>
                                          <th class="ac am bolder">วิ่งล่าง</th>
                                      </tr>
                                  </thead>
                                  <tbody>                                                      
                                      <tr class=" ">
                                        <td class="am no-border" rowspan="2">
                                          <span class="deep-blue bolder">หวยรัฐ 70</span><br>
                                          <i>3 ตัวหัว</i>
                                        </td>
                                        <td class="ac am bolder">อัตราจ่าย</td>
                                        <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[5][21]" type="text" value="550">
                                            / 550
                                        </td>
                                        <td><input class="form-control inline vh" name="payout[5][22]" type="text" value="0"></td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][23]" type="text" value="105">
                                          / 105
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][24]" type="text" value="70">
                                          / 70
                                        </td>
                                        <td><input class="form-control inline vh" name="payout[5][25]" type="text" value="0"></td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][26]" type="text" value="12">
                                          / 12
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][27]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td><input class="form-control inline vh" name="payout[5][28]" type="text" value="0"></td>
                                      </tr>
                                      <tr class=" ">
                                        <td class="ac am bolder">คอมมิชชั่น</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][21]" type="text" value="33">
                                          / 33
                                        </td>
                                        <td><input class="form-control inline vh" name="com[5][22]" type="text" value="0"></td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][23]" type="text" value="33">
                                          / 33
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][24]" type="text" value="28">
                                          / 28
                                        </td>
                                        <td><input class="form-control inline vh" name="com[5][25]" type="text" value="0"></td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][26]" type="text" value="28">
                                          / 28
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][27]" type="text" value="12">
                                          / 12
                                        </td>
                                        <td><input class="form-control inline vh" name="com[5][28]" type="text" value="0"></td>
                                      </tr>                                                      
                                      <tr class=" ">
                                        <td class="am no-border" rowspan="2">
                                            <span class="deep-blue bolder">หวย 70</span><br>
                                            <i>3 ตัวหัว</i>
                                        </td>

                                        <td class="ac am bolder">อัตราจ่าย</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][21]" type="text" value="550">
                                          / 550
                                        </td>
                                        <td><input class="form-control inline vh" name="payout[11][22]" type="text" value="0"></td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][23]" type="text" value="105">
                                          / 105
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][24]" type="text" value="70">
                                          / 70
                                        </td>
                                        <td><input class="form-control inline vh" name="payout[11][25]" type="text" value="0"></td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][26]" type="text" value="12">
                                          / 12
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][27]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td><input class="form-control inline vh" name="payout[11][28]" type="text" value="0"></td>
                                      </tr>
                                      <tr class=" ">
                                        <td class="ac am bolder">คอมมิชชั่น</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][21]" type="text" value="33">
                                          / 33
                                        </td>
                                        <td><input class="form-control inline vh" name="com[11][22]" type="text" value="0"></td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][23]" type="text" value="33">
                                          / 33
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][24]" type="text" value="28">
                                          / 28
                                        </td>
                                        <td><input class="form-control inline vh" name="com[11][25]" type="text" value="0"></td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][26]" type="text" value="28">
                                          / 28
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][27]" type="text" value="12">
                                          / 12
                                        </td>
                                        <td><input class="form-control inline vh" name="com[11][28]" type="text" value="0"></td>
                                      </tr>
                                  </tbody>
                                </table>
                              </div>

                              <div id="payout_setting_5" class="tab-pane">
                                <table id="comm-and-pay-table" class="table table-bordered table-border-dark table-auto table-nowrap">
                                  <thead class="thin-border-bottom">
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th class="ac am bolder">หลักแสน</th>
                                      <th class="ac am bolder">หลักหมื่น</th>
                                      <th class="ac am bolder">หลักพัน</th>
                                      <th class="ac am bolder">หลักร้อย</th>
                                      <th class="ac am bolder">หลักสิบ</th>
                                      <th class="ac am bolder">หลักหน่วย</th>
                                    </tr>
                                  </thead>
                                  <tbody>                     
                                      <tr class=" ">
                                        <td class="am no-border" rowspan="2">
                                          <span class="deep-blue bolder">หวยรัฐ 70</span><br>
                                          <i>สูง-ต่ำ</i>
                                        </td>
                                        <td class="ac am bolder">อัตราจ่าย</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][51]" type="text" value="1.9">
                                          / 1.9
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][52]" type="text" value="1.9">
                                          / 1.9
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][53]" type="text" value="1.9">
                                          / 1.9
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][54]" type="text" value="1.9">
                                          / 1.9
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][55]" type="text" value="1.9">
                                          / 1.9
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][56]" type="text" value="1.9">
                                          / 1.9
                                        </td>
                                      </tr>

                                      <tr class=" ">
                                        <td class="ac am bolder">คอมมิชชั่น</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][51]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][52]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][53]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][54]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][55]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][56]" type="text" value="3">
                                          / 3
                                        </td>
                                      </tr>
                                                          
                                      <tr class=" ">
                                        <td class="am no-border" rowspan="2">
                                          <span class="deep-blue bolder">หวย 70</span><br>
                                          <i>สูง-ต่ำ</i>
                                        </td>
                                        <td class="ac am bolder">อัตราจ่าย</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][51]" type="text" value="1.85">
                                          / 1.85
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][52]" type="text" value="1.85">
                                          / 1.85
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][53]" type="text" value="1.85">
                                          / 1.85
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][54]" type="text" value="1.85">
                                          / 1.85
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][55]" type="text" value="1.85">
                                          / 1.85
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][56]" type="text" value="1.85">
                                          / 1.85
                                        </td>
                                      </tr>

                                      <tr class=" ">
                                        <td class="ac am bolder">คอมมิชชั่น</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][51]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][52]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][53]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][54]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][55]" type="text" value="3">
                                          / 3
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][56]" type="text" value="3">
                                          / 3
                                        </td>
                                      </tr>
                                  </tbody>
                                </table>
                              </div>

                              <div id="payout_setting_6" class="tab-pane">
                                  <table id="comm-and-pay-table" class="table table-bordered table-border-dark table-auto table-nowrap">
                                    <thead class="thin-border-bottom">
                                      <tr>
                                        <th></th>
                                        <th></th>
                                        <th class="ac am bolder">หลักแสน</th>
                                        <th class="ac am bolder">หลักหมื่น</th>
                                        <th class="ac am bolder">หลักพัน</th>
                                        <th class="ac am bolder">หลักร้อย</th>
                                        <th class="ac am bolder">หลักสิบ</th>
                                        <th class="ac am bolder">หลักหน่วย</th>
                                      </tr>
                                    </thead>
                                    <tbody>                                                   
                                        <tr class=" ">
                                          <td class="am no-border" rowspan="2">
                                            <span class="deep-blue bolder">หวยรัฐ 70</span><br>
                                            <i>คู่-คี่</i>
                                          </td>
                                          <td class="ac am bolder">อัตราจ่าย</td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[5][61]" type="text" value="1.9">
                                            / 1.9
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[5][62]" type="text" value="1.9">
                                            / 1.9
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[5][63]" type="text" value="1.9">
                                            / 1.9
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[5][64]" type="text" value="1.9">
                                            / 1.9
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[5][65]" type="text" value="1.9">
                                                / 1.9
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[5][66]" type="text" value="1.9">
                                            / 1.9
                                          </td>
                                        </tr>

                                        <tr class=" ">
                                          <td class="ac am bolder">คอมมิชชั่น</td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[5][61]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[5][62]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[5][63]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[5][64]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[5][65]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[5][66]" type="text" value="3">
                                            / 3
                                          </td>
                                        </tr>
                                                            
                                        <tr class=" ">
                                          <td class="am no-border" rowspan="2">
                                            <span class="deep-blue bolder">หวย 70</span><br>
                                            <i>คู่-คี่</i>
                                          </td>
                                          <td class="ac am bolder">อัตราจ่าย</td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[11][61]" type="text" value="1.85">
                                            / 1.85
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[11][62]" type="text" value="1.85">
                                            / 1.85
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[11][63]" type="text" value="1.85">
                                            / 1.85
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[11][64]" type="text" value="1.85">
                                            / 1.85
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[11][65]" type="text" value="1.85">
                                            / 1.85
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="payout[11][66]" type="text" value="1.85">
                                            / 1.85
                                          </td>
                                        </tr>

                                        <tr class=" ">
                                          <td class="ac am bolder">คอมมิชชั่น</td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[11][61]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[11][62]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[11][63]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[11][64]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[11][65]" type="text" value="3">
                                            / 3
                                          </td>
                                          <td class="am">
                                            <input class="form-control inline width-50 deep-blue" name="com[11][66]" type="text" value="3">
                                            / 3
                                          </td>
                                        </tr>
                                    </tbody>
                                  </table>
                              </div>

                              <div id="payout_setting_7" class="tab-pane">
                                <table id="comm-and-pay-table" class="table table-bordered table-border-dark table-auto table-nowrap">
                                  <thead class="thin-border-bottom">
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th class="ac am bolder">4 ตัวตรง</th>
                                      <th class="ac am bolder">5 ตัวตรง</th>
                                      <th class="ac am bolder">6 ตัวตรง</th>
                                    </tr>
                                  </thead>
                                  <tbody>                  
                                      <tr class=" ">
                                        <td class="am no-border" rowspan="2">
                                          <span class="deep-blue bolder">หวยรัฐ 70</span><br>
                                          <i>4-5-6 ตัวตรง</i>
                                        </td>
                                        <td class="ac am bolder">อัตราจ่าย</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][71]" type="text" value="5000">
                                          / 5000
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][72]" type="text" value="50000">
                                          / 50000
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[5][73]" type="text" value="400000">
                                          / 400000
                                        </td>
                                      </tr>

                                      <tr class=" ">
                                        <td class="ac am bolder">คอมมิชชั่น</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][71]" type="text" value="0">
                                          / 0
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][72]" type="text" value="0">
                                          / 0
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[5][73]" type="text" value="0">
                                          / 0
                                        </td>
                                      </tr>
                                                          
                                      <tr class=" ">
                                        <td class="am no-border" rowspan="2">
                                          <span class="deep-blue bolder">หวย 70</span><br>
                                          <i>4-5-6 ตัวตรง</i>
                                        </td>
                                        <td class="ac am bolder">อัตราจ่าย</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][71]" type="text" value="5000">
                                          / 5000
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][72]" type="text" value="50000">
                                          / 50000
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="payout[11][73]" type="text" value="400000">
                                          / 400000
                                        </td>
                                      </tr>

                                      <tr class=" ">
                                        <td class="ac am bolder">คอมมิชชั่น</td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][71]" type="text" value="0">
                                          / 0
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][72]" type="text" value="0">
                                          / 0
                                        </td>
                                        <td class="am">
                                          <input class="form-control inline width-50 deep-blue" name="com[11][73]" type="text" value="0">
                                          / 0
                                        </td>
                                      </tr>
                                  </tbody>
                                </table>
                              </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

          <div class="space-8"></div>
          <button type="submit" class="btn btn-primary">เพิ่มสมาชิก</button>
        </form>

          <script>    
          //setup before functions
          var typingTimer;              //timer identifier
          var doneTypingInterval = 400; //time in ms, 5 second for example

          //on keyup, start the countdown
          $('#username').keyup(function(){
              clearTimeout(typingTimer);
              if ($('#username').val().length > 0) {
                $('#username-availability').html('กำลังโหลด...');
                typingTimer = setTimeout(doneTyping, doneTypingInterval);
              }
          });

          //on keydown, clear the countdown
          $('#username').keydown(function(){
              clearTimeout(typingTimer);
          });

          $(document).ready(function() {
            $('#username').on('blur', doneTyping);
          });

          //user is "finished typing," do something
          function doneTyping () {
              var data = {username: $('#username').val()};

              $.post('/check-username', data, function(result) {
                if (result.success) {
                  $('#username-availability').html('<span class="deep-green">'+result.message+'</span>');
                } else if (result.error) {
                  $('#username-availability').html('<span class="deep-red">'+result.message+'</span>');
                } else {
                  // alert('เกิดข้อผิดพลาด');
                }
              });
          }
          </script>
      </div><!-- /.col -->
    </div><!-- /.row -->
</div>

{{-- <section class="content">
<form class="form-horizontal" action="" method="post">
    {{ csrf_field() }}
        <div class="modal-content">
            <div class="box box-solid box-primary">
                <div class="box-header with-border with-border">
                    <b>ข้อมูลสมาชิก</b>
                </div>
                           
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="user_type" class="control-label col-xs-1" autofill="false">ระดับ:</label>
                                                <div class="col-xs-3">
                                                    <select class="form-control" id="user_type" name="user_type"><option value="1">เมมเบอร์</option></select>
                                                </div>
                                            <div class="col-xs-2"></div>
                                            <label for="credit" class="control-label col-xs-1">เครดิต:</label>
                                            <div class="col-xs-3">
                                                <input class="form-control" name="max_credit" type="text">
                                            </div>
                                            <span class="help-inline col-xs-2">
                                                <span class="middle">* สูงสุด 0</span>
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="control-label col-xs-1" =""="">ชื่อผู้ใช้:</label>
                                            <div class="col-xs-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">3M3K</span>
                                                    <input id="username" class="form-control" name="username" type="text">
                                                </div>
                                            </div>
                                            <span class="help-inline col-xs-2">
                                                <span class="middle bigger-125" id="username-availability"></span>
                                            </span>

                                            <label for="password" class="control-label col-xs-1">รหัสผ่าน:</label>
                                            <div class="col-xs-3">
                                                <input class="form-control" name="password" type="password" value="" id="password">
                                            </div>
                                            <span class="help-inline col-xs-2">
                                                <span class="middle">* อย่างน้อย 6 ตัวอักษร</span>
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="control-label col-xs-1">ชื่อ-สกุล:</label>
                                            <div class="col-xs-3">
                                                <input class="form-control" name="name" type="text" id="name">
                                            </div>

                                            <div class="col-xs-2"></div>

                                            <label for="phone" class="control-label col-xs-1">เบอร์โทร:</label>
                                            <div class="col-xs-3">
                                                <input class="form-control" name="phone" type="text" id="phone">
                                            </div>
                                        </div>





                                    </div>                                  
                                </div>
   
                            </div>
            </div>
        
        </div>

        <div class="modal-content">
                <div class="box box-solid box-primary">
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
                                                             </select>
                                                    </div>

                                                    <lable for="inpassword" class="col-sm-2 control-label">เก็บของ:</lable>
                                                    <div class="col-sm-2">
                                                        <select class="form-control" id="" name="">
                                                                <option value="">90.0%</option>
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

        <div class="modal-content max-width-800">
                <div class="box box-solid box-primary">
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

        <div class="modal-content">
                <div class="box box-solid box-primary">
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
</section> --}}
@endsection

 