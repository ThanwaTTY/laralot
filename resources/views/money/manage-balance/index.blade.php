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

<div class="breadcrumbs">
  <ul id="breadcrumbs" class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <!-- <a href="#">Home</a> -->
    </li>
  <li>
    การเงิน 
    </li>
    <li>						
    จัดการยอด
    </li>
    </ul><!-- /.breadcrumb -->
  <span id="global-clock" class="pull-right"></span>
</div>
<div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
            <h1>
                จัดการยอดค้างชำระ
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        <a href="" class="ajax">3M3K</a>
                    </small>
            </h1>
          </div>



        <div>
        <span class="bigger-120 dark">แสดง</span>
        <select class="user-filter bigger-120" style="">
          <option value="4">ทั้งหมด</option>
          <option value="1" selected="selected">ปกติ</option>
          <option value="2">ระงับ</option>
          <option value="3">ล็อค</option>
        </select>
        <span class="bigger-120 dark">เรียง</span>
        <select class="user-order bigger-120">
          <option value="username_asc" selected="selected">ชื่อสมาชิก ก่อน -&gt; หลัง</option>
          <option value="username_desc">ชื่อสมาชิก หลัง -&gt; ก่อน</option>
          <option value="id_asc">เวลาที่สร้าง ก่อน -&gt; หลัง</option>
          <option value="id_desc">เวลาที่สร้าง หลัง -&gt; ก่อน</option>
        </select>
</div>

<div class="space-8"></div>

