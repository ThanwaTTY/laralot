    <div class="breadcrumbs">
    <ul id="breadcrumbs" class="breadcrumb">
        <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <!-- <a href="#">Home</a> -->
        </li>
    </ul><!-- /.breadcrumb -->

    <span id="global-clock" class="pull-right"></span>
    </div>

    <div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"> <div class="page-header">
    <h1>รายการที่ถูกยกเลิก</h1>
  </div>


  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
          <li class="active">
        <a href="https://agent.superlot999.com/items/cancelled" class="ajax">รายการที่ถูกยกเลิก</a>
      </li>
      </ul>

<style>
  #search-table td {
    padding: 0 10px 4px 0;
  }
</style>

<div class="space-4"></div>

  <form method="GET" action="https://agent.superlot999.com/items/cancelled" accept-charset="UTF-8" class="form-inline js-form-submit">
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
              <td><label for="daterange" class="bolder">วันที่แทง :</label></td>
              <td><input class="form-control width-100 bigger-110 date-range-picker" name="daterange" type="text" value="10/10/2017 - 10/10/2017" id="daterange"></td>

              <td><label for="username" class="bolder">ชื่อผู้ใช้ :</label></td>
                              <td><input class="form-control bigger-110" id="username" name="username" type="text"></td>
                          </tr>

            <tr>
              <td><label for="game_bill_numbers" class="bolder">ลำดับโพย :</label></td>
              <td><input class="form-control bigger-110" id="game_bill_numbers" name="game_bill_numbers" type="text"></td>

              <td><label for="numbers" class="bolder">หมายเลขที่แทง :</label></td>
              <td><input class="form-control bigger-110" id="number" name="numbers" type="text"></td>
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
</div><!-- /.col -->
        </div><!-- /.row -->
      </div>

