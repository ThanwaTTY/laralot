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
{{-- 
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/plugins/input-mask/jquery.inputmask.js"></script>

<script>
  $(function () {
    //Money Euro
    $("[data-mask]").inputmask();
  });
</script> --}}
{{-- ตั่งค่าการเล่น --}}
<script type="text/javascript">
  $('#min_1').on('change', function(){
    var min_1 = 0;
    min_1 += isNaN(parseInt( $('#min_1').val() )) ? 0 : parseInt( $('#min_1').val() );
    if(min_1 < 5){
    alert("ขั้นต่ำ 3 ตัวบนต้องมีค่าอย่างน้อย 5");
    $(this).val('5');
    }else{
      $(this).val(min_1);
    }
  });
  $('#min_2').on('change', function(){
    var min_2 = 0;
    min_2 += isNaN(parseInt( $('#min_2').val() )) ? 0 : parseInt( $('#min_2').val() );
    if(min_2 < 5){
    alert("ขั้นต่ำ 3 ตัวล่างต้องมีค่าอย่างน้อย 5");
    $(this).val('5');
    }else{
      $(this).val(min_2);
    }
  });
  $('#min_3').on('change', function(){
    var min_3 = 0;
    min_3 += isNaN(parseInt( $('#min_3').val() )) ? 0 : parseInt( $('#min_3').val() );
    if(min_3 < 5){
    alert("ขั้นต่ำ 3 ตัวโต๊ดต้องมีค่าอย่างน้อย 5");
    $(this).val('5');
    }else{
      $(this).val(min_3);
    }
  });
  $('#min_4').on('change', function(){
    var min_4 = 0;
    min_4 += isNaN(parseInt( $('#min_4').val() )) ? 0 : parseInt( $('#min_4').val() );
    if(min_4 < 5){
    alert("ขั้นต่ำ 2 ตัวบนต้องมีค่าอย่างน้อย 5");
    $(this).val('5');
    }else{
      $(this).val(min_4);
    }
  });
  $('#min_5').on('change', function(){
    var min_5 = 0;
    min_5 += isNaN(parseInt( $('#min_5').val() )) ? 0 : parseInt( $('#min_5').val() );
    if(min_5 < 5){
    alert("ขั้นต่ำ 2 ตัวล่างต้องมีค่าอย่างน้อย 5");
    $(this).val('5');
    }else{
      $(this).val(min_5);
    }
  });
  $('#min_6').on('change', function(){
    var min_6 = 0;
    min_6 += isNaN(parseInt( $('#min_6').val() )) ? 0 : parseInt( $('#min_6').val() );
    if(min_6 < 5){
    alert("ขั้นต่ำ 2 ตัวโต๊ดต้องมีค่าอย่างน้อย 5");
    $(this).val('5');
    }else{
      $(this).val(min_6);
    }
  });
  $('#min_7').on('change', function(){
    var min_7 = 0;
    min_7 += isNaN(parseInt( $('#min_7').val() )) ? 0 : parseInt( $('#min_7').val() );
    if(min_7 < 5){
    alert("ขั้นต่ำ วิ่งล่างต้องมีค่าอย่างน้อย 5");
    $(this).val('5');
    }else{
      $(this).val(min_7);
    }
  });
  $('#min_8').on('change', function(){
    var min_8 = 0;
    min_8 += isNaN(parseInt( $('#min_8').val() )) ? 0 : parseInt( $('#min_8').val() );
    if(min_8 < 5){
    alert("ขั้นต่ำวิ่งบนต้องมีค่าอย่างน้อย 5");
    $(this).val('5');
    }else{
      $(this).val(min_8);
    }
  });
  ////////////////////////////////////////////////////////////////////////////////
  $('#max_1').on('change', function(){
    var max_1 = 0;
    max_1 += isNaN(parseInt( $('#max_1').val() )) ? 0 : parseInt( $('#max_1').val() );
    if(max_1 > 3000){
    alert("สูลสุด 3 ตัวบนต้องมีค่าไม่เกิน 3,000");
    $(this).val('3000');
    }else{
      $(this).val(max_1);
    }
  });
  $('#max_2').on('change', function(){
    var max_2 = 0;
    max_2 += isNaN(parseInt( $('#max_2').val() )) ? 0 : parseInt( $('#max_2').val() );
    if(max_2 > 3000){
    alert("สูงสุด 3 ตัวล่างต้องมีค่าไม่เกิน 3,000");
    $(this).val('3000');
    }else{
      $(this).val(max_2);
    }
  });
  $('#max_3').on('change', function(){
    var max_3 = 0;
    max_3 += isNaN(parseInt( $('#max_3').val() )) ? 0 : parseInt( $('#max_3').val() );
    if(max_3 > 3000){
    alert("สูงสุด 3 ตัวโต๊ดต้องมีไม่เกิน 3,000");
    $(this).val('3000');
    }else{
      $(this).val(max_3);
    }
  });
  $('#max_4').on('change', function(){
    var max_4 = 0;
    max_4 += isNaN(parseInt( $('#max_4').val() )) ? 0 : parseInt( $('#max_4').val() );
    if(max_4 > 10000){
    alert("สูงสุด 2 ตัวบนต้องมีค่าไม่เกิน 10,000");
    $(this).val('10000');
    }else{
      $(this).val(max_4);
    }
  });
  $('#max_5').on('change', function(){
    var max_5 = 0;
    max_5 += isNaN(parseInt( $('#max_5').val() )) ? 0 : parseInt( $('#max_5').val() );
    if(max_5 > 10000){
    alert("สูงสุก 2 ตัวล่างต้องมีค่าไม่เกิน 10,0000");
    $(this).val('10000');
    }else{
      $(this).val(max_5);
    }
  });
  $('#max_6').on('change', function(){
    var max_6 = 0;
    max_6 += isNaN(parseInt( $('#max_6').val() )) ? 0 : parseInt( $('#max_6').val() );
    if(max_6 > 10000){
    alert("สูงสุด 2 ตัวโต๊ดต้องมีค่าไม่เกิน 10,000");
    $(this).val('10000');
    }else{
      $(this).val(max_6);
    }
  });
  $('#max_7').on('change', function(){
    var max_7 = 0;
    max_7 += isNaN(parseInt( $('#max_7').val() )) ? 0 : parseInt( $('#max_7').val() );
    if(max_7 > 100000){
    alert("สูงสุด วิ่งล่างต้องมีค่าไม่เกิน 100,000");
    $(this).val('100000');
    }else{
      $(this).val(max_7);
    }
  });
  $('#max_8').on('change', function(){
    var max_8 = 0;
    max_8 += isNaN(parseInt( $('#max_8').val() )) ? 0 : parseInt( $('#max_8').val() );
    if(max_8 > 100000){
    alert("สูงสุด วิ่งบนต้องมีค่าไม่เกิน 100,000");
    $(this).val('100000');
    }else{
      $(this).val(max_8);
    }
  });
  //////////////////////////////////////////////////////////////////////////////////////
  $('#max_per_num1').on('change', function(){
    var max_per_num1 = 0;
    max_per_num1 += isNaN(parseInt( $('#max_per_num1').val() )) ? 0 : parseInt( $('#max_per_num1').val() );
    if(max_per_num1 > 10000){
      alert("สูงสุดต่อเลข 3 ตัวบนต้องมีค่าไม่เกิน 10,000");
      $(this).val('10000');
    }else{
      $(this).val(max_per_num1);
    }
  });
  $('#max_per_num2').on('change', function(){
    var max_per_num2 = 0;
    max_per_num2 += isNaN(parseInt( $('#max_per_num2').val() )) ? 0 : parseInt( $('#max_per_num2').val() );
    if(max_per_num2 > 100000){
      alert("สูงสุดต่อเลข 3 ตัวล่างต้องมีค่าไม่เกิน 100,000");
      $(this).val('100000');
    }else{
      $(this).val(max_per_num2);
    }
  });
  $('#max_per_num3').on('change', function(){
    var max_per_num3 = 0;
    max_per_num3 += isNaN(parseInt( $('#max_per_num3').val() )) ? 0 : parseInt( $('#max_per_num3').val() );
    if(max_per_num3 > 30000){
      alert("สูงสุดต่อเลข 3 ตัวโต๊ดต้องมีค่าไม่เกิน 30,000");
      $(this).val('30000');
    }else{
      $(this).val(max_per_num3);
    }
  });
  $('#max_per_num4').on('change', function(){
    var max_per_num4 = 0;
    max_per_num4 += isNaN(parseInt( $('#max_per_num4').val() )) ? 0 : parseInt( $('#max_per_num4').val() );
    if(max_per_num4 > 100000){
      alert("สูงสุดต่อเลข 2 ตัวบนต้องมีค่าไม่เกิน 100,000");
      $(this).val('100000');
    }else{
      $(this).val(max_per_num4);
    }
  });
  $('#max_per_num5').on('change', function(){
    var max_per_num5 = 0;
    max_per_num5 += isNaN(parseInt( $('#max_per_num5').val() )) ? 0 : parseInt( $('#max_per_num5').val() );
    if(max_per_num5 > 100000){
      alert("สูงสุดต่อเลข 2 ตัวล่างต้องมีค่าไม่เกิน 100,000");
      $(this).val('100000');
    }else{
      $(this).val(max_per_num5);
    }
  });
  $('#max_per_num6').on('change', function(){
    var max_per_num6 = 0;
    max_per_num6 += isNaN(parseInt( $('#max_per_num6').val() )) ? 0 : parseInt( $('#max_per_num6').val() );
    if(max_per_num6 > 100000){
      alert("สูงสุดต่อเลข 2 ตัวโต๊ดต้องมีค่าไม่เกิน 100,000");
      $(this).val('100000');
    }else{
      $(this).val(max_per_num6);
    }
  });
  $('#max_per_num7').on('change', function(){
    var max_per_num7 = 0;
    max_per_num7 += isNaN(parseInt( $('#max_per_num7').val() )) ? 0 : parseInt( $('#max_per_num7').val() );
    if(max_per_num7 > 300000){
      alert("สูงสุดต่อเลข วิ่งบนต้องมีค่าไม่เกิน 300,000");
      $(this).val('300000');
    }else{
      $(this).val(max_per_num7);
    }
  });
  $('#max_per_num8').on('change', function(){
    var max_per_num8 = 0;
    max_per_num8 += isNaN(parseInt( $('#max_per_num8').val() )) ? 0 : parseInt( $('#max_per_num8').val() );
    if(max_per_num8 > 300000){
      alert("สูงสุดต่อเลข วิ่งล่างต้องมีค่าไม่เกิน 300,000");
      $(this).val('300000');
    }else{
      $(this).val(max_per_num8);
    }
  });