<table class="table table-bordered table-border-dark table-auto table-nowrap enable-check-all" id="money-table">
  <thead class="thin-border-bottom">
    <tr>
      <th class="align-center">&nbsp;#&nbsp;</th>
      <th class="align-center">ชื่อผู้ใช้</th>
      <th class="align-center">ระดับ</th>
      <th class="align-center">ชื่อ</th>
      <th class="align-center">เครดิต</th>
      <th class="align-center">แก้ไข</th>
      <th class="align-center">ยอดรวมคงเหลือ</th>
      <th class="align-center"><span class="deep-green">+ฝาก</span> / <span class="deep-red">-ถอน</span></th>
      <th class="align-center">
      <div class="inline checkbox no-margin">
        <label><input class="check-all" name="" type="checkbox" value="0"> <span class="lbl"></span></label>
      </div>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr data-id="9474" class="" data-status="1">
      <!-- <tr data-id="9474"> -->
        <td class="align-center align-middle">1</td>
        <td class="align-center align-middle">3M3K001</td>
        <td class="align-center align-middle">เมมเบอร์</td>
        <td class="align-center align-middle width-120"></td>
        <td class="align-right align-middle width-120" data-credit="0"> 0</td>
        <td class="align-center align-middle action action-credit">
          <span class="main-action main-action-credit">
            <a href="#" class="btn-load btn-load-credit" data-rel="tooltip" data-placement="right" data-original-title="แก้ไขเครดิต"><img src="/img/pencil.png"></a>
          </span>
          <span class="sub-action sub-action-credit jquery-hide">
            <a href="#" class="btn-save btn-save-credit" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
            <a href="#" class="btn-return btn-return-credit" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
          </span>
        </td>
          <td class="align-middle" data-balance="0.00">
          <div class="align-right n2c">0.00</div>
        </td>
          <td class="align-center align-middle action action-balance">
          <span class="main-action main-action-balance">
            <a href="#" class="btn-load btn-load-balance" data-action="deposit" data-rel="tooltip" data-placement="left" data-original-title="ฝากเงิน"><img src="/img/deposit.png"></a>
            <a href="#" class="btn-load btn-load-balance" data-action="withdraw" data-rel="tooltip" data-placement="right" data-original-title="ถอนเงิน"><img src="/img/withdraw.png"></a>
          </span>
          <span class="sub-action sub-action-balance jquery-hide">
            <a href="#" class="btn-save btn-save-balance" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
            <a href="#" class="btn-return btn-return-balance" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
          </span>
          </td>
          <td class="align-center align-middle">
            <div class="inline checkbox no-margin">
              <label>
                  <input class="" name="" type="checkbox" value="9474"> <span class="lbl"></span>
              </label>
            </div>
          </td>
    </tr>
    <tr data-id="10230" class="" data-status="1">
      <!-- <tr data-id="10230"> -->
        <td class="align-center align-middle">2</td>
        <td class="align-center align-middle">3M3K002</td>
        <td class="align-center align-middle">เมมเบอร์</td>
        <td class="align-center align-middle width-120"></td>
        <td class="align-right align-middle width-120" data-credit="0">0</td>
        <td class="align-center align-middle action action-credit">
            <span class="main-action main-action-credit">
              <a href="#" class="btn-load btn-load-credit" data-rel="tooltip" data-placement="right" data-original-title="แก้ไขเครดิต"><img src="/img/pencil.png"></a>
            </span>
            <span class="sub-action sub-action-credit jquery-hide">
              <a href="#" class="btn-save btn-save-credit" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
              <a href="#" class="btn-return btn-return-credit" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
            </span>
          </td>
          <td class="align-middle" data-balance="0.00">
          <div class="align-right n2c">0.00</div>
        </td>
          <td class="align-center align-middle action action-balance">
            <span class="main-action main-action-balance">
              <a href="#" class="btn-load btn-load-balance" data-action="deposit" data-rel="tooltip" data-placement="left" data-original-title="ฝากเงิน"><img src="/img/deposit.png"></a>
              <a href="#" class="btn-load btn-load-balance" data-action="withdraw" data-rel="tooltip" data-placement="right" data-original-title="ถอนเงิน"><img src="/img/withdraw.png"></a>
            </span>
            <span class="sub-action sub-action-balance jquery-hide">
              <a href="#" class="btn-save btn-save-balance" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
              <a href="#" class="btn-return btn-return-balance" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
            </span>
          </td>
          <td class="align-center align-middle">
            <div class="inline checkbox no-margin">
              <label>
                  <input class="" name="" type="checkbox" value="10230"> <span class="lbl"></span>
              </label>
            </div>
          </td>
    </tr>
    <tr data-id="12211" class="" data-status="1">
      <!-- <tr data-id="12211"> -->
        <td class="align-center align-middle">3</td>
        <td class="align-center align-middle">3M3K003</td>
        <td class="align-center align-middle">เมมเบอร์</td>
        <td class="align-center align-middle width-120">003</td>
        <td class="align-right align-middle width-120" data-credit="0">0</td>
        <td class="align-center align-middle action action-credit">
            <span class="main-action main-action-credit">
              <a href="#" class="btn-load btn-load-credit" data-rel="tooltip" data-placement="right" data-original-title="แก้ไขเครดิต"><img src="/img/pencil.png"></a>
            </span>
            <span class="sub-action sub-action-credit jquery-hide">
              <a href="#" class="btn-save btn-save-credit" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
              <a href="#" class="btn-return btn-return-credit" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
            </span>
          </td>
        <td class="align-middle" data-balance="0.00">
          <div class="align-right n2c">0.00</div>
        </td>
        <td class="align-center align-middle action action-balance">
            <span class="main-action main-action-balance">
              <a href="#" class="btn-load btn-load-balance" data-action="deposit" data-rel="tooltip" data-placement="left" data-original-title="ฝากเงิน"><img src="/img/deposit.png"></a>
              <a href="#" class="btn-load btn-load-balance" data-action="withdraw" data-rel="tooltip" data-placement="right" data-original-title="ถอนเงิน"><img src="/img/withdraw.png"></a>
            </span>
            <span class="sub-action sub-action-balance jquery-hide">
              <a href="#" class="btn-save btn-save-balance" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
              <a href="#" class="btn-return btn-return-balance" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
            </span>
          </td>
          <td class="align-center align-middle">
            <div class="inline checkbox no-margin">
              <label>
                  <input class="" name="" type="checkbox" value="12211"> <span class="lbl"></span>
              </label>
            </div>
          </td>
      </tr>
      <tr data-id="11239" class="" data-status="1">
      <!-- <tr data-id="11239"> -->
        <td class="align-center align-middle">4</td>
        <td class="align-center align-middle">3M3KPALM</td>
        <td class="align-center align-middle">เมมเบอร์</td>
        <td class="align-center align-middle width-120">ปัทนพงษ์</td>
        <td class="align-right align-middle width-120" data-credit="0"> 0</td>
        <td class="align-center align-middle action action-credit">
            <span class="main-action main-action-credit">
              <a href="#" class="btn-load btn-load-credit" data-rel="tooltip" data-placement="right" data-original-title="แก้ไขเครดิต"><img src="/img/pencil.png"></a>
            </span>
            <span class="sub-action sub-action-credit jquery-hide">
              <a href="#" class="btn-save btn-save-credit" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
              <a href="#" class="btn-return btn-return-credit" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
            </span>
        </td>
        <td class="align-middle" data-balance="0.00">
          <div class="align-right n2c">0.00</div>
        </td>
        <td class="align-center align-middle action action-balance">
            <span class="main-action main-action-balance">
              <a href="#" class="btn-load btn-load-balance" data-action="deposit" data-rel="tooltip" data-placement="left" data-original-title="ฝากเงิน"><img src="/img/deposit.png"></a>
              <a href="#" class="btn-load btn-load-balance" data-action="withdraw" data-rel="tooltip" data-placement="right" data-original-title="ถอนเงิน"><img src="/img/withdraw.png"></a>
            </span>
            <span class="sub-action sub-action-balance jquery-hide">
              <a href="#" class="btn-save btn-save-balance" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
              <a href="#" class="btn-return btn-return-balance" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
            </span>
          </td>
          <td class="align-center align-middle">
            <div class="inline checkbox no-margin">
              <label>
                  <input class="" name="" type="checkbox" value="11239"> <span class="lbl"></span>
              </label>
            </div>
          </td>
    </tr>
    <tr data-id="11240" class="" data-status="1">
      <!-- <tr data-id="11240"> -->
        <td class="align-center align-middle">5</td>
        <td class="align-center align-middle">3M3KTOR</td>
        <td class="align-center align-middle">เมมเบอร์</td>
        <td class="align-center align-middle width-120">thanwa</td>
        <td class="align-right align-middle width-120" data-credit="0">0</td>
        <td class="align-center align-middle action action-credit">
            <span class="main-action main-action-credit">
              <a href="#" class="btn-load btn-load-credit" data-rel="tooltip" data-placement="right" data-original-title="แก้ไขเครดิต"><img src="/img/pencil.png"></a>
            </span>
            <span class="sub-action sub-action-credit jquery-hide">
              <a href="#" class="btn-save btn-save-credit" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
              <a href="#" class="btn-return btn-return-credit" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
            </span>
        </td>
        <td class="align-middle" data-balance="0.00">
          <div class="align-right n2c">0.00</div>
        </td>
        <td class="align-center align-middle action action-balance">
            <span class="main-action main-action-balance">
              <a href="#" class="btn-load btn-load-balance" data-action="deposit" data-rel="tooltip" data-placement="left" data-original-title="ฝากเงิน"><img src="/img/deposit.png"></a>
              <a href="#" class="btn-load btn-load-balance" data-action="withdraw" data-rel="tooltip" data-placement="right" data-original-title="ถอนเงิน"><img src="/img/withdraw.png"></a>
            </span>
            <span class="sub-action sub-action-balance jquery-hide">
              <a href="#" class="btn-save btn-save-balance" data-rel="tooltip" data-placement="right" data-original-title="บันทึก"><img src="/img/save.png"></a><br><br>
              <a href="#" class="btn-return btn-return-balance" data-rel="tooltip" data-placement="right" data-original-title="ย้อนกลับ"><img src="/img/return.png"></a>
            </span>
        </td>
        <td class="align-center align-middle">
          <div class="inline checkbox no-margin">
            <label>
                <input class="" name="" type="checkbox" value="11240"> <span class="lbl"></span>
            </label>
          </div>
        </td>
      </tr>
      </tbody>

  <tfoot>
      <tr>
          <td colspan="6" class="align-center align-middle bolder">รวม (เฉพาะสมาชิก สถานะปกติ)</td>
          <td class="align-middle align-right sum-pending-balance n2c">0.00</td>
          <td colspan="2" class="align-center">
          <button class="btn btn-primary btn-sm width-100 btn-multi-transfer">โอนเงินที่เลือก</button>
          </td>
      </tr>
  </tfoot>
</table>

<script>
  $.each($('.n2c'), function(key, value) {
    $(this).html(n2c($(this).text()));
  });
  $('[data-rel="tooltip"]').tooltip({'container':'body'});
</script>
</div><!-- /.col -->
        </div><!-- /.row -->
      </div>

 