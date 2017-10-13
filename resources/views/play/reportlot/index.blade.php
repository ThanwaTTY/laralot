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

            
            
            <div id="content"><div class="col-xs-12 no-padding-left">
  <h3 class="no-margin-top">
    <i class="fa fa-angle-right blue"></i>
    สรุปงวดหวย
    <span class="deep-blue" id="finance-date">วันที่ 12-10-2017</span><br>
    <div class="space-4"></div>
    <input type="text" class="form-control date-range-picker max-width-180" id="daterange-btn" value="12/10/2017 - 12/10/2017">
      </h3>

  <table class="table table-bordered table-border-dark table-auto table-nowrap" id="table-game-results">
    <thead class="thin-border-bottom">
      <tr>
        <th class="align-center width-1">ชนิดหวย</th>
        <th class="align-center width-1">ชื่องวด</th>
        <th class="align-center width-90px">ยอด</th>
        <th class="align-center width-90px">ส่วนลด</th>
        <th class="align-center width-90px">ถูกรางวัล</th>
        <th class="align-center width-90px">รวม</th>
        <th class="align-center width-90px">ดูรายละเอียด</th>
      </tr>
    </thead>
    <tbody>
          </tbody>
  </table>
</div>

<div id="bets"></div>

<script>
  $('.n2').each(function(key, value) {
    $(this).html(n2($(this).html()));
  });

  $('.n2c').each(function(key, value) {
    $(this).html(n2c($(this).html()));
  });

  $('.date-range-picker').daterangepicker(dateRangeOptions);

  $('.date-range-picker').on('apply.daterangepicker', function(e, picker) {
    $.get('/game-results/load?date='+$('.date-range-picker').val(), function(result) {
      if (result.success) {
        $('#table-game-results tbody').replaceWith(result.html);

        $('.n2').each(function(key, value) {
          $(this).html(n2($(this).html()));
        });

        $('.n2c').each(function(key, value) {
          $(this).html(n2c($(this).html()));
        });
      }
    });
  });
</script>
</div>

@endsection