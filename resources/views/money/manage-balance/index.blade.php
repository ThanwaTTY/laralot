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
    <div class="page-content" id="user-content">
        <div class="row">
          <div class="col-xs-12" id="content"><div class="page-header">
    <h1>
        จัดการยอดค้างชำระ
    <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
        <a class="ajax" href="">3M3K</a>
          </small>
    </h1>
</div>



    <div>
        <span class="bigger-120 dark">แสดง</span>
            <select class="user-filter bigger-120">
                <option value="4">ทั้งหมด</option>
                <option selected="selected" value="1">ปกติ</option>
                <option value="2">ระงับ</option>
                <option value="3">ล็อค</option>
            </select>
        <span class="bigger-120 dark">เรียง</span>
        <select class="user-order bigger-120">
            <option selected="selected" value="username_asc">ชื่อสมาชิก ก่อน -&gt; หลัง</option>
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
                <th class="align-center"><span class="text-success">+ฝาก</span> / <span class="text-danger">-ถอน</span></th>
                <th class="align-center">
                <div class="inline checkbox no-margin">
                    <label>
                        <input class="check-all" type="checkbox" value="0"> 
                        <span class="lbl"></span>
                    </label>
                </div>
            </th>
                </tr>
        </thead>

        <tbody>
            <tr data-id="9474" data-status="1">
                <td class="align-center align-middle">1</td>
                <td class="align-center align-middle">3M3K001</td>
                <td class="align-center align-middle">เมมเบอร์</td>
                <td class="align-center align-middle width-120">ธัชพงษ์</td>
                <td class="align-right align-middle width-120" data-credit="0">0</td>
                <td class="align-center align-middle action action-credit">
                    <span class="main-action main-action-credit">
                        <a class="btn-load btn-load-credit" href="#" data-original-title="แก้ไขเครดิต" data-placement="right" data-rel="tooltip"><img src="/img/pencil.png">เเก้ไข</a>
                    </span>
                    <span class="sub-action sub-action-credit jquery-hide">
                        <a class="btn-save btn-save-credit" href="#" data-original-title="บันทึก" data-placement="right" data-rel="tooltip"><img src="/img/save.png"></a><br><br>
                        <a class="btn-return btn-return-credit" href="#" data-original-title="ย้อนกลับ" data-placement="right" data-rel="tooltip"><img src="/img/return.png"></a>
                    </span>
                </td>
                <td class="align-middle" data-balance="0.00">
                    <div class="align-right n2c">0.00</div>
                </td>
                <td class="align-center align-middle action action-balance">
                    <span class="main-action main-action-balance">
                        <a class="btn-load btn-load-balance" href="#" data-original-title="ฝากเงิน" data-action="deposit" data-placement="left" data-rel="tooltip"><img src="/img/deposit.png">ฝากเงิน+</a>
                        <a class="btn-load btn-load-balance" href="#" data-original-title="ถอนเงิน" data-action="withdraw" data-placement="right" data-rel="tooltip"><img src="/img/withdraw.png">ถอนเงิน-</a>
                    </span>
                    <span class="sub-action sub-action-balance jquery-hide">
                    <a class="btn-save btn-save-balance" href="#" data-original-title="บันทึก" data-placement="right" data-rel="tooltip"><img src="/img/save.png"></a><br><br>
                    <a class="btn-return btn-return-balance" href="#" data-original-title="ย้อนกลับ" data-placement="right" data-rel="tooltip"><img src="/img/return.png"></a>
                    </span>
                </td>
                <td class="align-center align-middle">
                    <div class="inline checkbox no-margin">
                        <label>
                            <input type="checkbox" value="9474"> <span class="lbl"></span>
                        </label>
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
          <tr>
            <td class="align-center align-middle bolder" colspan="6">รวม (เฉพาะสมาชิก สถานะปกติ)</td>
            <td class="align-middle align-right sum-pending-balance n2c">0.00</td>
            <td class="align-center" colspan="2">
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
</div>
@endsection

 