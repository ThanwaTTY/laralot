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
<link rel="stylesheet" href="/css/custom2.css"> @endsection @section('footer')
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
{{--
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/plugins/input-mask/jquery.inputmask.js"></script>

<script>
	$(function () {
    //Money Euro
    $("[data-mask]").inputmask();
  });

</script> --}} @endsection @section('content')
<div class="breadcrumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<!-- <a href="#">Home</a> -->
		</li>
		<li>
			จัดการสมาชิก
		</li>
		<li>
			1. เพิ่มสมาชิก
		</li>
	</ul>
	<!-- /.breadcrumb -->
	<span id="global-clock" class="pull-right"></span>
</div>

{{--
<section class="content-header">
	<div class="page-header">
		<h1>1. เพิ่มสมาชิก</h1>
	</div>
</section> --}}
<div class="page-content" id="user-content">
	<div class="row">
		<div id="content" class="col-xs-12">
			<div class="page-header">
				<h1>1. เพิ่มสมาชิก</h1>
			</div>

			<div class="alert alert-info hidden" id="info">กำลังโหลด...</div>
			<div class="alert alert-success hidden" id="success"></div>
			@if($errors->all())
			<div class="alert alert-danger" id="error" style="">
				@foreach($errors->all() as $message) {{ $message }}. <br> @endforeach
			</div>
			{{--
			<div class="box-body">
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Alert!</h4>
					@foreach($errors->all() as $message) {{ $message }}. <br> @endforeach
				</div>
			</div> --}} @endif

			<form method="POST" action="{{ route('members.store') }}" accept-charset="UTF-8" id="create-user-form" class="form-horizontal"
			 autocomplete="off"><input name="_token" type="hidden" value="uxxSpiZ338ZTX1mxPhKq1ql7p446dvtlqPlNnN6n"> {{ csrf_field() }}
				<div class="widget-box widget-color-blue2 width-1100 max-width-1100">
					<div class="widget-header">
						<h5 class="widget-title bigger">
							ข้อมูลสมาชิก
						</h5>
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
					@endif @if(session()->get('massage'))
					<div class="box">
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                          <i class="fa fa-times"></i></button>
						</div>
						<div class="callout callout-danger">
							<h4>Fail !</h4>
							<p>{{ session()->get('massage') }}</p>
						</div>
					</div>
					@endif
					<div class="widget-body">
						<div class="widget-main no-padding-bottom">
							<div class="form-group has-feedback{{ $errors->has('level') ? ' has-error' : '' }}">
								<label for="level" class="control-label col-xs-1" autofill="false">ระดับ:</label>
								<div class="col-xs-3">
									<select class="form-control" id="level" name="level">
                              
							  @if(auth()->user()->level ==6)
                                  <option value="7">Member</option>
                              @elseif(auth()->user()->level ==5)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                              @elseif(auth()->user()->level ==4)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                                  <option value="5">Master</option>
                               @elseif(auth()->user()->level ==3)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                                  <option value="5">Master</option>
                                  <option value="4">Senior</option>
                               @elseif(auth()->user()->level ==2)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                                  <option value="5">Master</option>
                                  <option value="4">Senior</option>
                                  <option value="3">Super Senior</option>
                               @elseif(auth()->user()->level ==1)
                                  <option value="7">Member</option>
                                  <option value="6">agent</option>
                                  <option value="5">Master</option>
                                  <option value="4">Senior</option>
                                  <option value="3">Super Senior</option>
                                  <option value="2">Pathner</option>
                               @endif
                               </select>
									<p style="color:red">{{ $errors->first('level') }}</p>
								</div>

								<div class="col-xs-2"></div>

								<div class="has-feedback{{ $errors->has('credit') ? ' has-error' : '' }}">
									<label for="credit" class="control-label col-xs-1">เครดิต:</label>
									<div class="col-xs-3">
										<input class="form-control" id="credit" name="credit" type="text" data-limit="{{ $credit }}" value="{{ old('credit') }}">
										<p style="color:red">{{ $errors->first('credit') }}</p>
									</div>
									<span class="help-inline col-xs-2">
                                <span class="middle"><span class="middle">* สูงสุด {{ $credit }}</span></span>
									</span>
								</div>

							</div>

							<div class="form-group">
								<div class="has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
									<label for="username" class="control-label col-xs-1"=""="">ชื่อผู้ใช้:</label>
									<div class="col-xs-3">
										<div class="input-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
											@if(auth()->user()->helper ==1)
											<span class="input-group-addon">{{ $members->username }}</span>
											<input type="hidden" name="useradd" value="{{ $members->username }}@">
											<input id="username" class="form-control" name="username" type="text" value="{{ old('username') }}"> @elseif(auth()->user()->helper
											==0)
											<span class="input-group-addon">{{ auth()->user()->username }}</span>
											<input type="hidden" name="useradd" value="{{ auth()->user()->username }}@">
											<input id="username" class="form-control" name="username" type="text" value="{{ old('username') }}"> @endif
										</div>
										<p style="color:red">{{ $errors->first('username') }}</p>
									</div>
								</div>

								<div class="has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
									<span class="help-inline col-xs-2">
                                  <span class="middle bigger-125" id="password-availability"></span>
									</span>
									<label for="password" class="control-label col-xs-1">รหัสผ่าน:</label>
									<div class="col-xs-3">
										<input class="form-control" name="password" type="password" value="{{ old('password') }}" id="password">
										<p style="color:red">{{ $errors->first('password') }}</p>
									</div>
									<span class="help-inline col-xs-2">
                                  <span class="middle">* อย่างน้อย 6 ตัวอักษร</span>
									</span>
								</div>

							</div>

							<div class="form-group">
								<div class="has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
									<label for="name" class="control-label col-xs-1">ชื่อ-สกุล:</label>
									<div class="col-xs-3">
										<input class="form-control" name="name" type="text" id="name" value="{{ old('name') }}">
										<p style="color:red">{{ $errors->first('name') }}</p>
									</div>
								</div>


								<div class="col-xs-2"></div>
								<div class="has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
									<label for="phone" class="control-label col-xs-1">เบอร์โทร:</label>
									<div class="col-xs-3">
										<input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone') }}">
										<p style="color:red">{{ $errors->first('phone') }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="space-8"></div>
				<div class="widget-box widget-color-blue2 width-1100 max-width-1100">
					<div class="widget-header">
						<h5 class="widget-title bigger">
							แบ่งหุ้น / เก็บของ
						</h5>
					</div>

					<div class="widget-body">
						<div class="widget-main no-padding-bottom">
							<div class="form-group">
								<label for="inputEmail" class="control-label col-xs-2">ได้รับ: 90.00%</label>
								<input id="sum-share-take" name="" type="hidden" value="90">
								<label for="share" class="control-label col-xs-1">แบ่งหุ้น:</label>
								<div class="col-xs-2">
									<select class="form-control" id="share" name="keep">
                                <option value="0.0" selected="selected">0.0%</option>
                              </select>
								</div>
								<label for="take" class="control-label col-xs-1" name="keepover" value="1">เก็บของ:</label>
								<div class="col-xs-2">
									<select class="form-control" id="take" name="keepset">
                              @for($i = auth()->user()->keep->keepset; $i >= 0; $i -= 0.5)
                                  <option  value="{{ number_format($i, 1, '.', ',') }}">{{ number_format($i, 1, '.', ',') }}%</option>
                              @endfor
                                {{-- <option value="90.0" selected="selected">90.0%</option>
                                <option value="89.5">89.5%</option>
                                <option value="0.0">0.0%</option> --}}
                              </select>
								</div>
								<div class="col-xs-3 left-margin-10" style="margin-top: 5px">
									<input name="take_remain" type="hidden" value="0">
									<label class="width-100">
                                <input class="" name="keepover" type="checkbox" value="1">
                                <span class="lbl"> เก็บของที่เกิน</span>
                                <a href="#" target="_blank"><i class="fa fa-question-circle"></i></a>
                              </label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="space-8"></div>
				<div class="widget-box widget-color-blue2 max-width-800">
					<div class="widget-header">
						<h5 class="widget-title bigger">
							ข้อมูลการแทง
						</h5>

						<div class="widget-toolbar no-border">
							<span class="bigger-120 light">คัดลอกจาก</span>
							<select id="user-bet-copy" class="bigger-120 no-margin-right">
                        <option value="9306">สูงสุด</option>
                                    <option value="9474">3M3K001</option>
                                    <option value="10230">3M3K002</option>
                                    <option value="11239">3M3KPALM</option>
                                    <option value="11240">3M3KTOR</option>
                      </select>
						</div>
					</div>

					<div class="widget-body">
						<div class="widget-main no-padding">
							<div class="tabbable">
								<ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
									<li class="active">
										<a data-toggle="tab" href="#bet_setting_1">3 ตัวท้าย</a>
									</li>
								</ul>

								<div class="tab-content padding-0 p-t-1">
									<div id="bet_setting_1" class="tab-pane in active">
										<table class="table table-bordered table-border-dark table-nowrap comm-and-pay-table">
											<thead class="thin-border-bottom">
												<tr>
													<th class="ac" rowspan="2">ประเภท</th>
													<th class="ac deep-blue" colspan="3">3 ตัวท้าย</th>
												</tr>
												<tr>
													<th class="ac">ขั้นต่ำ</th>
													<th class="ac">สูงสุด</th>
													<th class="ac">สูงสุดต่อเลข</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="ac am bolder">3 ตัวบน</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="min_1" id="min_1" type="text" value="5">/ 5</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_1" id="max_1" type="text" value="3000">/ 3,000</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num1" id="max_per_num1" type="text" value="10000">/
														10,000
													</td>
												</tr>
												<tr>
													<td class="ac am bolder">3 ตัวล่าง</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="min_2" id="min_2" type="text" value="5">/ 5</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_2" id="max_2" type="text" value="3000">/ 3,000</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num2" id="max_per_num2" type="text" value="100000">/
														100,000
													</td>
												</tr>
												<tr>
													<td class="ac am bolder">3 ตัวโต๊ด</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="min_3" id="min_3" type="text" value="5">/ 5</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_3" id="max_3" type="text" value="3000">/ 3,000</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num3" id="max_per_num3" type="text" value="30000">/
														30,000
													</td>
												</tr>
												<tr>
													<td class="ac am bolder">2 ตัวบน</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="min_4" id="min_4" type="text" value="5">/ 5</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_4" id="max_4" type="text" value="10000">/ 10,000</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num4" id="max_per_num4" type="text" value="100000">/
														100,000
													</td>
												</tr>
												<tr>
													<td class="ac am bolder">2 ตัวล่าง</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="min_5" id="min_5" type="text" value="5">/ 5</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_5" id="max_5" type="text" value="10000">/ 10,000</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num5" id="max_per_num5" type="text" value="100000">/
														100,000
													</td>
												</tr>
												<tr>
													<td class="ac am bolder">2 ตัวโต๊ด</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="min_6" id="min_6" type="text" value="5">/ 5</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_6" id="max_6" type="text" value="10000">/ 10,000</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num6" id="max_per_num6" type="text" value="100000">/
														100,000
													</td>
												</tr>
												<tr>
													<td class="ac am bolder">วิ่งบน</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="min_7" id="min_7" type="text" value="5">/ 5</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_7" id="max_7" type="text" value="100000">/ 100,000</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num7" id="max_per_num7" type="text" value="300000">/
														300,000
													</td>
												</tr>
												<tr>
													<td class="ac am bolder">วิ่งล่าง</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="min_8" id="min_8" type="text" value="5">/ 5</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_8" id="max_8" type="text" value="100000">/ 100,000</td>
													<td class="am"><input class="form-control inline width-50 deep-blue" name="max_per_num8" id="max_per_num8" type="text" value="300000">/
														300,000
													</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="space-8"></div>

				<div class="widget-box widget-color-blue2 width-1100 max-width-1100">
					<div class="widget-header widget-header-flat">
						<h5 class="widget-title bigger">
							อัตราจ่าย และ คอมมิชชั่น
						</h5>
						<div class="widget-toolbar no-border">
							<span class="bigger-120 light">คัดลอกจาก</span>
							<select name="" id="user-payout-copy" class="bigger-120 no-margin-right" style="">
                            <option value="9306">สูงสุด</option>
                            <option value="9474">3M3K001</option>
                            <option value="10230">3M3K002</option>
                            <option value="11239">3M3KPALM</option>
                            <option value="11240">3M3KTOR</option>
                          </select>
						</div>
					</div>

					<div class="widget-body">
						<div class="widget-main no-padding">
							<div class="tabbable">
								<ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
									<li class="right-padding-12 active">
										<a data-toggle="tab" href="#payout_setting_0">อัตราจ่าย / การแทง</a>
									</li>
									<li>
										<a data-toggle="tab" href="#payout_setting_1">3 ตัวท้าย</a>
									</li>
								</ul>

								<div class="tab-content padding-0 p-t-1">
									<div id="payout_setting_0" class="tab-pane in active">
										<table class="table table-bordered table-force-border table-border-dark table-auto table-nowrap">
											<thead class="thin-border-bottom">
												<tr>
													<th>เปิด/ปิด อัตราจ่าย</th>
													<th colspan="5">เปิด/ปิด การแทง</th>
												</tr>
												<tr>
													<th></th>
													<th class="ac">3 ตัวท้าย</th>
												</tr>
											</thead>
											<tbody>
												<tr class="">
													<td class="deep-blue bolder">
														<input name="payout_active[5]" type="hidden" value="0">
														<input name="payout_active[5]" type="checkbox" value="1" checked=""> หวยรัฐ 70
													</td>
													<td class="ac am ">
														<input name="btg_active[5][1]" type="hidden" value="0">
														<input name="btg_active[5][1]" type="checkbox" value="1" checked="">
													</td>
													<td class="ac am hidden">
														<input name="btg_active[5][2]" type="hidden" value="0">
														<input name="btg_active[5][2]" type="checkbox" value="1" checked="">
													</td>
													<td class="ac am hidden">
														<input name="btg_active[5][5]" type="hidden" value="0">
														<input name="btg_active[5][5]" type="checkbox" value="1" checked="">
													</td>
													<td class="ac am hidden">
														<input name="btg_active[5][6]" type="hidden" value="0">
														<input name="btg_active[5][6]" type="checkbox" value="1" checked="">
													</td>
													<td class="ac am hidden">
														<input name="btg_active[5][7]" type="hidden" value="0">
														<input name="btg_active[5][7]" type="checkbox" value="1" checked="">
													</td>
												</tr>
												<tr class="">
													<td class="deep-blue bolder">
														<input name="payout_active[11]" type="hidden" value="0">
														<input name="payout_active[11]" type="checkbox" value="1" checked=""> หวย 70
													</td>
													<td class="ac am ">
														<input name="btg_active[11][1]" type="hidden" value="0">
														<input name="btg_active[11][1]" type="checkbox" value="1" checked="">
													</td>
													<td class="ac am hidden">
														<input name="btg_active[11][2]" type="hidden" value="0">
														<input name="btg_active[11][2]" type="checkbox" value="1" checked="">
													</td>
													<td class="ac am hidden">
														<input name="btg_active[11][5]" type="hidden" value="0">
														<input name="btg_active[11][5]" type="checkbox" value="1" checked="">
													</td>
													<td class="ac am hidden">
														<input name="btg_active[11][6]" type="hidden" value="0">
														<input name="btg_active[11][6]" type="checkbox" value="1" checked="">
													</td>
													<td class="ac am hidden">
														<input name="btg_active[11][7]" type="hidden" value="0">
														<input name="btg_active[11][7]" type="checkbox" value="1" checked="">
													</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div id="payout_setting_1" class="tab-pane">
										<table id="comm-and-pay-table" class="table table-bordered table-border-dark table-auto table-nowrap">
											<thead class="thin-border-bottom">
												<tr>
													<th></th>
													<th></th>
													<th class="ac am bolder">3 ตัวบน</th>
													<th class="ac am bolder">3 ตัวล่าง</th>
													<th class="ac am bolder">3 ตัวโต๊ด</th>
													<th class="ac am bolder">2 ตัวบน</th>
													<th class="ac am bolder">2 ตัวล่าง</th>
													<th class="ac am bolder">2 ตัวโต๊ด</th>
													<th class="ac am bolder">วิ่งบน</th>
													<th class="ac am bolder">วิ่งล่าง</th>
												</tr>
											</thead>
											<tbody>
												<tr class=" ">
													<td class="am no-border" rowspan="2">
														<span class="deep-blue bolder">หวยรัฐ 70</span><br>
														<i>3 ตัวท้าย</i>
													</td>
													<td class="ac am bolder">อัตราจ่าย</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payoutg_1" id="payoutg_1" type="text" value="550">														/ 550
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payoutg_2" id="payoutg_2" type="text" value="125">														/ 125
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payoutg_3" id="payoutg_3" type="text" value="105">														/ 105
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payoutg_4" id="payoutg_4" type="text" value="70">														/ 70
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payoutg_5" id="payoutg_5" type="text" value="70">														/ 70
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payoutg_6" id="payoutg_6" type="text" value="12">														/ 12
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payoutg_7" id="payoutg_7" type="text" value="3">														/ 3
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payoutg_8" id="payoutg_8" type="text" value="4">														/ 4
													</td>
												</tr>
												<tr class=" ">
													<td class="ac am bolder">คอมมิชชั่น</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="comg_1" id="comg_1" type="text" value="33"> / 33
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="comg_2" id="comg_2" type="text" value="33"> / 33
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="comg_3" id="comg_3" type="text" value="33"> / 33
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="comg_4" id="comg_4" type="text" value="28"> / 28
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="comg_5" id="comg_5" type="text" value="28"> / 28
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="comg_6" id="comg_6" type="text" value="28"> / 28
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="comg_7" id="comg_7" type="text" value="12"> / 12
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="comg_8" id="comg_8" type="text" value="12"> / 12
													</td>
												</tr>
												<tr class=" ">
													<td class="am no-border" rowspan="2">
														<span class="deep-blue bolder">หวย 70</span><br>
														<i>3 ตัวท้าย</i>
													</td>
													<td class="ac am bolder">อัตราจ่าย</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payout_1" id="payout_1" type="text" value="550">														/ 550
													</td>
													<td class="am">
														<input type="hidden" class="form-control inline width-50 deep-blue" id="payout_2" name="payout_2" type="text" value="0">

													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payout_3" id="payout_3" type="text" value="105">														/ 105
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payout_4" id="payout_4" type="text" value="70">														/ 70
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payout_5" id="payout_5" type="text" value="70">														/ 70
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payout_6" id="payout_6" type="text" value="12">														/ 12
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payout_7" id="payout_7" type="text" value="3">														/ 3
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="payout_8" id="payout_8" type="text" value="4">														/ 4
													</td>
												</tr>
												<tr class=" ">
													<td class="ac am bolder">คอมมิชชั่น</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="com_1" id="com_1" type="text" value="33"> / 33
													</td>
													<td class="am">
														<input type="hidden" class="form-control inline width-50 deep-blue" name="com_2" id="com_2" type="text" value="0">

													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="com_3" id="com_3" type="text" value="33"> / 33
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="com_4" id="com_4" type="text" value="28"> / 28
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="com_5" id="com_5" type="text" value="28"> / 28
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="com_6" id="com_6" type="text" value="28"> / 28
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="com_7" id="com_7" type="text" value="12"> / 12
													</td>
													<td class="am">
														<input class="form-control inline width-50 deep-blue" name="com_8" id="com_8" type="text" value="12"> / 12
													</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="space-8"></div>
				<button type="submit" class="btn btn-primary">เพิ่มสมาชิก</button>
			</form>

			{{--
			<script>
				//setup before functions
          var typingTimer;              //timer identifier
          var doneTypingInterval = 400; //time in ms, 5 second for example

          //on change, start the countdown
          $('#username').change(function(){
              clearTimeout(typingTimer);
              if ($('#username').val().length > 0) {
                $('#username-availability').html('กำลังโหลด...');
                typingTimer = setTimeout(doneTyping, doneTypingInterval);
              }
          });

          //on keydown, clear the countdown
          $('#username').keydown(function(){
              clearTimeout(typingTimer);
          });

          $(document).ready(function() {
            $('#username').on('blur', doneTyping);
          });

          //user is "finished typing," do something
          function doneTyping () {
              var data = {username: $('#username').val()};

              $.post('/check-username', data, function(result) {
                if (result.success) {
                  $('#username-availability').html('<span class="deep-green">'+result.message+'</span>');
                } else if (result.error) {
                  $('#username-availability').html('<span class="deep-red">'+result.message+'</span>');
                } else {
                  // alert('เกิดข้อผิดพลาด');
                }
              });
          }
			</script> --}}
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>

@endsection