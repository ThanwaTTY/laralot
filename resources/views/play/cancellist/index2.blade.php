@extends('mastermember')
@section('footer')
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange').daterangepicker(
        {
          ranges: {
            'วันนี้': [moment(), moment()],
            'เมื่อวาน': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            '3 วันล่าสุด': [moment().subtract(2, 'days'), moment()],
            '7 วันล่าสุด': [moment().subtract(6, 'days'), moment()]
            //'30 วันล่าสุด': [moment().subtract(29, 'days'), moment()],
            //'This Month': [moment().startOf('month'), moment().endOf('month')],
            //'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          //ranges: {
          //  'วันนี้': [moment(), moment()],
          //  'เมื่อวาน': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          //  '3 วันล่าสุด': [moment().subtract(2, 'days'), moment()],
          //  '7 วันล่าสุด': [moment().subtract(6, 'days'), moment()],
          //  '30 วันล่าสุด': [moment().subtract(29, 'days'), moment()],
          //  'This Month': [moment().startOf('month'), moment().endOf('month')],
          //  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          //},
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
@endsection
@section('content')

<style>
  #search-table td {
    padding: 0 10px 4px 0;
  }
</style>

<div id="content"> <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> รายการที่ถูกยกเลิก</h3>


  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
    <li>
      <a class="ajax" href="/play/cancellist">ยกเลิก โพย/รายการแทง</a>
    </li>

    <li class="active">
      <a class="ajax" href="/play/cancellist/cancellist">รายการที่ถูกยกเลิก</a>
    </li>
  </ul>

<style>
  #search-table td {
    padding: 0 10px 4px 0;
  }
</style>

<div class="space-4"></div>

  <form class="form-inline js-form-submit" action="" method="GET" accept-charset="UTF-8">
  <div class="widget-box widget-color-blue2 width-800 max-width-800">
    <div class="widget-header">
      <h5 class="widget-title bigger">
        ค้นหาโพย
      </h5>
    </div>

    <div class="widget-body">
      <div class="widget-main">
        <span class="grey"><b>ลำดับโพย และ หมายเลข</b> สามารถกรอกหลายตัว คั่นด้วยคอมม่า เช่น 13,4,555</span>
        <div class="space-4"></div>

        <table id="search-table">
          <tbody>
            <tr>
              <td><label class="bolder" for="daterange">วันที่แทง :</label></td>
              <td><input name="daterange" class="form-control width-100 bigger-110 date-range-picker" id="daterange" type="text" value="15/10/2017 - 15/10/2017"></td>

              <td><label class="bolder" for="username">ชื่อผู้ใช้ :</label></td>
              <td><input name="username" class="form-control bigger-110" id="username" type="text" readonly="readonly" value="MyUsername"></td>
            </tr>

            <tr>
              <td><label class="bolder" for="game_bill_numbers">ลำดับโพย :</label></td>
              <td><input name="game_bill_numbers" class="form-control bigger-110" id="game_bill_numbers" type="text"></td>

              <td><label class="bolder" for="numbers">หมายเลขที่แทง :</label></td>
              <td><input name="numbers" class="form-control bigger-110" id="number" type="text"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="widget-toolbox padding-8 clearfix">
      <button class="btn btn-primary btn-sm" id="btn-search-cancel" type="submit">ค้นหา</button>
    </div>
  </div>
</form>

<div class="space-4"></div>

<table class="table table-bordered table-hc">
  <thead class="thin-border-bottom">
    <tr>
      <th class="align-center">&nbsp;#&nbsp;</th>
      <th class="align-center">เวลา</th>
      <th class="align-center">ชื่อผู้ใช้</th>
      <th class="align-center">ชนิดหวย</th>
      <th class="align-center">งวดหวย</th>
      <th class="align-center">รหัสโพย</th>
      <th class="align-center">ลำดับโพย</th>
      <th class="align-center">Bet#</th>
      <th class="align-center">อัตราจ่าย</th>
      <th class="align-center">รายการ</th>
      <th class="align-center">ยอดแทง</th>
      <th class="align-center">หมายเหตุ</th>
    </tr>
  </thead>

  <tbody>
          </tbody>
</table>

<script>
  $.each($('#by-member-tabletbody tr, #by-member-table tfoot tr'), function(key, value) {
    $(this).addClass(key % 2 == 0 ? 'odd' : 'even');
  });
  $.each($('.n0'), function(key, value) {
    $(this).html(n0($(this).text()));
  });
  $.each($('.n2'), function(key, value) {
    $(this).html(n2($(this).text()));
  });
  $.each($('.n2c'), function(key, value) {
    $(this).html(n2c($(this).text()));
  });
  $.each($('.clear0'), function(key, value) {
    if ($(this).text() == 0)
      $(this).text('');
  });

  $(document).ready(function() {
    $('.date-range-picker').daterangepicker(dateRangeOptions);
  });
</script>
</div>

<script>
  $(document).ready(function() {
    $('.date-range-picker').daterangepicker(dateRangeOptions);
  });
</script>
</div>

@endsection