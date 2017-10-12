@extends('mastermember')
@section('content')
        <div class="col-xs-12 col-sm-12 col-md-10" id="user-content">
            <div class="alert alert-info invert-select-game-hide mobile-bet-hide" id="news">
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

            
            
            <div id="content"><!-- <div class="widget-box widget-color-dark">
    <div class="widget-header">
      <h5 class="widget-title bigger">
        ตัวกรองกลุ่มหวย
      </h5>
    </div>
    <div class="widget-body clearfix">
      <div class="checkbox">
                  <label class="col-xs-3">
            <input type="checkbox" value="1" class="toggle-game-group" data-id="1" checked="checked">
            <span class="lbl">รัฐบาล</span>
          </label>
                  <label class="col-xs-3">
            <input type="checkbox" value="16" class="toggle-game-group" data-id="16" checked="checked">
            <span class="lbl">หวย ธกส.</span>
          </label>
                  <label class="col-xs-3">
            <input type="checkbox" value="2" class="toggle-game-group" data-id="2" checked="checked">
            <span class="lbl">หวยหุ้นไทย</span>
          </label>
                  <label class="col-xs-3">
            <input type="checkbox" value="6" class="toggle-game-group" data-id="6" checked="checked">
            <span class="lbl">หวยลาว</span>
          </label>
                  <label class="col-xs-3">
            <input type="checkbox" value="5" class="toggle-game-group" data-id="5" checked="checked">
            <span class="lbl">หวยมาเลย์ (Magnum4D)</span>
          </label>
                  <label class="col-xs-3">
            <input type="checkbox" value="3" class="toggle-game-group" data-id="3" checked="checked">
            <span class="lbl">หวยหุ้นต่างประเทศ</span>
          </label>
                  <label class="col-xs-3">
            <input type="checkbox" value="15" class="toggle-game-group" data-id="15" checked="checked">
            <span class="lbl">หวยเวียดนาม</span>
          </label>
              </div>
    </div>
  </div> -->

