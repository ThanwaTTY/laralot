@extends('mastermember')
@section('content')
<div id="content"><div id="bet-div">
 <div class="col-sm-12 col-md-5 no-padding-left">
    
    <div class="alert-info padding-10">
      <label class="deep-blue bolder bot-margin-10">
        รัฐบาลไทย
      </label>
      <b>3 ตัวท้าย</b>
      <br>

      <input id="bet_type_group" name="bet_type_group" type="hidden" value="1">

      <table>
        <tbody><tr>
          <td><label for="payout_id" class="bolder right-padding-5">อัตราจ่าย:</label></td>
          <td>
                          <select name="payout_id" id="payout" class="ac">
                                  <option value="5">หวยรัฐ 70</option>
                              </select>
                        <a href="/info" target="_blank" class="bigger-110">ดูรายละเอียด</a>
          </td>
        </tr>
      </tbody></table>
    </div>

    <div class="space-4"></div>

        <div class="checkbox clearfix">
      <label for="down3-tode2">
        <input name="down3_tode2" type="checkbox" class="" id="down3-tode2" checked="checked">
        <span class="lbl">  2 ตัวโต๊ด</span>
      </label>

      <div class="pull-right">
        <label for="door">
          <input name="door" type="checkbox" class="" id="door">
          <span class="lbl"> 6 ประตู / 19 ประตู</span>
        </label>
        <br>

        <label for="bulk">
          <input name="bulk" type="checkbox" class="" id="bulk">
          <span class="lbl"> แทงเร็ว</span>
        </label>
      </div>
    </div>
    
    
    <div id="bet-table-wrapper" class="clearfix">
      <table class="table table-bordered table-border-dark no-margin jquery-hide" id="special-bet-table" style="display: table;">
        <thead class="thin-border-bottom">
          <tr class="bg-blue">
            <th colspan="5" class="ac bigger-120">6 ประตู / 19 ประตู กรอกข้อมูลแล้วกดถูก <i class="fa fa-check"></i></th>
          </tr>
        </thead>

        <tbody>
          <tr class="bg-blue">
            <td><input type="text" class="form-control input-sm bolder" id="special-num" maxlength="3" placeholder="เลข"></td>
            <td><input type="text" class="form-control input-sm" id="special-up" maxlength="9" placeholder="บน"></td>
            <td><input type="text" class="form-control input-sm" id="special-down" maxlength="9" placeholder="ล่าง"></td>
            <td><input type="text" class="form-control input-sm" id="special-tode" maxlength="9" placeholder="โต๊ด"></td>
            <td class="ac am">
              <a href="#" class="btn-ok" tabindex="-1"><i class="fa fa-check green bigger-125"></i></a>
            </td>
          </tr>
        </tbody>
      </table>

      <table class="table table-bordered table-border-dark no-margin jquery-hide" id="bulk-table" style="display: table;">
        <thead class="thin-border-bottom">
          <tr class="bg-blue">
            <th colspan="5" class="align-center bigger-120">
              กรอกเลขและราคา แล้วกด <i class="fa fa-check"></i><br>
              วิธีใช้: <a href="https://youtu.be/nlQv8Xjh7-Y" target="_blank">คลิก YouTube</a>
            </th>
          </tr>
        </thead>

        <tbody class="bg-blue">
          <tr>
            <td rowspan="2">
              <textarea class="form-control input-sm bolder" id="bulk-row" placeholder="1. กรอกเลขรายบรรทัด 2. หรือคั่นด้วยวรรค คอมม่า จุด ก็ได้เช่นกัน" rows="8"></textarea>
              <div class="invisible" style="width: 78px"></div>
            </td>
            <td><input type="text" class="form-control input-sm" id="bulk-col1" maxlength="9" placeholder="บน"></td>
            <td><input type="text" class="form-control input-sm" id="bulk-col2" maxlength="9" placeholder="ล่าง"></td>
            <td><input type="text" class="form-control input-sm" id="bulk-col3" maxlength="9" placeholder="โต๊ด"></td>
            <td class="align-center align-middle" height="40px">
              <div style="width: 50px !important;">
                <label for="close-bulk-ok"><input type="checkbox" id="close-bulk-ok"> ใช้ต่อ</label>
              </div><br>

              <a href="#" class="btn-bulk-ok" tabindex="-1"><i class="fa fa-check green bigger-125"></i></a>
            </td>
          </tr>
        </tbody>
      </table>

            <b class="bolder deep-blue">&lt;&lt; 3 ตัวท้าย &gt;&gt;</b>
      <table class="table table-bordered table-border-dark no-margin" id="bet-table" style="table-layout: fixed;">
        <thead class="thin-border-bottom">
          <tr>
            <th class="ac bigger-120">หมายเลข</th>
                          <th class="ac bigger-120">บน</th>
                          <th class="ac bigger-120">ล่าง</th>
                          <th class="ac bigger-120">โต๊ด</th>
                        <th class="ac bigger-120 last">ลบ</th>
          </tr>
        </thead>

        <tbody>
          <tr id="num-status">
            <!-- &#8211; -->
            <td class="ac am bigger-120 bolder" id="betable-number" data-clearable="1">
              –
            </td>
                          <td class="ac am bigger-120" id="betable-0">–</td>
                          <td class="ac am bigger-120" id="betable-1">–</td>
                          <td class="ac am bigger-120" id="betable-2">–</td>
                        <td></td>
          </tr>

                                  <tr id="tr-row-1" class="all-tr " data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    1
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-1" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-1">
                  <input type="text" id="input-0-row-1" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-1">
                  <input type="text" id="input-1-row-1" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-1">
                  <input type="text" id="input-2-row-1" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-1"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-2" class="all-tr " data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    2
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-2" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-2">
                  <input type="text" id="input-0-row-2" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-2">
                  <input type="text" id="input-1-row-2" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-2">
                  <input type="text" id="input-2-row-2" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-2"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-3" class="all-tr " data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    3
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-3" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-3">
                  <input type="text" id="input-0-row-3" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-3">
                  <input type="text" id="input-1-row-3" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-3">
                  <input type="text" id="input-2-row-3" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-3"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-4" class="all-tr " data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    4
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-4" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-4">
                  <input type="text" id="input-0-row-4" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-4">
                  <input type="text" id="input-1-row-4" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-4">
                  <input type="text" id="input-2-row-4" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-4"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-5" class="all-tr " data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    5
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-5" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-5">
                  <input type="text" id="input-0-row-5" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-5">
                  <input type="text" id="input-1-row-5" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-5">
                  <input type="text" id="input-2-row-5" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-5"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-6" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    6
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-6" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-6">
                  <input type="text" id="input-0-row-6" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-6">
                  <input type="text" id="input-1-row-6" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-6">
                  <input type="text" id="input-2-row-6" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-6"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-7" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    7
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-7" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-7">
                  <input type="text" id="input-0-row-7" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-7">
                  <input type="text" id="input-1-row-7" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-7">
                  <input type="text" id="input-2-row-7" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-7"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-8" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    8
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-8" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-8">
                  <input type="text" id="input-0-row-8" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-8">
                  <input type="text" id="input-1-row-8" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-8">
                  <input type="text" id="input-2-row-8" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-8"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-9" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    9
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-9" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-9">
                  <input type="text" id="input-0-row-9" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-9">
                  <input type="text" id="input-1-row-9" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-9">
                  <input type="text" id="input-2-row-9" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-9"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-10" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    10
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-10" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-10">
                  <input type="text" id="input-0-row-10" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-10">
                  <input type="text" id="input-1-row-10" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-10">
                  <input type="text" id="input-2-row-10" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-10"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-11" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    11
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-11" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-11">
                  <input type="text" id="input-0-row-11" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-11">
                  <input type="text" id="input-1-row-11" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-11">
                  <input type="text" id="input-2-row-11" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-11"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-12" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    12
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-12" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-12">
                  <input type="text" id="input-0-row-12" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-12">
                  <input type="text" id="input-1-row-12" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-12">
                  <input type="text" id="input-2-row-12" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-12"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-13" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    13
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-13" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-13">
                  <input type="text" id="input-0-row-13" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-13">
                  <input type="text" id="input-1-row-13" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-13">
                  <input type="text" id="input-2-row-13" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-13"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-14" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    14
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-14" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-14">
                  <input type="text" id="input-0-row-14" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-14">
                  <input type="text" id="input-1-row-14" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-14">
                  <input type="text" id="input-2-row-14" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-14"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-15" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    15
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-15" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-15">
                  <input type="text" id="input-0-row-15" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-15">
                  <input type="text" id="input-1-row-15" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-15">
                  <input type="text" id="input-2-row-15" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-15"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-16" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    16
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-16" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-16">
                  <input type="text" id="input-0-row-16" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-16">
                  <input type="text" id="input-1-row-16" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-16">
                  <input type="text" id="input-2-row-16" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-16"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-17" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    17
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-17" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-17">
                  <input type="text" id="input-0-row-17" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-17">
                  <input type="text" id="input-1-row-17" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-17">
                  <input type="text" id="input-2-row-17" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-17"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-18" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    18
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-18" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-18">
                  <input type="text" id="input-0-row-18" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-18">
                  <input type="text" id="input-1-row-18" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-18">
                  <input type="text" id="input-2-row-18" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-18"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-19" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    19
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-19" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-19">
                  <input type="text" id="input-0-row-19" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-19">
                  <input type="text" id="input-1-row-19" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-19">
                  <input type="text" id="input-2-row-19" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-19"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-20" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    20
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-20" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-20">
                  <input type="text" id="input-0-row-20" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-20">
                  <input type="text" id="input-1-row-20" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-20">
                  <input type="text" id="input-2-row-20" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-20"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-21" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    21
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-21" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-21">
                  <input type="text" id="input-0-row-21" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-21">
                  <input type="text" id="input-1-row-21" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-21">
                  <input type="text" id="input-2-row-21" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-21"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-22" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    22
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-22" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-22">
                  <input type="text" id="input-0-row-22" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-22">
                  <input type="text" id="input-1-row-22" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-22">
                  <input type="text" id="input-2-row-22" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-22"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-23" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    23
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-23" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-23">
                  <input type="text" id="input-0-row-23" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-23">
                  <input type="text" id="input-1-row-23" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-23">
                  <input type="text" id="input-2-row-23" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-23"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-24" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    24
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-24" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-24">
                  <input type="text" id="input-0-row-24" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-24">
                  <input type="text" id="input-1-row-24" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-24">
                  <input type="text" id="input-2-row-24" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-24"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-25" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    25
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-25" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-25">
                  <input type="text" id="input-0-row-25" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-25">
                  <input type="text" id="input-1-row-25" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-25">
                  <input type="text" id="input-2-row-25" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-25"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-26" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    26
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-26" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-26">
                  <input type="text" id="input-0-row-26" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-26">
                  <input type="text" id="input-1-row-26" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-26">
                  <input type="text" id="input-2-row-26" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-26"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-27" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    27
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-27" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-27">
                  <input type="text" id="input-0-row-27" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-27">
                  <input type="text" id="input-1-row-27" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-27">
                  <input type="text" id="input-2-row-27" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-27"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-28" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    28
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-28" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-28">
                  <input type="text" id="input-0-row-28" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-28">
                  <input type="text" id="input-1-row-28" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-28">
                  <input type="text" id="input-2-row-28" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-28"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-29" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    29
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-29" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-29">
                  <input type="text" id="input-0-row-29" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-29">
                  <input type="text" id="input-1-row-29" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-29">
                  <input type="text" id="input-2-row-29" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-29"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-30" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    30
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-30" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-30">
                  <input type="text" id="input-0-row-30" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-30">
                  <input type="text" id="input-1-row-30" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-30">
                  <input type="text" id="input-2-row-30" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-30"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-31" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    31
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-31" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-31">
                  <input type="text" id="input-0-row-31" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-31">
                  <input type="text" id="input-1-row-31" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-31">
                  <input type="text" id="input-2-row-31" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-31"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-32" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    32
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-32" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-32">
                  <input type="text" id="input-0-row-32" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-32">
                  <input type="text" id="input-1-row-32" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-32">
                  <input type="text" id="input-2-row-32" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-32"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-33" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    33
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-33" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-33">
                  <input type="text" id="input-0-row-33" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-33">
                  <input type="text" id="input-1-row-33" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-33">
                  <input type="text" id="input-2-row-33" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-33"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-34" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    34
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-34" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-34">
                  <input type="text" id="input-0-row-34" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-34">
                  <input type="text" id="input-1-row-34" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-34">
                  <input type="text" id="input-2-row-34" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-34"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-35" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    35
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-35" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-35">
                  <input type="text" id="input-0-row-35" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-35">
                  <input type="text" id="input-1-row-35" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-35">
                  <input type="text" id="input-2-row-35" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-35"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-36" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    36
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-36" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-36">
                  <input type="text" id="input-0-row-36" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-36">
                  <input type="text" id="input-1-row-36" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-36">
                  <input type="text" id="input-2-row-36" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-36"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-37" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    37
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-37" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-37">
                  <input type="text" id="input-0-row-37" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-37">
                  <input type="text" id="input-1-row-37" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-37">
                  <input type="text" id="input-2-row-37" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-37"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-38" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    38
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-38" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-38">
                  <input type="text" id="input-0-row-38" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-38">
                  <input type="text" id="input-1-row-38" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-38">
                  <input type="text" id="input-2-row-38" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-38"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-39" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    39
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-39" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-39">
                  <input type="text" id="input-0-row-39" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-39">
                  <input type="text" id="input-1-row-39" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-39">
                  <input type="text" id="input-2-row-39" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-39"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-40" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    40
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-40" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-40">
                  <input type="text" id="input-0-row-40" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-40">
                  <input type="text" id="input-1-row-40" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-40">
                  <input type="text" id="input-2-row-40" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-40"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-41" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    41
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-41" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-41">
                  <input type="text" id="input-0-row-41" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-41">
                  <input type="text" id="input-1-row-41" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-41">
                  <input type="text" id="input-2-row-41" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-41"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-42" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    42
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-42" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-42">
                  <input type="text" id="input-0-row-42" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-42">
                  <input type="text" id="input-1-row-42" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-42">
                  <input type="text" id="input-2-row-42" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-42"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-43" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    43
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-43" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-43">
                  <input type="text" id="input-0-row-43" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-43">
                  <input type="text" id="input-1-row-43" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-43">
                  <input type="text" id="input-2-row-43" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-43"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-44" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    44
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-44" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-44">
                  <input type="text" id="input-0-row-44" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-44">
                  <input type="text" id="input-1-row-44" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-44">
                  <input type="text" id="input-2-row-44" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-44"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-45" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    45
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-45" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-45">
                  <input type="text" id="input-0-row-45" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-45">
                  <input type="text" id="input-1-row-45" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-45">
                  <input type="text" id="input-2-row-45" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-45"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-46" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    46
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-46" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-46">
                  <input type="text" id="input-0-row-46" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-46">
                  <input type="text" id="input-1-row-46" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-46">
                  <input type="text" id="input-2-row-46" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-46"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-47" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    47
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-47" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-47">
                  <input type="text" id="input-0-row-47" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-47">
                  <input type="text" id="input-1-row-47" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-47">
                  <input type="text" id="input-2-row-47" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-47"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-48" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    48
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-48" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-48">
                  <input type="text" id="input-0-row-48" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-48">
                  <input type="text" id="input-1-row-48" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-48">
                  <input type="text" id="input-2-row-48" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-48"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-49" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    49
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-49" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-49">
                  <input type="text" id="input-0-row-49" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-49">
                  <input type="text" id="input-1-row-49" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-49">
                  <input type="text" id="input-2-row-49" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-49"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-50" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    50
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-50" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-50">
                  <input type="text" id="input-0-row-50" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-50">
                  <input type="text" id="input-1-row-50" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-50">
                  <input type="text" id="input-2-row-50" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-50"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-51" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    51
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-51" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-51">
                  <input type="text" id="input-0-row-51" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-51">
                  <input type="text" id="input-1-row-51" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-51">
                  <input type="text" id="input-2-row-51" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-51"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-52" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    52
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-52" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-52">
                  <input type="text" id="input-0-row-52" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-52">
                  <input type="text" id="input-1-row-52" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-52">
                  <input type="text" id="input-2-row-52" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-52"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-53" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    53
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-53" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-53">
                  <input type="text" id="input-0-row-53" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-53">
                  <input type="text" id="input-1-row-53" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-53">
                  <input type="text" id="input-2-row-53" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-53"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-54" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    54
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-54" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-54">
                  <input type="text" id="input-0-row-54" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-54">
                  <input type="text" id="input-1-row-54" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-54">
                  <input type="text" id="input-2-row-54" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-54"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-55" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    55
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-55" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-55">
                  <input type="text" id="input-0-row-55" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-55">
                  <input type="text" id="input-1-row-55" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-55">
                  <input type="text" id="input-2-row-55" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-55"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-56" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    56
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-56" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-56">
                  <input type="text" id="input-0-row-56" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-56">
                  <input type="text" id="input-1-row-56" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-56">
                  <input type="text" id="input-2-row-56" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-56"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-57" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    57
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-57" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-57">
                  <input type="text" id="input-0-row-57" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-57">
                  <input type="text" id="input-1-row-57" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-57">
                  <input type="text" id="input-2-row-57" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-57"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-58" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    58
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-58" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-58">
                  <input type="text" id="input-0-row-58" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-58">
                  <input type="text" id="input-1-row-58" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-58">
                  <input type="text" id="input-2-row-58" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-58"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-59" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    59
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-59" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-59">
                  <input type="text" id="input-0-row-59" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-59">
                  <input type="text" id="input-1-row-59" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-59">
                  <input type="text" id="input-2-row-59" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-59"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-60" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    60
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-60" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-60">
                  <input type="text" id="input-0-row-60" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-60">
                  <input type="text" id="input-1-row-60" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-60">
                  <input type="text" id="input-2-row-60" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-60"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-61" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    61
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-61" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-61">
                  <input type="text" id="input-0-row-61" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-61">
                  <input type="text" id="input-1-row-61" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-61">
                  <input type="text" id="input-2-row-61" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-61"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-62" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    62
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-62" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-62">
                  <input type="text" id="input-0-row-62" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-62">
                  <input type="text" id="input-1-row-62" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-62">
                  <input type="text" id="input-2-row-62" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-62"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-63" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    63
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-63" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-63">
                  <input type="text" id="input-0-row-63" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-63">
                  <input type="text" id="input-1-row-63" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-63">
                  <input type="text" id="input-2-row-63" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-63"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-64" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    64
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-64" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-64">
                  <input type="text" id="input-0-row-64" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-64">
                  <input type="text" id="input-1-row-64" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-64">
                  <input type="text" id="input-2-row-64" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-64"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-65" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    65
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-65" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-65">
                  <input type="text" id="input-0-row-65" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-65">
                  <input type="text" id="input-1-row-65" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-65">
                  <input type="text" id="input-2-row-65" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-65"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-66" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    66
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-66" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-66">
                  <input type="text" id="input-0-row-66" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-66">
                  <input type="text" id="input-1-row-66" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-66">
                  <input type="text" id="input-2-row-66" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-66"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-67" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    67
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-67" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-67">
                  <input type="text" id="input-0-row-67" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-67">
                  <input type="text" id="input-1-row-67" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-67">
                  <input type="text" id="input-2-row-67" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-67"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-68" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    68
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-68" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-68">
                  <input type="text" id="input-0-row-68" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-68">
                  <input type="text" id="input-1-row-68" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-68">
                  <input type="text" id="input-2-row-68" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-68"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-69" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    69
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-69" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-69">
                  <input type="text" id="input-0-row-69" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-69">
                  <input type="text" id="input-1-row-69" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-69">
                  <input type="text" id="input-2-row-69" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-69"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-70" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    70
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-70" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-70">
                  <input type="text" id="input-0-row-70" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-70">
                  <input type="text" id="input-1-row-70" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-70">
                  <input type="text" id="input-2-row-70" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-70"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-71" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    71
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-71" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-71">
                  <input type="text" id="input-0-row-71" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-71">
                  <input type="text" id="input-1-row-71" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-71">
                  <input type="text" id="input-2-row-71" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-71"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-72" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    72
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-72" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-72">
                  <input type="text" id="input-0-row-72" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-72">
                  <input type="text" id="input-1-row-72" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-72">
                  <input type="text" id="input-2-row-72" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-72"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-73" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    73
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-73" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-73">
                  <input type="text" id="input-0-row-73" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-73">
                  <input type="text" id="input-1-row-73" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-73">
                  <input type="text" id="input-2-row-73" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-73"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-74" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    74
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-74" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-74">
                  <input type="text" id="input-0-row-74" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-74">
                  <input type="text" id="input-1-row-74" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-74">
                  <input type="text" id="input-2-row-74" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-74"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-75" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    75
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-75" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-75">
                  <input type="text" id="input-0-row-75" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-75">
                  <input type="text" id="input-1-row-75" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-75">
                  <input type="text" id="input-2-row-75" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-75"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-76" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    76
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-76" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-76">
                  <input type="text" id="input-0-row-76" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-76">
                  <input type="text" id="input-1-row-76" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-76">
                  <input type="text" id="input-2-row-76" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-76"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-77" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    77
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-77" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-77">
                  <input type="text" id="input-0-row-77" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-77">
                  <input type="text" id="input-1-row-77" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-77">
                  <input type="text" id="input-2-row-77" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-77"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-78" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    78
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-78" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-78">
                  <input type="text" id="input-0-row-78" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-78">
                  <input type="text" id="input-1-row-78" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-78">
                  <input type="text" id="input-2-row-78" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-78"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-79" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    79
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-79" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-79">
                  <input type="text" id="input-0-row-79" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-79">
                  <input type="text" id="input-1-row-79" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-79">
                  <input type="text" id="input-2-row-79" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-79"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-80" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    80
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-80" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-80">
                  <input type="text" id="input-0-row-80" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-80">
                  <input type="text" id="input-1-row-80" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-80">
                  <input type="text" id="input-2-row-80" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-80"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-81" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    81
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-81" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-81">
                  <input type="text" id="input-0-row-81" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-81">
                  <input type="text" id="input-1-row-81" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-81">
                  <input type="text" id="input-2-row-81" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-81"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-82" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    82
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-82" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-82">
                  <input type="text" id="input-0-row-82" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-82">
                  <input type="text" id="input-1-row-82" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-82">
                  <input type="text" id="input-2-row-82" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-82"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-83" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    83
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-83" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-83">
                  <input type="text" id="input-0-row-83" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-83">
                  <input type="text" id="input-1-row-83" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-83">
                  <input type="text" id="input-2-row-83" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-83"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-84" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    84
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-84" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-84">
                  <input type="text" id="input-0-row-84" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-84">
                  <input type="text" id="input-1-row-84" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-84">
                  <input type="text" id="input-2-row-84" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-84"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-85" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    85
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-85" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-85">
                  <input type="text" id="input-0-row-85" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-85">
                  <input type="text" id="input-1-row-85" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-85">
                  <input type="text" id="input-2-row-85" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-85"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-86" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    86
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-86" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-86">
                  <input type="text" id="input-0-row-86" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-86">
                  <input type="text" id="input-1-row-86" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-86">
                  <input type="text" id="input-2-row-86" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-86"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-87" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    87
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-87" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-87">
                  <input type="text" id="input-0-row-87" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-87">
                  <input type="text" id="input-1-row-87" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-87">
                  <input type="text" id="input-2-row-87" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-87"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-88" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    88
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-88" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-88">
                  <input type="text" id="input-0-row-88" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-88">
                  <input type="text" id="input-1-row-88" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-88">
                  <input type="text" id="input-2-row-88" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-88"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-89" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    89
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-89" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-89">
                  <input type="text" id="input-0-row-89" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-89">
                  <input type="text" id="input-1-row-89" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-89">
                  <input type="text" id="input-2-row-89" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-89"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-90" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    90
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-90" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-90">
                  <input type="text" id="input-0-row-90" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-90">
                  <input type="text" id="input-1-row-90" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-90">
                  <input type="text" id="input-2-row-90" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-90"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-91" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    91
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-91" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-91">
                  <input type="text" id="input-0-row-91" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-91">
                  <input type="text" id="input-1-row-91" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-91">
                  <input type="text" id="input-2-row-91" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-91"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-92" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    92
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-92" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-92">
                  <input type="text" id="input-0-row-92" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-92">
                  <input type="text" id="input-1-row-92" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-92">
                  <input type="text" id="input-2-row-92" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-92"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-93" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    93
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-93" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-93">
                  <input type="text" id="input-0-row-93" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-93">
                  <input type="text" id="input-1-row-93" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-93">
                  <input type="text" id="input-2-row-93" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-93"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-94" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    94
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-94" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-94">
                  <input type="text" id="input-0-row-94" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-94">
                  <input type="text" id="input-1-row-94" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-94">
                  <input type="text" id="input-2-row-94" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-94"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-95" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    95
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-95" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-95">
                  <input type="text" id="input-0-row-95" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-95">
                  <input type="text" id="input-1-row-95" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-95">
                  <input type="text" id="input-2-row-95" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-95"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-96" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    96
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-96" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-96">
                  <input type="text" id="input-0-row-96" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-96">
                  <input type="text" id="input-1-row-96" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-96">
                  <input type="text" id="input-2-row-96" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-96"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-97" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    97
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-97" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-97">
                  <input type="text" id="input-0-row-97" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-97">
                  <input type="text" id="input-1-row-97" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-97">
                  <input type="text" id="input-2-row-97" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-97"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-98" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    98
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-98" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-98">
                  <input type="text" id="input-0-row-98" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-98">
                  <input type="text" id="input-1-row-98" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-98">
                  <input type="text" id="input-2-row-98" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-98"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-99" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    99
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-99" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-99">
                  <input type="text" id="input-0-row-99" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-99">
                  <input type="text" id="input-1-row-99" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-99">
                  <input type="text" id="input-2-row-99" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-99"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                                  <tr id="tr-row-100" class="all-tr jquery-hide" data-check-num="">
              <td>
                                  <div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                    100
                  </div>
                  <input type="text" class="input-all input-number form-control input-sm bolder" id="input-number-row-100" maxlength="3">
                              </td>

                              <td class="input-icon input-icon-right" id="td-0-row-100">
                  <input type="text" id="input-0-row-100" class="input-all input-0 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-1-row-100">
                  <input type="text" id="input-1-row-100" class="input-all input-1 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
                              <td class="input-icon input-icon-right" id="td-2-row-100">
                  <input type="text" id="input-2-row-100" class="input-all input-2 form-control input-sm" maxlength="9">
                  <i class="ace-icon fa fa-check green success hidden"></i>
                  <i class="ace-icon fa fa-times red error hidden"></i>
                </td>
              
              <td class="ac am">
                <a href="#" class="btn-delete" tabindex="-100"><i class="fa fa-times red bigger-175"></i></a>
              </td>
            </tr>
                  </tbody>
        <tfoot>
          <tr class="ac">
            <td colspan="99" id="bet-table-foot" style="position: relative">
              <div class="space-4"></div>

              <div class="form-group clearfix">
                <label for="remark" class="control-label col-xs-4 col-xs-push-1">หมายเหตุ:</label>
                <input type="text" id="remark" class="form-control col-xs-4 col-xs-push-1 max-width-150">
              </div>

              <div class="bigger-150">รวม <span id="bill-sum">0</span> บาท</div>

                            <input type="hidden" name="allow_dupe" value="0" id="allow-dupe">
              <button class="btn btn-primary no-border" id="btn-submit-bet" data-text="ยืนยันการแทง">ยืนยันการแทง</button>
              <button class="btn btn-danger no-border" id="btn-clear-bet">เริ่มต้นใหม่</button>

              <div class="space-4"></div>
            </td>
          </tr>
        </tfoot>
      </table>

      <div class="space-8"></div>

      <div id="failed-table" class="jquery-hide">
        <div>
          <span class="red bigger-120 bolder pull-left">รายการที่แทงไม่ได้</span>
          <a href="#" class="bigger-120 bolder pull-right" id="copy">คัดลอก</a>
        </div>

        <table class="table table-bordered table-border-dark no-margin" id="bet-table">
          <thead class="thin-border-bottom">
            <tr>
              <th class="ac bigger-120">หมายเลข</th>
                              <th class="ac bigger-120">บน</th>
                              <th class="ac bigger-120">ล่าง</th>
                              <th class="ac bigger-120">โต๊ด</th>
                          </tr>
          </thead>

          <tbody></tbody>
        </table>
      </div>

      <div class="space-8"></div>
      <div class="space-8"></div>
    </div>
  </div>
