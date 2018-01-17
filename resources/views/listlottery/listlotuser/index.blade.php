@extends('master') @section('head')
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
<style>
	.tab-content {
		border: unset;
		padding: 16px 12px;
		position: relative;
	}

	.table-fancy>tfoot>tr {
		border-top: 3px double #999999;
	}
</style>
@endsection @section('content')
<div class="breadcrumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<!-- <a href="#">Home</a> -->
		</li>
		<li>
			รายการแทง
		</li>
		<li>
			ดูของ สมาชิก/ประเภท
		</li>
	</ul>
	<!-- /.breadcrumb -->

	<span id="global-clock" class="pull-right"></span>
</div>
<div class="page-content" id="user-content">
	<div class="row">
		<div id="content" class="col-xs-12">
			<div class="page-header">
				<h1>
					ดูของ สมาชิก/ประเภท
					<small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                  3M3K
                  </small>
				</h1>
				<h4 class="sub">
					<i class="fa fa-angle-right orange"></i>
					<span class="deep-blue">รัฐบาลไทย</span>, งวดวันที่ 16 ตุลาคม 2560
					<span class="smaller near-white"><i>(เปลี่ยนได้ที่แถบเมนูด้านบน)</i></span>
				</h4>
			</div>


			<div class="min-width-800">
				<ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
					<li class="js-change-tab active" data-tab1="general"><a href="#general" data-toggle="tab">แยกตามสมาชิก</a></li>
					<li class="js-change-tab" data-tab1="password"><a href="#password" data-toggle="tab">แยกตามประเภท</a></li>
				</ul>
			</div>
			<div class="space-4"></div>
			<div class="tab-content no-margin-top no-padding width-800 max-width-1100">

				<!-- Tab 1 General -->
				<div class="tab-pane simple active" id="general">
					<table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap enable-check-all" id="by-member-table">
						<thead class="thin-border-bottom">
							<tr>
								<th rowspan="2" class="align-center width-90px">
									ชื่อผู้ใช้<br>
									<label class="inline">
                    <input class="check-all" type="checkbox" id="input-checkbox-name">
                    <span class="lbl"> แสดงชื่อ</span>
                  </label>
								</th>
								<th rowspan="2" class="align-center width-90px">ระดับชั้น</th>
								<th rowspan="2" class="align-center width-90px">ยอดทั้งหมด</th>
								<th colspan="3" class="align-center">สมาชิก</th>
								<th colspan="3" class="align-center"><span id="agent"></span></th>
								<th colspan="3" class="align-center">บริษัท</th>
							</tr>

							<tr>
								<th class="align-center width-90px">ยอดส่งออก</th>
								<th class="align-center width-90px">ค่าคอม</th>
								<th class="align-center width-90px">รวม</th>
								<th class="align-center width-90px">ถือหุ้น</th>
								<th class="align-center width-90px">คอม</th>
								<th class="align-center width-90px">รวม</th>
								<th class="align-center width-90px">ถือหุ้น</th>
								<th class="align-center width-90px">คอม</th>
								<th class="align-center width-90px">รวม</th>
							</tr>
						</thead>

						<tbody id="tbodyuser">

            	
							<tr class="odd">
								<td>
									<a href="" class="ajax"></a>
									<span class="span-name jquery-hide">()</span>
								</td>
					
								<td class="type" nowrap=""></td>
	
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative" id="out_1">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>
          
						</tbody>

						<tfoot class="thin-border-bottom">
							<tr class="even">
								<td colspan="2" class="bolder">รวม :</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
{{--  ////////////////////////////////////////////////////เเยกเเท๊ป/////////////////////////////////////////////////////////////////////////////////////////////////////  --}}
				<!-- Tab 2 Password -->
				<div class="tab-pane simple" id="password">
					<div class="space-4"></div>
					<label for="item-payout-filter">แยกอัตราจ่าย</label>
					<select id="item-payout-filter" name="item-payout-filter">
            <option value="0" selected="selected">ทั้งหมด</option>
            <option value="5">หวยรัฐ 70</option>
            <option value="11">หวย 70</option>
          </select>
					<div class="space-4"></div>
					<table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap" id="by-type-table">
						<thead class="thin-border-bottom">
							<tr>
								<th rowspan="2" class="align-center width-90px">ประเภท</th>
								<th rowspan="2" class="align-center width-90px">ยอดทั้งหมด</th>
								<th colspan="3" class="align-center">สมาชิก</th>
								<th colspan="3" class="align-center">เอเย่นต์ [3M3K]</th>
								<th colspan="3" class="align-center">บริษัท</th>
							</tr>
							<tr>
								<th class="align-center width-90px">ยอดส่งออก</th>
								<th class="align-center width-90px">ค่าคอม</th>
								<th class="align-center width-90px">รวม</th>
								<th class="align-center width-90px">ถือหุ้น</th>
								<th class="align-center width-90px">คอม</th>
								<th class="align-center width-90px">รวม</th>
								<th class="align-center width-90px">ถือหุ้น</th>
								<th class="align-center width-90px">คอม</th>
								<th class="align-center width-90px">รวม</th>
							</tr>
						</thead>

						<tbody>


							<tr class="">
								<td class="align-center bolder bg-green3" colspan="99">3 ตัวท้าย</td>
							</tr>

							<tr class="even">
								<td class="bolder">3 ตัวบน</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">3 ตัวล่าง</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>


							<tr class="even">
								<td class="bolder">3 ตัวโต๊ด</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">2 ตัวบน</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-}<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive">}<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">2 ตัวล่าง</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">2 ตัวโต๊ด</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">วิ่งบน</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">วิ่งล่าง</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>
						</tbody>

						<tfoot class="thin-border-bottom">
							<tr class="even">
								<td class="bolder">รวม :</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span></span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span></span></span>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			{{--
			<ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
				<li class="active">
					<a href="https://agent.superlot999.com/items/by-member" class="ajax">แยกตามสมาชิก</a>
				</li>

				<li>
					<a href="https://agent.superlot999.com/items/by-type" class="ajax">แยกตามประเภท</a>
				</li>
			</ul>

			<div class="space-4"></div>

			<table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap enable-check-all" id="by-member-table">
				<thead class="thin-border-bottom">
					<tr>
						<th rowspan="2" class="align-center width-90px">
							ชื่อผู้ใช้<br>
							<label class="inline">
          <input class="check-all" type="checkbox" id="input-checkbox-name">
          <span class="lbl"> แสดงชื่อ</span>
        </label>
						</th>
						<th rowspan="2" class="align-center width-90px">ระดับชั้น</th>
						<th rowspan="2" class="align-center width-90px">ยอดทั้งหมด</th>
						<th colspan="3" class="align-center">สมาชิก</th>
						<th colspan="3" class="align-center">เอเย่นต์ [3M3K]</th>
						<th colspan="3" class="align-center">บริษัท</th>
					</tr>

					<tr>
						<th class="align-center width-90px">ยอดส่งออก</th>
						<th class="align-center width-90px">ค่าคอม</th>
						<th class="align-center width-90px">รวม</th>
						<th class="align-center width-90px">ถือหุ้น</th>
						<th class="align-center width-90px">คอม</th>
						<th class="align-center width-90px">รวม</th>
						<th class="align-center width-90px">ถือหุ้น</th>
						<th class="align-center width-90px">คอม</th>
						<th class="align-center width-90px">รวม</th>
					</tr>
				</thead>

				<tbody>

				</tbody>

				<tfoot class="thin-border-bottom">
					<tr class="odd">
						<td colspan="2" class="bolder">รวม :</td>
						<td class="align-right dark-blue bolder n2 bg-blue">0.00</td>
						<td class="align-right n2c">0.00</td>
						<td class="align-right n2c">0.00</td>
						<td class="align-right n2c">0.00</td>
						<td class="align-right n2c bg-yellow">0.00</td>
						<td class="align-right n2c bg-yellow">0.00</td>
						<td class="align-right n2c bg-yellow">0.00</td>
						<td class="align-right n2c">0.00</td>
						<td class="align-right n2c">0.00</td>
						<td class="align-right n2c">0.00</td>
					</tr>
				</tfoot>
			</table> --}}

			{{--  <script>
				$.each($('tbody tr, tfoot tr'), function(key, value) {
    $(this).addClass(key % 2 == 0 ? 'odd' : 'even');
  });
  $.each($('.n2'), function(key, value) {
    $(this).html(n2($(this).text()));
  });
  $.each($('.n2c'), function(key, value) {
    $(this).html(n2c($(this).text()));
  });
			</script>  --}}
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
@endsection @section('footer')
<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);

