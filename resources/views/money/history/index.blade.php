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

{{-- <section class="content-header">
      <h1>
        1.เพิ่มสมาชิก
      </h1>
</section> --}}


<section class="content">
<form class="form-horizontal" action="" method="post">
    {{ csrf_field() }}
        <div class="modal-content">
            <div class="box box-info">
                    <div class="box-header">
                        <h3>ประวัติการเงิน  >>3M3K>> <i><select name="" id="">
                            <option value="">เมมเบอร์</option>
                            <option value="">3M3K001</option>
                            <option value="">3M3K002</option>
                        </select></i></h3>
                        

                    </div>
                        {{-- <form class="form-horizontal" action="" method="post"> --}}
                           
                    <div class="box-body">
                        <div class="box box-solid box-primary">
                            <div class="box-header with-border with-border">
                                <b>แบ่งหุ้น / เก็บของ</b>
                            </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                        <div class="col-sm-4">
                                                            <input type="radio">&nbsp; วันนี้ &nbsp;
                                                            <input type="radio">&nbsp; เมื่อวาน &nbsp;
                                                            <input type="radio">&nbsp; สัปดาห์นี้(จันทร์-อาทิตย์) &nbsp;
                                                            <input type="radio">&nbsp; สัปดาห์ที่แล้ว(จันทร์-อาทิตย์) &nbsp;
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <div class="col-sm-4">
                                                            <input type="radio">&nbsp; วันนี้ &nbsp;
                                                            <select name="" id="">
                                                                <option value="">กันยายน - 09/2017</option>
                                                            </select>
                                                        </div>
                                                </div>

                                                 <div class="form-group">
                                                        <div class="col-sm-4">
                                                            <input type="radio">&nbsp; ตั้งแต่วันที่ &nbsp;
                                                            <select name="" id="">
                                                                <option value="">&nbsp; 16-09-2017</option>
                                                            </select>
                                                            <input type="radio">&nbsp; ถึงวันที่ &nbsp;
                                                            <select name="" id="">
                                                                <option value="">&nbsp; 16-09-2017</option>
                                                            </select>
                                                        </div>
                                                </div>

                                            </div>                                  
                                        </div>

                                    </div>
                            
                        </div>
                            <div class="row">
                                    <section class="col-lg-12 connectedSortable">
                                        <div class="nav-tabs-custom">
                                            <!-- Tabs within a box -->
                                            <ul class="nav nav-tabs pull-left">
                                                <li class="active" style=""><a href="#tab1" data-toggle="tab">ำด้เสียสุทธิ</a></li>
                                                <li><a href="#tab2" data-toggle="tab">เครดิต</a></li>
                                            {{-- <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li> --}}
                                            </ul>
                                            <div class="tab-content no-padding">
                                            <!-- Morris chart - Sales -->
                                                <div class="chart tab-pane active" id="tab1" style="position: relative; height: 300px;">
                                                    <div class="col-md-8">
                                                        <div class="table-responsive"><!-- มี tab เลื่อนข้างล่าง  -->
                                                            <table class="table table-bordered bg-gray">
                                                                <thead>

                                                                    <tr>
                                                                        <th class="text-center">วันที่-เวลา</th>
                                                                        <th class="text-center">รายละเอียด</th>
                                                                        <th class="text-center">เงินออก</th>
                                                                        <th class="text-center">เงินเข้า</th>
                                                                        <th class="text-center">คงเหลือ</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </section>                                 
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

 