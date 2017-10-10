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
<div class="breadcrumbs">
    <ul id="breadcrumbs" class="breadcrumb">
        <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <!-- <a href="#">Home</a> -->
        </li>
    <li>	
	    จัดการหน้าร้าน		
    </li>
    <li>
	    ตั้งค่าสมาชิก
	</li>
    </ul><!-- /.breadcrumb -->
  <span id="global-clock" class="pull-right"></span>
</div>
        
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

<div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
  <h1>
    ตั้งค่าสมาชิก
    <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
        <a href="https://agent.superlot999.com/shop/members/9306" class="ajax">3M3K</a>
          </small>
  </h1>
</div>

<div class="alert alert-info">
  <h4 class="text-info"><i class="fa fa-info-circle"></i> คำแนะนำ</h4>
  - เพิ่ม<b>สมาชิก</b>หน้าร้าน ได้ที่เมนู <a href="https://agent.superlot999.com/users/create">เพิ่มสมาชิก</a><br>
  - เพิ่ม<b>ผู้ช่วย</b>หน้าร้าน ได้ที่เมนู <a href="https://agent.superlot999.com/aliases/create">เพิ่มผู้ช่วย</a>
</div>


<div class="tab-content no-border no-padding max-width-1100">

  <form method="POST" action="https://agent.superlot999.com/users/edit/9306" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="wVCy2lw6Tr07FXXnoXGA4HgBONZHrhVZERn9GaXW">
    <table class="table table-bordered table-hc enable-check-all users__edit">
      <thead class="thin-border-bottom">
        <tr><th colspan="3">
          <input name="action" type="hidden" value="shop">
          <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
          <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
        </th>

        <th><input class="check-all" name="" type="checkbox" value="0"></th>

        <th>
          ระบบหน้าร้าน<br>
          <select name="shop_status"><option value="-1"></option><option value="1">เปิด</option><option value="0">ปิด</option></select><br>
          &nbsp;
        </th>

        <th>
          อายุโพย<br>
          <input class="form-control input-sm max-width-75" name="bill_lifespan" type="text" value="">
          &lt;= <a href="#" class="fill-input">0</a> นาที
        </th>
      </tr></thead>

      <tbody>
                                                                </tbody>
    </table>
  </form>

</div>
</div><!-- /.col -->
        </div><!-- /.row -->
      </div>
@endsection

 