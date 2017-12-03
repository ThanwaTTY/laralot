
  ////////////////////commission////////////////////////////////////////////
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



  //////////////////////////////////////hightLownumber//////////////////////////////////////////////////////////////
  //////////////////////////////////////hightLownumber//////////////////////////////////////////////////////////////
  //////////////////////////////////////hightLownumber//////////////////////////////////////////////////////////////
  //////////////////////////////////////hightLownumber//////////////////////////////////////////////////////////////
  //////////////////////////////////////hightLownumber//////////////////////////////////////////////////////////////
  //////////////////////////////////////hightLownumber//////////////////////////////////////////////////////////////

  $(function(){
    $('#minmin').on('change', function(){
      var minmin = 0;

      minmin += isNaN(parseInt( $('#minmin').val() )) ? 0 : parseInt( $('#minmin').val() );
      if(minmin < 5 ){
        alert("ขั้นต่ำ 3 ตัวบน ต้องมีค่าอย่างน้อย 5");
        $(this).val('');
      }else{
         $(this).val(minmin);
      }
    });

  });
  $(function(){
    $('#minmin2').on('change', function(){
      var minmin2 = 0;

      minmin2 += isNaN(parseInt( $('#minmin2').val() )) ? 0 : parseInt( $('#minmin2').val() );
      if(minmin2 < 5 ){
        alert("ขั้นต่ำ 3 ตัวล่าง ต้องมีค่าอย่างน้อย 5");
        $(this).val('');
      }else{
         $(this).val(minmin2);
      }

    });
  });
  $(function(){
    $('#minmin3').on('change', function(){
      var minmin3 = 0;

      minmin3 += isNaN(parseInt( $('#minmin3').val() )) ? 0 : parseInt( $('#minmin3').val() );
      if(minmin3 < 5 ){
        alert("ขั้นต่ำ 3 ตัวโต๊ด ต้องมีค่าอย่างน้อย 5");
        $(this).val('');
      }else{
         $(this).val(minmin3);
      }

    });
  });
  $(function(){
    $('#minmin4').on('change', function(){
      var minmin4 = 0;

      minmin4 += isNaN(parseInt( $('#minmin4').val() )) ? 0 : parseInt( $('#minmin4').val() );
      if(minmin4 < 5 ){
        alert("ขั้นต่ำ 2 ตัวบน ต้องมีค่าอย่างน้อย 5");
        $(this).val('');
      }else{
         $(this).val(minmin4);
      }

    });
  });
  $(function(){
    $('#minmin5').on('change', function(){
      var minmin5 = 0;

      minmin5 += isNaN(parseInt( $('#minmin5').val() )) ? 0 : parseInt( $('#minmin5').val() );
      if(minmin5 < 5 ){
        alert("ขั้นต่ำ 2 ตัวล่าง ต้องมีค่าอย่างน้อย 5");
        $(this).val('');
      }else{
         $(this).val(minmin5);
      }

    });
  });
  $(function(){
    $('#minmin6').on('change', function(){
      var minmin6 = 0;

      minmin6 += isNaN(parseInt( $('#minmin6').val() )) ? 0 : parseInt( $('#minmin6').val() );
      if(minmin6 < 5 ){
        alert("ขั้นต่ำ 2 ตัวโต๊ด ต้องมีค่าอย่างน้อย 5");
        $(this).val('');
      }else{
         $(this).val(minmin6);
      }

    });
  });
  $(function(){
    $('#minmin7').on('change', function(){
      var minmin7 = 0;

      minmin7 += isNaN(parseInt( $('#minmin7').val() )) ? 0 : parseInt( $('#minmin7').val() );
      if(minmin7 < 5 ){
        alert("ขั้นต่ำ วิ่งบน ต้องมีค่าอย่างน้อย 5");
        $(this).val('');
      }else{
         $(this).val(minmin7);
      }

    });
  });
  $(function(){
    $('#minmin8').on('change', function(){
      var minmin8 = 0;

      minmin8 += isNaN(parseInt( $('#minmin8').val() )) ? 0 : parseInt( $('#minmin8').val() );
      if(minmin8 < 5 ){
        alert("ขั้นต่ำ วิ่งล่าง ต้องมีค่าอย่างน้อย 5");
        $(this).val('');
      }else{
         $(this).val(minmin8);
      }

    });
  });

  $(function(){
    $('#maxmax1').on('change', function(){
      var maxmax1 = 0;

      maxmax1 += isNaN(parseInt( $('#maxmax1').val() )) ? 0 : parseInt( $('#maxmax1').val() );
      if(maxmax1 > 3000 ){
        alert("สูงสุด 3 ตัวบน ต้องมีค่าไม่เกิน 3000");
        $(this).val('');
      }else{
         $(this).val(maxmax1);
      }
    });

  });
  $(function(){
    $('#maxmax2').on('change', function(){
      var maxmax2 = 0;

      maxmax2 += isNaN(parseInt( $('#maxmax2').val() )) ? 0 : parseInt( $('#maxmax2').val() );
      if(maxmax2 > 3000 ){
        alert("สูงสุด 3 ตัวล่าง ต้องมีค่าไม่เกิน 3000");
        $(this).val('');
      }else{
         $(this).val(maxmax2);
      }

    });
  });
  $(function(){
    $('#maxmax3').on('change', function(){
      var maxmax3 = 0;

      maxmax3 += isNaN(parseInt( $('#maxmax3').val() )) ? 0 : parseInt( $('#maxmax3').val() );
      if(maxmax3 > 3000  ){
        alert("สูงสุด 3 ตัวโต๊ด ต้องมีค่าไม่เกิน 3000");
        $(this).val('');
      }else{
         $(this).val(maxmax3);
      }

    });
  });
  $(function(){
    $('#maxmax4').on('change', function(){
      var maxmax4 = 0;

      maxmax4 += isNaN(parseInt( $('#maxmax4').val() )) ? 0 : parseInt( $('#maxmax4').val() );
      if(maxmax4 > 10000 ){
        alert("สูงสุด 2 ตัวบน ต้องมีค่าไม่เกิน 10000");
        $(this).val('');
      }else{
         $(this).val(maxmax4);
      }

    });
  });
  $(function(){
    $('#maxmax5').on('change', function(){
      var maxmax5 = 0;

      maxmax5 += isNaN(parseInt( $('#maxmax5').val() )) ? 0 : parseInt( $('#maxmax5').val() );
      if(maxmax5 > 10000 ){
        alert("สูงสุด 2 ตัวล่าง ต้องมีค่าไม่เกิน 10000");
        $(this).val('');
      }else{
         $(this).val(maxmax5);
      }

    });
  });
  $(function(){
    $('#maxmax6').on('change', function(){
      var maxmax6 = 0;

      maxmax6 += isNaN(parseInt( $('#maxmax6').val() )) ? 0 : parseInt( $('#maxmax6').val() );
      if(maxmax6 > 10000 ){
        alert("สูงสุด 2 ตัวโต๊ด ต้องมีค่าไม่เกิน 10000");
        $(this).val('');
      }else{
         $(this).val(maxmax6);
      }

    });
  });
  $(function(){
    $('#maxmax7').on('change', function(){
      var maxmax7 = 0;

      maxmax7 += isNaN(parseInt( $('#maxmax7').val() )) ? 0 : parseInt( $('#maxmax7').val() );
      if(maxmax7 > 100000 ){
        alert("สูงสุด วิ่งบน ต้องมีค่าไม่เกิน 100000");
        $(this).val('');
      }else{
         $(this).val(maxmax7);
      }

    });
  });
  $(function(){
    $('#maxmax8').on('change', function(){
      var maxmax8 = 0;

      maxmax8 += isNaN(parseInt( $('#maxmax8').val() )) ? 0 : parseInt( $('#maxmax8').val() );
      if(maxmax8 > 100000 ){
        alert("สูงสุด วิ่งล่าง ต้องมีค่าไม่เกิน 100000");
        $(this).val('');
      }else{
         $(this).val(maxmax8);
      }

    });
  });

  $(function(){
    $('#numpermax1').on('change', function(){
      var numpermax1 = 0;

      numpermax1 += isNaN(parseInt( $('#numpermax1').val() )) ? 0 : parseInt( $('#numpermax1').val() );
      if(numpermax1 > 10000 ){
        alert("สูงสุดต่อเลข 3 ตัวบน ต้องมีค่าไม่เกิน 10000");
        $(this).val('');
      }else{
         $(this).val(numpermax1);
      }
    });

  });
  $(function(){
    $('#numpermax2').on('change', function(){
      var numpermax2 = 0;

      numpermax2 += isNaN(parseInt( $('#numpermax2').val() )) ? 0 : parseInt( $('#numpermax2').val() );
      if(numpermax2 > 100000 ){
        alert("สูงสุดต่อเลข 3 ตัวล่าง ต้องมีค่าไม่เกิน 100000");
        $(this).val('');
      }else{
         $(this).val(numpermax2);
      }

    });
  });
  $(function(){
    $('#numpermax3').on('change', function(){
      var numpermax3 = 0;

      numpermax3 += isNaN(parseInt( $('#numpermax3').val() )) ? 0 : parseInt( $('#numpermax3').val() );
      if(numpermax3 > 30000  ){
        alert("สูงสุดต่อเลข 3 ตัวโต๊ด ต้องมีค่าไม่เกิน 30000");
        $(this).val('');
      }else{
         $(this).val(numpermax3);
      }

    });
  });
  $(function(){
    $('#numpermax4').on('change', function(){
      var numpermax4 = 0;

      numpermax4 += isNaN(parseInt( $('#numpermax4').val() )) ? 0 : parseInt( $('#numpermax4').val() );
      if(numpermax4 > 100000 ){
        alert("สูงสุดต่อเลข 2 ตัวบน ต้องมีค่าไม่เกิน 100000");
        $(this).val('');
      }else{
         $(this).val(numpermax4);
      }

    });
  });
  $(function(){
    $('#numpermax5').on('change', function(){
      var numpermax5 = 0;

      numpermax5 += isNaN(parseInt( $('#numpermax5').val() )) ? 0 : parseInt( $('#numpermax5').val() );
      if(numpermax5 > 100000 ){
        alert("สูงสุดต่อเลข 2 ตัวล่าง ต้องมีค่าไม่เกิน 100000");
        $(this).val('');
      }else{
         $(this).val(numpermax5);
      }

    });
  });
  $(function(){
    $('#numpermax6').on('change', function(){
      var numpermax6 = 0;

      numpermax6 += isNaN(parseInt( $('#numpermax6').val() )) ? 0 : parseInt( $('#numpermax6').val() );
      if(numpermax6 > 100000 ){
        alert("สูงสุดต่อเลข 2 ตัวโตด ต้องมีค่าไม่เกิน 100000");
        $(this).val('');
      }else{
         $(this).val(numpermax6);
      }

    });
  });
  $(function(){
    $('#numpermax7').on('change', function(){
      var numpermax7 = 0;

      numpermax7 += isNaN(parseInt( $('#numpermax7').val() )) ? 0 : parseInt( $('#numpermax7').val() );
      if(numpermax7 > 300000 ){
        alert("สูงสุดต่อเลข วิ่งบน ต้องมีค่าไม่เกิน 300000");
        $(this).val('');
      }else{
         $(this).val(numpermax7);
      }

    });
  });
  $(function(){
    $('#numpermax8').on('change', function(){
      var numpermax8 = 0;

      numpermax8 += isNaN(parseInt( $('#numpermax8').val() )) ? 0 : parseInt( $('#numpermax8').val() );
      if(numpermax8 > 300000 ){
        alert("สูงสุดต่อเลข วิ่งล่าง ต้องมีค่าไม่เกิน 300000");
        $(this).val('');
      }else{
         $(this).val(numpermax8);
      }

    });
  });

  //////////////////////////////////////Commistion//////////////////////////////////////////////////////////////
  //////////////////////////////////////Commistion//////////////////////////////////////////////////////////////
  //////////////////////////////////////Commistion//////////////////////////////////////////////////////////////
  //////////////////////////////////////Commistion//////////////////////////////////////////////////////////////
  //////////////////////////////////////Commistion//////////////////////////////////////////////////////////////
  //////////////////////////////////////Commistion//////////////////////////////////////////////////////////////

