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
<div class="breadcrumbs">
  <ul id="breadcrumbs" class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <!-- <a href="#">Home</a> -->
    </li>
  <li>
					
					 จัดการสมาชิก 

					
				</li><li>
							
							รายการเก็บของ / อั้น
						</li></ul><!-- /.breadcrumb -->

  <span id="global-clock" class="pull-right"></span>
</div>

<!-- /section:basics/content.breadcrumbs -->
      <div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
  <h1>
    รายการเก็บของตามสมาชิก
    <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
      <a href="#" class="ajax">3M3K</a>
          </small>
    </h1><h4 class="sub">
    <i class="fa fa-angle-right orange"></i>
      <span class="deep-blue">รัฐบาลไทย</span>
      <span class="smaller near-white"><i>(เปลี่ยนได้ที่แถบเมนูด้านบน)</i></span>
    </h4>
  
</div>


<ul class="nav nav-tabs padding-12 tab-color-blue background-blue max-width-1100">
            <li class="active">
        <a data-toggle="tab" href="#bet_type_group_1">3 ตัวท้าย</a>
      </li>
                                          </ul>

<div class="space-4"></div>

<div class="tab-content no-border no-margin-top no-padding width-800 max-width-1100">
      <div class="tab-pane in active" id="bet_type_group_1">

      <table class="table table-bordered table-border-dark table-nowrap max-width-1100" id="take-list-table">
        <thead class="thin-border-bottom">
          <tr>
            <th colspan="99" class="ac deep-blue">3 ตัวท้าย</th>
          </tr>

          <tr>
            <th class="ac w1">#</th>
            <th class="w1">ชื่อผู้ใช้</th>
            <th class="ac w1">ระดับ</th>
            <th class="ar w1">ได้รับ</th>
                          <th class="ac">3 ตัวบน</th>
                          <th class="ac">3 ตัวล่าง</th>
                          <th class="ac">3 ตัวโต๊ด</th>
                          <th class="ac">2 ตัวบน</th>
                          <th class="ac">2 ตัวล่าง</th>
                          <th class="ac">2 ตัวโต๊ด</th>
                          <th class="ac">วิ่งบน</th>
                          <th class="ac">วิ่งล่าง</th>
                        <th class="ac">ดูของ</th>
          </tr>
        </thead>

        <tbody>
                                                                  </tbody>
      </table>

    </div>
      <div class="tab-pane " id="bet_type_group_2">

      <table class="table table-bordered table-border-dark table-nowrap max-width-1100" id="take-list-table">
        <thead class="thin-border-bottom">
          <tr>
            <th colspan="99" class="ac deep-blue">3 ตัวหัว</th>
          </tr>

          <tr>
            <th class="ac w1">#</th>
            <th class="w1">ชื่อผู้ใช้</th>
            <th class="ac w1">ระดับ</th>
            <th class="ar w1">ได้รับ</th>
                          <th class="ac">3 ตัวบน</th>
                          <th class="ac">3 ตัวล่าง</th>
                          <th class="ac">3 ตัวโต๊ด</th>
                          <th class="ac">2 ตัวบน</th>
                          <th class="ac">2 ตัวล่าง</th>
                          <th class="ac">2 ตัวโต๊ด</th>
                          <th class="ac">วิ่งบน</th>
                          <th class="ac">วิ่งล่าง</th>
                        <th class="ac">ดูของ</th>
          </tr>
        </thead>

        <tbody>
                                                                  </tbody>
      </table>

    </div>
      <div class="tab-pane " id="bet_type_group_3">

      <table class="table table-bordered table-border-dark table-nowrap max-width-1100" id="take-list-table">
        <thead class="thin-border-bottom">
          <tr>
            <th colspan="99" class="ac deep-blue">2 ตัวท้าย (หวยตัว)</th>
          </tr>

          <tr>
            <th class="ac w1">#</th>
            <th class="w1">ชื่อผู้ใช้</th>
            <th class="ac w1">ระดับ</th>
            <th class="ar w1">ได้รับ</th>
                          <th class="ac">3 ตัวบน</th>
                          <th class="ac">3 ตัวล่าง</th>
                          <th class="ac">3 ตัวโต๊ด</th>
                          <th class="ac">2 ตัวบน</th>
                          <th class="ac">2 ตัวล่าง</th>
                          <th class="ac">2 ตัวโต๊ด</th>
                          <th class="ac">วิ่งบน</th>
                          <th class="ac">วิ่งล่าง</th>
                        <th class="ac">ดูของ</th>
          </tr>
        </thead>

        <tbody>
                                                                  </tbody>
      </table>

    </div>
      <div class="tab-pane " id="bet_type_group_4">

      <table class="table table-bordered table-border-dark table-nowrap max-width-1100" id="take-list-table">
        <thead class="thin-border-bottom">
          <tr>
            <th colspan="99" class="ac deep-blue">2 ตัวหัว (หวยตัว)</th>
          </tr>

          <tr>
            <th class="ac w1">#</th>
            <th class="w1">ชื่อผู้ใช้</th>
            <th class="ac w1">ระดับ</th>
            <th class="ar w1">ได้รับ</th>
                          <th class="ac">3 ตัวบน</th>
                          <th class="ac">3 ตัวล่าง</th>
                          <th class="ac">3 ตัวโต๊ด</th>
                          <th class="ac">2 ตัวบน</th>
                          <th class="ac">2 ตัวล่าง</th>
                          <th class="ac">2 ตัวโต๊ด</th>
                          <th class="ac">วิ่งบน</th>
                          <th class="ac">วิ่งล่าง</th>
                        <th class="ac">ดูของ</th>
          </tr>
        </thead>

        <tbody>
                                                                  </tbody>
      </table>

    </div>
      <div class="tab-pane " id="bet_type_group_5">

      <table class="table table-bordered table-border-dark table-nowrap max-width-1100" id="take-list-table">
        <thead class="thin-border-bottom">
          <tr>
            <th colspan="99" class="ac deep-blue">สูง-ต่ำ</th>
          </tr>

          <tr>
            <th class="ac w1">#</th>
            <th class="w1">ชื่อผู้ใช้</th>
            <th class="ac w1">ระดับ</th>
            <th class="ar w1">ได้รับ</th>
                          <th class="ac">หลักแสน</th>
                          <th class="ac">หลักหมื่น</th>
                          <th class="ac">หลักพัน</th>
                          <th class="ac">หลักร้อย</th>
                          <th class="ac">หลักสิบ</th>
                          <th class="ac">หลักหน่วย</th>
                        <th class="ac">ดูของ</th>
          </tr>
        </thead>

        <tbody>
                                                                  </tbody>
      </table>

    </div>
      <div class="tab-pane " id="bet_type_group_6">

      <table class="table table-bordered table-border-dark table-nowrap max-width-1100" id="take-list-table">
        <thead class="thin-border-bottom">
          <tr>
            <th colspan="99" class="ac deep-blue">คู่-คี่</th>
          </tr>

          <tr>
            <th class="ac w1">#</th>
            <th class="w1">ชื่อผู้ใช้</th>
            <th class="ac w1">ระดับ</th>
            <th class="ar w1">ได้รับ</th>
                          <th class="ac">หลักแสน</th>
                          <th class="ac">หลักหมื่น</th>
                          <th class="ac">หลักพัน</th>
                          <th class="ac">หลักร้อย</th>
                          <th class="ac">หลักสิบ</th>
                          <th class="ac">หลักหน่วย</th>
                        <th class="ac">ดูของ</th>
          </tr>
        </thead>

        <tbody>
                                                                  </tbody>
      </table>

    </div>
      <div class="tab-pane " id="bet_type_group_7">

      <table class="table table-bordered table-border-dark table-nowrap max-width-1100" id="take-list-table">
        <thead class="thin-border-bottom">
          <tr>
            <th colspan="99" class="ac deep-blue">4-5-6 ตัวตรง</th>
          </tr>

          <tr>
            <th class="ac w1">#</th>
            <th class="w1">ชื่อผู้ใช้</th>
            <th class="ac w1">ระดับ</th>
            <th class="ar w1">ได้รับ</th>
                          <th class="ac">4 ตัวตรง</th>
                          <th class="ac">5 ตัวตรง</th>
                          <th class="ac">6 ตัวตรง</th>
                        <th class="ac">ดูของ</th>
          </tr>
        </thead>

        <tbody>
                                                                  </tbody>
      </table>

    </div>
  </div>
</div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.page-content -->
    </div>
@endsection

 