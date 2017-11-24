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
<div class="page-content" id="user-content"> 
   <div class="row"> 
    <div id="content" class="col-xs-12">
     <div class="page-header"> 
      <h1>จัดการผู้ช่วย</h1> 
     </div> 
     <a href="/helper/create" class="ajax btn btn-primary btn-sm">เพิ่มผู้ช่วย</a> 
     <div class="space-4"></div> 
     <div id="alias-table-container"> 
      <table class="table table-bordered table-border-dark table-auto table-nowrap" id="alias-table"> 
       <thead class="thin-border-bottom"> 
        <tr>
         <th class="ac width-1">#</th> 
         <th class="ac">Username</th> 
         <th class="ac">ชื่อ</th> 
         <th class="ac">เบอร์</th> 
         <th class="ac">สถานะ</th> 
         <th class="ac">รายการแทง</th> 
         <th class="ac">จัดการสมาชิก</th> 
         <th class="ac">รายการเก็บของสมาชิก</th> 
         <th class="ac">รายงานแพ้ชนะ</th> 
         <th class="ac">โอนเงิน</th> 
         <th class="ac">จัดการหน้าร้าน</th> 
         <th class="ac">ยกเลิกรายการแทง</th> 
         <th></th> 
        </tr>
       </thead> 
       @foreach($members as $key => $member)
        <tbody> 
            <tr> 
            <td class="ac align-middle">{{ $member->helperset->id }}</td> 
            <td class="ac align-middle">{{ $member->username }}</td> 
            <td class="ac align-middle">{{ $member->name }}</td> 
            <td class="ac align-middle">{{ $member->phone }}</td> 
            <td class="ac align-middle">
                @if($member->status == 0)
                <span class="label label-success">ปกติ</span>
                @elseif($member->status == 2)
                <span class="label label-danger">ล๊อก</span>
                @endif 
            </td>
                @if($member->helperset->listplay == 0)
                <td class="ac align-middle"style="background-color:#ff4d4d;">ไม่อนุญาต</td>
                @elseif($member->helperset->listplay == 1) 
                <td class="ac align-middle alert-warning">ดูอย่างเดียว</td>
                @elseif($member->helperset->listplay == 2)
                <td class="ac align-middle alert-success">อนุญาตทั้งหมด</td>
                @endif 

                @if($member->helperset->member == 0)
                <td class="ac align-middle"style="background-color:#ff4d4d;">ไม่อนุญาต</td>
                @elseif($member->helperset->member == 1) 
                <td class="ac align-middle alert-warning">ดูอย่างเดียว</td>
                @elseif($member->helperset->member == 2)
                <td class="ac align-middle alert-success">อนุญาตทั้งหมด</td>
                @endif 

                @if($member->helperset->listkeep == 0)
                <td class="ac align-middle"style="background-color:#ff4d4d;">ไม่อนุญาต</td>
                @elseif($member->helperset->listkeep == 1) 
                <td class="ac align-middle alert-warning">ดูอย่างเดียว</td>
                @elseif($member->helperset->listkeep == 2)
                <td class="ac align-middle alert-success">อนุญาตทั้งหมด</td>
                @endif 

                @if($member->helperset->winlose == 0)
                <td class="ac align-middle"style="background-color:#ff4d4d;">ไม่อนุญาต</td>
                @elseif($member->helperset->winlose == 1) 
                <td class="ac align-middle alert-warning">ดูอย่างเดียว</td>
                @elseif($member->helperset->winlose == 2)
                <td class="ac align-middle alert-success">อนุญาตทั้งหมด</td>
                @endif 

                @if($member->helperset->transfer == 0)
                <td class="ac align-middle"style="background-color:#ff4d4d;">ไม่อนุญาต</td>
                @elseif($member->helperset->transfer == 1) 
                <td class="ac align-middle alert-warning">ดูอย่างเดียว</td>
                @elseif($member->helperset->transfer == 2)
                <td class="ac align-middle alert-success">อนุญาตทั้งหมด</td>
                @endif 

                @if($member->helperset->manage == 0)
                <td class="ac align-middle"style="background-color:#ff4d4d;">ไม่อนุญาต</td>
                @elseif($member->helperset->manage == 1) 
                <td class="ac align-middle alert-warning">ดูอย่างเดียว</td>
                @elseif($member->helperset->manage == 2)
                <td class="ac align-middle alert-success">อนุญาตทั้งหมด</td>
                @endif 

                @if($member->helperset->cancelplay == 0)
                <td class="ac align-middle"style="background-color:#ff4d4d;">ไม่อนุญาต</td>
                @elseif($member->helperset->cancelplay == 1) 
                <td class="ac align-middle alert-warning">ดูอย่างเดียว</td>
                @elseif($member->helperset->cancelplay == 2)
                <td class="ac align-middle alert-success">อนุญาตทั้งหมด</td>
                @endif 
            <td> <a href="/helper/{{$member->helperset->helper_id}}/edit" class="btn-edit ajax btn btn-success no-border btn-xs bigger-120"> 
            <i class="ace-icon fa fa-pencil"></i> </a> 
            <a href="/helper/{{$member->helperset->helper_id}}/del" class="btn-delete btn btn-danger btn-xs no-border bigger-120">
            <i class="ace-icon fa fa-trash-o"></i></a> </td> 
            </tr> 
        </tbody> 
       @endforeach
      </table> 
     </div> 
     <script src="/cdn-cgi/scripts/0e574bed/cloudflare-static/email-decode.min.js"></script>
    </div>
    <!-- /.col --> 
   </div>
   <!-- /.row --> 
  </div>
@endsection

 