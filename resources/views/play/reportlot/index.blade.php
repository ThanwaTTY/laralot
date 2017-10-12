@extends('mastermember')
@section('content')
    <div class="col-xs-12 no-padding-left">
  <h3 class="no-margin-top">
    <i class="fa fa-angle-right blue"></i>
    สรุปงวดหวย
    <span class="deep-blue" id="finance-date">วันที่ 12-10-2017</span><br>
    <div class="space-4"></div>
    <input type="text" class="form-control date-range-picker max-width-180" value="12/10/2017 - 12/10/2017">
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
@endsection