</script>
{{-- อัตราจ่ายเเละคอมมิชชั่น --}}
<script type="text/javascript">
  $('#payoutg_1').on('change', function(){
    var payoutg_1 = 0;
    payoutg_1 += isNaN(parseInt( $('#payoutg_1').val() )) ? 0 : parseInt( $('#payoutg_1').val() );
    if(payoutg_1 > 550){
      alert("หวยรัฐ อัตราจ่าย 3 ตัวบนต้องไม่เกิน 550");
      $(this).val('550');
    }else{
      $(this).val(payoutg_1);
    }
  });
  $('#payoutg_2').on('change', function(){
    var payoutg_2 = 0;
    payoutg_2 += isNaN(parseInt( $('#payoutg_2').val() )) ? 0 : parseInt( $('#payoutg_2').val() );
    if(payoutg_2 > 125){
      alert("หวยรัฐ อัตราจ่าย 3 ตัวล่างต้องไม่เกิน 125");
      $(this).val('125');
    }else{
      $(this).val(payoutg_2);
    }
  });
  $('#payoutg_3').on('change', function(){
    var payoutg_3 = 0;
    payoutg_3 += isNaN(parseInt( $('#payoutg_3').val() )) ? 0 : parseInt( $('#payoutg_3').val() );
    if(payoutg_3 > 105){
      alert("หวยรัฐ อัตราจ่าย 3 ตัวโต๊ดต้องไม่เกิน 105");
      $(this).val('105');
    }else{
      $(this).val(payoutg_3);
    }
  });
  $('#payoutg_4').on('change', function(){
    var payoutg_4 = 0;
    payoutg_4 += isNaN(parseInt( $('#payoutg_4').val() )) ? 0 : parseInt( $('#payoutg_4').val() );
    if(payoutg_4 > 70){
      alert("หวยรัฐ อัตราจ่าย 2 ตัวบนต้องไม่เกิน 70");
      $(this).val('70');
    }else{
      $(this).val(payoutg_4);
    }
  });
  $('#payoutg_5').on('change', function(){
    var payoutg_5 = 0;
    payoutg_5 += isNaN(parseInt( $('#payoutg_5').val() )) ? 0 : parseInt( $('#payoutg_5').val() );
    if(payoutg_5 > 70){
      alert("หวยรัฐ อัตราจ่าย 2 ตัวล่างต้องไม่เกิน 70");
      $(this).val('70');
    }else{
      $(this).val(payoutg_5);
    }
  });
  $('#payoutg_6').on('change', function(){
    var payoutg_6 = 0;
    payoutg_6 += isNaN(parseInt( $('#payoutg_6').val() )) ? 0 : parseInt( $('#payoutg_6').val() );
    if(payoutg_6 > 12){
      alert("หวยรัฐ อัตราจ่าย 2 ตัวโต๊ดต้องไม่เกิน 12");
      $(this).val('12');
    }else{
      $(this).val(payoutg_6);
    }
  });
  $('#payoutg_7').on('change', function(){
    var payoutg_7 = 0;
    payoutg_7 += isNaN(parseInt( $('#payoutg_7').val() )) ? 0 : parseInt( $('#payoutg_7').val() );
    if(payoutg_7 > 3){
      alert("หวยรัฐ อัตราจ่ายวิ่งบนต้องไม่เกิน 3");
      $(this).val('3');
    }else{
      $(this).val(payoutg_7);
    }
  });
  $('#payoutg_8').on('change', function(){
    var payoutg_8 = 0;
    payoutg_8 += isNaN(parseInt( $('#payoutg_8').val() )) ? 0 : parseInt( $('#payoutg_8').val() );
    if(payoutg_8 > 4){
      alert("หวยรัฐ อัตราจ่าย วิ่งล่างต้องไม่เกิน 4");
      $(this).val('4');
    }else{
      $(this).val(payoutg_8);
    }
  });
  //////หวยรัฐคอมมิชชั้น////////////////////////////////////////////////////
  $('#comg_1').on('change', function(){
    var comg_1 = 0;
    comg_1 += isNaN(parseInt( $('#comg_1').val() )) ? 0 : parseInt( $('#comg_1').val() );
    if(comg_1 > 33){
      alert("หวยรัฐ คอมมิชชั่น 3 ตัวบนต้องไม่เกิน 33");
      $(this).val('33');
    }else{
      $(this).val(comg_1);
    }
  });
  $('#comg_2').on('change', function(){
    var comg_2 = 0;
    comg_2 += isNaN(parseInt( $('#comg_2').val() )) ? 0 : parseInt( $('#comg_2').val() );
    if(comg_2 > 33){
      alert("หวยรัฐ คอมมิชชั่น 3 ตัวล่างต้องไม่เกิน 33");
      $(this).val('33');
    }else{
      $(this).val(comg_2);
    }
  });
  $('#comg_3').on('change', function(){
    var comg_3 = 0;
    comg_3 += isNaN(parseInt( $('#comg_3').val() )) ? 0 : parseInt( $('#comg_3').val() );
    if(comg_3 > 33){
      alert("หวยรัฐ คอมมิชชั่น 3 ตัวโต๊ดต้องไม่เกิน 33");
      $(this).val('33');
    }else{
      $(this).val(comg_3);
    }
  });
  $('#comg_4').on('change', function(){
    var comg_4 = 0;
    comg_4 += isNaN(parseInt( $('#comg_4').val() )) ? 0 : parseInt( $('#comg_4').val() );
    if(comg_4 > 28){
      alert("หวยรัฐ คอมมิชชั่น 2 ตัวบนต้องไม่เกิน 28");
      $(this).val('28');
    }else{
      $(this).val(comg_4);
    }
  });
  $('#comg_5').on('change', function(){
    var comg_5 = 0;
    comg_5 += isNaN(parseInt( $('#comg_5').val() )) ? 0 : parseInt( $('#comg_5').val() );
    if(comg_5 > 28){
      alert("หวยรัฐ คอมมิชชั่น 2 ตัวล่างต้องไม่เกิน 28");
      $(this).val('28');
    }else{
      $(this).val(comg_5);
    }
  });
  $('#comg_6').on('change', function(){
    var comg_6 = 0;
    comg_6 += isNaN(parseInt( $('#comg_6').val() )) ? 0 : parseInt( $('#comg_6').val() );
    if(comg_6 > 28){
      alert("หวยรัฐ คอมมิชชั่น 2 ตัวโต๊ดต้องไม่เกิน 28");
      $(this).val('28');
    }else{
      $(this).val(comg_6);
    }
  });
  $('#comg_7').on('change', function(){
    var comg_7 = 0;
    comg_7 += isNaN(parseInt( $('#comg_7').val() )) ? 0 : parseInt( $('#comg_7').val() );
    if(comg_7 > 12){
      alert("หวยรัฐ คอมมิชชั่น วิ่งบนต้องไม่เกิน 12");
      $(this).val('12');
    }else{
      $(this).val(comg_7);
    }
  });
  $('#comg_8').on('change', function(){
    var comg_8 = 0;
    comg_8 += isNaN(parseInt( $('#comg_8').val() )) ? 0 : parseInt( $('#comg_8').val() );
    if(comg_8 > 12){
      alert("หวยรัฐ คอมมิชชั่น วิ่งล่างต้องไม่เกิน 12");
      $(this).val('12');
    }else{
      $(this).val(comg_8);
    }
  });
  /////////////////////////////////////////////////////////////////////////////
  $('#payout_1').on('change', function(){
    var payout_1 = 0;
    payout_1 += isNaN(parseInt( $('#payout_1').val() )) ? 0 : parseInt( $('#payout_1').val() );
    if(payout_1 > 550){
      alert("หวย อัตราจ่าย 3 ตัวบนต้องไม่เกิน 550");
      $(this).val('550');
    }else{
      $(this).val(payout_1);
    }
  });

  $('#payout_3').on('change', function(){
    var payout_3 = 0;
    payout_3 += isNaN(parseInt( $('#payout_3').val() )) ? 0 : parseInt( $('#payout_3').val() );
    if(payout_3 > 105){
      alert("หวย อัตราจ่าย 3 ตัวโต๊ดต้องไม่เกิน 105");
      $(this).val('105');
    }else{
      $(this).val(payout_3);
    }
  });
  $('#payout_4').on('change', function(){
    var payout_4 = 0;
    payout_4 += isNaN(parseInt( $('#payout_4').val() )) ? 0 : parseInt( $('#payout_4').val() );
    if(payout_4 > 70){
      alert("หวย อัตราจ่าย 2 ตัวบนต้องไม่เกิน 70");
      $(this).val('70');
    }else{
      $(this).val(payout_4);
    }
  });
  $('#payout_5').on('change', function(){
    var payout_5 = 0;
    payout_5 += isNaN(parseInt( $('#payout_5').val() )) ? 0 : parseInt( $('#payout_5').val() );
    if(payout_5 > 70){
      alert("หวย อัตราจ่าย 2 ตัวล่างต้องไม่เกิน 70");
      $(this).val('70');
    }else{
      $(this).val(payout_5);
    }
  });
  $('#payout_6').on('change', function(){
    var payout_6 = 0;
    payout_6 += isNaN(parseInt( $('#payout_6').val() )) ? 0 : parseInt( $('#payout_6').val() );
    if(payout_6 > 12){
      alert("หวย อัตราจ่าย 2 ตัวโต๊ดต้องไม่เกิน 12");
      $(this).val('12');
    }else{
      $(this).val(payout_6);
    }
  });
  $('#payout_7').on('change', function(){
    var payout_7 = 0;
    payout_7 += isNaN(parseInt( $('#payout_7').val() )) ? 0 : parseInt( $('#payout_7').val() );
    if(payout_7 > 3){
      alert("หวย อัตราจ่ายวิ่งบนต้องไม่เกิน 3");
      $(this).val('3');
    }else{
      $(this).val(payout_7);
    }
  });
  $('#payout_8').on('change', function(){
    var payout_8 = 0;
    payout_8 += isNaN(parseInt( $('#payout_8').val() )) ? 0 : parseInt( $('#payout_8').val() );
    if(payout_8 > 4){
      alert("หวย อัตราจ่าย วิ่งล่างต้องไม่เกิน 4");
      $(this).val('4');
    }else{
      $(this).val(payout_8);
    }
  });
  //////////////////////////////////////////////////////////////////////////////
 $('#com_1').on('change', function(){
    var com_1 = 0;
    com_1 += isNaN(parseInt( $('#com_1').val() )) ? 0 : parseInt( $('#com_1').val() );
    if(com_1 > 33){
      alert("หวยรัฐ คอมมิชชั่น 3 ตัวบนต้องไม่เกิน 33");
      $(this).val('33');
    }else{
      $(this).val(com_1);
    }
  });
  $('#com_3').on('change', function(){
    var com_3 = 0;
    com_3 += isNaN(parseInt( $('#com_3').val() )) ? 0 : parseInt( $('#com_3').val() );
    if(com_3 > 33){
      alert("หวยรัฐ คอมมิชชั่น 3 ตัวโต๊ดต้องไม่เกิน 33");
      $(this).val('33');
    }else{
      $(this).val(com_3);
    }
  });
  $('#com_4').on('change', function(){
    var com_4 = 0;
    com_4 += isNaN(parseInt( $('#com_4').val() )) ? 0 : parseInt( $('#com_4').val() );
    if(com_4 > 28){
      alert("หวยรัฐ คอมมิชชั่น 2 ตัวบนต้องไม่เกิน 28");
      $(this).val('28');
    }else{
      $(this).val(com_4);
    }
  });
  $('#com_5').on('change', function(){
    var com_5 = 0;
    com_5 += isNaN(parseInt( $('#com_5').val() )) ? 0 : parseInt( $('#com_5').val() );
    if(com_5 > 28){
      alert("หวยรัฐ คอมมิชชั่น 2 ตัวล่างต้องไม่เกิน 28");
      $(this).val('28');
    }else{
      $(this).val(com_5);
    }
  });
  $('#com_6').on('change', function(){
    var com_6 = 0;
    com_6 += isNaN(parseInt( $('#com_6').val() )) ? 0 : parseInt( $('#com_6').val() );
    if(com_6 > 28){
      alert("หวยรัฐ คอมมิชชั่น 2 ตัวโต๊ดต้องไม่เกิน 28");
      $(this).val('28');
    }else{
      $(this).val(com_6);
    }
  });
  $('#com_7').on('change', function(){
    var com_7 = 0;
    com_7 += isNaN(parseInt( $('#com_7').val() )) ? 0 : parseInt( $('#com_7').val() );
    if(com_7 > 12){
      alert("หวยรัฐ คอมมิชชั่น วิ่งบนต้องไม่เกิน 12");
      $(this).val('12');
    }else{
      $(this).val(com_7);
    }
  });
  $('#com_8').on('change', function(){
    var com_8 = 0;
    com_8 += isNaN(parseInt( $('#com_8').val() )) ? 0 : parseInt( $('#com_8').val() );
    if(com_8 > 12){
      alert("หวยรัฐ คอมมิชชั่น วิ่งล่างต้องไม่เกิน 12");
      $(this).val('12');
    }else{
      $(this).val(com_8);
    }
  });
