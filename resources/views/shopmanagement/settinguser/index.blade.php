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
    <div class="col-xs-12" id="content">
        <div class="page-header">
                <h1>
                     ตั้งค่าสมาชิก
                </h1>
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    <a class="ajax" href="">3M3K</a>
                </small>
            </div>
            <div class="alert alert-info">
                <h4 class="text-info"><i class="fa fa-info-circle"></i> คำแนะนำ</h4>
                - เพิ่ม<b>สมาชิก</b>หน้าร้าน ได้ที่เมนู <a href="">เพิ่มสมาชิก</a><br>
                - เพิ่ม<b>ผู้ช่วย</b>หน้าร้าน ได้ที่เมนู <a href="">เพิ่มผู้ช่วย</a>
            </div>
        <div class="tab-content no-border no-padding max-width-1100 col-xs-4">
            <form class="js-ajax-form" action="" method="POST" accept-charset="UTF-8" data-after="reset" data-before="validateUserEdit" data-feedback="mixed" data-method="put"><input name="_token" type="hidden" value="szNgCSRnfuwaFrsgOoev7n3eOmzojSKZaMoJI5qG">
                <table class="table table-bordered table-hc enable-check-all users__edit">
                    <thead class="thin-border-bottom">
                        <tr>
                            <th colspan="3">
                                <input name="action" type="hidden" value="shop">
                                    <button class="btn btn-primary btn-xs" type="submit">แก้ไข</button>
                                <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                            </th>
                            <th>
                                <input class="check-all" type="checkbox" value="0">
                            </th>
                            <th>
                            ระบบหน้าร้าน<br>
                                <select name="">
                                    <option value=""></option>
                                    <option value="">เปิด</option>
                                    <option value="">ปิด</option>
                                </select>
                                <br>
                                &nbsp;
                            </th>
                            <th>
                                อายุโพย<br>
                                <input name="bill_lifespan" class="form-control input-sm max-width-75" type="text" value="">
                                &lt;= <a class="fill-input" href="#">0</a> นาที
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </form>

        </div>
    </div> 
  </div>              
</div>
@endsection

 