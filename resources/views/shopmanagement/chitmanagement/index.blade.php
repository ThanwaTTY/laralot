    
        
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
					
					จัดการหน้าร้าน

					
				</li><li>
			 จัดการโพย
		</li></ul><!-- /.breadcrumb -->

  <span id="global-clock" class="pull-right"></span>
</div>

<div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
  <h1>
    จัดการโพย
  </h1>
</div>



<h3><i class="fa fa-angle-right blue"></i> ค้นหาโพยด้วยรหัส</h3>

<form method="GET" action="https://agent.superlot999.com/shop/bills" accept-charset="UTF-8" class="clearfix" id="form-search-bill" autocomplete="off">
  <div class="form-group max-width-150 pull-left">
    <input type="text" name="bill_id" id="bill_id" class="form-control" placeholder="รหัสโพย">
  </div>
  <div class="form-group pull-left left-padding-10">
    <button type="submit" class="btn btn-primary btn-sm">ค้นหา</button>
  </div>
</form>

<script>
  $('#bill_id').focus();
</script>

<h3 class="no-margin-top"><i class="fa fa-angle-right blue"></i> รายการโพย</h3>

<form method="GET" action="https://agent.superlot999.com/shop/bills" accept-charset="UTF-8" class="form-inline" autocomplete="off">
  <div class="form-group">
    วันที่<br>
    <input type="text" name="daterange" value="10/10/2017 - 10/10/2017" class="form-control date-range-picker"><br>
  </div>
  <div class="form-group">
    ชนิดหวย<br>
    <select class="form-control" name="game_type_id"><option value="0" selected="selected">ทั้งหมด</option><optgroup label="รัฐบาล"><option value="1">รัฐบาลไทย</option></optgroup><optgroup label="หวย ธกส."><option value="39">หวย ธกส. (BAAC1)</option><option value="110">หวย ธกส. (BAAC2)</option></optgroup><optgroup label="หวยหุ้นไทย"><option value="2">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดเช้า &gt;&gt;&gt;</option><option value="111">หุ้นไทยเปิดเช้าคู่ 2</option><option value="112">หุ้นไทยเปิดเช้าคู่ 3</option><option value="113">หุ้นไทยเปิดเช้าคู่ 4</option><option value="114">หุ้นไทยเปิดเช้าคู่ 5</option><option value="115">หุ้นไทยเปิดเช้าคู่ 6</option><option value="116">หุ้นไทยเปิดเช้าคู่ 7</option><option value="117">หุ้นไทยเปิดเช้าคู่ 8</option><option value="118">หุ้นไทยเปิดเช้าคู่ 9</option><option value="119">หุ้นไทยเปิดเช้าคู่ 10</option><option value="3">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเที่ยง &gt;&gt;&gt;</option><option value="4">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดบ่าย &gt;&gt;&gt;</option><option value="124">หุ้นไทยเปิดบ่ายคู่ 2</option><option value="125">หุ้นไทยเปิดบ่ายคู่ 3</option><option value="126">หุ้นไทยเปิดบ่ายคู่ 4</option><option value="127">หุ้นไทยเปิดบ่ายคู่ 5</option><option value="128">หุ้นไทยเปิดบ่ายคู่ 6</option><option value="129">หุ้นไทยเปิดบ่ายคู่ 7</option><option value="130">หุ้นไทยเปิดบ่ายคู่ 8</option><option value="131">หุ้นไทยเปิดบ่ายคู่ 9</option><option value="132">หุ้นไทยเปิดบ่ายคู่ 10</option><option value="137">ไทยก่อนปิดเย็น Pre-Close</option><option value="5">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเย็น &gt;&gt;&gt;</option></optgroup><optgroup label="หวยลาว"><option value="139">หวยลาว วันพุธ</option></optgroup><optgroup label="หวยมาเลย์ (Magnum4D)"><option value="25">หวยมาเลย์ วันพุธ</option><option value="22">หวยมาเลย์ วันเสาร์</option><option value="24">หวยมาเลย์ วันอาทิตย์</option></optgroup><optgroup label="หวยหุ้นต่างประเทศ"><option value="6">นิเคอิ รอบเช้า</option><option value="11">หุ้นจีน รอบเช้า</option><option value="7">ฮั่งเส็ง รอบเช้า</option><option value="12">หุ้นไต้หวัน</option><option value="13">หุ้นเกาหลี</option><option value="8">นิเคอิ รอบบ่าย</option><option value="14">หุ้นจีน รอบบ่าย</option><option value="9">ฮั่งเส็ง รอบบ่าย</option><option value="15">หุ้นสิงคโปร์</option><option value="16">หุ้นอินเดีย</option><option value="17">หุ้นอียิปต์</option><option value="18">หุ้นรัสเซีย</option><option value="19">หุ้นอังกฤษ</option><option value="20">หุ้นเยอรมัน</option><option value="10">หุ้นดาวน์โจน</option></optgroup><optgroup label="หวยเวียดนาม"><option value="73">ฮานอย Hà Nội</option><option value="74">คั้ญฮหว่า Khánh Hòa</option><option value="75">กอนตูม Kon Tum</option><option value="76">ฟู้เอียน Phú Yên</option><option value="77">เถื่อเทียน-เว้ Thừa Thiên Huế</option><option value="78">ดั๊กลัก Đắc Lắc</option><option value="79">กว๋างนาม Quảng Nam</option><option value="80">ดานัง Đà Nẵng</option><option value="82">บิ่ญดิ่ญ Bình Định</option><option value="83">กว๋างบิ่ญ Quảng Bình</option><option value="84">กว๋างจิ Quảng Trị</option><option value="85">ซาลาย Gia Lai</option><option value="86">นิญถ่วน Ninh Thuận</option><option value="87">ดั๊กนง Đắc Nông</option><option value="88">กว๋างหงาย Quảng Ngãi</option><option value="89">เกียนซาง Kiên Giang</option><option value="90">เลิมด่ง Lâm Đồng</option><option value="91">เตี่ยนซาง Tiền Giang</option><option value="92">กำเมา Cà Mau</option><option value="93">ด่งท้าบ Đồng Tháp</option><option value="94">โฮจิมินห์ Thanh pho Ho Chi Minh</option><option value="95">บักเลียว Bạc Liêu</option><option value="96">เบ๊นแจ Bến Tre</option><option value="97">หวงเต่า Vũng Tàu</option><option value="98">เกิ้นเทอ Cần Thơ</option><option value="99">ด่งนาย Đồng Nai</option><option value="100">ซ้อกจัง Sóc Trăng</option><option value="101">อานชาง An Giang</option><option value="102">บิ่ญถ่วน Bình Thuận</option><option value="103">เต็ยนิญ Tây Ninh</option><option value="104">บิ่ญเชือง Bình Dương</option><option value="105">จ่าวิญ Trà Vinh</option><option value="106">หวิญล็อง Vĩnh Long</option><option value="107">บิ่ญเฟื้อก Bình Phước</option><option value="108">เหิ่วชาง Hậu Giang</option><option value="109">ล็องอาน Long An</option></optgroup></select>
  </div>
  <div class="form-group">
    คำค้น<br>
    <input type="text" name="q" value="" class="form-control" placeholder="รหัสโพย, ยอดรวม, หมายเหตุ">
  </div>
  <div class="form-group">
    สถานะ <span class="green"><i class="fa fa-arrow-down"></i> รับเข้า</span><br>
    <select class="form-control" name="status"><option value="0" selected="selected">ทั้งหมด</option><option value="1">ยังไม่จัดการ</option><option value="2">ยืนยันแล้ว</option><option value="3">ยกเลิกแล้ว</option></select>
  </div>
  <div class="form-group">
    สถานะ <span class="red"><i class="fa fa-arrow-up"></i> จ่ายออก</span><br>
    <select class="form-control" name="status2"><option value="0" selected="selected">ทั้งหมด</option><option value="1">ไม่ถูกรางวัล</option><option value="2">ถูกรางวัล - ยังไม่จ่าย</option><option value="3">ถูกรางวัล - จ่ายแล้ว</option></select>
  </div>
  <div class="form-group">
    &nbsp;<br>
    <button type="submit" class="btn btn-primary btn-sm">กรอง</button>
  </div>
