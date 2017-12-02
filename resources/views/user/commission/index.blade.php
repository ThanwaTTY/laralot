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
<link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css"> {{--
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
<link rel="stylesheet" href="/css/custom2.css"> @endsection @section('footer')
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
<script>
	$(function(){
        $('a[href="#payout"]').click(function(){
            $('li[data-tab2]').removeClass( "active" );
        });
        $('a[href="#com"]').click(function(){
            $('li[data-tab2]').removeClass( "active" );

        });
    });

</script>

@endsection @section('content') @if($errors->all())
<div class="box-body">
	<div class="alert alert-warning alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h4><i class="icon fa fa-warning"></i> Alert!</h4>
		@foreach($errors->all() as $message) {{ $message }}. <br> @endforeach
	</div>
</div>
@endif


<div class="main-content">
	<!-- #section:basics/content.breadcrumbs -->
	<div class="breadcrumbs">
		<ul id="breadcrumbs" class="breadcrumb">
			<li> <i class="ace-icon fa fa-home home-icon"></i>
				<!-- <a href="#">Home</a> --></li>
			<li> จัดการสมาชิก </li>
			<li> 4. อัตราจ่าย/คอมมิชชั่น </li>
		</ul>
		<!-- /.breadcrumb -->
		<span id="global-clock" class="pull-right"></span>
	</div>
	<!-- /section:basics/content.breadcrumbs -->
	<div class="page-content" id="user-content">
		<div class="row">
			<div id="content" class="col-xs-12">
				<div class="page-header">
					<h1>
						3. ขั้นต่ำ/สูงสุด/สูงสุดต่อเลข
						<small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  <a href="https://agent.superlot999.com/users/edit2/9306?tab1=min&amp;tab2=1&amp;order=username_asc" class="ajax">3M3K</a>
              </small>
					</h1>
				</div>

				<div class="alert alert-info">
					<b>สูงสุด</b> = สูงสุดต่อ1โพย<br>
					<b>สูงสุดต่อหมายเลข</b> = สูงสุดต่อหมายเลขต่อ1สมาชิก<br>
					<b>สถานะ:</b> <span class="bg-warning">เหลือง=ระงับ</span>, <span class="bg-danger">แดง=ล็อค</span>
				</div>

				<label class="inline">
            
            <input type="checkbox" value="Y" id="mastercheck">
            <span class="lbl"> แสดงชื่อ</span>
          </label>

				<div class="min-width-800 max-width-1100">
					<ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
						<li class="js-change-tab active" data-tab1="payout"><a href="#payout" data-toggle="tab">อัตราจ่าย</a></li>
						<li class="js-change-tab " data-tab1="com"><a href="#com" data-toggle="tab">คอมมิชชั่น</a></li>
						<li class="pull-right right-padding-10 users__edit-options">
							<span class="bolder">แสดง</span>
							<select id="users-edit-filter">
                  <option value="4">ทั้งหมด</option>
                  <option value="1" selected="selected">ปกติ</option>
                  <option value="2">ระงับ</option>
                  <option value="3">ล็อค</option>
                    </select>
							<span class="bolder">เรียง</span>
							<select id="users-edit-order">
                    <option value="" selected="selected">ชื่อสมาชิก ก่อน -&gt; หลัง</option>
                    <option value="">ชื่อสมาชิก หลัง -&gt; ก่อน</option>
                    <option value="">เวลาที่สร้าง ก่อน -&gt; หลัง</option>
                    <option value="">เวลาที่สร้าง หลัง -&gt; ก่อน</option>
                    </select>
						</li>
					</ul>
				</div>

				<div class="tab-content no-border no-margin-top no-padding width-800 max-width-1100" id="users-edit-tab-content">
					<div class="tab-pane active" id="payout" data-action="update-payout" data-parent-id="9306">
						<ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
							<li class="js-change-tab active" data-tab2="2-1">
								<a data-toggle="tab" href="#tab2-1">หวยรัฐ 70</a>
							</li>
							<li class="js-change-tab" data-tab2="2-2">
								<a data-toggle="tab" href="#tab2-2">หวย 70</a>
							</li>
						</ul>

						<div class="tab-content no-padding">
							<div class="tab-content no-border no-margin-top no-padding width-800 max-width-1100" id="users-edit-tab-content">
								<div class="tab-pane active" id="tab2-1" data-action="update-min" data-parent-id="9306">
									<ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
										<li class="js-change-tab3 active" data-tab3="1">
											<a data-toggle="tab" href="#tab2-1">3 ตัวท้าย</a>
										</li>
									</ul>

									<div class="tab-content no-padding">
										อัตราจ่าย / หวยรัฐ 70 / 3 ตัวท้าย {{--
										<div id="min_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">
											<form id="form1" method="POST" action="/min" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit"
											 data-after="reset" class="js-ajax-form">
												<input type="hidden" name="_token" value="WLusuV9LfUHdBelHVtha3xp48vEan0D6BbnRmEbB">
												<table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
													<thead clsss="thin-border-bottom">
														<tr>
															<th colspan="99" class="deep-blue caption">
																ขั้นต่ำ 3 ตัวท้าย
															</th>
														</tr>

														<tr>
															<th colspan="3" class="vm text-center">
																<input name="action" type="hidden" value="min">
																<input name="bet_type_group_id" type="hidden" value="1">
																<button type="submit" id="editMin" class="btn btn-primary btn-xs">แก้ไข</button>
																<a class="btn btn-primary btn-xs">ยกเลิก</a>
															</th>
															<th><input class="check-all" name="" type="checkbox" value="0"></th>
															<th>3 ตัวบน<br>
																<input class="form-control input-sm ac" name="min_1" id="minmin" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>3 ตัวล่าง<br>
																<input class="form-control input-sm ac" name="min_2" id="minmin2" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																3 ตัวโต๊ด<br>
																<input class="form-control input-sm ac" name="min_3" id="minmin3" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวบน<br>
																<input class="form-control input-sm ac" name="min_4" id="minmin4" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวล่าง<br>
																<input class="form-control input-sm ac" name="min_5" id="minmin5" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวโต๊ด<br>
																<input class="form-control input-sm ac" name="min_6" id="minmin6" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																วิ่งบน<br>
																<input class="form-control input-sm ac" name="min_7" id="minmin7" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																วิ่งล่าง<br>
																<input class="form-control input-sm ac" name="min_8" id="minmin8" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
														</tr>
													</thead>
													<tbody>

														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">1</td>
															<td>Master@001 <span class="showname" name="showname" style="display: none;">(Mikael)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="1"></td>
															<td class="table-min-1-row-1-col-min_1">5</td>
															<td class="table-min-1-row-1-col-min_2">5</td>
															<td class="table-min-1-row-1-col-min_3">5</td>
															<td class="table-min-1-row-1-col-min_4">5</td>
															<td class="table-min-1-row-1-col-min_5">5</td>
															<td class="table-min-1-row-1-col-min_6">5</td>
															<td class="table-min-1-row-1-col-min_7">5</td>
															<td class="table-min-1-row-1-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-warning" style="display: none;">
															<td class="id">2</td>
															<td>Master@002 <span class="showname" name="showname" style="display: none;">(Jone)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="2"></td>
															<td class="table-min-1-row-2-col-min_1">5</td>
															<td class="table-min-1-row-2-col-min_2">5</td>
															<td class="table-min-1-row-2-col-min_3">5</td>
															<td class="table-min-1-row-2-col-min_4">5</td>
															<td class="table-min-1-row-2-col-min_5">5</td>
															<td class="table-min-1-row-2-col-min_6">5</td>
															<td class="table-min-1-row-2-col-min_7">5</td>
															<td class="table-min-1-row-2-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-danger" style="display: none;">
															<td class="id">3</td>
															<td>Master@003 <span class="showname" name="showname" style="display: none;">(Lulu)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="3"></td>
															<td class="table-min-1-row-3-col-min_1">5</td>
															<td class="table-min-1-row-3-col-min_2">5</td>
															<td class="table-min-1-row-3-col-min_3">5</td>
															<td class="table-min-1-row-3-col-min_4">5</td>
															<td class="table-min-1-row-3-col-min_5">5</td>
															<td class="table-min-1-row-3-col-min_6">5</td>
															<td class="table-min-1-row-3-col-min_7">5</td>
															<td class="table-min-1-row-3-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-danger" style="display: none;">
															<td class="id">4</td>
															<td>Master@004 <span class="showname" name="showname" style="display: none;">(Nami)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="4"></td>
															<td class="table-min-1-row-4-col-min_1">5</td>
															<td class="table-min-1-row-4-col-min_2">5</td>
															<td class="table-min-1-row-4-col-min_3">5</td>
															<td class="table-min-1-row-4-col-min_4">5</td>
															<td class="table-min-1-row-4-col-min_5">5</td>
															<td class="table-min-1-row-4-col-min_6">5</td>
															<td class="table-min-1-row-4-col-min_7">5</td>
															<td class="table-min-1-row-4-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-warning" style="display: none;">
															<td class="id">5</td>
															<td>Master@005 <span class="showname" name="showname" style="display: none;">(Katalina)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="5"></td>
															<td class="table-min-1-row-5-col-min_1">5</td>
															<td class="table-min-1-row-5-col-min_2">5</td>
															<td class="table-min-1-row-5-col-min_3">5</td>
															<td class="table-min-1-row-5-col-min_4">5</td>
															<td class="table-min-1-row-5-col-min_5">5</td>
															<td class="table-min-1-row-5-col-min_6">5</td>
															<td class="table-min-1-row-5-col-min_7">5</td>
															<td class="table-min-1-row-5-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">6</td>
															<td>Master@006 <span class="showname" name="showname" style="display: none;">(Kalista)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="6"></td>
															<td class="table-min-1-row-6-col-min_1">5</td>
															<td class="table-min-1-row-6-col-min_2">5</td>
															<td class="table-min-1-row-6-col-min_3">5</td>
															<td class="table-min-1-row-6-col-min_4">5</td>
															<td class="table-min-1-row-6-col-min_5">5</td>
															<td class="table-min-1-row-6-col-min_6">5</td>
															<td class="table-min-1-row-6-col-min_7">5</td>
															<td class="table-min-1-row-6-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">7</td>
															<td>Master@007 <span class="showname" name="showname" style="display: none;">(Mordekaiser)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="7"></td>
															<td class="table-min-1-row-7-col-min_1">5</td>
															<td class="table-min-1-row-7-col-min_2">5</td>
															<td class="table-min-1-row-7-col-min_3">5</td>
															<td class="table-min-1-row-7-col-min_4">5</td>
															<td class="table-min-1-row-7-col-min_5">5</td>
															<td class="table-min-1-row-7-col-min_6">5</td>
															<td class="table-min-1-row-7-col-min_7">5</td>
															<td class="table-min-1-row-7-col-min_8">5</td>
														</tr>

													</tbody>
												</table>
											</form>
										</div>
										--}}

									</div>
								</div>
								<div class="tab-pane " id="tab2-2" data-action="update-min" data-parent-id="9306">
									<ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
										<li class="js-change-tab3 active" data-tab3="2">
											<a data-toggle="tab" href="#tab2-2">3 ตัวท้าย</a>
										</li>
									</ul>

									<div class="tab-content no-padding">
										อัตราจ่าย / หวย 70 / 3 ตัวท้าย {{--
										<div id="min_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">
											<form id="form1" method="POST" action="/min" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit"
											 data-after="reset" class="js-ajax-form">
												<input type="hidden" name="_token" value="WLusuV9LfUHdBelHVtha3xp48vEan0D6BbnRmEbB">
												<table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
													<thead clsss="thin-border-bottom">
														<tr>
															<th colspan="99" class="deep-blue caption">
																ขั้นต่ำ 3 ตัวท้าย
															</th>
														</tr>

														<tr>
															<th colspan="3" class="vm text-center">
																<input name="action" type="hidden" value="min">
																<input name="bet_type_group_id" type="hidden" value="1">
																<button type="submit" id="editMin" class="btn btn-primary btn-xs">แก้ไข</button>
																<a class="btn btn-primary btn-xs">ยกเลิก</a>
															</th>
															<th><input class="check-all" name="" type="checkbox" value="0"></th>
															<th>3 ตัวบน<br>
																<input class="form-control input-sm ac" name="min_1" id="minmin" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>3 ตัวล่าง<br>
																<input class="form-control input-sm ac" name="min_2" id="minmin2" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																3 ตัวโต๊ด<br>
																<input class="form-control input-sm ac" name="min_3" id="minmin3" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวบน<br>
																<input class="form-control input-sm ac" name="min_4" id="minmin4" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวล่าง<br>
																<input class="form-control input-sm ac" name="min_5" id="minmin5" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวโต๊ด<br>
																<input class="form-control input-sm ac" name="min_6" id="minmin6" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																วิ่งบน<br>
																<input class="form-control input-sm ac" name="min_7" id="minmin7" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																วิ่งล่าง<br>
																<input class="form-control input-sm ac" name="min_8" id="minmin8" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
														</tr>
													</thead>
													<tbody>

														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">1</td>
															<td>Master@001 <span class="showname" name="showname" style="display: none;">(Mikael)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="1"></td>
															<td class="table-min-1-row-1-col-min_1">5</td>
															<td class="table-min-1-row-1-col-min_2">5</td>
															<td class="table-min-1-row-1-col-min_3">5</td>
															<td class="table-min-1-row-1-col-min_4">5</td>
															<td class="table-min-1-row-1-col-min_5">5</td>
															<td class="table-min-1-row-1-col-min_6">5</td>
															<td class="table-min-1-row-1-col-min_7">5</td>
															<td class="table-min-1-row-1-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-warning" style="display: none;">
															<td class="id">2</td>
															<td>Master@002 <span class="showname" name="showname" style="display: none;">(Jone)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="2"></td>
															<td class="table-min-1-row-2-col-min_1">5</td>
															<td class="table-min-1-row-2-col-min_2">5</td>
															<td class="table-min-1-row-2-col-min_3">5</td>
															<td class="table-min-1-row-2-col-min_4">5</td>
															<td class="table-min-1-row-2-col-min_5">5</td>
															<td class="table-min-1-row-2-col-min_6">5</td>
															<td class="table-min-1-row-2-col-min_7">5</td>
															<td class="table-min-1-row-2-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-danger" style="display: none;">
															<td class="id">3</td>
															<td>Master@003 <span class="showname" name="showname" style="display: none;">(Lulu)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="3"></td>
															<td class="table-min-1-row-3-col-min_1">5</td>
															<td class="table-min-1-row-3-col-min_2">5</td>
															<td class="table-min-1-row-3-col-min_3">5</td>
															<td class="table-min-1-row-3-col-min_4">5</td>
															<td class="table-min-1-row-3-col-min_5">5</td>
															<td class="table-min-1-row-3-col-min_6">5</td>
															<td class="table-min-1-row-3-col-min_7">5</td>
															<td class="table-min-1-row-3-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-danger" style="display: none;">
															<td class="id">4</td>
															<td>Master@004 <span class="showname" name="showname" style="display: none;">(Nami)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="4"></td>
															<td class="table-min-1-row-4-col-min_1">5</td>
															<td class="table-min-1-row-4-col-min_2">5</td>
															<td class="table-min-1-row-4-col-min_3">5</td>
															<td class="table-min-1-row-4-col-min_4">5</td>
															<td class="table-min-1-row-4-col-min_5">5</td>
															<td class="table-min-1-row-4-col-min_6">5</td>
															<td class="table-min-1-row-4-col-min_7">5</td>
															<td class="table-min-1-row-4-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-warning" style="display: none;">
															<td class="id">5</td>
															<td>Master@005 <span class="showname" name="showname" style="display: none;">(Katalina)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="5"></td>
															<td class="table-min-1-row-5-col-min_1">5</td>
															<td class="table-min-1-row-5-col-min_2">5</td>
															<td class="table-min-1-row-5-col-min_3">5</td>
															<td class="table-min-1-row-5-col-min_4">5</td>
															<td class="table-min-1-row-5-col-min_5">5</td>
															<td class="table-min-1-row-5-col-min_6">5</td>
															<td class="table-min-1-row-5-col-min_7">5</td>
															<td class="table-min-1-row-5-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">6</td>
															<td>Master@006 <span class="showname" name="showname" style="display: none;">(Kalista)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="6"></td>
															<td class="table-min-1-row-6-col-min_1">5</td>
															<td class="table-min-1-row-6-col-min_2">5</td>
															<td class="table-min-1-row-6-col-min_3">5</td>
															<td class="table-min-1-row-6-col-min_4">5</td>
															<td class="table-min-1-row-6-col-min_5">5</td>
															<td class="table-min-1-row-6-col-min_6">5</td>
															<td class="table-min-1-row-6-col-min_7">5</td>
															<td class="table-min-1-row-6-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">7</td>
															<td>Master@007 <span class="showname" name="showname" style="display: none;">(Mordekaiser)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="7"></td>
															<td class="table-min-1-row-7-col-min_1">5</td>
															<td class="table-min-1-row-7-col-min_2">5</td>
															<td class="table-min-1-row-7-col-min_3">5</td>
															<td class="table-min-1-row-7-col-min_4">5</td>
															<td class="table-min-1-row-7-col-min_5">5</td>
															<td class="table-min-1-row-7-col-min_6">5</td>
															<td class="table-min-1-row-7-col-min_7">5</td>
															<td class="table-min-1-row-7-col-min_8">5</td>
														</tr>

													</tbody>
												</table>
											</form>
										</div> --}}

									</div>
								</div>

							</div>
						</div>


					</div>
					<div class="tab-pane " id="com" data-action="update-com" data-parent-id="9306">
						<ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
							<li class="js-change-tab " data-tab2="2-3">
								<a data-toggle="tab" href="#tab2-3">หวยรัฐ 70</a>
							</li>
							<li class="js-change-tab" data-tab2="2-4">
								<a data-toggle="tab" href="#tab2-4">หวย 70</a>
							</li>
						</ul>

						<div class="tab-content no-padding">
							<div class="tab-content no-border no-margin-top no-padding width-800 max-width-1100" id="users-edit-tab-content">
								<div class="tab-pane" id="tab2-3" data-action="active" data-parent-id="9306">
									<ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
										<li class="js-change-tab3 active" data-tab3="3">
											<a data-toggle="tab" href="#tab2-3">3 ตัวท้าย</a>
										</li>
									</ul>

									<div class="tab-content no-padding">
										คอมมิชชั่น / หวยรัฐ 70 / 3 ตัวท้าย {{--
										<div id="min_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">
											<form id="form1" method="POST" action="/min" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit"
											 data-after="reset" class="js-ajax-form">
												<input type="hidden" name="_token" value="WLusuV9LfUHdBelHVtha3xp48vEan0D6BbnRmEbB">
												<table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
													<thead clsss="thin-border-bottom">
														<tr>
															<th colspan="99" class="deep-blue caption">
																ขั้นต่ำ 3 ตัวท้าย
															</th>
														</tr>

														<tr>
															<th colspan="3" class="vm text-center">
																<input name="action" type="hidden" value="min">
																<input name="bet_type_group_id" type="hidden" value="1">
																<button type="submit" id="editMin" class="btn btn-primary btn-xs">แก้ไข</button>
																<a class="btn btn-primary btn-xs">ยกเลิก</a>
															</th>
															<th><input class="check-all" name="" type="checkbox" value="0"></th>
															<th>3 ตัวบน<br>
																<input class="form-control input-sm ac" name="min_1" id="minmin" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>3 ตัวล่าง<br>
																<input class="form-control input-sm ac" name="min_2" id="minmin2" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																3 ตัวโต๊ด<br>
																<input class="form-control input-sm ac" name="min_3" id="minmin3" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวบน<br>
																<input class="form-control input-sm ac" name="min_4" id="minmin4" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวล่าง<br>
																<input class="form-control input-sm ac" name="min_5" id="minmin5" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวโต๊ด<br>
																<input class="form-control input-sm ac" name="min_6" id="minmin6" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																วิ่งบน<br>
																<input class="form-control input-sm ac" name="min_7" id="minmin7" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																วิ่งล่าง<br>
																<input class="form-control input-sm ac" name="min_8" id="minmin8" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
														</tr>
													</thead>
													<tbody>

														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">1</td>
															<td>Master@001 <span class="showname" name="showname" style="display: none;">(Mikael)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="1"></td>
															<td class="table-min-1-row-1-col-min_1">5</td>
															<td class="table-min-1-row-1-col-min_2">5</td>
															<td class="table-min-1-row-1-col-min_3">5</td>
															<td class="table-min-1-row-1-col-min_4">5</td>
															<td class="table-min-1-row-1-col-min_5">5</td>
															<td class="table-min-1-row-1-col-min_6">5</td>
															<td class="table-min-1-row-1-col-min_7">5</td>
															<td class="table-min-1-row-1-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-warning" style="display: none;">
															<td class="id">2</td>
															<td>Master@002 <span class="showname" name="showname" style="display: none;">(Jone)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="2"></td>
															<td class="table-min-1-row-2-col-min_1">5</td>
															<td class="table-min-1-row-2-col-min_2">5</td>
															<td class="table-min-1-row-2-col-min_3">5</td>
															<td class="table-min-1-row-2-col-min_4">5</td>
															<td class="table-min-1-row-2-col-min_5">5</td>
															<td class="table-min-1-row-2-col-min_6">5</td>
															<td class="table-min-1-row-2-col-min_7">5</td>
															<td class="table-min-1-row-2-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-danger" style="display: none;">
															<td class="id">3</td>
															<td>Master@003 <span class="showname" name="showname" style="display: none;">(Lulu)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="3"></td>
															<td class="table-min-1-row-3-col-min_1">5</td>
															<td class="table-min-1-row-3-col-min_2">5</td>
															<td class="table-min-1-row-3-col-min_3">5</td>
															<td class="table-min-1-row-3-col-min_4">5</td>
															<td class="table-min-1-row-3-col-min_5">5</td>
															<td class="table-min-1-row-3-col-min_6">5</td>
															<td class="table-min-1-row-3-col-min_7">5</td>
															<td class="table-min-1-row-3-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-danger" style="display: none;">
															<td class="id">4</td>
															<td>Master@004 <span class="showname" name="showname" style="display: none;">(Nami)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="4"></td>
															<td class="table-min-1-row-4-col-min_1">5</td>
															<td class="table-min-1-row-4-col-min_2">5</td>
															<td class="table-min-1-row-4-col-min_3">5</td>
															<td class="table-min-1-row-4-col-min_4">5</td>
															<td class="table-min-1-row-4-col-min_5">5</td>
															<td class="table-min-1-row-4-col-min_6">5</td>
															<td class="table-min-1-row-4-col-min_7">5</td>
															<td class="table-min-1-row-4-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-warning" style="display: none;">
															<td class="id">5</td>
															<td>Master@005 <span class="showname" name="showname" style="display: none;">(Katalina)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="5"></td>
															<td class="table-min-1-row-5-col-min_1">5</td>
															<td class="table-min-1-row-5-col-min_2">5</td>
															<td class="table-min-1-row-5-col-min_3">5</td>
															<td class="table-min-1-row-5-col-min_4">5</td>
															<td class="table-min-1-row-5-col-min_5">5</td>
															<td class="table-min-1-row-5-col-min_6">5</td>
															<td class="table-min-1-row-5-col-min_7">5</td>
															<td class="table-min-1-row-5-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">6</td>
															<td>Master@006 <span class="showname" name="showname" style="display: none;">(Kalista)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="6"></td>
															<td class="table-min-1-row-6-col-min_1">5</td>
															<td class="table-min-1-row-6-col-min_2">5</td>
															<td class="table-min-1-row-6-col-min_3">5</td>
															<td class="table-min-1-row-6-col-min_4">5</td>
															<td class="table-min-1-row-6-col-min_5">5</td>
															<td class="table-min-1-row-6-col-min_6">5</td>
															<td class="table-min-1-row-6-col-min_7">5</td>
															<td class="table-min-1-row-6-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">7</td>
															<td>Master@007 <span class="showname" name="showname" style="display: none;">(Mordekaiser)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="7"></td>
															<td class="table-min-1-row-7-col-min_1">5</td>
															<td class="table-min-1-row-7-col-min_2">5</td>
															<td class="table-min-1-row-7-col-min_3">5</td>
															<td class="table-min-1-row-7-col-min_4">5</td>
															<td class="table-min-1-row-7-col-min_5">5</td>
															<td class="table-min-1-row-7-col-min_6">5</td>
															<td class="table-min-1-row-7-col-min_7">5</td>
															<td class="table-min-1-row-7-col-min_8">5</td>
														</tr>

													</tbody>
												</table>
											</form>
										</div>
										--}}

									</div>
								</div>
								<div class="tab-pane " id="tab2-4" data-action="update-min" data-parent-id="9306">
									<ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
										<li class="js-change-tab3 active" data-tab3="4">
											<a data-toggle="tab" href="#tab2-4">3 ตัวท้าย</a>
										</li>
									</ul>

									<div class="tab-content no-padding">
										คอมมิชชั่น / หวย 70 / 3 ตัวท้าย {{--
										<div id="min_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">
											<form id="form1" method="POST" action="/min" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit"
											 data-after="reset" class="js-ajax-form">
												<input type="hidden" name="_token" value="WLusuV9LfUHdBelHVtha3xp48vEan0D6BbnRmEbB">
												<table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
													<thead clsss="thin-border-bottom">
														<tr>
															<th colspan="99" class="deep-blue caption">
																ขั้นต่ำ 3 ตัวท้าย
															</th>
														</tr>

														<tr>
															<th colspan="3" class="vm text-center">
																<input name="action" type="hidden" value="min">
																<input name="bet_type_group_id" type="hidden" value="1">
																<button type="submit" id="editMin" class="btn btn-primary btn-xs">แก้ไข</button>
																<a class="btn btn-primary btn-xs">ยกเลิก</a>
															</th>
															<th><input class="check-all" name="" type="checkbox" value="0"></th>
															<th>3 ตัวบน<br>
																<input class="form-control input-sm ac" name="min_1" id="minmin" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>3 ตัวล่าง<br>
																<input class="form-control input-sm ac" name="min_2" id="minmin2" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																3 ตัวโต๊ด<br>
																<input class="form-control input-sm ac" name="min_3" id="minmin3" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวบน<br>
																<input class="form-control input-sm ac" name="min_4" id="minmin4" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวล่าง<br>
																<input class="form-control input-sm ac" name="min_5" id="minmin5" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																2 ตัวโต๊ด<br>
																<input class="form-control input-sm ac" name="min_6" id="minmin6" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																วิ่งบน<br>
																<input class="form-control input-sm ac" name="min_7" id="minmin7" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
															<th>
																วิ่งล่าง<br>
																<input class="form-control input-sm ac" name="min_8" id="minmin8" type="text" value=""> &gt;=
																<a href="#" class="fill-input" tabindex="-1">5</a>
															</th>
														</tr>
													</thead>
													<tbody>

														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">1</td>
															<td>Master@001 <span class="showname" name="showname" style="display: none;">(Mikael)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="1"></td>
															<td class="table-min-1-row-1-col-min_1">5</td>
															<td class="table-min-1-row-1-col-min_2">5</td>
															<td class="table-min-1-row-1-col-min_3">5</td>
															<td class="table-min-1-row-1-col-min_4">5</td>
															<td class="table-min-1-row-1-col-min_5">5</td>
															<td class="table-min-1-row-1-col-min_6">5</td>
															<td class="table-min-1-row-1-col-min_7">5</td>
															<td class="table-min-1-row-1-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-warning" style="display: none;">
															<td class="id">2</td>
															<td>Master@002 <span class="showname" name="showname" style="display: none;">(Jone)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="2"></td>
															<td class="table-min-1-row-2-col-min_1">5</td>
															<td class="table-min-1-row-2-col-min_2">5</td>
															<td class="table-min-1-row-2-col-min_3">5</td>
															<td class="table-min-1-row-2-col-min_4">5</td>
															<td class="table-min-1-row-2-col-min_5">5</td>
															<td class="table-min-1-row-2-col-min_6">5</td>
															<td class="table-min-1-row-2-col-min_7">5</td>
															<td class="table-min-1-row-2-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-danger" style="display: none;">
															<td class="id">3</td>
															<td>Master@003 <span class="showname" name="showname" style="display: none;">(Lulu)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="3"></td>
															<td class="table-min-1-row-3-col-min_1">5</td>
															<td class="table-min-1-row-3-col-min_2">5</td>
															<td class="table-min-1-row-3-col-min_3">5</td>
															<td class="table-min-1-row-3-col-min_4">5</td>
															<td class="table-min-1-row-3-col-min_5">5</td>
															<td class="table-min-1-row-3-col-min_6">5</td>
															<td class="table-min-1-row-3-col-min_7">5</td>
															<td class="table-min-1-row-3-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-danger" style="display: none;">
															<td class="id">4</td>
															<td>Master@004 <span class="showname" name="showname" style="display: none;">(Nami)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="4"></td>
															<td class="table-min-1-row-4-col-min_1">5</td>
															<td class="table-min-1-row-4-col-min_2">5</td>
															<td class="table-min-1-row-4-col-min_3">5</td>
															<td class="table-min-1-row-4-col-min_4">5</td>
															<td class="table-min-1-row-4-col-min_5">5</td>
															<td class="table-min-1-row-4-col-min_6">5</td>
															<td class="table-min-1-row-4-col-min_7">5</td>
															<td class="table-min-1-row-4-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide bg-warning" style="display: none;">
															<td class="id">5</td>
															<td>Master@005 <span class="showname" name="showname" style="display: none;">(Katalina)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="5"></td>
															<td class="table-min-1-row-5-col-min_1">5</td>
															<td class="table-min-1-row-5-col-min_2">5</td>
															<td class="table-min-1-row-5-col-min_3">5</td>
															<td class="table-min-1-row-5-col-min_4">5</td>
															<td class="table-min-1-row-5-col-min_5">5</td>
															<td class="table-min-1-row-5-col-min_6">5</td>
															<td class="table-min-1-row-5-col-min_7">5</td>
															<td class="table-min-1-row-5-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">6</td>
															<td>Master@006 <span class="showname" name="showname" style="display: none;">(Kalista)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="6"></td>
															<td class="table-min-1-row-6-col-min_1">5</td>
															<td class="table-min-1-row-6-col-min_2">5</td>
															<td class="table-min-1-row-6-col-min_3">5</td>
															<td class="table-min-1-row-6-col-min_4">5</td>
															<td class="table-min-1-row-6-col-min_5">5</td>
															<td class="table-min-1-row-6-col-min_6">5</td>
															<td class="table-min-1-row-6-col-min_7">5</td>
															<td class="table-min-1-row-6-col-min_8">5</td>
														</tr>


														<tr data-id="9474" data-status="1" class="jquery-hide nomal">
															<td class="id">7</td>
															<td>Master@007 <span class="showname" name="showname" style="display: none;">(Mordekaiser)</span></td>
															<td class="type" nowrap="">Member</td>
															<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="7"></td>
															<td class="table-min-1-row-7-col-min_1">5</td>
															<td class="table-min-1-row-7-col-min_2">5</td>
															<td class="table-min-1-row-7-col-min_3">5</td>
															<td class="table-min-1-row-7-col-min_4">5</td>
															<td class="table-min-1-row-7-col-min_5">5</td>
															<td class="table-min-1-row-7-col-min_6">5</td>
															<td class="table-min-1-row-7-col-min_7">5</td>
															<td class="table-min-1-row-7-col-min_8">5</td>
														</tr>

													</tbody>
												</table>
											</form>
										</div> --}}

									</div>
								</div>

							</div>
						</div>


					</div>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.page-content -->
	</div>




	@endsection