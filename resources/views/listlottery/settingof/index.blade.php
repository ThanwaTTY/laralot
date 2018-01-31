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

					
				</li><li>
							
							ตั้งค่าการรับของ
						</li></ul><!-- /.breadcrumb -->

  <span id="global-clock" class="pull-right"></span>
</div>

<div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"> <div class="page-header">
  <h1>
    ตั้งค่าการรับของ
  </h1>
  <h4 class="sub">
    <i class="fa fa-angle-right orange"></i>
    <span class="deep-blue">รัฐบาลไทย</span>, งวดวันที่ 16 ตุลาคม 2560
    <span class="smaller near-white"><i>(เปลี่ยนได้ที่แถบเมนูด้านบน)</i></span>
  </h4>
</div>



<div class="alert alert-danger">
  <h4><i class="fa fa-warning"></i> เรียนท่านที่ต้องการ หุ้น หรือ เก็บของ</h4>
  <span class="black">กรุณาตั้งจำนวนการรับของต่อตัวในหน้า <a href="https://agent.superlot999.com/items/settings">ตั้งค่าการรับของ</a> เพื่อกำหนดว่าท่านจะรับของสูงสุดต่อตัวตัวละเท่าไร หากไม่มีการตั้ง ระบบจะถือว่าท่านไม่ต้องการสู้</span>
</div>

<h3><i class="fa fa-angle-right blue"></i> ตั้งเวลาปิดรับของ <span class="deep-blue">รัฐบาลไทย</span> <a href="#" id="toggle-bet-close-time">(แสดง/ซ่อน)</a></h3>

<table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap jquery-hide enable-check-all" id="bet-close-time-table">
  <thead class="thin-border-bottom">
    <tr>
              <th>ตั้งเวลา <span class="deep-blue">เปิด</span> รับของ</th>
            <th colspan="2" class="align-center">ตั้งเวลา <span class="deep-blue">ปิด</span> รับของ</th>
    </tr>
  </thead>

  <tbody>
    <tr>
              <td>
          <label>
            <input class="" type="checkbox" id="open-same-company" checked="checked">
            <span class="lbl"> ตั้งตามบริษัท</span>
          </label>
        </td>
            <td colspan="2">
        <div class="inline checkbox no-margin">
          <label>
            <input class="" type="checkbox" id="same-company" checked="checked">
            <span class="lbl"> ตั้งตามบริษัท</span>
          </label>
        </div>
      </td>
    </tr>

    <tr>
              <td>
                    เปิดรับ <select id="days" name="days"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30" selected="selected">30</option></select> วันก่อนปิดงวด
        </td>
            <td class="align-middle">เวลาการปิดรับของ</td>
      <td>
                <select id="close-time-hh" name="bet-close-hh"><option value="0">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14" selected="selected">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select>
        :
        <select id="close-time-mm" name="bet-close-mm"><option value="0">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45" selected="selected">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select>
      </td>
    </tr>

    <tr>
      <td class="align-center">
                              <div class="pos-rel">
              <button type="button" class="btn btn-primary btn-xs" id="btn-update-open-time">บันทึก</button>
              <i class="ace-icon fa fa-check green success hidden pos-abs top-5 right-0"></i>
            </div>
                        </td>
      <td colspan="2" class="align-center align-middle">
                  <div class="pos-rel">
            <button type="button" class="btn btn-primary btn-xs" id="btn-update-close-time">บันทึก</button>
            <i class="ace-icon fa fa-check green success hidden pos-abs top-5 right-0"></i>
          </div>
              </td>
    </tr>
  </tbody>
</table>

<div class="tabbable">
  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
          <li class="active">
        <a data-toggle="tab" href="#bet-type-group-1">3 ตัวท้าย</a>
      </li>
      </ul>
</div>

