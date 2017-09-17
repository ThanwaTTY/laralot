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
							
							สมาชิกออนไลน์
						</li></ul><!-- /.breadcrumb -->

  <span id="global-clock" class="pull-right"></span>
</div>

<!-- /section:basics/content.breadcrumbs -->
      <div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
  <h1>
    สมาชิกออนไลน์
    <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
        <a href="#" class="ajax">
          3M3K
        </a>
          </small>
  </h1>
</div>


<div class="min-width-800 max-width-1100">
  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
                          <li class="bigger-110 active"><a href="#member" data-toggle="tab">เมมเบอร์</a></li>
      </ul>
</div>

<div class="space-4"></div>

<!-- in active -->
<div class="tab-content no-border no-padding">
              <div class="tab-pane in active" id="member">
      
  <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin">
    <thead class="thin-border-bottom">
      <tr><th class="width-1">#</th>
      <th class="ac">ชื่อผู้ใช้</th>
      <th class="ac">ระดับ</th>
      <th class="ac">ชื่อ</th>
      <th class="ac">ใช้งานล่าสุด</th>
      <th class="ac">Login ล่าสุด</th>
      <th class="ac">IP ล่าสุด</th>
    </tr></thead>
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

 