<table class="table table-bordered table-border-dark table-nowrap no-padding-left no-margin-bottom" id="">
  <tbody>
  <tr class="bg-black">
    <th class="align-center white">ประเภทหวย</th>
    <th class="align-center white">งวดประจำวันที่</th>
    <th class="align-center white">เวลาเปิด</th>
    <th class="align-center white">เวลาปิด</th>
    <th class="align-center white">สถานะ</th>
    <th class="align-center white">กติกา</th>
  </tr>
                <tr><td colspan="6" class="bolder bg-blue2">
        รัฐบาล
        <div class="pull-right">
          <a href="#" class="white"><i class="fa fa-minus toggle-game-group" data-id="1"></i></a>
        </div>
      </td>
          <!--
            -->

                    
                    
            </tr><tr class="bg-success" data-href="/games?game_type_id=1" data-game-group-id="1">
        <td>รัฐบาลไทย</td>
                  <td>
            <a href="/home?game_type_id=1" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 16 ตุลาคม 2560
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">11/10</span>
            –
            12:00
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            14:45
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="347678">4 วัน 00:34:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="http://news.sanook.com/lotto/" target="_blank">กติกา</a>
                      </td>
              </tr>
                <tr><td colspan="6" class="bolder bg-blue2">
        หวย ธกส.
        <div class="pull-right">
          <a href="#" class="white"><i class="fa fa-minus toggle-game-group" data-id="16"></i></a>
        </div>
      </td>
          <!--
            -->

      
                    
            </tr><tr class="bg-danger" data-href="/games?game_type_id=39" data-game-group-id="16">
        <td>หวย ธกส. (BAAC1)</td>
                  <td>
            <a href="/home?game_type_id=39" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 16-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            10:15
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/farmer/farmer.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=110" data-game-group-id="16">
        <td>หวย ธกส. (BAAC2)</td>
                  <td>
            <a href="/home?game_type_id=110" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 16-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            10:15
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/rules/farmer/farmer2.html" target="_blank">กติกา</a>
                      </td>
              </tr>
                <tr><td colspan="6" class="bolder bg-blue2">
        หวยหุ้นไทย
        <div class="pull-right">
          <a href="#" class="white"><i class="fa fa-minus toggle-game-group" data-id="2"></i></a>
        </div>
      </td>
          <!--
            -->

      
                    
            </tr><tr class="bg-success" data-href="/games?game_type_id=137" data-game-group-id="2">
        <td>ไทยก่อนปิดเย็น Pre-Close</td>
                  <td>
            <a href="/home?game_type_id=137" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            16:00
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="6578">01:49:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view2.php" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=5" data-game-group-id="2">
        <td>&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเย็น &gt;&gt;&gt;</td>
                  <td>
            <a href="/home?game_type_id=5" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            16:05
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="6878">01:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view2.php" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดเช้า &gt;&gt;&gt;</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดเช้าคู่ 2</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดเช้าคู่ 3</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดเช้าคู่ 4</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดเช้าคู่ 5</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดเช้าคู่ 6</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดเช้าคู่ 7</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดเช้าคู่ 8</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดเช้าคู่ 9</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดเช้าคู่ 10</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเที่ยง &gt;&gt;&gt;</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดบ่าย &gt;&gt;&gt;</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดบ่ายคู่ 2</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดบ่ายคู่ 3</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดบ่ายคู่ 4</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดบ่ายคู่ 5</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดบ่ายคู่ 6</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดบ่ายคู่ 7</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดบ่ายคู่ 8</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดบ่ายคู่ 9</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="2">
        <td>หุ้นไทยเปิดบ่ายคู่ 10</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
                <tr><td colspan="6" class="bolder bg-blue2">
        หวยลาว
        <div class="pull-right">
          <a href="#" class="white"><i class="fa fa-minus toggle-game-group" data-id="6"></i></a>
        </div>
      </td>
          <!--
            -->

      
                    
            </tr><tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="6">
        <td>หวยลาว วันพุธ</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
                <tr><td colspan="6" class="bolder bg-blue2">
        หวยมาเลย์ (Magnum4D)
        <div class="pull-right">
          <a href="#" class="white"><i class="fa fa-minus toggle-game-group" data-id="5"></i></a>
        </div>
      </td>
          <!--
            -->

      
                    
            </tr><tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="5">
        <td>หวยมาเลย์ วันพุธ</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=22" data-game-group-id="5">
        <td>หวยมาเลย์ วันเสาร์</td>
                  <td>
            <a href="/home?game_type_id=22" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 14-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            17:45
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/malaysia/index.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=24" data-game-group-id="5">
        <td>หวยมาเลย์ วันอาทิตย์</td>
                  <td>
            <a href="/home?game_type_id=24" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 15-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            17:45
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="208478">2 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/malaysia/index.html" target="_blank">กติกา</a>
                      </td>
              </tr>
                <tr><td colspan="6" class="bolder bg-blue2">
        หวยหุ้นต่างประเทศ
        <div class="pull-right">
          <a href="#" class="white"><i class="fa fa-minus toggle-game-group" data-id="3"></i></a>
        </div>
      </td>
          <!--
            -->

      
                    
            </tr><tr class="bg-success" data-href="/games?game_type_id=9" data-game-group-id="3">
        <td>ฮั่งเส็ง รอบบ่าย</td>
                  <td>
            <a href="/home?game_type_id=9" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            14:30
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="1178">00:19:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=hang" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=15" data-game-group-id="3">
        <td>หุ้นสิงคโปร์</td>
                  <td>
            <a href="/home?game_type_id=15" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            15:45
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="5678">01:34:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=sgx" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=16" data-game-group-id="3">
        <td>หุ้นอินเดีย</td>
                  <td>
            <a href="/home?game_type_id=16" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            16:30
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="8378">02:19:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=india" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=17" data-game-group-id="3">
        <td>หุ้นอียิปต์</td>
                  <td>
            <a href="/home?game_type_id=17" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            17:50
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="13178">03:39:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=egyp" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=18" data-game-group-id="3">
        <td>หุ้นรัสเซีย</td>
                  <td>
            <a href="/home?game_type_id=18" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            20:05
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="21278">05:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=rts" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=19" data-game-group-id="3">
        <td>หุ้นอังกฤษ</td>
                  <td>
            <a href="/home?game_type_id=19" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            20:10
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="21578">05:59:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=eng" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=20" data-game-group-id="3">
        <td>หุ้นเยอรมัน</td>
                  <td>
            <a href="/home?game_type_id=20" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            22:10
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="28778">07:59:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=dax" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=10" data-game-group-id="3">
        <td>หุ้นดาวน์โจน</td>
                  <td>
            <a href="/home?game_type_id=10" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            12:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            01:40
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="41378">11:29:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=dow" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=6" data-game-group-id="3">
        <td>นิเคอิ รอบเช้า</td>
                  <td>
            <a href="/home?game_type_id=6" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            09:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=nikkei" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=11" data-game-group-id="3">
        <td>หุ้นจีน รอบเช้า</td>
                  <td>
            <a href="/home?game_type_id=11" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            10:05
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=cha" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=7" data-game-group-id="3">
        <td>ฮั่งเส็ง รอบเช้า</td>
                  <td>
            <a href="/home?game_type_id=7" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            10:30
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=hang" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=12" data-game-group-id="3">
        <td>หุ้นไต้หวัน</td>
                  <td>
            <a href="/home?game_type_id=12" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            11:30
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=twse" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=13" data-game-group-id="3">
        <td>หุ้นเกาหลี</td>
                  <td>
            <a href="/home?game_type_id=13" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            12:20
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=krx" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=8" data-game-group-id="3">
        <td>นิเคอิ รอบบ่าย</td>
                  <td>
            <a href="/home?game_type_id=8" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            12:30
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=nikkei" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=14" data-game-group-id="3">
        <td>หุ้นจีน รอบบ่าย</td>
                  <td>
            <a href="/home?game_type_id=14" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            13:30
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/view.php?div=cha" target="_blank">กติกา</a>
                      </td>
              </tr>
                <tr><td colspan="6" class="bolder bg-blue2">
        หวยเวียดนาม
        <div class="pull-right">
          <a href="#" class="white"><i class="fa fa-minus toggle-game-group" data-id="15"></i></a>
        </div>
      </td>
          <!--
            -->

      
                    
            </tr><tr class="bg-success" data-href="/games?game_type_id=73" data-game-group-id="15">
        <td>ฮานอย Hà Nội</td>
                  <td>
            <a href="/home?game_type_id=73" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            18:00
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="13778">03:49:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=82" data-game-group-id="15">
        <td>บิ่ญดิ่ญ Bình Định</td>
                  <td>
            <a href="/home?game_type_id=82" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            16:00
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="6578">01:49:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=83" data-game-group-id="15">
        <td>กว๋างบิ่ญ Quảng Bình</td>
                  <td>
            <a href="/home?game_type_id=83" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            16:00
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="6578">01:49:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=84" data-game-group-id="15">
        <td>กว๋างจิ Quảng Trị</td>
                  <td>
            <a href="/home?game_type_id=84" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            16:00
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="6578">01:49:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=101" data-game-group-id="15">
        <td>อานชาง An Giang</td>
                  <td>
            <a href="/home?game_type_id=101" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            16:00
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="6578">01:49:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=102" data-game-group-id="15">
        <td>บิ่ญถ่วน Bình Thuận</td>
                  <td>
            <a href="/home?game_type_id=102" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            16:00
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="6578">01:49:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-success" data-href="/games?game_type_id=103" data-game-group-id="15">
        <td>เต็ยนิญ Tây Ninh</td>
                  <td>
            <a href="/home?game_type_id=103" class="btn btn-block btn-xs btn-success">
              งวดวันที่ 12-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">12/10</span>
            –
            16:00
          </td>
          <td>
                          <b>ปิดรับใน</b>
                        <span class="countdown" data-seconds="6578">01:49:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=74" data-game-group-id="15">
        <td>คั้ญฮหว่า Khánh Hòa</td>
                  <td>
            <a href="/home?game_type_id=74" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 15-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="208478">2 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=75" data-game-group-id="15">
        <td>กอนตูม Kon Tum</td>
                  <td>
            <a href="/home?game_type_id=75" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 15-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="208478">2 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=76" data-game-group-id="15">
        <td>ฟู้เอียน Phú Yên</td>
                  <td>
            <a href="/home?game_type_id=76" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 16-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="294878">3 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=77" data-game-group-id="15">
        <td>เถื่อเทียน-เว้ Thừa Thiên Huế</td>
                  <td>
            <a href="/home?game_type_id=77" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 16-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="294878">3 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=78" data-game-group-id="15">
        <td>ดั๊กลัก Đắc Lắc</td>
                  <td>
            <a href="/home?game_type_id=78" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 17-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="381278">4 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=79" data-game-group-id="15">
        <td>กว๋างนาม Quảng Nam</td>
                  <td>
            <a href="/home?game_type_id=79" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 17-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="381278">4 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=80" data-game-group-id="15">
        <td>ดานัง Đà Nẵng</td>
                  <td>
            <a href="/home?game_type_id=80" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 14-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=85" data-game-group-id="15">
        <td>ซาลาย Gia Lai</td>
                  <td>
            <a href="/home?game_type_id=85" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=86" data-game-group-id="15">
        <td>นิญถ่วน Ninh Thuận</td>
                  <td>
            <a href="/home?game_type_id=86" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=87" data-game-group-id="15">
        <td>ดั๊กนง Đắc Nông</td>
                  <td>
            <a href="/home?game_type_id=87" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 14-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=88" data-game-group-id="15">
        <td>กว๋างหงาย Quảng Ngãi</td>
                  <td>
            <a href="/home?game_type_id=88" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 14-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=89" data-game-group-id="15">
        <td>เกียนซาง Kiên Giang</td>
                  <td>
            <a href="/home?game_type_id=89" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 15-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="208478">2 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-dark" data-href="/games?game_type_id=" data-game-group-id="15">
        <td>เลิมด่ง Lâm Đồng</td>
                  <td colspan="5" class="align-middle bigger-110">ยังไม่มีงวดถัดไป</td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=91" data-game-group-id="15">
        <td>เตี่ยนซาง Tiền Giang</td>
                  <td>
            <a href="/home?game_type_id=91" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 15-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">15/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="208478">2 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=92" data-game-group-id="15">
        <td>กำเมา Cà Mau</td>
                  <td>
            <a href="/home?game_type_id=92" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 16-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="294878">3 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=93" data-game-group-id="15">
        <td>ด่งท้าบ Đồng Tháp</td>
                  <td>
            <a href="/home?game_type_id=93" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 16-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">16/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="294878">3 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=94" data-game-group-id="15">
        <td>โฮจิมินห์ Thanh pho Ho Chi Minh</td>
                  <td>
            <a href="/home?game_type_id=94" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 14-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=95" data-game-group-id="15">
        <td>บักเลียว Bạc Liêu</td>
                  <td>
            <a href="/home?game_type_id=95" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 17-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="381278">4 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=96" data-game-group-id="15">
        <td>เบ๊นแจ Bến Tre</td>
                  <td>
            <a href="/home?game_type_id=96" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 17-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="381278">4 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=97" data-game-group-id="15">
        <td>หวงเต่า Vũng Tàu</td>
                  <td>
            <a href="/home?game_type_id=97" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 17-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">17/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="381278">4 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=98" data-game-group-id="15">
        <td>เกิ้นเทอ Cần Thơ</td>
                  <td>
            <a href="/home?game_type_id=98" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 18-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">18/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">18/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="467678">5 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=99" data-game-group-id="15">
        <td>ด่งนาย Đồng Nai</td>
                  <td>
            <a href="/home?game_type_id=99" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 18-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">18/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">18/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="467678">5 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=100" data-game-group-id="15">
        <td>ซ้อกจัง Sóc Trăng</td>
                  <td>
            <a href="/home?game_type_id=100" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 18-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">18/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">18/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="467678">5 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=104" data-game-group-id="15">
        <td>บิ่ญเชือง Bình Dương</td>
                  <td>
            <a href="/home?game_type_id=104" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=105" data-game-group-id="15">
        <td>จ่าวิญ Trà Vinh</td>
                  <td>
            <a href="/home?game_type_id=105" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=106" data-game-group-id="15">
        <td>หวิญล็อง Vĩnh Long</td>
                  <td>
            <a href="/home?game_type_id=106" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 13-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">13/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="35678">09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=107" data-game-group-id="15">
        <td>บิ่ญเฟื้อก Bình Phước</td>
                  <td>
            <a href="/home?game_type_id=107" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 14-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=108" data-game-group-id="15">
        <td>เหิ่วชาง Hậu Giang</td>
                  <td>
            <a href="/home?game_type_id=108" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 14-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
          <!--
            -->

      
                    
            <tr class="bg-danger" data-href="/games?game_type_id=109" data-game-group-id="15">
        <td>ล็องอาน Long An</td>
                  <td>
            <a href="/home?game_type_id=109" class="btn btn-block btn-xs btn-primary">
              งวดวันที่ 14-10-2017
            </a>
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            00:05
          </td>
          <td class="align-center">
            <span class="deep-blue">14/10</span>
            –
            16:00
          </td>
          <td>
                          <b>เปิดรับใน</b>
                        <span class="countdown" data-seconds="122078">1 วัน 09:54:38</span>
          </td>
          <td class="align-center bolder">
                          <a class="btn btn-block btn-xs btn-primary" href="https://superlot999.com/vietnam/vietnam.html" target="_blank">กติกา</a>
                      </td>
              </tr>
