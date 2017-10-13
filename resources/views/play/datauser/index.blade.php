@extends('mastermember')
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
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
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
            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">3 ตัวท้าย: </span>
            หวยหุ้นไทย, หวยหุ้นต่างประเทศ, หวยมาเลย์ (Magnum4D), หวยลาว, หวยเวียดนาม
          </h3>
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
            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">3 ตัวท้าย: </span>
            หวย ธกส.
          </h3>
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
        
        <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> <span class="deep-blue">3 ตัวท้าย
            : </span> การแทงหวย</h3>

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
      <div class="tab-pane " id="bet_type_group_2">
        <div class="space-4"></div>
            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">3 ตัวหัว: </span>
            รัฐบาล
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
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
              <td class="bolder bg-dark">3 ตัวล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
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
              <td class="bolder bg-dark">2 ตัวล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
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
              <td class="bolder bg-dark">วิ่งล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
            </tr>
            </tbody>
          </table>
            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">3 ตัวหัว: </span>
            หวยหุ้นไทย, หวยหุ้นต่างประเทศ, หวยมาเลย์ (Magnum4D), หวยลาว, หวยเวียดนาม
          </h3>
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
                <td class="bolder bg-dark">3 ตัวล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
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
                <td class="bolder bg-dark">2 ตัวล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
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
                <td class="bolder bg-dark">วิ่งล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
            </tr>
          </tbody>
          </table>
            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">3 ตัวหัว: </span>
            หวย ธกส.
          </h3>
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
                <td class="bolder bg-dark">3 ตัวล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
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
                <td class="bolder bg-dark">2 ตัวล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
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
                <td class="bolder bg-dark">วิ่งล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
            </tbody>
          </table>
        
        <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> <span class="deep-blue">3 ตัวหัว
            : </span> การแทงหวย</h3>
        <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
          <thead class="thin-border-bottom">
          <tr class="odd">
            <th colspan="1"></th>
            <th colspan="3" class="ac">3 ตัวหัว</th>
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
              <td class="bolder bg-dark">3 ตัวล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
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
              <td class="bolder bg-dark">2 ตัวล่าง</td>
                        <td class="bg-dark"></td>
                                        <td class="bg-dark"></td>
                                        <td class="bg-dark"></td>
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
              <td class="ac bg-blue">200,000</td>
            </tr>
            <tr class="even">
              <td class="bolder bg-dark">วิ่งล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
            </tr>
          </tbody>
        </table>
      </div>
          <div class="tab-pane " id="bet_type_group_3">
            <div class="space-4"></div>
                            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">2 ตัวท้าย (หวยตัว): </span>
            รัฐบาล
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
              <th colspan="3" class="ac 1">หวยรัฐ 70</th>
            </tr>
            <tr class="even">
              <th>ประเภท</th>
              <th class="1">จ่าย</th>
              <th class="1">ส่วนลด %</th>
              <th class="1">ราคาต่อตัว</th>
            </tr>
            </thead>
            <tbody>
              <tr class="odd">
                <td class="bolder bg-dark">3 ตัวบน</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                <td class="bolder bg-dark">3 ตัวล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                <td class="bolder bg-dark">3 ตัวโต๊ด</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                <td class="bolder ">2 ตัวบน</td>
                <td class="ac bg-blue">1000</td>
                <td class="ac bg-blue">27</td>
                <td class="ac bg-blue">14</td>
              </tr>
              <tr class="odd">
                <td class="bolder ">2 ตัวล่าง</td>
                <td class="ac bg-blue">1000</td>
                <td class="ac bg-blue">27</td>
                <td class="ac bg-blue">14</td>
              </tr>
              <tr class="even">
                <td class="bolder bg-dark">2 ตัวโต๊ด</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                 <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                <td class="bolder bg-dark">วิ่งบน</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                <td class="bolder bg-dark">วิ่งล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
            </tbody>
          </table>
          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">2 ตัวท้าย (หวยตัว): </span>
            หวยหุ้นไทย, หวยหุ้นต่างประเทศ, หวยมาเลย์ (Magnum4D), หวยลาว, หวยเวียดนาม
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
              <th colspan="3" class="ac 1">หวย 70</th>
            </tr>
            <tr class="even">
              <th>ประเภท</th>
              <th class="1">จ่าย</th>
              <th class="1">ส่วนลด %</th>
              <th class="1">ราคาต่อตัว</th>
            </tr>
            </thead>
            <tbody>
            <tr class="odd">
                <td class="bolder bg-dark">3 ตัวบน</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
            <tr class="even">
                <td class="bolder bg-dark">3 ตัวล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                <td class="bolder bg-dark">3 ตัวโต๊ด</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                <td class="bolder ">2 ตัวบน</td>
                <td class="ac bg-blue">1000</td>
                <td class="ac bg-blue">27</td>
                <td class="ac bg-blue">14</td>
              </tr>
              <tr class="odd">
                <td class="bolder ">2 ตัวล่าง</td>
                <td class="ac bg-blue">1000</td>
                <td class="ac bg-blue">27</td>
                <td class="ac bg-blue">14</td>
              </tr>
              <tr class="even">
                <td class="bolder bg-dark">2 ตัวโต๊ด</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                <td class="bolder bg-dark">วิ่งบน</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                <td class="bolder bg-dark">วิ่งล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
              </tr>
            </tbody>
          </table>
          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">2 ตัวท้าย (หวยตัว): </span>
            หวย ธกส.
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
              <th colspan="3" class="ac 1">หวย 70</th>
            </tr>
            <tr class="even">
              <th>ประเภท</th>
                <th class="1">จ่าย</th>
                <th class="1">ส่วนลด %</th>
                <th class="1">ราคาต่อตัว</th>
            </tr>
            </thead>
            <tbody>
              <tr class="odd">
                      <td class="bolder bg-dark">3 ตัวบน</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder bg-dark">3 ตัวล่าง</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                      <td class="bolder bg-dark">3 ตัวโต๊ด</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder ">2 ตัวบน</td>
                      <td class="ac bg-blue">1000</td>
                      <td class="ac bg-blue">27</td>
                      <td class="ac bg-blue">14</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">2 ตัวล่าง</td>
                      <td class="ac bg-blue">1000</td>
                      <td class="ac bg-blue">27</td>
                      <td class="ac bg-blue">14</td>
              </tr>
              <tr class="even">
                      <td class="bolder bg-dark">2 ตัวโต๊ด</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                      <td class="bolder bg-dark">วิ่งบน</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder bg-dark">วิ่งล่าง</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
            </tbody>
          </table>
        
        <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> <span class="deep-blue">2 ตัวท้าย (หวยตัว)
            : </span> การแทงหวย</h3>

        <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
          <thead class="thin-border-bottom">
          <tr class="odd">
            <th colspan="1"></th>
            <th colspan="3" class="ac">2 ตัวท้าย (หวยตัว)</th>
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
              <td class="bolder bg-dark">3 ตัวบน</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="even">
              <td class="bolder bg-dark">3 ตัวล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="odd">
              <td class="bolder bg-dark">3 ตัวโต๊ด</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="even">
              <td class="bolder ">2 ตัวบน</td>
              <td class="ac bg-blue">0</td>
              <td class="ac bg-blue">0</td>
              <td class="ac bg-blue">0</td>
          </tr>
          <tr class="odd">
              <td class="bolder ">2 ตัวล่าง</td>
              <td class="ac bg-blue">0</td>
              <td class="ac bg-blue">0</td>
              <td class="ac bg-blue">0</td>
          </tr>
          <tr class="even">
              <td class="bolder bg-dark">2 ตัวโต๊ด</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="odd">
              <td class="bolder bg-dark">วิ่งบน</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="even">
              <td class="bolder bg-dark">วิ่งล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
        </tbody>
        </table>
      </div>
          <div class="tab-pane " id="bet_type_group_4">
            <div class="space-4"></div>

            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">2 ตัวหัว (หวยตัว): </span>
            รัฐบาล
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
              <th colspan="3" class="ac 1">หวยรัฐ 70</th>
            </tr>
            <tr class="even">
              <th>ประเภท</th>
              <th class="1">จ่าย</th>
              <th class="1">ส่วนลด %</th>
              <th class="1">ราคาต่อตัว</th>
            </tr>
            </thead>
            <tbody>
              <tr class="odd">
                      <td class="bolder bg-dark">3 ตัวบน</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder bg-dark">3 ตัวล่าง</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                      <td class="bolder bg-dark">3 ตัวโต๊ด</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder ">2 ตัวบน</td>
                      <td class="ac bg-blue">1000</td>
                      <td class="ac bg-blue">27</td>
                      <td class="ac bg-blue">14</td>
              </tr>
              <tr class="odd">
                      <td class="bolder bg-dark">2 ตัวล่าง</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>   
              <tr class="even">
                      <td class="bolder bg-dark">2 ตัวโต๊ด</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                      <td class="bolder bg-dark">วิ่งบน</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder bg-dark">วิ่งล่าง</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
            </tbody>
          </table>
            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">2 ตัวหัว (หวยตัว): </span>
            หวยหุ้นไทย, หวยหุ้นต่างประเทศ, หวยมาเลย์ (Magnum4D), หวยลาว, หวยเวียดนาม
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
              <th colspan="3" class="ac 1">หวย 70</th>
              </tr>
            <tr class="even">
              <th>ประเภท</th>
              <th class="1">จ่าย</th>
              <th class="1">ส่วนลด %</th>
              <th class="1">ราคาต่อตัว</th>
            </tr>
            </thead>
            <tbody>
              <tr class="odd">
                      <td class="bolder bg-dark">3 ตัวบน</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder bg-dark">3 ตัวล่าง</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                      <td class="bolder bg-dark">3 ตัวโต๊ด</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder ">2 ตัวบน</td>
                      <td class="ac bg-blue">1000</td>
                      <td class="ac bg-blue">27</td>
                      <td class="ac bg-blue">14</td>
              </tr>
              <tr class="odd">
                      <td class="bolder bg-dark">2 ตัวล่าง</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder bg-dark">2 ตัวโต๊ด</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="odd">
                      <td class="bolder bg-dark">วิ่งบน</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
              <tr class="even">
                      <td class="bolder bg-dark">วิ่งล่าง</td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
                      <td class="bg-dark"></td>
              </tr>
            </tbody>
          </table>
            <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">2 ตัวหัว (หวยตัว): </span>
            หวย ธกส.
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
              <th colspan="3" class="ac 1">หวย 70</th>
            </tr>
            <tr class="even">
              <th>ประเภท</th>
              <th class="1">จ่าย</th>
              <th class="1">ส่วนลด %</th>
              <th class="1">ราคาต่อตัว</th>
            </tr>
            </thead>
            <tbody>
            <tr class="odd">
                <td class="bolder bg-dark">3 ตัวบน</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
            </tr>
            <tr class="even">
                <td class="bolder bg-dark">3 ตัวล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
            </tr>
            <tr class="odd">
                <td class="bolder bg-dark">3 ตัวโต๊ด</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
            </tr>
            <tr class="even">
                <td class="bolder ">2 ตัวบน</td>
                <td class="ac bg-blue">1000</td>
                <td class="ac bg-blue">27</td>
                <td class="ac bg-blue">14</td>
            </tr>
            <tr class="odd">
                <td class="bolder bg-dark">2 ตัวล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
            </tr>
            <tr class="even">
                <td class="bolder bg-dark">2 ตัวโต๊ด</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
            </tr>
            <tr class="odd">
                <td class="bolder bg-dark">วิ่งบน</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
            </tr>
            <tr class="even">
                <td class="bolder bg-dark">วิ่งล่าง</td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
                <td class="bg-dark"></td>
            </tr>
          </tbody>
          </table>
        
        <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> <span class="deep-blue">2 ตัวหัว (หวยตัว)
            : </span> การแทงหวย</h3>
        <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
          <thead class="thin-border-bottom">
          <tr class="odd">
            <th colspan="1"></th>
            <th colspan="3" class="ac">2 ตัวหัว (หวยตัว)</th>
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
              <td class="bolder bg-dark">3 ตัวบน</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="even">
              <td class="bolder bg-dark">3 ตัวล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="odd">
              <td class="bolder bg-dark">3 ตัวโต๊ด</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="even">
              <td class="bolder ">2 ตัวบน</td>
              <td class="ac bg-blue">0</td>
              <td class="ac bg-blue">0</td>
              <td class="ac bg-blue">0</td>
          </tr>
          <tr class="odd">
              <td class="bolder bg-dark">2 ตัวล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="even">
              <td class="bolder bg-dark">2 ตัวโต๊ด</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="odd">
              <td class="bolder bg-dark">วิ่งบน</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
          <tr class="even">
              <td class="bolder bg-dark">วิ่งล่าง</td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
              <td class="bg-dark"></td>
          </tr>
        </tbody>
        </table>
      </div>
          <div class="tab-pane " id="bet_type_group_5">
        <div class="space-4"></div>

          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">สูง-ต่ำ: </span>
            รัฐบาล
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
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
                      <td class="bolder ">หลักแสน</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหมื่น</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักพัน</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักร้อย</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักสิบ</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหน่วย</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
            </tbody>
          </table>
          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">สูง-ต่ำ: </span>
            หวยหุ้นไทย, หวยหุ้นต่างประเทศ, หวยมาเลย์ (Magnum4D), หวยลาว, หวยเวียดนาม
          </h3>
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
                      <td class="bolder ">หลักแสน</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหมื่น</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักพัน</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักร้อย</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักสิบ</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหน่วย</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
            </tbody>
          </table>
          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">สูง-ต่ำ: </span>
            หวย ธกส.
          </h3>
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
                      <td class="bolder ">หลักแสน</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหมื่น</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักพัน</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักร้อย</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักสิบ</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหน่วย</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
            </tbody>
          </table>
        
        <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> <span class="deep-blue">สูง-ต่ำ
            : </span> การแทงหวย</h3>

        <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
          <thead class="thin-border-bottom">
          <tr class="odd">
            <th colspan="1"></th>
            <th colspan="3" class="ac">สูง-ต่ำ</th>
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
                        <td class="bolder ">หลักแสน</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="even">
                        <td class="bolder ">หลักหมื่น</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="odd">
                        <td class="bolder ">หลักพัน</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="even">
                        <td class="bolder ">หลักร้อย</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="odd">
                        <td class="bolder ">หลักสิบ</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="even">
                        <td class="bolder ">หลักหน่วย</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
              </tbody>
        </table>
      </div>
          <div class="tab-pane " id="bet_type_group_6">
            <div class="space-4"></div>

          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">คู่-คี่: </span>
            รัฐบาล
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
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
                      <td class="bolder ">หลักแสน</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหมื่น</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักพัน</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักร้อย</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักสิบ</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหน่วย</td>
                      <td class="ac bg-blue">1.9</td>
                      <td class="ac bg-blue">3</td>
              </tr>
            </tbody>
          </table>
          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">คู่-คี่: </span>
            หวยหุ้นไทย, หวยหุ้นต่างประเทศ, หวยมาเลย์ (Magnum4D), หวยลาว, หวยเวียดนาม
          </h3>
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
                      <td class="bolder ">หลักแสน</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
            </tr>
            <tr class="even">
                      <td class="bolder ">หลักหมื่น</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
          </tr>
          <tr class="odd">
                      <td class="bolder ">หลักพัน</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
          </tr>
          <tr class="even">
                      <td class="bolder ">หลักร้อย</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
          </tr>
          <tr class="odd">
                      <td class="bolder ">หลักสิบ</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
          </tr>
          <tr class="even">
                      <td class="bolder ">หลักหน่วย</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
          </tr>
          </tbody>
          </table>
          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">คู่-คี่: </span>
            หวย ธกส.
          </h3>
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
                      <td class="bolder ">หลักแสน</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหมื่น</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักพัน</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักร้อย</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">หลักสิบ</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">หลักหน่วย</td>
                      <td class="ac bg-blue">1.85</td>
                      <td class="ac bg-blue">3</td>
              </tr>
            </tbody>
          </table>
        
        <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> <span class="deep-blue">คู่-คี่
            : </span> การแทงหวย</h3>

        <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
          <thead class="thin-border-bottom">
          <tr class="odd">
            <th colspan="1"></th>
            <th colspan="3" class="ac">คู่-คี่</th>
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
                        <td class="bolder ">หลักแสน</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="even">
                        <td class="bolder ">หลักหมื่น</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="odd">
                        <td class="bolder ">หลักพัน</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="even">
                        <td class="bolder ">หลักร้อย</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="odd">
                        <td class="bolder ">หลักสิบ</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
                  <tr class="even">
                        <td class="bolder ">หลักหน่วย</td>
                        <td class="ac bg-blue">50</td>
                        <td class="ac bg-blue">999,999,999</td>
                        <td class="ac bg-blue">999,999,999</td>
                  </tr>
            </tbody>
        </table>
      </div>
          <div class="tab-pane " id="bet_type_group_7">
            <div class="space-4"></div>

          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">4-5-6 ตัวตรง: </span>
            รัฐบาล
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="odd">
              <th colspan="1"></th>
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
                      <td class="bolder ">4 ตัวตรง</td>
                      <td class="ac bg-blue">5000</td>
                      <td class="ac bg-blue">0</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">5 ตัวตรง</td>
                      <td class="ac bg-blue">50000</td>
                      <td class="ac bg-blue">0</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">6 ตัวตรง</td>
                      <td class="ac bg-blue">400000</td>
                      <td class="ac bg-blue">0</td>
              </tr>
            </tbody>
          </table>
          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">4-5-6 ตัวตรง: </span>
            หวยหุ้นไทย, หวยหุ้นต่างประเทศ, หวยมาเลย์ (Magnum4D), หวยลาว, หวยเวียดนาม
          </h3>
          <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
            <thead class="thin-border-bottom">
            <tr class="even">
              <th colspan="1"></th>
              <th colspan="2" class="ac 1">หวย 70</th>
            </tr>
            <tr class="odd">
              <th>ประเภท</th>
              <th class="1">จ่าย</th>
              <th class="1">ส่วนลด %</th>
            </tr>
            </thead>
            <tbody>
              <tr class="even">
                      <td class="bolder ">4 ตัวตรง</td>
                      <td class="ac bg-blue">5000</td>
                      <td class="ac bg-blue">0</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">5 ตัวตรง</td>
                      <td class="ac bg-blue">50000</td>
                      <td class="ac bg-blue">0</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">6 ตัวตรง</td>
                      <td class="ac bg-blue">400000</td>
                      <td class="ac bg-blue">0</td>
              </tr>
            </tbody>
          </table>
          <h3 class="no-margin-top">
            <i class="fa fa-angle-right blue"></i>
            <span class="deep-blue">4-5-6 ตัวตรง: </span>
            หวย ธกส.
          </h3>
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
                      <td class="bolder ">4 ตัวตรง</td>
                      <td class="ac bg-blue">5000</td>
                      <td class="ac bg-blue">0</td>
              </tr>
              <tr class="even">
                      <td class="bolder ">5 ตัวตรง</td>
                      <td class="ac bg-blue">50000</td>
                      <td class="ac bg-blue">0</td>
              </tr>
              <tr class="odd">
                      <td class="bolder ">6 ตัวตรง</td>
                      <td class="ac bg-blue">400000</td>
                      <td class="ac bg-blue">0</td>
              </tr>
            </tbody>
          </table>
        
        <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> <span class="deep-blue">4-5-6 ตัวตรง
            : </span> การแทงหวย</h3>

        <table class="table table-bordered table-border-dark table-auto table-nowrap" id="payout-table">
          <thead class="thin-border-bottom">
          <tr class="even">
            <th colspan="1"></th>
            <th colspan="3" class="ac">4-5-6 ตัวตรง</th>
          </tr>
          <tr class="odd">
            <th>ประเภท</th>
            <th>แทงขั้นต่ำ</th>
            <th>แทงสูงสุด</th>
            <th>สูงสุดต่อเลข</th>
          </tr>
          </thead>
          <tbody>
                  <tr class="even">
                        <td class="bolder ">4 ตัวตรง</td>
                        <td class="ac bg-blue">10</td>
                        <td class="ac bg-blue">1,000</td>
                        <td class="ac bg-blue">10,000</td>
                  </tr>
                  <tr class="odd">
                        <td class="bolder ">5 ตัวตรง</td>
                        <td class="ac bg-blue">10</td>
                        <td class="ac bg-blue">1,000</td>
                        <td class="ac bg-blue">10,000</td>
                  </tr>
                  <tr class="even">
                        <td class="bolder ">6 ตัวตรง</td>
                        <td class="ac bg-blue">10</td>
                        <td class="ac bg-blue">1,000</td>
                        <td class="ac bg-blue">10,000</td>
                  </tr>
          </tbody>
        </table>
      </div>
      </div>

      <h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> รหัสผ่าน</h3>
    <form method="POST" action="https://www.superlot999.com/password" accept-charset="UTF-8" id="update-password-form" class="form-inline" autocomplete="off"><input name="_token" type="hidden" value="H6JCgEaryGkgYHhfRPBTg3kpHilBM29OxaJnuYHY">

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

<script>
  var i = 0;
  $('#payout-table tr').each(function () {
    $(this).addClass(i % 2 == 0 ? 'odd' : 'even');
    i++;
  })
</script>
</div>
@endsection