</script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--
<script src="/dist/js/pages/dashboard.js"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script language="JavaScript" type="text/javascript">
	$(function(){
	  $('.getdatelot').on('click', function(){    
		
		var id = $(this).attr("vaule");
	   // console.log(id);
		$.get('/listlottery/listlotuser2', {
		  id
		}).done(function(response){
			$("tr.odd").remove();
			console.log(response);
			for(var i=0;i<response.usebets.length;i++){

				$.each(response.usebets[i], function(key1, value1) {
					//console.log(value1.member.level);	
					console.log(response.member_name[i]);	
					if(response.member_name[i]){
						$("#tbodyuser").append('	<tr class="odd"><td><a href="'+value1.member.level
							+'" class="ajax"><span class="span-name jquery-hide">'+response.member_name[i]
							+'()</span></a></td><td class="type" nowrap="">'+value1.member.level
							+'</td><td class="align-right dark-blue bolder n2 bg-blue">'+response.usersum_s[i]
							+'</td><td class="align-right n2c"><span class="negative" id="out_1">'+response.usersum_s[i]
							+'<span></span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.usercom_s[i]
							+'</span></span></td><td class="align-right n2c"><span class="negative">-<span>'+response.usersumall[i]
							+'</span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span>'+response.agsum_s[i]
							+'</span></span></td><td class="align-right n2c bg-yellow"><span class="negative">-<span>'+response.agcom_s[i]
							+'</span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span>'+response.agsumall[i]
							+'</span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="negative">-<span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></tr>');
						}
					}			
				);	
				//$("#by-member-table").append('<tbody></tbody>');
			}
			
			//$.each(value[key], function(key1, value1) {
				//alert(value1);
				//$("tbody").html('<tr class="odd"><td><a href="" class="ajax"></a><span class="span-name jquery-hide">()</span></td><td class="type" nowrap=""></td><td class="align-right dark-blue bolder n2 bg-blue"></td><td class="align-right n2c"><span class="negative" id="out_1">-<span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="negative">-<span></span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span></span></span></td><td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="negative">-<span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></tr><tr class="odd"><td><a href="" class="ajax"></a><span class="span-name jquery-hide">()</span></td><td class="type" nowrap=""></td><td class="align-right dark-blue bolder n2 bg-blue"></td><td class="align-right n2c"><span class="negative" id="out_1">-<span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="negative">-<span></span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span></span></span></td><td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="negative">-<span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></tr>');
				//$("tbody").html('<tr class="odd"><td><a href="" class="ajax"></a><span class="span-name jquery-hide">()</span></td><td class="type" nowrap=""></td><td class="align-right dark-blue bolder n2 bg-blue"></td><td class="align-right n2c"><span class="negative" id="out_1">-<span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="negative">-<span></span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span></span></span></td><td class="align-right n2c bg-yellow"><span class="negative">-<span></span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></td><td class="align-right n2c"><span class="negative">-<span></span></span></td><td class="align-right n2c"><span class="positive"><span></span></span></tr>');
				//if(value1){
				//alert(":"+value1);					
				//}

			  //$(this).html(n2($(this).text()));
  
			//});
		  //});
		 
		  //console.log(response.lotto.name);
		  $('#navbar-game-title').html(response.lotto.name);
		  $('#agent').html(response.levellog);
		});
  
		});
	  });
   
  </script>
@endsection