</script>
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

        <form method="POST" action="{{ route('members.store') }}" accept-charset="UTF-8" id="create-user-form" class="form-horizontal" autocomplete="off"><input name="_token" type="hidden" value="uxxSpiZ338ZTX1mxPhKq1ql7p446dvtlqPlNnN6n">
          {{ csrf_field() }}
                <div class="widget-box widget-color-blue2 width-1100 max-width-1100">
                      <div class="widget-header">
                          <h5 class="widget-title bigger">
                            ข้อมูลสมาชิก
                          </h5>
                      </div>
              @if(session()->get('massagesuccess'))
                <div class="box">
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                          <i class="fa fa-times"></i></button>
                      </div>
                      <div class="callout callout-success">
                        <h4>success!</h4>
                        <p>{{ session()->get('massagesuccess') }}</p>
                    </div>
                  </div>
                @endif
              @if(session()->get('massage'))
                  <div class="box">
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                          <i class="fa fa-times"></i></button>
                      </div>
                      <div class="callout callout-danger">
                        <h4>Fail !</h4>
                        <p>{{ session()->get('massage') }}</p>
                    </div>
                  </div>
                @endif
                    <div class="widget-body">
                      <div class="widget-main no-padding-bottom">
                        <div class="form-group has-feedback{{ $errors->has('level') ? ' has-error' : '' }}">
                            <label for="level" class="control-label col-xs-1" autofill="false">ระดับ:</label>
                              <div class="col-xs-3">
                              <select class="form-control" id="level" name="level">
                              @if(auth()->user()->level == 7)
                                  <option value="7">Member</option>
                              @elseif(auth()->user()->level ==6)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                              @elseif(auth()->user()->level ==5)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                                  <option value="5">Master</option>
                              @elseif(auth()->user()->level ==4)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                                  <option value="5">Master</option>
                                  <option value="4">Senior</option>
                               @elseif(auth()->user()->level ==3)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                                  <option value="5">Master</option>
                                  <option value="4">Senior</option>
                                  <option value="3">Super Senior</option>
                               @elseif(auth()->user()->level ==2)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                                  <option value="5">Master</option>
                                  <option value="4">Senior</option>
                                  <option value="3">Super Senior</option>
                                  <option value="2">Pathner</option>
                               @elseif(auth()->user()->level ==1)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                                  <option value="5">Master</option>
                                  <option value="4">Senior</option>
                                  <option value="3">Super Senior</option>
                                  <option value="2">Pathner</option>
                                  <option value="1">Admin</option>
                               @endif
                               </select>
                               <p style="color:red">{{ $errors->first('level') }}</p>
                              </div>

                            <div class="col-xs-2"></div>
                                  
                            <div class="has-feedback{{ $errors->has('credit') ? ' has-error' : '' }}">
                                <label for="credit" class="control-label col-xs-1">เครดิต:</label>
                              <div class="col-xs-3">
                                <input class="form-control" name="credit" type="text" value="{{ old('credit') }}">
                                <p style="color:red">{{ $errors->first('credit') }}</p>
                              </div>
                              <span class="help-inline col-xs-2">
                                <span class="middle"><span class="middle">* สูงสุด {{ $credit }}</span></span>
                              </span>
                            </div>
                            
                        </div>
          
                        <div class="form-group">
                          <div class="has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
                              <label for="username" class="control-label col-xs-1" =""="">ชื่อผู้ใช้:</label>
                              <div class="col-xs-3">
                                <div class="input-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
                                @if(auth()->user()->helper ==1)
                                    <span class="input-group-addon">{{ $members->username }}</span>
                                    <input type="hidden" name="useradd" value="{{ $members->username }}@">
                                    <input id="username" class="form-control" name="username" type="text" value="{{ old('username') }}">
                                @elseif(auth()->user()->helper ==0)
                                    <span class="input-group-addon">{{ auth()->user()->username }}</span>
                                    <input type="hidden" name="useradd" value="{{ auth()->user()->username }}@">
                                    <input id="username" class="form-control" name="username" type="text" value="{{ old('username') }}">
                                @endif
                                </div>
                                <p style="color:red">{{ $errors->first('username') }}</p>
                              </div>
                          </div>

                            <div class="has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="help-inline col-xs-2">
                                  <span class="middle bigger-125" id="password-availability"></span>
                                </span>
                                <label for="password" class="control-label col-xs-1">รหัสผ่าน:</label>
                                <div class="col-xs-3">
                                  <input class="form-control" name="password" type="password" value="{{ old('password') }}" id="password">
                                  <p style="color:red">{{ $errors->first('password') }}</p>
                                </div>
                                <span class="help-inline col-xs-2">
                                  <span class="middle">* อย่างน้อย 6 ตัวอักษร</span>
                                </span>
                            </div>
                            
                        </div>

                        <div class="form-group">
                          <div class="has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label col-xs-1">ชื่อ-สกุล:</label>
                            <div class="col-xs-3">
                              <input class="form-control" name="name" type="text" id="name" value="{{ old('name') }}">
                              <p style="color:red">{{ $errors->first('name') }}</p>
                            </div>
                          </div>
                          

                            <div class="col-xs-2"></div>
                          <div class="has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                              <label for="phone" class="control-label col-xs-1">เบอร์โทร:</label>
                              <div class="col-xs-3">
                                <input class="form-control" name="phone" type="text" id="phone" 
                                 value="{{ old('phone') }}">
                                  <p style="color:red">{{ $errors->first('phone') }}</p>
                              </div>
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
                              @for($i = 90; $i >= 0; $i -= 0.5)
                                  <option value="{{ number_format($i, 1, '.', ',') }}">{{ number_format($i, 1, '.', ',') }}%</option>
                              @endfor
                                {{-- <option value="90.0" selected="selected">90.0%</option>
                                <option value="89.5">89.5%</option>
                                <option value="0.0">0.0%</option> --}}
                              </select>
                            </div>
                            <div class="col-xs-3 left-margin-10" style="margin-top: 5px">
                              <input name="take_remain" type="hidden" value="0">
                              <label class="width-100">
                                <input class="" name="take_remain" type="checkbox" value="1">
                                <span class="lbl"> เก็บของที่เกิน</span>
                                <a href="#" target="_blank"><i class="fa fa-question-circle"></i></a>
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
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="min_1" id="min_1" type="text" value="5">/ 5</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_1" id="max_1" type="text" value="3000">/ 3,000</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num1" id="max_per_num1" type="text" value="10000">/ 10,000</td>
                                    </tr>
                                    <tr>
                                        <td class="ac am bolder">3 ตัวล่าง</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="min_2" id="min_2" type="text" value="5">/ 5</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_2" id="max_2" type="text" value="3000">/ 3,000</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num2" id="max_per_num2" type="text" value="100000">/ 100,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">3 ตัวโต๊ด</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_3" id="min_3" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_3" id="max_3" type="text" value="3000">/ 3,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num3" id="max_per_num3" type="text" value="30000">/ 30,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">2 ตัวบน</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_4" id="min_4" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_4" id="max_4" type="text" value="10000">/ 10,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num4" id="max_per_num4" type="text" value="100000">/ 100,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">2 ตัวล่าง</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_5" id="min_5" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_5" id="max_5" type="text" value="10000">/ 10,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num5" id="max_per_num5" type="text" value="100000">/ 100,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">2 ตัวโต๊ด</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_6" id="min_6" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_6" id="max_6" type="text" value="10000">/ 10,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num6" id="max_per_num6" type="text" value="100000">/ 100,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">วิ่งบน</td><td class="am">
                                        <input class="form-control inline width-50 deep-blue" name="min_7" id="min_7" type="text" value="5">/ 5</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_7" id="max_7" type="text" value="100000">/ 100,000</td>
                                        <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num7" id="max_per_num7" type="text" value="300000">/ 300,000</td>
                                    </tr>
                                    <tr>
                                      <td class="ac am bolder">วิ่งล่าง</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="min_8" id="min_8" type="text" value="5">/ 5</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_8" id="max_8" type="text" value="100000">/ 100,000</td>
                                      <td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num8" id="max_per_num8" type="text" value="300000">/ 300,000</td>
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
                                              <input class="form-control inline width-50 deep-blue" name="payoutg_1" id="payoutg_1" type="text" value="550">
                                              / 550
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payoutg_2" id="payoutg_2" type="text" value="125">
                                              / 125
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payoutg_3" id="payoutg_3" type="text" value="105">
                                              / 105
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payoutg_4" id="payoutg_4" type="text" value="70">
                                              / 70
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payoutg_5" id="payoutg_5" type="text" value="70">
                                              / 70
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payoutg_6" id="payoutg_6" type="text" value="12">
                                              / 12
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payoutg_7" id="payoutg_7" type="text" value="3">
                                              / 3
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payoutg_8" id="payoutg_8" type="text" value="4">
                                              / 4
                                            </td>
                                        </tr>
                                        <tr class=" ">
                                            <td class="ac am bolder">คอมมิชชั่น</td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="comg_1" id="comg_1" type="text" value="33">
                                                / 33
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="comg_2" id="comg_2" type="text" value="33">
                                              / 33
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="comg_3" id="comg_3" type="text" value="33">
                                              / 33
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="comg_4" id="comg_4" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="comg_5" id="comg_5" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="comg_6" id="comg_6" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="comg_7" id="comg_7" type="text" value="12">
                                              / 12
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="comg_8" id="comg_8" type="text" value="12">
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
                                              <input class="form-control inline width-50 deep-blue" name="payout_1" id="payout_1" type="text" value="550">
                                              / 550
                                            </td>
                                            <td class="am" >
                                              <input type="hidden" class="form-control inline width-50 deep-blue" id="payout_2" name="payout_2" type="text" value="0">
                                            
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout_3" id="payout_3" type="text" value="105">
                                              / 105
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout_4" id="payout_4" type="text" value="70">
                                              / 70
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout_5" id="payout_5" type="text" value="70">
                                              / 70
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout_6" id="payout_6" type="text" value="12">
                                              / 12
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout_7" id="payout_7" type="text" value="3">
                                              / 3
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="payout_8" id="payout_8" type="text" value="4">
                                              / 4
                                            </td>
                                        </tr>
                                        <tr class=" ">
                                            <td class="ac am bolder">คอมมิชชั่น</td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com_1" id="com_1" type="text" value="33">
                                              / 33
                                            </td>
                                            <td class="am">
                                              <input type="hidden" class="form-control inline width-50 deep-blue" name="com_2" id="com_2" type="text" value="0">
                                             
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com_3" id="com_3"  type="text" value="33">
                                              / 33
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com_4" id="com_4" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com_5" id="com_5" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com_6" id="com_6" type="text" value="28">
                                              / 28
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com_7" id="com_7" type="text" value="12">
                                              / 12
                                            </td>
                                            <td class="am">
                                              <input class="form-control inline width-50 deep-blue" name="com_8" id="com_8" type="text" value="12">
                                              / 12
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

          //on change, start the countdown
          $('#username').change(function(){
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

@endsection

 