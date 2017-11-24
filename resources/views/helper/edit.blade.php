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
    <li> จัดการผู้ช่วย </li>
   </ul>
   <!-- /.breadcrumb --> 
   <span id="global-clock" class="pull-right"></span> 
  </div>

  
  <div class="page-content" id="user-content"> 
   <div class="row"> 
    <div id="content" class="col-xs-12">
     <div class="page-header"> 
      <h1>จัดการผู้ช่วย / แก้ไข</h1> 
     </div> 
     @if(session()->get('massagesuccess'))
          <div class="box">
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <div class="callout callout-success">
                <h4>success!</h4>
                <p>{{ session()->get('massagesuccess') }}</p>
            </div>
          </div>
     @endif
     <div class="alert alert-success hidden" id="success"></div> 
     <div class="alert alert-danger hidden" id="error"></div> 
     <form method="POST" action="/helper/{{ $member->id}}/update" accept-charset="UTF-8" id="edit-alias-form" class="form-horizontal" autocomplete="off">
     {{ csrf_field() }}
      <div class="widget-box widget-color-blue2 width-800 max-width-1100"> 
       <div class="widget-header"> 
        <h5 class="widget-title bigger"> ข้อมูลผู้ช่วย </h5> 
       </div> 
       <div class="widget-body"> 
        <div class="widget-main no-padding-bottom"> 
         <div class="form-group"> 
          <label for="username" class="control-label col-xs-2">ชื่อผู้ใช้:</label> 
          <div class="col-xs-4"> 
           <input class="form-control" disabled="disabled" name="username" type="text" value="{{$member->username}}" id="username" /> 
          </div> 
          <label for="password" class="control-label col-xs-2">รหัสผ่าน:</label> 
          <div class="col-xs-4"> 
           <input class="form-control" name="password" type="password" value="" id="password" /> 
          </div> 
         </div> 
         <div class="form-group"> 
          <label for="name" class="control-label col-xs-2">ชื่อ-สกุล:</label> 
          <div class="col-xs-4"> 
           <input class="form-control" name="name" type="text" value="{{$member->name}}" id="name" /> 
          </div> 
          <label for="phone" class="control-label col-xs-2">เบอร์โทร:</label> 
          <div class="col-xs-4"> 
           <input class="form-control" name="phone" type="text" value="{{$member->phone}}" id="phone" /> 
          </div> 
         </div> 
         <div class="form-group"> 
          <label for="status" class="control-label col-xs-2">สถานะ:</label> 
          <div class="col-xs-4"> 
           <select class="form-control" id="status" name="status">
            <option value="0"{{ ($member->status == 0) ? 'selected="selected"' : ''}}>ปกติ</option>
            <option value="2"{{ ($member->status == 2) ? 'selected="selected"' : ''}}>ล็อค</option>
           </select> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
      <div class="space-8"></div> 
      <b>ไม่อนุญาต</b> = ทำอะไรไม่ได้เลย
      <br /> 
      <b>ดูอย่างเดียว</b> = ดูได้อย่างเดียว ไม่สามารถเพิ่ม แก้ไข หรือลบ
      <br /> 
      <b>อนุญาตทั้งหมด</b> = สามารถ ดู เพิ่ม แก้ไข ลบ
      <br /> 
      <div class="widget-box widget-color-blue2 width-800 max-width-1100"> 
       <div class="widget-header"> 
        <h5 class="widget-title bigger"> หน้าที่ </h5> 
       </div> 
       <div class="widget-body"> 
        <div class="widget-main no-padding-bottom"> 
         <div class="form-group"> 
          <label for="perm_items" class="control-label col-xs-2">รายการแทง:</label> 
          <div class="col-xs-2"> 
           <select class="form-control" id="perm_items" name="listplay">
            <option value="0"{{ ($member->helperset->listplay == 0) ? 'selected="selected"' : ''}}>ไม่อนุญาต</option>
            <option value="1"{{ ($member->helperset->listplay == 1) ? 'selected="selected"' : ''}}>ดูอย่างเดียว</option>
            <option value="2"{{ ($member->helperset->listplay == 2) ? 'selected="selected"' : ''}}>อนุญาตทั้งหมด</option>
           </select> 
          </div> 
          <div class="col-xs-8 help-block">
            ดูของรวม / คาดคะเนได้เสีย, ดูของแยกตามประเภท, ดูของแยกตามสมาชิก, รายการที่ถูกยกเลิก, ตั้งค่าการรับของ 
          </div> 
         </div> 
         <div class="form-group"> 
          <label for="perm_users" class="control-label col-xs-2">สมาชิก:</label> 
          <div class="col-xs-2"> 
           <select class="form-control" id="perm_users" name="member">
            <option value="0"{{ ($member->helperset->member == 0) ? 'selected="selected"' : ''}}>ไม่อนุญาต</option>
            <option value="1"{{ ($member->helperset->member == 1) ? 'selected="selected"' : ''}}>ดูอย่างเดียว</option>
            <option value="2"{{ ($member->helperset->member == 2) ? 'selected="selected"' : ''}}>อนุญาตทั้งหมด</option>
           </select> 
          </div> 
          <div class="col-xs-8 help-block">
            เพิ่มสมาชิก, รายชื่อสมาชิก, แก้ไขสมาชิก, สมาชิกออนไลน์ 
          </div> 
         </div> 
         <div class="form-group"> 
          <label for="perm_user_take_list" class="control-label col-xs-2">รายการเก็บของ:</label> 
          <div class="col-xs-2"> 
           <select class="form-control" id="perm_user_take_list" name="listkeep">
            <option value="0"{{ ($member->helperset->listkeep == 0) ? 'selected="selected"' : ''}}>ไม่อนุญาต</option>
            <option value="1"{{ ($member->helperset->listkeep == 1) ? 'selected="selected"' : ''}}>ดูอย่างเดียว</option>
            <option value="2"{{ ($member->helperset->listkeep == 2) ? 'selected="selected"' : ''}}>อนุญาตทั้งหมด</option>
           </select> 
          </div> 
          <div class="col-xs-8 help-block">
            รายการเก็บของ / อั้น 
          </div> 
         </div> 
         <div class="form-group"> 
          <label for="perm_reports" class="control-label col-xs-2">รายงานแพ้ชนะ:</label> 
          <div class="col-xs-2"> 
           <select class="form-control" id="perm_reports" name="winlose">
            <option value="0"{{ ($member->helperset->winlose == 0) ? 'selected="selected"' : ''}}>ไม่อนุญาต</option>
            <option value="1"{{ ($member->helperset->winlose == 1) ? 'selected="selected"' : ''}}>ดูอย่างเดียว</option>
            <option value="2"{{ ($member->helperset->winlose == 2) ? 'selected="selected"' : ''}}>อนุญาตทั้งหมด</option>
           </select> 
          </div> 
          <div class="col-xs-8 help-block">
            ได้เสียตามสมาชิก, ได้เสียตามประเภท, รายการที่ถูกรางวัล, ผลการออกรางวัล 
          </div> 
         </div> 
         <div class="form-group"> 
          <label for="perm_transfers" class="control-label col-xs-2">โอนเงิน:</label> 
          <div class="col-xs-2"> 
           <select class="form-control" id="perm_transfers" name="transfer">
            <option value="0"{{ ($member->helperset->transfer == 0) ? 'selected="selected"' : ''}}>ไม่อนุญาต</option>
            <option value="1"{{ ($member->helperset->transfer == 1) ? 'selected="selected"' : ''}}>ดูอย่างเดียว</option>
            <option value="2"{{ ($member->helperset->transfer == 2) ? 'selected="selected"' : ''}}>อนุญาตทั้งหมด</option>
           </select> 
          </div> 
          <div class="col-xs-8 help-block">
            โอนเงิน 
          </div> 
         </div> 
         <div class="form-group"> 
          <label for="perm_shop" class="control-label col-xs-2">จัดการหน้าร้าน:</label> 
          <div class="col-xs-2"> 
           <select class="form-control" id="perm_shop" name="manage">
            <option value="0"{{ ($member->helperset->manage == 0) ? 'selected="selected"' : ''}}>ไม่อนุญาต</option>
            <option value="1"{{ ($member->helperset->manage == 1) ? 'selected="selected"' : ''}}>ดูอย่างเดียว</option>
            <option value="2"{{ ($member->helperset->manage == 2) ? 'selected="selected"' : ''}}>อนุญาตทั้งหมด</option>
           </select> 
          </div> 
          <div class="col-xs-8 help-block">
            จัดการหน้าร้าน 
          </div> 
         </div> 
         <div class="form-group"> 
          <label for="perm_cancel" class="control-label col-xs-2">ยกเลิกการแทง:</label> 
          <div class="col-xs-2"> 
           <select class="form-control" id="perm_cancel" name="cancelplay">
            <option value="0"{{ ($member->helperset->cancelplay == 0) ? 'selected="selected"' : ''}}>ไม่อนุญาต</option>
            <option value="1"{{ ($member->helperset->cancelplay == 1) ? 'selected="selected"' : ''}}>ดูอย่างเดียว</option>
            <option value="2"{{ ($member->helperset->cancelplay == 2) ? 'selected="selected"' : ''}}>อนุญาตทั้งหมด</option>
           </select> 
          </div> 
          <div class="col-xs-8 help-block">
            ยกเลิกการแทง 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
      <div class="space-8"></div> 
      <button type="submit" class="btn btn-primary">แก้ไขผู้ช่วย</button> 
      <a href="/helper/managehelper" class="btn btn-default ajax">กลับ</a> 
     </form> 
    </div>
    <!-- /.col --> 
   </div>
   <!-- /.row --> 
  </div>
@endsection

 