<div class="tab-content no-padding no-border">
      <div class="tab-pane in active" id="bet-type-group-1">
      <h3><i class="fa fa-angle-right blue"></i> ตั้งค่าการรับของ <span class="deep-blue">รัฐบาลไทย, 3 ตัวท้าย</span></h3>
      <span class="bigger-110">กรุณาใส่จำนวนเงินที่ท่านต้องการถือสู้ <span class="deep-red">ต่อตัว</span> ของแต่ละประเภทลงในช่องด้านล่าง เพื่อเปิดรับของ หากไม่ต้องการถือสู้ในประเภทใด ๆ ให้ใส่ 0</span>

      <div class="space-4"></div>

      <form method="POST" action="https://agent.superlot999.com/update-bet-limit" accept-charset="UTF-8" data-method="put" data-feedback="mixed" class="js-ajax-form"><input name="_token" type="hidden" value="wVCy2lw6Tr07FXXnoXGA4HgBONZHrhVZERn9GaXW">

        <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap no-margin">
          <thead class="thin-border-bottom">
            <tr>
              <th class="ac deep-blue"></th>
                              <th class="align-center width-100px">3 ตัวบน</th>
                              <th class="align-center width-100px">3 ตัวล่าง</th>
                              <th class="align-center width-100px">3 ตัวโต๊ด</th>
                              <th class="align-center width-100px">2 ตัวบน</th>
                              <th class="align-center width-100px">2 ตัวล่าง</th>
                              <th class="align-center width-100px">2 ตัวโต๊ด</th>
                              <th class="align-center width-100px">วิ่งบน</th>
                              <th class="align-center width-100px">วิ่งล่าง</th>
                            <th rowspan="2"></th>
            </tr>
          </thead>

          <tbody class="bet-limit-container-1">
            <tr>
              <td class="align-center align-middle odd bolder width-110">0 = ไม่รับ</td>
                              <td>
                  <div class="input-group-limit_1 input-icon input-icon-left">
                    <input type="text" name="limit_1" value="100" class="form-control input-sm input-small align-right width-110">
                    <i class="ace-icon fa fa-check green success hidden"></i>
                    <i class="ace-icon fa fa-times red error hidden"></i>
                  </div>
                </td>
                              <td>
                  <div class="input-group-limit_2 input-icon input-icon-left">
                    <input type="text" name="limit_2" value="100" class="form-control input-sm input-small align-right width-110">
                    <i class="ace-icon fa fa-check green success hidden"></i>
                    <i class="ace-icon fa fa-times red error hidden"></i>
                  </div>
                </td>
                              <td>
                  <div class="input-group-limit_3 input-icon input-icon-left">
                    <input type="text" name="limit_3" value="100" class="form-control input-sm input-small align-right width-110">
                    <i class="ace-icon fa fa-check green success hidden"></i>
                    <i class="ace-icon fa fa-times red error hidden"></i>
                  </div>
                </td>
                              <td>
                  <div class="input-group-limit_4 input-icon input-icon-left">
                    <input type="text" name="limit_4" value="500" class="form-control input-sm input-small align-right width-110">
                    <i class="ace-icon fa fa-check green success hidden"></i>
                    <i class="ace-icon fa fa-times red error hidden"></i>
                  </div>
                </td>
                              <td>
                  <div class="input-group-limit_5 input-icon input-icon-left">
                    <input type="text" name="limit_5" value="500" class="form-control input-sm input-small align-right width-110">
                    <i class="ace-icon fa fa-check green success hidden"></i>
                    <i class="ace-icon fa fa-times red error hidden"></i>
                  </div>
                </td>
                              <td>
                  <div class="input-group-limit_6 input-icon input-icon-left">
                    <input type="text" name="limit_6" value="100" class="form-control input-sm input-small align-right width-110">
                    <i class="ace-icon fa fa-check green success hidden"></i>
                    <i class="ace-icon fa fa-times red error hidden"></i>
                  </div>
                </td>
                              <td>
                  <div class="input-group-limit_7 input-icon input-icon-left">
                    <input type="text" name="limit_7" value="1000" class="form-control input-sm input-small align-right width-110">
                    <i class="ace-icon fa fa-check green success hidden"></i>
                    <i class="ace-icon fa fa-times red error hidden"></i>
                  </div>
                </td>
                              <td>
                  <div class="input-group-limit_8 input-icon input-icon-left">
                    <input type="text" name="limit_8" value="1000" class="form-control input-sm input-small align-right width-110">
                    <i class="ace-icon fa fa-check green success hidden"></i>
                    <i class="ace-icon fa fa-times red error hidden"></i>
                  </div>
                </td>
              
              <td>
                <input name="game_type_id" type="hidden" value="1">
                <input name="bet_type_group_id" type="hidden" value="1">
                <button class="btn btn-primary btn-xs bigger-110" id="btn-update-bet-limit" data-game-type-id="1">บันทึก</button>
              </td>
            </tr>
          </tbody>
        </table>

      </form>

      <h3><i class="fa fa-angle-right blue"></i> ตั้งค่าการรับของเป็นรายตัว (เฉพาะงวด) <span class="deep-blue">งวดวันที่ 16 ตุลาคม 2560, 3 ตัวท้าย</span></h3>
      <span class="bigger-110">ใส่จำนวนที่ต้องการรับต่อหมายเลข สามารถใส่ได้เป็นจำนวนเงิน หรือ เป็นรูปแบบเปอเซ็นต์ เช่น 2000, 50%, 0</span>

      <div class="space-4"></div>

                      <form action="form3top" id="form3top" class="specific-take-form inline align-top right-padding-10">
                          {{ csrf_field() }}
          <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap no-margin enable-check-all ">
            <thead class="thin-border-bottom">
              <tr>
                <th class="width-1">
                  <input class="check-all" name="" type="checkbox">
                </th>
                <th>3 ตัวบน</th>
              </tr>

              <tr>
                <th></th>
                <th class="align-middle">
                                      <input type="text" name="num" class="form-control input-sm max-width-40 inline lighter">
                                    =
                  <input type="text" class="form-control input-sm max-width-75 inline lighter"  name="top">
                  <button type="button" class="btn btn-primary btn-xs bigger-110 btn-add-number-limit" id="btn-submit-bet">
                    เพิ่ม
                  </button>
                </th>
              </tr>
            </thead>

            <tbody id="tbody-limit-1">
              <tr class="align-center align-middle">
                <td colspan="2" class="bigger-110">ไม่มีข้อมูล</td>
              </tr>
            </tbody>
          </table>
        </form>
                      <form action=""  id="form3bottom" class="specific-take-form inline align-top right-padding-10">
                          {{ csrf_field() }}
          <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap no-margin enable-check-all ">
            <thead class="thin-border-bottom">
              <tr>
                <th class="width-1">
                  <input class="check-all" name="" type="checkbox">
                </th>
                <th>3 ตัวล่าง</th>
              </tr>

              <tr>
                <th></th>
                <th class="align-middle">
                                      <input type="text"  class="form-control input-sm max-width-40 inline lighter" name="num[]">
                                    =
                  <input type="text" class="form-control input-sm max-width-75 inline lighter" name="bottom[]">
                  <button type="button" class="btn btn-primary btn-xs bigger-110 btn-add-number-limit" id="btn-submit-bet2">
                    เพิ่ม
                  </button>
                </th>
              </tr>
            </thead>

            <tbody id="tbody-limit-2">
              <tr class="align-center align-middle">
                <td colspan="2" class="bigger-110">ไม่มีข้อมูล</td>
              </tr>
            </tbody>
          </table>
        </form>
                      <form action="" class="specific-take-form inline align-top right-padding-10">
                          {{ csrf_field() }}
          <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap no-margin enable-check-all ">
            <thead class="thin-border-bottom">
              <tr>
                <th class="width-1">
                  <input class="check-all" name="" type="checkbox">
                </th>
                <th>3 ตัวโต๊ด</th>
              </tr>

              <tr>
                <th></th>
                <th class="align-middle">
                                      <input type="text" class="form-control input-sm max-width-40 inline lighter" id="number-limit-3">
                                    =
                  <input type="text" class="form-control input-sm max-width-75 inline lighter" id="value-limit-3">
                  <button class="btn btn-primary btn-xs bigger-110 btn-add-number-limit" data-bet-type-id="3">
                    เพิ่ม
                  </button>
                </th>
              </tr>
            </thead>

            <tbody id="tbody-limit-3">
              <tr class="align-center align-middle">
                <td colspan="2" class="bigger-110">ไม่มีข้อมูล</td>
              </tr>
            </tbody>
          </table>
        </form>
                      <form action="" class="specific-take-form inline align-top right-padding-10">
                          {{ csrf_field() }}
          <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap no-margin enable-check-all ">
            <thead class="thin-border-bottom">
              <tr>
                <th class="width-1">
                  <input class="check-all" name="" type="checkbox">
                </th>
                <th>2 ตัวบน</th>
              </tr>

              <tr>
                <th></th>
                <th class="align-middle">
                                      <input type="text" class="form-control input-sm max-width-40 inline lighter" id="number-limit-4">
                                    =
                  <input type="text" class="form-control input-sm max-width-75 inline lighter" id="value-limit-4">
                  <button class="btn btn-primary btn-xs bigger-110 btn-add-number-limit" data-bet-type-id="4">
                    เพิ่ม
                  </button>
                </th>
              </tr>
            </thead>

            <tbody id="tbody-limit-4">
              <tr class="align-center align-middle">
                <td colspan="2" class="bigger-110">ไม่มีข้อมูล</td>
              </tr>
            </tbody>
          </table>
        </form>
                        <div class="space-8"></div>
                <form action="" class="specific-take-form inline align-top right-padding-10">
                    {{ csrf_field() }}
          <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap no-margin enable-check-all ">
            <thead class="thin-border-bottom">
              <tr>
                <th class="width-1">
                  <input class="check-all" name="" type="checkbox">
                </th>
                <th>2 ตัวล่าง</th>
              </tr>

              <tr>
                <th></th>
                <th class="align-middle">
                                      <input type="text" class="form-control input-sm max-width-40 inline lighter" id="number-limit-5">
                                    =
                  <input type="text" class="form-control input-sm max-width-75 inline lighter" id="value-limit-5">
                  <button class="btn btn-primary btn-xs bigger-110 btn-add-number-limit" data-bet-type-id="5">
                    เพิ่ม
                  </button>
                </th>
              </tr>
            </thead>

            <tbody id="tbody-limit-5">
              <tr class="align-center align-middle">
                <td colspan="2" class="bigger-110">ไม่มีข้อมูล</td>
              </tr>
            </tbody>
          </table>
        </form>
                      <form action="" class="specific-take-form inline align-top right-padding-10">
                          {{ csrf_field() }}
          <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap no-margin enable-check-all ">
            <thead class="thin-border-bottom">
              <tr>
                <th class="width-1">
                  <input class="check-all" name="" type="checkbox">
                </th>
                <th>2 ตัวโต๊ด</th>
              </tr>

              <tr>
                <th></th>
                <th class="align-middle">
                                      <input type="text" class="form-control input-sm max-width-40 inline lighter" id="number-limit-6">
                                    =
                  <input type="text" class="form-control input-sm max-width-75 inline lighter" id="value-limit-6">
                  <button class="btn btn-primary btn-xs bigger-110 btn-add-number-limit" data-bet-type-id="6">
                    เพิ่ม
                  </button>
                </th>
              </tr>
            </thead>

            <tbody id="tbody-limit-6">
              <tr class="align-center align-middle">
                <td colspan="2" class="bigger-110">ไม่มีข้อมูล</td>
              </tr>
            </tbody>
          </table>
        </form>
                      <form action="" class="specific-take-form inline align-top right-padding-10">
                          {{ csrf_field() }}
          <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap no-margin enable-check-all ">
            <thead class="thin-border-bottom">
              <tr>
                <th class="width-1">
                  <input class="check-all" name="" type="checkbox">
                </th>
                <th>วิ่งบน</th>
              </tr>

              <tr>
                <th></th>
                <th class="align-middle">
                                      <input type="text" class="form-control input-sm max-width-40 inline lighter" id="number-limit-7">
                                    =
                  <input type="text" class="form-control input-sm max-width-75 inline lighter" id="value-limit-7">
                  <button class="btn btn-primary btn-xs bigger-110 btn-add-number-limit" data-bet-type-id="7">
                    เพิ่ม
                  </button>
                </th>
              </tr>
            </thead>

            <tbody id="tbody-limit-7">
              <tr class="align-center align-middle">
                <td colspan="2" class="bigger-110">ไม่มีข้อมูล</td>
              </tr>
            </tbody>
          </table>
        </form>
                      <form action="" class="specific-take-form inline align-top right-padding-10">
                          {{ csrf_field() }}
          <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap no-margin enable-check-all ">
            <thead class="thin-border-bottom">
              <tr>
                <th class="width-1">
                  <input class="check-all" name="" type="checkbox">
                </th>
                <th>วิ่งล่าง</th>
              </tr>

              <tr>
                <th></th>
                <th class="align-middle">
                                      <input type="text" class="form-control input-sm max-width-40 inline lighter" id="number-limit-8">
                                    =
                  <input type="text" class="form-control input-sm max-width-75 inline lighter" id="value-limit-8">
                  <button class="btn btn-primary btn-xs bigger-110 btn-add-number-limit" data-bet-type-id="8">
                    เพิ่ม
                  </button>
                </th>
              </tr>
            </thead>

            <tbody id="tbody-limit-8">
              <tr class="align-center align-middle">
                <td colspan="2" class="bigger-110">ไม่มีข้อมูล</td>
              </tr>
            </tbody>
          </table>
        </form>
      
      <h3><i class="fa fa-angle-right blue"></i> เลขปิดรับ [3M3K] <span class="deep-blue">3 ตัวท้าย</span></h3>
      <button type="button" class="btn btn-primary btn-minier btn-refresh-closed-numbers">รีเฟรช</button>

      <span class="align-middle left-margin-10 closed-timer">รีเฟรชใน 45 วินาที</span>

      <div class="space-4"></div>

      <div id="bet-type-group-1" class="tab-pane in active" style="min-height: 500px; height:auto !important; height: 500px;">
        <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap">
          <thead class="thin-border-bottom">
            <tr>
                              <th class="align-center width-110">3 ตัวบน</th>
                              <th class="align-center width-110">3 ตัวล่าง</th>
                              <th class="align-center width-110">3 ตัวโต๊ด</th>
                              <th class="align-center width-110">2 ตัวบน</th>
                              <th class="align-center width-110">2 ตัวล่าง</th>
                              <th class="align-center width-110">2 ตัวโต๊ด</th>
                              <th class="align-center width-110">วิ่งบน</th>
                              <th class="align-center width-110">วิ่งล่าง</th>
                          </tr>
          </thead>

          <tbody id="tbody-closed-numbers-1"></tbody>
        </table>
      </div>
    </div>
  </div>

<script>
  
</script>
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
<script src="/bootstrap/js/bootstrap.min.js"></script>
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

<script>
    $(function(){
        $('#btn-submit-bet').on('click', function(){
          console.log('Active');
          $.post('/limite_bet', $('#form3top').serialize()).done( function(data) {
            console.log(data);
        });
        
      });
        $('#btn-submit-bet2').on('click', function(){
          console.log('Active');
          $.post('/limite_bet', $('#form3bottom').serialize()).done( function(data) {
            console.log(data);
        });
        
      });
    });
  
  </script>

  
@endsection