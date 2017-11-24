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
    <li> <i class="ace-icon fa fa-home home-icon"></i> 
     <!-- <a href="#">Home</a> --> </li> 
    <li> ผู้ช่วย </li>
    <li> ผู้ช่วย </li>
   </ul>
   <!-- /.breadcrumb --> 
   <span id="global-clock" class="pull-right"></span> 
  </div>

<div class="page-content" id="user-content"> 
   <div class="row"> 
    <div id="content" class="col-xs-12">
     <div class="page-header"> 
      <h1>ผู้ช่วย</h1> 
     </div> 
     <div id="alias-table-container"> 
      <table class="table table-bordered table-border-dark table-auto table-nowrap" id="alias-table"> 
       <thead class="thin-border-bottom"> 
        <tr>
         <th class="align-center width-1">#</th> 
         <th class="align-center">Username</th> 
         <th class="align-center">ชื่อ</th> 
         <th class="align-center">เบอร์</th> 
         <th class="align-center">ใช้งานล่าสุด</th> 
        </tr>  
       </thead> 
      @foreach($member as $members)
       <tbody>    
        <tr> 
         <td class="align-center align-middle">{{$members->helperset->id}}</td> 
         <td class="align-center align-middle">{{$members->username}}</td> 
         <td class="align-center align-middle">{{$members->name}}</td> 
         <td class="align-center align-middle">{{$members->phone}}</td> 
         <td class="align-center align-middle">2017-09-17 11:31:39</td> 
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

 