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
	.hiddenButton {
		display: none;
	}
</style>
@endsection @section('footer')
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
		$('tr[data-status]').css("display", "none");
		$('tr[data-status="0"]').css("display", "table-row");
		/*$('.membername').on('keydown', function(){
			var memberid = $(this).data('memberid');

			$('#button_' + memberid).removeClass('hiddenButton')
			//alert( $(this).data('memberid'));
		});*/

		$('input[name="name"]').on('keyup', function(){
			var memberid = $(this).data('memberid');
			var name_new = $(this).val();
			var name_old = $(this).data('old');
			if(name_old!=name_new){
				$('#button_' + memberid).removeClass('hiddenButton');
				$('tr[data-member-id="'+memberid+'"]').addClass('bg-info');
			}else{
				$('#button_' + memberid).addClass('hiddenButton');
				$('tr[data-member-id="'+memberid+'"]').removeClass('bg-info');
			}
		});


		$('input[name="phone"]').on('keyup', function(){
			var memberid = $(this).data('memberid');
			var name_new = $(this).val();
			var name_old = $(this).data('old');
			if(name_old!=name_new){
				$('#button_' + memberid).removeClass('hiddenButton');
				$('tr[data-member-id="'+memberid+'"]').addClass('bg-info');
			}else{
				$('#button_' + memberid).addClass('hiddenButton');
				$('tr[data-member-id="'+memberid+'"]').removeClass('bg-info');
			}
		});

		$('select[name="status"]').on('change', function(){
			//alert('change');
			var memberid = $(this).data('memberid');
			var name_new = $(this).val();
			var name_old = $(this).data('old');
			//alert('name_new:'+name_new+' name_old:'+name_old);
			if(name_old!=name_new){
				$('#button_' + memberid).removeClass('hiddenButton');
				$('tr[data-member-id="'+memberid+'"]').addClass('bg-info');
			}else{
				$('#button_' + memberid).addClass('hiddenButton');
				$('tr[data-member-id="'+memberid+'"]').removeClass('bg-info');
			}
		});

		$('input[name="password"]').on('keyup', function(){
			var memberid = $(this).data('memberid');
			var name_new = $(this).val();
			var name_old = $(this).data('old');
			//alert('name_new:'+name_new+' name_old:'+name_old);
			if(name_old!=name_new){
				$('#btn-password_' + memberid).removeClass('hiddenButton');
				$('tr[data-member-password-id="'+memberid+'"]').addClass('bg-info');
			}else{
				$('#btn-password_' + memberid).addClass('hiddenButton');
				$('tr[data-member-password-id="'+memberid+'"]').removeClass('bg-info');
			}
		});

		$('#users-edit-filter').on('change', function(){
			//var status = $(this).data('status');
			//alert($(this).val());
			displayOption();

		});


		$('#users-edit-order').on('change', function(){

			var route = $(this).val();
			alert(route);
			//console.log(order);
			$.get(route, function(data) {

				$('#general').html(data);
				displayOption();

			});
		});

	});

	function displayOption()
	{
		var filter = $('#users-edit-filter').val();
		
		if(filter==0){
			$('tr[data-status]').css("display", "none");
			$('tr[data-status="0"]').css("display", "table-row");
		}else if(filter==1){
			$('tr[data-status]').css("display", "none");
			$('tr[data-status="1"]').css("display", "table-row");
		}else if(filter==2){
			$('tr[data-status]').css("display", "none");
			$('tr[data-status="2"]').css("display", "table-row");
		}else{
			$('tr[data-status]').css("display", "table-row");
		}		
	}

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
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<!-- <a href="#">Home</a> -->
			</li>
			<li>
				จัดการสมาชิก
			</li>
			<li>
				2. ข้อมูลทั่วไป/เก็บของ
			</li>
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
						2. ข้อมูลทั่วไป/เก็บของ
						<small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  <a href="" class="ajax">3M3K</a>
                </small>
					</h1>
				</div>

				<div class="min-width-800 max-width-1100">
					<div class="alert alert-info">
						<b>สถานะ:</b> <span class="bg-warning">เหลือง=ระงับ</span>, <span class="bg-danger">แดง=ล็อค</span>
					</div>
				</div>

				<div class="min-width-800 max-width-1100">
					<ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
						<li class="js-change-tab active" data-tab1="general"><a href="#general" data-toggle="tab">ข้อมูลทั่วไป</a></li>
						<li class="js-change-tab" data-tab1="password"><a href="#password" data-toggle="tab">รหัสผ่าน</a></li>
						<li class="js-change-tab" data-tab1="credit"><a href="#credit" data-toggle="tab">แบ่งหุ้น/เก็บของ</a></li>
						<li class="pull-right right-padding-10 users__edit-options">
							<span class="bolder">แสดง</span>
							<select id="users-edit-filter">
                    <option value="3">ทั้งหมด</option>
                    <option value="0" selected="selected">ปกติ</option>
                    <option value="1">ระงับ</option>
                    <option value="2">ล็อค</option>
                </select>
							<span class="bolder">เรียง</span>
							<select id="users-edit-order">
                  <option value="/members/edit?order=name&type=asc" selected="selected">ชื่อสมาชิก ก่อน -&gt; หลัง</option>
                  <option value="/members/edit?order=name&type=desc">ชื่อสมาชิก หลัง -&gt; ก่อน</option>
                  <option value="/members/edit?order=id&type=asc">เวลาที่สร้าง ก่อน -&gt; หลัง</option>
                  <option value="/members/edit?order=id&type=desc">เวลาที่สร้าง หลัง -&gt; ก่อน</option>
                </select>
						</li>
					</ul>
				</div>

				<div class="tab-content no-margin-top no-padding width-800 max-width-1100">
					<!-- Tab 1 General -->
					<div class="tab-pane simple active" id="general">
						<table class="table table-bordered table-border-dark table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
							<thead>
								<tr>
									<th>Id</th>
									<th class="ac">ชื่อผู้ใช้</th>
									<th class="ac">ระดับ</th>
									<th class="ac">ชื่อ</th>
									<th class="ac">โทร</th>
									<th class="ac">สถานะ</th>
									<th class="ac">บันทึก</th>
									<th class="ac">เครดิต</th>
									<th class="ac">ได้เสียสุทธิ</th>
									<th class="ac">ใช้งานล่าสุด</th>
									<th class="ac">Login ล่าสุด</th>
									<th class="ac">IP ล่าสุด</th>
								</tr>
							</thead>


							<tbody>
								@foreach($member as $members)
								<form action="/members/{{$members->id}}/edit" method="post">
									{{ csrf_field() }}
									<tr data-parent-id="9306" data-member-id="{{$members->id}}" data-status="{{ $members->status }}" class="@if($members->status==1) {{'jquery-hide bg-warning'}} @elseif($members->status==2) {{'jquery-hide bg-danger'}} @endif">
										<td class="ac">{{$members->id}}</td>
										<td class="ac">{{ $members->username }} </td>
										<td class="type ac">@if($members->level == 7) Member @elseif($members->level == 6) Agent @elseif($members->level == 5) Master @elseif($members->level
											== 4) Senior @elseif($members->level == 3) Super Senior @elseif($members->level == 2) Pathner @elseif($members->level
											== 1) Admin @endif
										</td>
										<td class="name"><input data-memberid="{{ $members->id }}" id="name_{{ $members->id }}" class="form-control input-sm membername"
											 data-old="{{$members->name}}" name="name" type="text" value="{{$members->name}}"></td>
										<td class="phone"><input data-memberid="{{ $members->id }}" id="phone_{{ $members->id }}" class="form-control input-sm" data-old="{{$members->phone}}"
											 name="phone" type="text" value="{{$members->phone}}"></td>
										<td class="status">
											<select data-memberid="{{ $members->id }}" data-old="{{ $members->status }}" name="status">
															{{-- @if($members->status == 0) --}}
															<option value="0" {{ ($members->status == 0) ? 'selected="selected"' : ''}}>ปกติ</option>
															<option value="1" {{ ($members->status == 1) ? 'selected="selected"' : ''}}>ระงับ</option>
															<option value="2" {{ ($members->status == 2) ? 'selected="selected"' : ''}}>ล็อค</option>
															{{-- @elseif( $members->status == 1)
															<option value="0">ปกติ</option>
															<option value="1" selected="selected">ระงับ</option>
															<option value="2">ล็อค</option>
															@elseif( $members->status == 2)
															<option value="0">ปกติ</option>
															<option value="1">ระงับ</option>
															<option value="2"  selected="selected">ล็อค</option>
															@endif --}}
															</select>
										</td>
										<td class="control child-hidden">
											<div id="button_{{ $members->id }}" class="hiddenButton">
												<button class="btn-save btn btn-xs btn-success no-border" type="submit"><i class="ace-icon fa fa-check"></i></button>
												<button class="btn-cancel btn btn-xs btn-danger no-border" type="cancel"><i class="ace-icon fa fa-times"></i></button>
											</div>
										</td>
										<td class="ar">{{ number_format($members->credit,'2')}}</td>
										<td class="ar n2c">0</td>
										<td class="ac am p5"></td>
										<td class="ac am p5">19-07-2017<br>20:32:09</td>
										<td class="ac am p5">134.196.33.166</td>
									</tr>
								</form>
								@endforeach
							</tbody>

						</table>
					</div>
					<!-- Tab 2 Password -->
					<div class="tab-pane simple" id="password">
						<table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
							<thead>
								<tr>
									<th>Id</th>
									<th class="ac">ชื่อผู้ใช้</th>
									<th class="ac">ระดับ</th>
									<th class="ac">รหัสผ่าน</th>
									<th>บันทึก</th>
								</tr>
							</thead>
							@foreach($member as $members)
							<form action="/members/{{$members->id}}/edit" method="post">
								{{ csrf_field() }}
								<tbody>
									<tr data-parent-id="9306" data-member-password-id="{{$members->id}}" data-status="{{ $members->status }}" class="@if($members->status==1) {{'jquery-hide bg-warning'}} @elseif($members->status==2) {{'jquery-hide bg-danger'}} @endif">
										<td class="ac">{{$members->id}}</td>
										<td class="ac">{{ $members->username}}</td>
										<td class="type ac">@if($members->level == 7) Member @elseif($members->level == 6) Agent @elseif($members->level == 5) Master @elseif($members->level
											== 4) Senior @elseif($members->level == 3) Super Senior @elseif($members->level == 2) Pathner @elseif($members->level
											== 1) Admin @endif
										</td>
										<td class="password"><input data-memberid="{{ $members->id }}" class="form-control input-sm" id="password_{{ $members->id }}" data-old=""
											 name="password" type="password" value=""></td>
										<td class="control child-hidden">
											<div id="btn-password_{{ $members->id }}" class="hiddenButton">
												<button class="btn-save btn btn-xs btn-success no-border" type="submit"><i class="ace-icon fa fa-check"></i></button>
												<button class="btn-cancel btn btn-xs btn-danger no-border" type="cancel"><i class="ace-icon fa fa-times"></i></button>
											</div>
										</td>
									</tr>
								</tbody>
							</form>
							@endforeach
						</table>
					</div>
					<!-- Tab 3 Credit -->
					<div class="tab-pane simple" id="credit">
						<table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
							<thead>
								<tr>
									<th>#</th>
									<th>ชื่อผู้ใช้</th>
									<th>ระดับ</th>
									<th>แบ่งหุ้น</th>
									<th>เก็บของ <a href="https://agent.superlot999.com/help" target="_blank"><i class="fa fa-question-circle"></i></a></th>
									<th>บันทึก</th>
								</tr>
							</thead>
							@foreach($member as $members)
							<tbody>
								<tr data-parent-id="9306" data-member-id="9474" data-user-type-id="1" data-status="{{ $members->status }}" class="@if($members->status==1) {{'jquery-hide bg-warning'}} @elseif($members->status==2) {{'jquery-hide bg-danger'}} @endif">
									<td class="id">{{$members->id}}</td>
									<td>{{$members->username}}</td>
									<td class="type">@if($members->level == 7) Member @elseif($members->level == 6) Agent @elseif($members->level == 5) Master @elseif($members->level
										== 4) Senior @elseif($members->level == 3) Super Senior @elseif($members->level == 2) Pathner @elseif($members->level
										== 1) Admin @endif
									</td>
									<input id="sum-share-take" data-old="90.00" name="" type="hidden" value="90.00">
									<td class="share">
										<select data-old="0.0" name="share">
                                  <option value="0.0" selected="selected">0.0%</option>
                                </select>
									</td>
									<td class="take">
										<select data-old="90.0" name="take">
                                   @for($i = 90; $i >= 0; $i -= 0.5)
                                    <option value="{{ number_format($i, 1, '.', ',') }}">{{ number_format($i, 1, '.', ',') }}%</option>
                                  @endfor
                                </select>
										<div class="inline checkbox no-margin">
											<input name="take_remain" type="hidden" value="0">
											<label>
                                    ( <input data-old="0" class="" name="take_remain" type="checkbox" value="1"> <span class="lbl"> เก็บของที่เกิน</span> )
                                    <!-- <input data-old="0" class="hidden" name="take_remain" type="checkbox" value="1"> -->
                                  </label>
										</div>
									</td>
									<td class="control child-hidden">
										<button class="btn-save btn btn-xs btn-success no-border"><i class="ace-icon fa fa-check"></i></button>
										<button class="btn-cancel btn btn-xs btn-danger no-border"><i class="ace-icon fa fa-times"></i></button>
									</td>
								</tr>
							</tbody>
							@endforeach
						</table>
					</div>
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.page-content -->

	@endsection