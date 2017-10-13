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
    $('#daterange-btn').daterangepicker(
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
    $('#input-from').datepicker({
      autoclose: true
    });

    //Date picker
    $('#input-to').datepicker({
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

            
            
            <div id="content"><h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> ประวัติการเงิน</h3>


<form method="GET" action="https://www.superlot999.com/financial/transactions/11240/balance" id="filter-form" class="form-inline bot-margin-20">
  <div class="widget-box widget-color-blue2 width-800 max-width-1100">
    <div class="widget-header">
      <h5 class="widget-title bigger">
        ตัวเลือกการค้นหา
      </h5>
    </div>

    <div class="widget-body">
      <div class="widget-main">
        <table>
          <tbody><tr>
            <td class="padding-5" colspan="10">
              <label for="date"><input type="radio" id="date" name="filter" value="date" checked=""> วันนี้</label>
              <label for="yesterday" class="left-padding-10"><input type="radio" id="yesterday" name="filter" value="yesterday"> เมื่อวาน</label>
              <label for="week" class="left-padding-10"><input type="radio" id="week" name="filter" value="week"> สัปดาห์นี้ (จันทร์ - อาทิตย์)</label>
              <label for="prev_week" class="left-padding-10"><input type="radio" id="prev_week" name="filter" value="prev_week"> สัปดาห์ที่แล้ว (จันทร์ - อาทิตย์)</label>
            </td>
          </tr>
          <tr>
            <td class="padding-5">
              <input type="radio" name="filter" value="month">
            </td>
            <td>เดือน</td>
            <td class="left-padding-5">
              <select id="select-month" name="month"><option value="0" selected="selected">ตุลาคม - 10/2017</option><option value="1">กันยายน - 09/2017</option><option value="2">สิงหาคม - 08/2017</option><option value="3">กรกฎาคม - 07/2017</option><option value="4">มิถุนายน - 06/2017</option><option value="5">พฤษาภาคม - 05/2017</option><option value="6">เมษายน - 04/2017</option><option value="7">มีนาคม - 03/2017</option><option value="8">กุมภาพันธ์ - 02/2017</option><option value="9">มกราคม - 01/2017</option><option value="10">ธันวาคม - 12/2016</option><option value="11">พฤศจิกายน - 11/2016</option></select>
            </td>
          </tr>
          <tr>
            <td class="padding-5">
              <input type="radio" name="filter" value="range">
            </td>
            <td>ตั้งแต่วันที่</td>
            <td class="left-padding-5">
              <div class="input-group">
                <input type="text" name="from" id="input-from" class="form-control input-sm max-width-110 date-mask" value="12-10-2017">
                <span class="input-group-addon">
                  <i class="fa fa-calendar bigger-110"></i>
                </span>
              </div>
            </td>
            <td class="left-padding-10">ถึงวันที่</td>
            <td class="left-padding-10">
              <div class="input-group">
                <input type="text" name="to" id="input-to" class="form-control input-sm max-width-110 date-mask" value="12-10-2017">
                <span class="input-group-addon">
                  <i class="fa fa-calendar bigger-110"></i>
                </span>
              </div>
            </td>
          </tr>
        </tbody></table>
      </div>

      <div class="widget-toolbox padding-8 clearfix">
        <button class="btn btn-primary btn-sm">
          <i class="fa fa-search"></i>
          <span class="bigger-110">ค้นหา</span>
        </button>
      </div>
    </div>
  </div>
</form>

<div class="max-width-1100">
  <ul class="nav nav-tabs thick-border" id="tab-financial-requests">
    <li class="bigger-110 bolder active">
      <a href="#" class="width-110 center" data-toggle="tab" data-url="https://www.superlot999.com/financial/transactions/11240/balance/date">ได้เสียสุทธิ</a>
    </li>
    <li class="bigger-110 bolder ">
      <a href="#" class="width-110 center" data-toggle="tab" data-url="https://www.superlot999.com/financial/transactions/11240/credit/date">เครดิต</a>
    </li>
  </ul>
</div>

<div class="tab-content no-border no-padding width-800 max-width-1100" id="tab-content-financial-requests">
  <div class="tab-pane active">
    <table class="table table-bordered table-ks table-nowrap table-vertical-border-0 top-margin-10">
      <thead class="thin-border-bottom">
        <tr>
          <th class="align-center" width="150">วันที่-เวลา</th>
          <th class="align-center">รายละเอียด</th>
          <th class="align-center" width="150">เงินออก</th>
          <th class="align-center" width="150">เงินเข้า</th>
          <th class="align-center" width="150">คงเหลือ</th>
        </tr>
      </thead>
      <tbody>
              </tbody>
    </table>
  </div>
</div>

<script>
  $('.date-mask').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'dd-mm-yyyy'
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
</script>

</div>

@endsection