</div>

<script>
    var current_bet_type_group = 1;
  var current_bet_types = {"3":[1,1,1],"2":[1,1,1],"1":[1,1]};
</script>

<script>
  </script>

<div class="col-sm-12 col-md-5 no-padding-left">
  <div class="tabbable">
    <ul class="nav nav-tabs tab-color-blue">
      <li class="active"><a data-toggle="tab" href="#brief">รายการอย่างย่อ</a></li>
      <li><a data-toggle="tab" href="#summary">รายการสรุปรวม</a></li>
      <li><a data-toggle="tab" href="#import-tool" id="tab-import">เครื่องมือนำเข้าข้อมูล</a></li>
    </ul>

    <div class="space-4"></div>

    <div class="tab-content no-border no-padding">
      <div id="brief" class="tab-pane in active">

        <div class="input-group">
          <!-- <span class="input-group-addon"><i class="fa fa-chevron-left"></i></span> -->
          <select id="bill-number"><option value="0">-</option></select>
          <!-- <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span> -->
        </div>

        <div class="space-4"></div>

        <b>
          โพยที่ <span id="bill-id" class="deep-blue"></span>
          เวลา <span id="bill-time" class="deep-blue"></span>
          หมายเหตุ: <span id="bill-remark" class="deep-blue"></span><br>
          อัตราจ่าย <span id="bill-payout" class="deep-blue"></span>
          การแทง <span id="bill-btg-name" class="deep-blue"></span>
        </b>

        <table class="table table-bordered table-border-dark table-striped no-margin" id="brief-table">
          <thead class="thin-border-bottom">
            <tr>
              <!-- <th class="ac">โพย#</th>
              <th class="ac">เวลา</th>
              <th class="ac">อัตราจ่าย</th> -->
              <th class="ac">ประเภท</th>
              <th class="ac">หมายเลข</th>
              <th class="ac bundle-col" style="display: none;">จำนวน<br>(ตัว)</th>
              <th class="ac">จำนวน<br>(บาท)</th>
              <th class="ac">ส่วนลด</th>
              <th class="ac">สถานะ</th>
            </tr>
          </thead>
          <tbody></tbody>
          <tfoot>
            <tr>
              <td class="ac bolder" colspan="2">รวม</td>
              <td class="align-right bolder bundle-col" id="sum-bundle" style="display: none;">0.00</td>
              <td class="align-right bolder" id="sum-qty">0.00</td>
              <td class="align-right bolder" id="sum-com">0.00</td>
              <td class="align-right bolder" id="sum-total">0.00</td>
            </tr>
          </tfoot>
        </table>
      </div>

      <div id="summary" class="tab-pane">
        <b>
          การแทง <span id="bill-sum-table-name" class="deep-blue"></span>
        </b>

        <table class="table table-bordered table-border-dark table-striped no-margin" id="sum-table">
          <thead class="thin-border-bottom">
            <tr>
              <th class="ac">ลำดับ</th>
              <th class="ac">หมายเลข</th>
              <!-- <th class="ac">บน</th>
              <th class="ac">ล่าง</th>
              <th class="ac">โต๊ด</th> -->
            <th class="ac dynamic">บน</th><th class="ac dynamic">ล่าง</th><th class="ac dynamic">โต๊ด</th></tr>
          </thead>
          <tbody></tbody>
          <tfoot>
            <tr>
              <td class="ac bolder" colspan="2">รวม</td>
              <!-- <td class="ac bolder" id="sum-1">0</td>
              <td class="ac bolder" id="sum-2">0</td>
              <td class="ac bolder" id="sum-3">0</td> -->
            <td class="ac bolder dynamic" id="sum-1">0</td><td class="ac bolder dynamic" id="sum-2">0</td><td class="ac bolder dynamic" id="sum-3">0</td></tr>
          </tfoot>
        </table>
      </div>

      <div id="import-tool" class="tab-pane">
        <div class="alert alert-success jquery-hide" id="import-success">นำเข้าเสร็จเรียบร้อย</div>
        <div class="alert alert-danger jquery-hide" id="import-error">ไม่สามารถนำเข้าข้อมูลได้ กรุณาตรวจสอบข้อมูลอีกครั้ง</div>
        <textarea name="import-text" id="import-text" rows="10" class="form-control width-100"></textarea>
        <div class="space-4"></div>
        <div>
          <button class="btn btn-primary btn-sm no-border" id="btn-submit-import">นำเข้าข้อมูล</button>
          <button class="btn btn-danger btn-sm no-border" id="btn-clear-import">ล้างข้อมูล</button>
        </div>
        <div class="space-4"></div>
        <p class="no-margin-bottom">
          <span class="red bolder">ข้อตกลง</span>
          เครื่องมือนำเข้าข้อมูล เป็นเพียงเครื่องมือช่วยในการกรอกข้อมูลลงฟอร์มการแทงเพื่อให้ผู้ใช้งานทำงานได้รวดเร็วขึ้น
          ผู้ใช้ต้องตรวจสอบข้อมูลทุกครั้ง ก่อนยืนยันการแทง วิธีการใช้เครื่องมือนำเข้าข้อมูล
          <a href="/import-help" target="_blank">ดูที่นี่</a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection