@extends('master')
@section('head')
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

    {{-- <style>
    .sidebar .sidebar-shortcuts-large {
        line-height: 45px;
    }
    .bot-margin-3 {
        margin-bottom: 13px !important;
        margin-left: 18px !important;
        border-button: 2px;
    }

    .bot-margin-3 i {
        font-size: 28px;
    }

    .one {
    border-style: solid;
    border-color: #006699;
    padding: 15px;
    background: #b3e6ff;
    }

    p.bold {
    font-weight: bold;
    }
.nav-tabs-custom>.nav-tabs>li>a {
    color: #fff;
    border-radius: 0;
}
    </style> --}}
    <link rel="stylesheet" href="/css/custom2.css">
@endsection
@section('footer')
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

@endsection

@section('content')
    
        
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

<div class="main-content">
            <!-- #section:basics/content.breadcrumbs -->
    <div class="page-content" id="user-content">
        <div class="row">
            <div class="col-xs-12" id="content"><div class="page-header">
                <h1>
                    จัดการโพย
                </h1>
            </div>
            <h3><i class="fa fa-angle-right blue"></i> ค้นหาโพยด้วยรหัส</h3>

            <form class="clearfix" id="form-search-bill" action="" method="GET" accept-charset="UTF-8" autocomplete="off">
                <div class="form-group max-width-150 pull-left">
                    <input name="bill_id" class="form-control" id="bill_id" type="text" placeholder="รหัสโพย">
                </div>
                <div class="form-group pull-left left-padding-10">
                    <button class="btn btn-primary btn-sm" type="submit">ค้นหา</button>
                </div>
            </form>
        {{-- <script>
        $('#bill_id').focus();
        </script> --}}
            <h3 class="no-margin-top">
                <i class="fa fa-angle-right blue">
                </i> รายการโพย
            </h3>

            <form class="form-inline" action="" method="get">
                <div class="form-group">
                    วันที่<br>
                    <input name="daterange" class="form-control date-range-picker" type="text" value="10/10/2017 - 10/10/2017"><br>
                </div>
                <div class="form-group">
                    ชนิดหวย<br>
                    <select name="game_type_id" class="form-control"><option selected="selected" value="0">ทั้งหมด</option>
                        <optgroup label="รัฐบาล">
                            <option value="1">รัฐบาลไทย</option>
                        </optgroup>
                        <optgroup label="หวย ธกส.">
                            <option value="39">หวย ธกส. (BAAC1)</option>
                        <option value="110">หวย ธกส. (BAAC2)</option>
                        </optgroup>
                        <optgroup label="หวยหุ้นไทย">
                            <option value="">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดเช้า &gt;&gt;&gt;</option>
                            <option value="">หุ้นไทยเปิดเช้าคู่ 2</option><option value="112">หุ้นไทยเปิดเช้าคู่ 3</option>
                            <option value="">หุ้นไทยเปิดเช้าคู่ 4</option><option value="114">หุ้นไทยเปิดเช้าคู่ 5</option>
                            <option value="">หุ้นไทยเปิดเช้าคู่ 6</option><option value="116">หุ้นไทยเปิดเช้าคู่ 7</option>
                            <option value="">หุ้นไทยเปิดเช้าคู่ 8</option><option value="118">หุ้นไทยเปิดเช้าคู่ 9</option>
                            <option value="">หุ้นไทยเปิดเช้าคู่ 10</option><option value="3">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเที่ยง &gt;&gt;&gt;</option>
                            <option value="">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดบ่าย &gt;&gt;&gt;</option><option value="124">หุ้นไทยเปิดบ่ายคู่ 2</option>
                            <option value="">หุ้นไทยเปิดบ่ายคู่ 3</option><option value="126">หุ้นไทยเปิดบ่ายคู่ 4</option>
                            <option value="">หุ้นไทยเปิดบ่ายคู่ 5</option><option value="128">หุ้นไทยเปิดบ่ายคู่ 6</option>
                            <option value="">หุ้นไทยเปิดบ่ายคู่ 7</option><option value="130">หุ้นไทยเปิดบ่ายคู่ 8</option>
                            <option value="">หุ้นไทยเปิดบ่ายคู่ 9</option><option value="132">หุ้นไทยเปิดบ่ายคู่ 10</option>
                            <option value="">ไทยก่อนปิดเย็น Pre-Close</option>
                            <option value="">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเย็น &gt;&gt;&gt;</option>
                            </optgroup><optgroup label="หวยลาว">
                            <option value="">หวยลาว วันพุธ</option>
                        </optgroup>
                        <optgroup label="หวยมาเลย์ (Magnum4D)">
                            <option value="">หวยมาเลย์ วันพุธ</option>
                            <option value="">หวยมาเลย์ วันเสาร์</option>
                            <option value="">หวยมาเลย์ วันอาทิตย์</option>
                            </optgroup><optgroup label="หวยหุ้นต่างประเทศ">
                            <option value="">นิเคอิ รอบเช้า</option>
                            <option value="">หุ้นจีน รอบเช้า</option>
                            <option value="">ฮั่งเส็ง รอบเช้า</option>
                            <option value="">หุ้นไต้หวัน</option>
                            <option value="">หุ้นเกาหลี</option>
                            <option value="">นิเคอิ รอบบ่าย</option>
                            <option value="">หุ้นจีน รอบบ่าย</option>
                            <option value="">ฮั่งเส็ง รอบบ่าย</option>
                            <option value="">หุ้นสิงคโปร์</option>
                            <option value="">หุ้นอินเดีย</option>
                            <option value="">หุ้นอียิปต์</option>
                            <option value="">หุ้นรัสเซีย</option>
                            <option value="">หุ้นอังกฤษ</option>
                            <option value="">หุ้นเยอรมัน</option>
                            <option value="">หุ้นดาวน์โจน</option>
                            </optgroup><optgroup label="หวยเวียดนาม">
                            <option value="">ฮานอย Hà Nội</option>
                            <option value="">คั้ญฮหว่า Khánh Hòa</option>
                            <option value="">กอนตูม Kon Tum</option>
                            <option value="">ฟู้เอียน Phú Yên</option>
                            <option value="">เถื่อเทียน-เว้ Thừa Thiên Huế</option>
                            <option value="">ดั๊กลัก Đắc Lắc</option>
                            <option value="">กว๋างนาม Quảng Nam</option>
                            <option value="">ดานัง Đà Nẵng</option>
                            <option value="">บิ่ญดิ่ญ Bình Định</option>
                            <option value="">กว๋างบิ่ญ Quảng Bình</option>
                            <option value="">กว๋างจิ Quảng Trị</option>
                            <option value="">ซาลาย Gia Lai</option>
                            <option value="">นิญถ่วน Ninh Thuận</option>
                            <option value="">ดั๊กนง Đắc Nông</option>
                            <option value="">กว๋างหงาย Quảng Ngãi</option>
                            <option value="">เกียนซาง Kiên Giang</option>
                            <option value="">เลิมด่ง Lâm Đồng</option>
                            <option value="">เตี่ยนซาง Tiền Giang</option>
                            <option value="">กำเมา Cà Mau</option>
                            <option value="">ด่งท้าบ Đồng Tháp</option>
                            <option value="">โฮจิมินห์ Thanh pho Ho Chi Minh</option>
                            <option value="">บักเลียว Bạc Liêu</option>
                            <option value="">เบ๊นแจ Bến Tre</option>
                            <option value="">หวงเต่า Vũng Tàu</option>
                            <option value="">เกิ้นเทอ Cần Thơ</option>
                            <option value="">ด่งนาย Đồng Nai</option>
                            <option value="">ซ้อกจัง Sóc Trăng</option>
                            <option value="">อานชาง An Giang</option>
                            <option value="">บิ่ญถ่วน Bình Thuận</option>
                            <option value="">เต็ยนิญ Tây Ninh</option>
                            <option value="">บิ่ญเชือง Bình Dương</option>
                            <option value="">จ่าวิญ Trà Vinh</option>
                            <option value="">หวิญล็อง Vĩnh Long</option>
                            <option value="">บิ่ญเฟื้อก Bình Phước</option>
                            <option value="">เหิ่วชาง Hậu Giang</option>
                            <option value="">ล็องอาน Long An</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    คำค้น<br>
                    <input name="" class="form-control" type="text" placeholder="รหัสโพย, ยอดรวม, หมายเหตุ" value="">
                </div>
                <div class="form-group">
                    สถานะ <span class="text-success"><i class="fa fa-arrow-down"></i> รับเข้า</span><br>
                    <select name="" class="form-control">
                        <option selected="selected" value="0">ทั้งหมด</option>
                        <option value="1">ยังไม่จัดการ</option>
                        <option value="2">ยืนยันแล้ว</option>
                        <option value="3">ยกเลิกแล้ว</option>
                    </select>
                </div>  
                <div class="form-group">
                    สถานะ <span class="text-danger"><i class="fa fa-arrow-up"></i> จ่ายออก</span><br>
                    <select name="" class="form-control">
                        <option selected="selected" value="0">ทั้งหมด</option>
                        <option value="1">ไม่ถูกรางวัล</option>
                        <option value="2">ถูกรางวัล - ยังไม่จ่าย</option>
                        <option value="3">ถูกรางวัล - จ่ายแล้ว</option>
                    </select>
                </div>
                <div class="form-group">
                    &nbsp;<br>
                    <button class="btn btn-primary btn-sm" type="submit">กรอง</button>
                </div>
            </form>

            <div class="space-8"></div>

            <label>
                <input id="input-checkbox-detail" type="checkbox">
                <span class="lbl"> แสดงรายละเอียด</span>
            </label>

        <br>
        <h5>
            <b class="text-primary">วันที่:</b>
                 <b>10/10/2017</b>
        
            <b class="text-primary">ชนิดหวย:</b> <b>ทั้งหมด</b>
        </h5> 
        <div class="col-xs-9">    
            <table class="table table-bordered table-hc" id="table-bills">
                <thead class="thin-border-bottom">
                    <tr>
                    <th colspan="3"></th>
                    <th colspan="2">งวดหวย</th>
                    <th colspan="9">โพย</th>
                    <th class="text-success" colspan="3"><i class="fa fa-arrow-down"></i> รับเข้า</th>
                    <th class="text-danger" colspan="2"><i class="fa fa-arrow-up"></i> จ่ายออก</th>
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
                        <select name="bill_type" class="toggle-print-status" id="bill-type">
                        <option value="2">เต็ม</option>
                        <option value="1">ย่อ</option>
                        <option value="0">-</option>
                        </select>
                    </th>
                    <th>รางวัล</th>
                    <th>
                        ใบเสร็จ<br>
                        <select name="bill2_type" class="toggle-print-status" id="bill2-type">
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

        </div>
        <div class="col-xs-12">
            <h4 class="no-margin-top">สรุปยอด</h4>
            <h5>
                <b class="text-primary">วันที่:</b>
                    <b>10/10/2017</b>
                
                <b class="text-primary">ชนิดหวย:</b> <b>ทั้งหมด</b>
            </h5>


        <div class="col-xs-2">
            <table class="table table-bordered">
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
        </div>
        </div>
        <script>
        $.each($('.n2c'), function(key, value) {
            $(this).html(n2c($(this).text()));
        });

        clearTimeout(billTimeout);
        var table_bills = $('#table-bills');
        var billTimeout = setTimeout('billTimer()', 1);

        $('.date-range-picker').daterangepicker(dateRangeOptions);

        checkPrintStatus();
        </script>
        </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
                        

 
               
</div>
@endsection

 