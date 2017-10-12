@extends('mastermember')
@section('content')
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
                              <td><input class="form-control bigger-110" id="username" readonly="readonly" name="username" type="text" value="3M3KPALM"></td>
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