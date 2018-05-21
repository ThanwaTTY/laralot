

<style>
	.alert {
		color: #333!important;
	}
	/*.sidebar .sidebar-shortcuts-large {
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

     .nav-tabs-custom>.nav-tabs>li>a {
    color: #fff;
    border-radius: 0;
    }*/
</style>
<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

<script src="/js/custom.js"></script>
<script>
	$(function(){
    $('#credit').on("keyup", function(){
        var limit = parseInt($(this).data('limit'));
        var credit_add = parseInt($(this).val());
        if(credit_add>limit){
          $(this).val("");
          alert("เครดิตต้องไม่เกิน: "+limit);
        }
        console.log(limit+"/"+credit_add);

    });
  });
</script>


<script type="text/javascript" src="/date/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/date/jquery-ui.min.js"></script>

<script type="text/javascript" src="/date/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="/date/jquery-ui-sliderAccess.js"></script>
<script type="text/javascript">
    $(function(){
            $(".datepicker").datetimepicker({
            dateFormat: 'yy-mm-dd',
            timeFormat: "HH:mm:ss"
        });
    });
</script>

<div class="main-content"> 
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
		@endif @if(session()->get('massage'))
		<div class="box">
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
			</div>
			<div class="callout callout-danger">
				<h4>Fail !</h4>

				<p>{{ session()->get('massage') }}</p>
			</div>
		</div>
		@endif
    <!-- #section:basics/content.breadcrumbs --> 
    <div class="breadcrumbs"> 
     <ul id="breadcrumbs" class="breadcrumb"> 
      <li> <i class="ace-icon fa fa-home home-icon"></i> 
       <!-- <a href="#">Home</a> --> </li> 
      <li> จัดการงวดหวย </li>
      <li> 1. เพิ่มงวดหวย</li>
     </ul>
     <!-- /.breadcrumb --> 
     <span id="global-clock" class="pull-right"></span> 
    </div> 
    <!-- /section:basics/content.breadcrumbs --> 
    <div class="page-content" id="user-content"> 
     <div class="row"> 
      <div id="content" class="col-xs-12">
       <div class="page-header"> 
        <h1>1. เพิ่มงวดหวย</h1> 
       </div> 
       <div class="alert alert-info hidden" id="info">
        กำลังโหลด...
       </div> 
       <div class="alert alert-success hidden" id="success"></div> 
       <div class="alert alert-danger hidden" id="error"></div> 
       <form method="POST" action="/dateon-off" accept-charset="UTF-8" id="create-user-form" class="form-horizontal" autocomplete="off">
            {{ csrf_field() }}
        <div class="widget-box widget-color-blue2 width-1100 max-width-1100"> 
         <div class="widget-header"> 
          <h5 class="widget-title bigger"> ข้อมูลงวดหวย </h5> 
         </div> 
         <div class="widget-body"> 
          <div class="widget-main no-padding-bottom"> 
            <div class="form-group"> 
                <label for="name" class="control-label col-xs-1">ชื่องวดหวย :</label> 
                <div class="col-xs-3"> 
                 <input class="form-control" name="name" type="text" id="name" /> 
                 <p style="color:red">{{ $errors->first('name') }}</p>
                </div> 
            </div> 
            <div class="form-group"> 
                <label for="name" class="control-label col-xs-1">วันที่เปิด :</label> 
                <div class="col-xs-3"> 
                    <input class="form-control datepicker" name="day_on" type="text"/> 
                    <p style="color:red">{{ $errors->first('day_on') }}</p>
                </div> 
                <div class="col-xs-2"></div> 
                <label for="phone" class="control-label col-xs-1">วันที่ปิด:</label> 
                <div class="col-xs-3"> 
                    <input class="form-control datepicker" name="day_off" type="text"/> 
                    <p style="color:red">{{ $errors->first('day_off') }}</p>
                </div> 
            </div> 
         </div> 
         </div> 
        </div> 
        <button type="submit" class="btn btn-primary">เพิ่มงวดหวย</button> 
       </form> 

      </div>
      <!-- /.col --> 
     </div>
     <!-- /.row --> 
    </div>
    <!-- /.page-content --> 
   </div>