</form>

<div class="space-8"></div>

<label>
  <input class="" type="checkbox" id="input-checkbox-detail">
  <span class="lbl"> แสดงรายละเอียด</span>
</label>

<br>

<b class="text-primary">วันที่:</b>
      <b>10/10/2017</b>
  
<b class="text-primary">ชนิดหวย:</b> <b>ทั้งหมด</b>




<table class="table table-bordered table-hc" id="table-bills">
  <thead class="thin-border-bottom">
    <tr>
      <th colspan="3"></th>
      <th colspan="2">งวดหวย</th>
      <th colspan="9">โพย</th>
      <th colspan="3" class="green"><i class="fa fa-arrow-down"></i> รับเข้า</th>
      <th colspan="2" class="red"><i class="fa fa-arrow-up"></i> จ่ายออก</th>
    </tr>
    <tr>
      <th>#</th>
      <th>เวลา</th>
      <th>ชื่อผู้ใช้</th>
      <th>ชนิดหวย</th>
      <th>งวดหวย</th>
      <th>รหัสโพย</th>
      <th>อัตราจ่าย</th>
      <th>การแทง</th>
      <th>ยอดแทง</th>
      <th>ค่าคอม</th>
      <th>รวม</th>
      <th><i class="fa fa-clock-o"></i> อายุโพย</th>
      <th>หมายเหตุ</th>
      <th>ดู</th>
      <th>ยืนยัน</th>
      <th>ลบ</th>
      <th>
        ใบเสร็จ<br>
        <select name="bill_type" id="bill-type" class="toggle-print-status">
          <option value="2">เต็ม</option>
          <option value="1">ย่อ</option>
          <option value="0">-</option>
        </select>
      </th>
      <th>รางวัล</th>
      <th>
        ใบเสร็จ<br>
        <select name="bill2_type" id="bill2-type" class="toggle-print-status">
          <option value="2">เต็ม</option>
          <option value="1">ย่อ</option>
          <option value="0">-</option>
        </select>
      </th>
    </tr>
  </thead>

  <tbody>
      </tbody>
</table>



<h4 class="no-margin-top">สรุปยอด</h4>

<b class="text-primary">วันที่:</b>
      <b>10/10/2017</b>
  
<b class="text-primary">ชนิดหวย:</b> <b>ทั้งหมด</b>




<table class="table table-bordered table-hc">
  <tbody>
    <tr>
      <td class="align-left">รับเข้า</td>
      <td class="align-right"><span class="n2c">0.00</span> บาท</td>
    </tr>
    <tr>
      <td class="align-left">จ่ายออก</td>
      <td class="align-right"><span class="n2c">0.00</span> บาท</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td class="align-left bolder">รวมทั้งหมด</td>
      <td class="align-right"><span class="n2c">0.00</span> บาท</td>
    </tr>
  </tfoot>
</table>

{{-- <script>
  $.each($('.n2c'), function(key, value) {
    $(this).html(n2c($(this).text()));
  });

  clearTimeout(billTimeout);
  var table_bills = $('#table-bills');
  var billTimeout = setTimeout('billTimer()', 1);

  $('.date-range-picker').daterangepicker(dateRangeOptions);

  checkPrintStatus();
</script> --}}
</div><!-- /.col -->
        </div><!-- /.row -->
      </div>

 