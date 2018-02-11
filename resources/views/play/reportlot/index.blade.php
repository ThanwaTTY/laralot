<div class="page-content">
        <div class="space-4"></div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-2" id="user-sidebar">
            <div id="sidebar-box" class="widget-box no-margin-top no-border col-xs-6 col-sm-6 col-md-12">
              <div class="widget-body">
                <div class="widget-main mobile-bet-hide" id="summary-box">
                  <table class="table no-margin white bolder" id="summary-table" style="border: 0;">
                    <tbody>
                      <tr><th><span class="bolder bigger-110">ยอดรวม</span></th></tr>
                      <tr><th>เครดิต</th><td id="member-credit" class="align-right">1,000</td></tr>
                      <tr><th>ได้เสียสุทธิ</th><td id="member-bet" class="align-right">-20</td></tr>
                      <tr><th>ยอดคงเหลือ</th><td id="member-available" class="align-right">980</td></tr>
                                              <tr class="select-game-hide"><th>&nbsp;</th><td></td></tr>
                        <tr class="select-game-hide"><th colspan="2"><span class="bolder bigger-110">ยอดรัฐบาลไทย</span></th></tr>
                        <tr class="select-game-hide"><th>ยอดพนัน</th><td id="member-total-bet" class="align-right">30</td></tr>
                        <tr class="select-game-hide"><th>ค่าคอม</th><td id="member-total-com" class="align-right">10</td></tr>
                                          </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-12 no-padding select-game-hide">
              <div>
                                  <select id="bet_type_group_id" class="form-control" name="bet_type_grop_id"><option value="1">3 ตัวท้าย</option></select>
              </div>

              <div id="close-box-container"><div id="close-box">
                  <h4 class="align-center">
                    หมายเลขปิดรับ<br>
                                          รัฐบาลไทย
                                        <a href="#" id="close-num-refresh">
                      <i class="ace-icon fa fa-refresh"></i>
                    </a>
                    <div class="space-4"></div>
                  </h4>
                  <div class="widget-box transparent no-margin-top">
                    <div class="widget-body">
                      <div class="widget-main" id="close-num-box">กำลังโหลด...</div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-10" id="user-content">
            <div class="alert alert-info invert-select-game-hide mobile-bet-hide hidden" id="news">
              <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
              </button>
                            <b>ประกาศระบบ:</b> แจ้งข่าวเรื่องออกผลหวยหุ้นต่างๆ<br>
เนื่องจากเดือนนี้ มีวันหยุดเทศกาล ในแต่ละประเทศแตกต่างกันไป และค่อนข้างเยอะ จึงทำให้ผลหุ้นต่างประเทศบางตัว อาจจะต้องโมฆะยกเลิก คืนเงิน เช่น หุ้นบางตัวเปิดตลาดแค่ครึ่งวันแล้วก็ปิดก่อนเวลาปกติ ทางบริษัทจึงต้องให้เป็นโมฆะ และคืนเงินกลับไป เป็นต้น<br>
<br>
สำหรับเอเย่นต์ที่ทำบัญชีราย สัปดาห์ จันทร์ - อาทิตย์  บริษัทจึงขอแนะนำให้ท่านทำบัญชีหลัง 12.00น. ของวันจันทร์เป็นต้นไป<br>
<br>
<br>
            </div>

            
            
            <div id="content"><div class="col-xs-12 no-padding-left">
  <h3 class="no-margin-top">
    <i class="fa fa-angle-right blue"></i>
    สรุปงวดหวย
    <span class="deep-blue" id="finance-date">วันที่ 11-02-2018</span><br>
    <div class="space-4"></div>
    <input type="text" class="form-control date-range-picker max-width-180" value="11/02/2018 - 11/02/2018">
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

  //$('.date-range-picker').daterangepicker(dateRangeOptions);

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
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>