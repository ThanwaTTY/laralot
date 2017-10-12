@extends('mastermember')
@section('content')
<div class="col-xs-12 no-padding-left">
  <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> อัตราจ่าย - กลุ่มหวย</h3>
  <div class="alert alert-info">
    <b>สูงสุด</b> = สูงสุดต่อ1โพย<br>
    <b>สูงสุดต่อหมายเลข</b> = สูงสุดต่อหมายเลขต่อ1สมาชิก
  </div>

  <table class="table table-nonfluid table-bordered table-border-dark table-nowrap span-detail">
    <thead class="thin-border-bottom">
    <tr>
      <th></th>
              <th>รัฐบาล</th>
              <th>หวย ธกส.</th>
              <th>หวยหุ้นไทย</th>
              <th>หวยลาว</th>
              <th>หวยมาเลย์ (Magnum4D)</th>
              <th>หวยหุ้นต่างประเทศ</th>
              <th>หวยเวียดนาม</th>
          </tr>
    </thead>

    <tbody>
          <tr class="ac am">
        <td class="dark">หวยรัฐ 70</td>
                  <td class="ac am ">
                          <i class="fa fa-check green"></i>
                      </td>
                  <td class="ac am ">
                      </td>
                  <td class="ac am ">
                      </td>
                  <td class="ac am ">
                      </td>
                  <td class="ac am ">
                      </td>
                  <td class="ac am ">
                      </td>
                  <td class="ac am ">
                      </td>
              </tr>
          <tr class="ac am">
        <td class="dark">หวย 70</td>
                  <td class="ac am ">
                      </td>
                  <td class="ac am ">
                          <i class="fa fa-check green"></i>
                      </td>
                  <td class="ac am ">
                          <i class="fa fa-check green"></i>
                      </td>
                  <td class="ac am ">
                          <i class="fa fa-check green"></i>
                      </td>
                  <td class="ac am ">
                          <i class="fa fa-check green"></i>
                      </td>
                  <td class="ac am ">
                          <i class="fa fa-check green"></i>
                      </td>
                  <td class="ac am ">
                          <i class="fa fa-check green"></i>
                      </td>
              </tr>
        </tbody>
  </table>

  <div class="tabbable">
    <ul class="nav nav-tabs tab-color-blue">
                        <li class="active">
            <a data-toggle="tab" href="#bet_type_group_1">3 ตัวท้าย</a>
          </li>
                                                                                                      </ul>
  </div>

  <div class="tab-content no-border no-padding">
          <div class="tab-pane in active" id="bet_type_group_1">
        <div class="space-4"></div>

                            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">3 ตัวท้าย: </span>
            รัฐบาล
          </h3>
           <div class="col-xs-4">
                <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
                    <thead class="thin-border-bottom">
                    <tr class="odd">
                        <th colspan="1">
                        </th>
                        <th colspan="2" class="ac 1">หวยรัฐ 70</th>
                    </tr>
                    <tr class="even">
                    <th>ประเภท</th>
                                    <th class="1">จ่าย</th>
                        <th class="1">ส่วนลด %</th>
                                                </tr>
                    </thead>
                    <tbody>
                                <tr class="odd">
                        <td class="bolder ">3 ตัวบน</td>
                            <td class="ac bg-blue">550</td>
                            <td class="ac bg-blue">33</td>
                                </tr>
                                <tr class="even">
                        <td class="bolder ">3 ตัวล่าง</td>
                <td class="ac bg-blue">125</td>
                            <td class="ac bg-blue">33</td>
                                </tr>
                                <tr class="odd">
                        <td class="bolder ">3 ตัวโต๊ด</td>
                <td class="ac bg-blue">105</td>
                            <td class="ac bg-blue">33</td>
                                </tr>
                                <tr class="even">
                        <td class="bolder ">2 ตัวบน</td>
                <td class="ac bg-blue">70</td>
                            <td class="ac bg-blue">28</td>
                                </tr>
                                <tr class="odd">
                        <td class="bolder ">2 ตัวล่าง</td>
                <td class="ac bg-blue">70</td>
                            <td class="ac bg-blue">28</td>
                                </tr>
                                <tr class="even">
                        <td class="bolder ">2 ตัวโต๊ด</td>
                <td class="ac bg-blue">12</td>
                            <td class="ac bg-blue">28</td>
                                </tr>
                                <tr class="odd">
                        <td class="bolder ">วิ่งบน</td>
                <td class="ac bg-blue">3</td>
                            <td class="ac bg-blue">12</td>
                                </tr>
                                <tr class="even">
                        <td class="bolder ">วิ่งล่าง</td>
                <td class="ac bg-blue">4</td>
                            <td class="ac bg-blue">12</td>
                                </tr>
                                </tbody>
                </table>
          </div>
          <div class="col-xs-12">
          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">3 ตัวท้าย: </span>
            หวยหุ้นไทย, หวยหุ้นต่างประเทศ, หวยมาเลย์ (Magnum4D), หวยลาว, หวยเวียดนาม
          </h3>
          </div>
          <div class="col-xs-4">
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
                              <th colspan="2" class="ac 1">หวย 70</th>
                          </tr>
            <tr class="even">
              <th>ประเภท</th>
                              <th class="1">จ่าย</th>
                <th class="1">ส่วนลด %</th>
                                          </tr>
            </thead>
            <tbody>
                          <tr class="odd">
                <td class="bolder ">3 ตัวบน</td>
                                                                                            <td class="ac bg-blue">550</td>
                      <td class="ac bg-blue">33</td>
                                                                                                            </tr>
                          <tr class="even">
                <td class="bolder ">3 ตัวล่าง</td>
                                                                                            <td class="ac bg-blue">1</td>
                      <td class="ac bg-blue">0</td>
                                                                                                            </tr>
                          <tr class="odd">
                <td class="bolder ">3 ตัวโต๊ด</td>
                                                                                            <td class="ac bg-blue">105</td>
                      <td class="ac bg-blue">33</td>
                                                                                                            </tr>
                          <tr class="even">
                <td class="bolder ">2 ตัวบน</td>
                                                                                            <td class="ac bg-blue">70</td>
                      <td class="ac bg-blue">28</td>
                                                                                                            </tr>
                          <tr class="odd">
                <td class="bolder ">2 ตัวล่าง</td>
                                                                                            <td class="ac bg-blue">70</td>
                      <td class="ac bg-blue">28</td>
                                                                                                            </tr>
                          <tr class="even">
                <td class="bolder ">2 ตัวโต๊ด</td>
                                                                                            <td class="ac bg-blue">12</td>
                      <td class="ac bg-blue">28</td>
                                                                                                            </tr>
                          <tr class="odd">
                <td class="bolder ">วิ่งบน</td>
                                                                                            <td class="ac bg-blue">3</td>
                      <td class="ac bg-blue">12</td>
                                                                                                            </tr>
                          <tr class="even">
                <td class="bolder ">วิ่งล่าง</td>
                                                                                            <td class="ac bg-blue">4</td>
                      <td class="ac bg-blue">12</td>
                                                                                                            </tr>
                        </tbody>
          </table>
          </div>
          <div class="col-xs-12">
                            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">3 ตัวท้าย: </span>
            หวย ธกส.
          </h3>
          </div>
          <div class="col-xs-4">
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
                              <th colspan="2" class="ac 1">หวย 70</th>
                          </tr>
            <tr class="even">
              <th>ประเภท</th>
                              <th class="1">จ่าย</th>
                <th class="1">ส่วนลด %</th>
                                          </tr>
            </thead>
            <tbody>
                          <tr class="odd">
                <td class="bolder ">3 ตัวบน</td>
                                                                                            <td class="ac bg-blue">550</td>
                      <td class="ac bg-blue">33</td>
                                                                                                            </tr>
                          <tr class="even">
                <td class="bolder ">3 ตัวล่าง</td>
                                                                                            <td class="ac bg-blue">1</td>
                      <td class="ac bg-blue">0</td>
                                                                                                            </tr>
                          <tr class="odd">
                <td class="bolder ">3 ตัวโต๊ด</td>
                                                                                            <td class="ac bg-blue">105</td>
                      <td class="ac bg-blue">33</td>
                                                                                                            </tr>
                          <tr class="even">
                <td class="bolder ">2 ตัวบน</td>
                                                                                            <td class="ac bg-blue">70</td>
                      <td class="ac bg-blue">28</td>
                                                                                                            </tr>
                          <tr class="odd">
                <td class="bolder ">2 ตัวล่าง</td>
                                                                                            <td class="ac bg-blue">70</td>
                      <td class="ac bg-blue">28</td>
                                                                                                            </tr>
                          <tr class="even">
                <td class="bolder ">2 ตัวโต๊ด</td>
                                                                                            <td class="ac bg-blue">12</td>
                      <td class="ac bg-blue">28</td>
                                                                                                            </tr>
                          <tr class="odd">
                <td class="bolder ">วิ่งบน</td>
                                                                                            <td class="ac bg-blue">3</td>
                      <td class="ac bg-blue">12</td>
                                                                                                            </tr>
                          <tr class="even">
                <td class="bolder ">วิ่งล่าง</td>
                                                                                            <td class="ac bg-blue">4</td>
                      <td class="ac bg-blue">12</td>
                                                                                                            </tr>
                        </tbody>
          </table>
          </div>
        <div class="col-xs-12">
        <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> <span class="deep-blue">3 ตัวท้าย
            : </span> การแทงหวย</h3>
        </div>
        <div class="col-xs-4">
        <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
          <thead class="thin-border-bottom">
          <tr class="odd">
            <th colspan="1"></th>
            <th colspan="3" class="ac">3 ตัวท้าย</th>
          </tr>
          <tr class="even">
            <th>ประเภท</th>
            <th>แทงขั้นต่ำ</th>
            <th>แทงสูงสุด</th>
            <th>สูงสุดต่อเลข</th>
          </tr>
          </thead>
          <tbody>
                      <tr class="odd">
              <td class="bolder ">3 ตัวบน</td>
                                                <td class="ac bg-blue">5</td>
                                                                <td class="ac bg-blue">3,000</td>
                                                                <td class="ac bg-blue">10,000</td>
                                          </tr>
                      <tr class="even">
              <td class="bolder ">3 ตัวล่าง</td>
                                                <td class="ac bg-blue">5</td>
                                                                <td class="ac bg-blue">3,000</td>
                                                                <td class="ac bg-blue">100,000</td>
                                          </tr>
                      <tr class="odd">
              <td class="bolder ">3 ตัวโต๊ด</td>
                                                <td class="ac bg-blue">5</td>
                                                                <td class="ac bg-blue">3,000</td>
                                                                <td class="ac bg-blue">30,000</td>
                                          </tr>
                      <tr class="even">
              <td class="bolder ">2 ตัวบน</td>
                                                <td class="ac bg-blue">5</td>
                                                                <td class="ac bg-blue">10,000</td>
                                                                <td class="ac bg-blue">100,000</td>
                                          </tr>
                      <tr class="odd">
              <td class="bolder ">2 ตัวล่าง</td>
                                                <td class="ac bg-blue">5</td>
                                                                <td class="ac bg-blue">10,000</td>
                                                                <td class="ac bg-blue">100,000</td>
                                          </tr>
                      <tr class="even">
              <td class="bolder ">2 ตัวโต๊ด</td>
                                                <td class="ac bg-blue">5</td>
                                                                <td class="ac bg-blue">10,000</td>
                                                                <td class="ac bg-blue">100,000</td>
                                          </tr>
                      <tr class="odd">
              <td class="bolder ">วิ่งบน</td>
                                                <td class="ac bg-blue">5</td>
                                                                <td class="ac bg-blue">100,000</td>
                                                                <td class="ac bg-blue">300,000</td>
                                          </tr>
                      <tr class="even">
              <td class="bolder ">วิ่งล่าง</td>
                                                <td class="ac bg-blue">5</td>
                                                                <td class="ac bg-blue">100,000</td>
                                                                <td class="ac bg-blue">300,000</td>
                                          </tr>
                    </tbody>
        </table>
        </div>
      </div>

         
    <div class="col-xs-12">
        <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> รหัสผ่าน</h3>
    </div>
    <div class="col-xs-5">
    <form method="POST" action="" accept-charset="UTF-8" id="update-password-form" class="form-inline" autocomplete="off"><input name="_token" type="hidden" value="cxI7HPVE7hzMRArEEbzg8TH6cKD80y3OY5qZ6zkK">

    <table class="table table-bordered table-border-dark table-auto table-nowrap">
      <tbody><tr>
        <td class="align-middle">
          <label for="old_password" class="control-label bolder">รหัสผ่านเดิม</label>
        </td>
        <td>
          <input class="form-control" id="old-password" name="old_password" type="password" value="">
        </td>
      </tr>

      <tr>
        <td class="align-middle">
          <label for="new_password" class="control-label bolder">รหัสผ่านใหม่</label>
        </td>
        <td>
          <input class="form-control" id="new-password" name="new_password" type="password" value="">
        </td>
      </tr>

      <tr>
        <td class="align-middle">
          <label for="new_password2" class="control-label bolder">รหัสผ่านใหม่ อีกครั้ง</label>
        </td>
        <td>
          <input class="form-control" id="new-password2" name="new_password2" type="password" value="">
        </td>
      </tr>

      <tr>
        <td colspan="2" class="ac">
          <button class="btn btn-primary" id="btn-update-agent-password">เปลี่ยนรหัสผ่าน</button>
        </td>
      </tr>
    </tbody></table>
  
  </form>
  </div>
</div>
@endsection