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

            <div class="alert alert-info invert-select-game-hide mobile-bet-hide hidden" id="news">
              <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
              </button>
                            <b>ประกาศระบบ:</b> <b>***ประกาศข่าว*** หวยรัฐงวดวันที่ 16 ตุลาคม 2560<br>
บริษัทจะเปิดรับแทงหวยเร็วขึ้นโดยเริ่ม วันที่ 11 ตุลาคม 2560 เวลา 12.00 น. และปิดรับวันที่ 16 ตุลาคม 2560 เวลา 14.45 น. <br>
<br>
และหวยรัฐงวดต่อไปจากนี้จะเปิดรับแทงทันทีหลังผลออก 7 วัน เช่น<br>
งวดวันที่ 1 พ.ย. 60 เริ่มเปิดรับวันที่ 23 ต.ค. 60<br>
งวดวันที่ 16 พ.ย. 60 เริ่มเปิดรับวันที่ 8 พ.ย. 60  <br>
<br>
ระบบลบโพย หลังจากแทงเข้ามาแล้วจะสามารถลบโพยหรือรายการได้ไม่เกินอย่างละ 10 ครั้ง และภายในเวลา 180 นาที นับจากที่แทงเข้ามาแล้ว เกินจากนี้จะไม่สามารถทำการลบได้<br>
<br>
หากมีการปรับเปลี่ยนอะไรเพิ่มเติม ทางบริษัทจะรีบแจ้งข่าวให้ทราบต่อไป ขอบคุณครับ<br>
<br>
 </b><br>
            </div>

            
            
            <div id="content"><h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> ยกเลิก โพย/รายการแทง</h3>


  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
    <li class="active">
      <a href="https://www.superlot999.com/cancel" class="ajax">ยกเลิก โพย/รายการแทง</a>
    </li>

    <li>
      <a href="https://www.superlot999.com/items/cancelled" class="ajax">รายการที่ถูกยกเลิก</a>
    </li>
  </ul>

<style>
  #search-table td {
    padding: 0 10px 4px 0;
  }
</style>

<div class="space-4"></div>

  <form method="GET" action="https://www.superlot999.com/cancel/search" accept-charset="UTF-8" class="form-inline form-cancel-search">
  <div class="widget-box widget-color-blue2 width-800 max-width-800">
    <div class="widget-header">
      <h5 class="widget-title bigger">
        ค้นหา โพย/รายการแทง
      </h5>
    </div>

    <div class="widget-body">
      <div class="widget-main">

        <div class="row clearfix">
          <div class="col-xs-6 pull-left">
            <span class="bigger-110">ยกเลิกโพยได้: <span class="deep-blue">10</span> ครั้ง/งวด</span><br>
            <span class="bigger-110">ยกเลิกรายการแทงได้: <span class="deep-blue">10</span> ครั้ง/งวด</span><br>
          </div>
          <div class="col-xs-6 pull-left">
            <span class="bigger-110">ต้องยกเลิกภายใน <span class="deep-blue">180</span> นาที หลังแทงหวย</span><br>
            <span class="bigger-110">ต้องยกเลิกก่อนหวยปิดงวด <span class="deep-blue">15</span> นาที</span><br>
          </div>
        </div>

        <div class="space-4"></div>
        <hr class="hr-4">

        <span class="grey"><b>ลำดับโพย และ หมายเลข</b> สามารถกรอกหลายตัว คั่นด้วยคอมม่า เช่น 13,4,555</span>
        <div class="space-4"></div>

        <table id="search-table">
          <tbody>
            <tr>
              <td><label for="daterange" class="deep-blue bolder">วันที่แทง :</label></td>
              <td><input class="form-control width-100 bigger-110 date-range-picker" name="daterange" type="text" value="12/10/2017 - 12/10/2017" id="daterange"></td>
            </tr>

            <tr>
              <td><label for="search_type" class="deep-blue bolder">ค้นหา :</label></td>
              <td><select class="form-control width-100 bigger-110" id="search_type" name="search_type"><option value="gb" selected="selected">โพย</option><option value="gbbl">รายการแทง</option></select></td>

              <td><label for="username" class="deep-blue bolder">ชื่อผู้ใช้ :</label></td>
                              <td><input class="form-control bigger-110" id="username" readonly="readonly" name="username" type="text" value="3M3KTOR"></td>
                          </tr>

            <tr>
              <td><label for="game_bill_numbers" class="bolder">ลำดับโพย :</label></td>
              <td><input class="form-control bigger-110" id="game_bill_numbers" name="game_bill_numbers" type="text" value=""></td>

              <td><label for="numbers" class="bolder">หมายเลขที่แทง :</label></td>
              <td><input class="form-control bigger-110" id="number" name="numbers" type="text" value=""></td>
            </tr>


            <tr>
              <td><label for="remark" class="bolder">หมายเหตุ :</label></td>
              <td><input class="form-control bigger-110" name="remark" type="text" value="" id="remark"></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="widget-toolbox padding-8 clearfix">
      <button type="submit" class="btn btn-primary btn-sm" id="btn-search-cancel">ค้นหา</button>
    </div>
  </div>
</form>

<div class="space-4"></div>

<!-- <div class="widget-box widget-color-blue2 width-800 max-width-800">
  <div class="widget-header">
    <h5 class="widget-title bigger">
      จำนวนสิทธิ์ที่ใช้แล้ว
    </h5>
  </div>

  <div class="widget-body">
    <div class="widget-main">
    </div>
  </div>
</div>

<div class="space-4"></div> -->

<div id="search-result"></div>

<script>
  $(document).ready(function() {
    $('.date-range-picker').daterangepicker(dateRangeOptions);
  });
</script>
</div>

@endsection