</tbody></table>

<script>
  clearTimeout(countdownTimeout);
  var countdownTimeout = setTimeout('countdown()', 100);
  function countdown() {
    $('.countdown').each(function(key, val) {
      $(this).attr('data-seconds', $(this).attr('data-seconds') - 1);
      var seconds = $(this).attr('data-seconds');
      if (seconds < 0) {
        setTimeout(function(){location.reload()}, 3000)
        return;
      }
      $(this).text(dateTimeHis(seconds));

      if (seconds < 600) {
        $(this).closest('tr').addClass('blink');
      }
    });

    countdownTimeout = setTimeout('countdown()', 1000);
  }

  function dateTimeHis(seconds) {
    var d = Math.floor(seconds / 86400);
    var h = Math.floor(seconds / 3600 % 24);
    var m = Math.floor(seconds / 60 % 60);
    var s = Math.floor(seconds % 60);

    var format = '';
    if (d != 0)
      format = d + ' วัน ';
    format += withZero(h) + ':' + withZero(m) + ':' + withZero(s);

    return format;
  }
</script>

<style>
  #zczxczxcxz tr th {
    font-size: 16px;
    vertical-align: middle !important;
  }
  #zczxczxcxz tr td {
    font-size: 16px;
    vertical-align: middle !important;
  }
  #zczxczxcxz tr td .btn {
    font-size: 16px;
  }
</style>


<script>
checkGameGroupSetting();
</script>
</div>
@endsection