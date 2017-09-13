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

    <style>
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
    </style>
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

<section class="content-header">
      <h1>
        1.เพิ่มสมาชิก
      </h1>
</section>


<section class="content">
<form class="form-horizontal" action="" method="post">
    {{ csrf_field() }}
        <div class="modal-content">
            <div class="box box-info">
                    <div class="box-header">
                        <h4>รายการเก็บของตามสมาชิก</h4>
                        <b>รัฐบาลไทย (เปลี่ยนได้ที่แถบเมนูด้านบน)</b>
                    </div>
                        {{-- <form class="form-horizontal" action="" method="post"> --}}
                           
                    <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                
                                            <div class="table-responsive"><!-- มี tab เลื่อนข้างล่าง  -->
                                            <table class="table table-bordered bg-gray">
                                                <thead>
                                                    <tr>
                                                            <th class="text-center" colspan="13">3 ตัวท้าย</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">ชื่อผู้ใช้</th>
                                                        <th class="text-center">ระดับ</th>
                                                        <th class="text-center">ได้รับ</th>
                                                        <th class="text-center">3 ตัวบน</th>
                                                        <th class="text-center">3 ตัวล่าง</th>
                                                        <th class="text-center">3 ตัวโต๊ด</th>
                                                        <th class="text-center">2 ตัวบน</th>
                                                        <th class="text-center">2 ตัวล่าง</th>
                                                        <th class="text-center">2 ตัวโต๊ด</th>
                                                        <th class="text-center">วิ่งบน</th>
                                                        <th class="text-center">วิ่งล่าง</th>
                                                        <th class="text-center">ดูของ</th>
                                                    </tr>
                                                </thead>
                                                
                                            </table>
                                    </div>
                                </div>                                  
                            </div>

                    </div>
            </div>
        </div>
            {{-- <div class="modal-footer">
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div> --}}
     
    </form>
</section>
@endsection

 