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
					<span class="deep-blue">รัฐบาลไทย</span>, <span id="namelotto">งวดวันที่ 16 ตุลาคม 2560</span>
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
							{{--  @foreach ($sumallmembers as $key => $sumallmember)   --}}
							{{--  @foreach ($userbet as $key => $value)   --}}
							@foreach ($usersum_s as $key => $usersum_ss) 

								<tr class="odd">
									
									<td>
										<a href="/{{$memberlist_id[$key]}}/list_id" class="ajaxmember">
										<span class="span-name jquery-hide">{{$member_name[$key]}}()</span></a>
									</td>
						
								<td class="type" nowrap="">{{$level_member[$key]}}</td>
		
									<td class="align-right dark-blue bolder n2 bg-blue">{{ $usersum_s[$key] }}</td>
								<td class="align-right n2c"><span class="negative" id="out_1">{{ $usersum_s[$key] }}<span></span></span>
									</td>
									<td class="align-right n2c"><span class="positive">{{ $usercom_s[$key] }}<span></span></span>
									</td>
									<td class="align-right n2c"><span class="negative">{{ $usersumall[$key] }}<span></span></span>
									</td>
									<td class="align-right n2c bg-yellow"><span class="positive">{{ $agsum_s[$key] }}<span></span></span>
									</td>
									<td class="align-right n2c bg-yellow"><span class="negative">{{ $agcom_s[$key] }}<span></span></span>
									</td>
									<td class="align-right n2c bg-yellow"><span class="positive">{{ $agsumall[$key] }}<span></span></span>
									</td>
									<td class="align-right n2c"><span class="positive">{{ $companysum_s[$key] }}<span></span></span>
									</td>
									<td class="align-right n2c"><span class="negative">{{ $companycom_s[$key] }}<span></span></span>
									</td>
									<td class="align-right n2c"><span class="positive">{{ $companysumall[$key] }}<span></span></span>
									</td>
									
								</tr>
							{{--  @endforeach  --}}
							@endforeach
						</tbody>

						<tfoot class="thin-border-bottom">
							<tr class="even">
								<td colspan="2" class="bolder">รวม :</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
							<td class="align-right n2c"><span class="negative"><span id="sum_allmember">{{ number_format($aOne['sumallmember'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sum_allcommember">{{ number_format($aOne['sumallcommembers'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sum_allcount">{{ number_format($aOne['sumallcounts'],2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_allag">{{ number_format($aOne['sumallags'],2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="sum_allcomag">{{ number_format($aOne['sumallcomags'],2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_allagcount">{{ number_format($aOne['sumallagcounts'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sum_allcompany">{{ number_format($aOne['sumallcompanys'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sum_allcomcompany">{{ number_format($aOne['sumallcomcompanys'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sum_allcountcompany">{{ number_format($aOne['sumallcountcompanys'],2) }}</span></span>
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
								<th colspan="3" class="align-center"><span id="agent2"></span></th>
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
							<td class="align-right n2c"><span class="negative"><span id="sumtop3">{{ number_format($sum_top3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="comtop3">{{ number_format($com_top3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sumusertop3">{{ number_format($sumusertop3,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_agtop3">{{ number_format($sum_agtop3,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="com_agtop3">{{ number_format($com_agtop3,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumag_top3">{{ number_format($sumag_top3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumcompany_top3">{{ number_format($sumcompany_top3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="comcompany_top3">{{ number_format($comcompany_top3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumtop3_company">{{ number_format($sumtop3_company,2) }}</span></span>
								</td>
							</tr>
 

							<tr class="">
								<td class="bolder">3 ตัวล่าง</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative"><span id="sumbottom3">{{ number_format($sum_bottom3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="combottom3">{{ number_format($com_bottom3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sumuserbottom3">{{ number_format($sumuserbottom3,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_agbottom3">{{ number_format($sum_agbottom3,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="com_agbottom3">{{ number_format($com_agbottom3,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumag_bottom3">{{ number_format($sumag_bottom3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumcompany_bottom3">{{ number_format($sumcompany_bottom3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="comcompany_bottom3">{{ number_format($comcompany_bottom3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumbottom3_company">{{ number_format($sumbottom3_company,2) }}</span></span>
								</td>
							</tr>


							<tr class="even">
								<td class="bolder">3 ตัวโต๊ด</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative"><span id="sumtod3">{{ number_format($sum_tod3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="comtod3">{{ number_format($com_tod3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sumusertod3">{{ number_format($sumusertod3,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_agtod3">{{ number_format($sum_agtod3,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="com_agtod3">{{ number_format($com_agtod3,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumag_tod3">{{ number_format($sumag_tod3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumcompany_tod3">{{ number_format($sumcompany_tod3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="comcompany_tod3">{{ number_format($comcompany_tod3,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumtod3_company">{{ number_format($sumtod3_company,2) }}</span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">2 ตัวบน</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative"><span id="sumtop2">{{ number_format($sum_top2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="comtop2">{{ number_format($com_tod2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sumusertop2">{{ number_format($sumusertop2,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_agtop2">{{ number_format($sum_agtop2,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="com_agtop2">{{ number_format($com_agtop2,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumag_top2">{{ number_format($sumag_top2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumcompany_top2">{{ number_format($sumcompany_top2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="comcompany_top2">{{ number_format($comcompany_top2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumtop2_company">{{ number_format($sumtop2_company,2) }}</span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">2 ตัวล่าง</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative"><span id="sumbottom2">{{ number_format($sum_bottom2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="combottom2">{{ number_format($com_bottom2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sumuserbottom2">{{ number_format($sumuserbottom2,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_agbottom2">{{ number_format($sum_agbottom2,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="com_agbottom2">{{ number_format($com_agbottom2,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumag_bottom2">{{ number_format($sumag_bottom2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumcompany_bottom2">{{ number_format($sumcompany_bottom2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="comcompany_bottom2">{{ number_format($comcompany_bottom2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumbottom2_company">{{ number_format($sumbottom2_company,2) }}</span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">2 ตัวโต๊ด</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative"><span id="sumtod2">{{ number_format($sum_tod2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="comtod2">{{ number_format($com_tod2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sumusertod2">{{ number_format($sumusertod2,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_agtod2">{{ number_format($sum_agtod2,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="com_agtod2">{{ number_format($com_agtod2,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumag_tod2">{{ number_format($sumag_tod2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumcompany_tod2">{{ number_format($sumcompany_tod2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="comcompany_tod2">{{ number_format($comcompany_tod2,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumtod2_company">{{ number_format($sumtod2_company,2) }}</span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">วิ่งบน</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative"><span id="sumtop1">{{ number_format($sum_top1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="comtop1">{{ number_format($com_top1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sumusertop1">{{ number_format($sumusertop1,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_agtop1">{{ number_format($sum_agtop1,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span  id="com_agtop1">{{ number_format($com_agtop1,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumag_top1">{{ number_format($sumag_top1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumcompany_top1">{{ number_format($sumcompany_top1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="comcompany_top1">{{ number_format($comcompany_top1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumtop1_company">{{ number_format($sumtop1_company,2) }}</span></span>
								</td>
							</tr>


							<tr class="">
								<td class="bolder">วิ่งล่าง</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative"><span id="sumbottom1">{{ number_format($sum_bottom1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="combottom1">{{ number_format($com_bottom1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sumuserbottom1">{{ number_format($sumuserbottom1,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_agbottom1">{{ number_format($sum_agbottom1,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="com_agbottom1">{{ number_format($com_agbottom1,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumag_bottom1">{{ number_format($sumag_bottom1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumcompany_bottom1">{{ number_format($sumcompany_bottom1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="comcompany_bottom1">{{ number_format($comcompany_bottom1,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumbottom1_company">{{ number_format($sumbottom1_company,2) }}</span></span>
								</td>
							</tr>
						</tbody>

						<tfoot class="thin-border-bottom">
							<tr class="even">
								<td class="bolder">รวม :</td>
								<td class="align-right dark-blue bolder n2 bg-blue"></td>
								<td class="align-right n2c"><span class="negative"><span id="sumallmember">{{ number_format($aOne['sumallmember'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumallcommember">{{ number_format($aOne['sumallcommembers'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="sumallcount">{{ number_format($aOne['sumallcounts'],2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumallag">{{ number_format($aOne['sumallags'],2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="sumallcomag">{{ number_format($aOne['sumallcomags'],2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumallagcount">{{ number_format($aOne['sumallagcounts'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumallcompany">{{ number_format($aOne['sumallcompanys'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="sumallcomcompany">{{ number_format($aOne['sumallcomcompanys'],2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumallcountcompany">{{ number_format($aOne['sumallcountcompanys'],2) }}</span></span>
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
			//console.log(response.usebet_s[20]);
			//for(var i=0;i<response.usebet_s.length;i++){
				//console.log("1111");
				$.each(response.data, function(key1, i) {
					console.log(response.agcom_s[i]);
					console.log(i)
					if(response.member_name[i]){
					$("#tbodyuser").append('	<tr class="odd"><td><a href="/'+response.memberlist_id[i]+"/list_id"
						+'" class="ajaxmember"><span class="span-name jquery-hide">'+response.member_name[i]
						+'()</span></a></td><td class="type" nowrap="">'+response.member_lavel[i].level
						+'</td><td class="align-right dark-blue bolder n2 bg-blue">'+response.usersum_s[i]
						+'</td><td class="align-right n2c"><span class="negative" id="out_1">'+response.usersum_s[i]
						+'<span></span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.usercom_s[i]
						+'</span></span></td><td class="align-right n2c"><span class="negative">-<span>'+response.usersumall[i]
						+'</span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span>'+response.agsum_s[i]
						+'</span></span></td><td class="align-right n2c bg-yellow"><span class="negative"><span>'+response.agcom_s[i]
						+'</span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span>'+response.agsumall[i]
						+'</span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.companysum_s[i]
						+'</span></span></td><td class="align-right n2c"><span class="negative">-<span>'+response.companycom_s[i]
						+'</span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.companysumall[i]
						+'</span></span></tr>');
						}

					//$.each(value1, function(key2, value2) {	
					//console.log(value2);
					/*if(response.member_name[i]){
						$("#tbodyuser").append('	<tr class="odd"><td><a href="'+value1.member.level
							+'" class="ajax"><span class="span-name jquery-hide">'+response.member_name[i]
							+'()</span></a></td><td class="type" nowrap="">'+value1.member.level
							+'</td><td class="align-right dark-blue bolder n2 bg-blue">'+response.usersum_s[i]
							+'</td><td class="align-right n2c"><span class="negative" id="out_1">'+response.usersum_s[i]
							+'<span></span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.usercom_s[i]
							+'</span></span></td><td class="align-right n2c"><span class="negative">-<span>'+response.usersumall[i]
							+'</span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span>'+response.agsum_s[i]
							+'</span></span></td><td class="align-right n2c bg-yellow"><span class="negative"><span>'+response.agcom_s[i]
							+'</span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span>'+response.agsumall[i]
							+'</span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.companysum_s[i]
							+'</span></span></td><td class="align-right n2c"><span class="negative">-<span>'+response.companycom_s[i]
							+'</span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.companysumall[i]
							+'</span></span></tr>');
						}*/	
					//});		

					
				});	
			//}
			/*for(var i=0;i<response.usebets.length;i++){

				$.each(response.usebets[i], function(key1, value1) {
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
							+'</span></span></td><td class="align-right n2c bg-yellow"><span class="negative"><span>'+response.agcom_s[i]
							+'</span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span>'+response.agsumall[i]
							+'</span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.companysum_s[i]
							+'</span></span></td><td class="align-right n2c"><span class="negative">-<span>'+response.companycom_s[i]
							+'</span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.companysumall[i]
							+'</span></span></tr>');
						}
					}			
				);	
			}*/
		  $('#navbar-game-title').html(response.lotto.name);
		  $('#namelotto').html(response.lotto.name);
		  $('#agent').html(response.levellog);
		  $('#agent2').html(response.levellog);
		  ////////////////////////////////////////////////////////
		  $('#sumtop3').html(response.sum_top3);
		  $('#sumbottom3').html(response.sum_bottom3);
		  $('#sumtod3').html(response.sum_tod3);
		  $('#sumtop2').html(response.sum_top2);
		  $('#sumbottom2').html(response.sum_bottom2);
		  $('#sumtod2').html(response.sum_tod2);
		  $('#sumtop1').html(response.sum_top1);
		  $('#sumbottom1').html(response.sum_bottom1);
		  ////////////////////////////////////////////////////////
		  $('#comtop3').html(response.com_top3);
		  $('#combottom3').html(response.com_bottom3);
		  $('#comtod3').html(response.com_tod3);
		  $('#comtop2').html(response.com_top2);
		  $('#combottom2').html(response.com_bottom2);
		  $('#comtod2').html(response.com_tod2);
		  $('#comtop1').html(response.com_top1);
		  $('#combottom1').html(response.com_bottom1);
		  ////////////////////////////////////////////////////////
		  $('#sumusertop3').html(response.sumusertop3);
		  $('#sumuserbottom3').html(response.sumuserbottom3);
		  $('#sumusertod3').html(response.sumusertod3);
		  $('#sumusertop2').html(response.sumusertop2);
		  $('#sumuserbottom2').html(response.sumuserbottom2);
		  $('#sumusertod2').html(response.sumusertod2);
		  $('#sumusertop1').html(response.sumusertop1);
		  $('#sumuserbottom1').html(response.sumuserbottom1);
		  ////////////////////////////////////////////////////////
		  $('#sum_agtop3').html(response.sum_agtop3);
		  $('#sum_agbottom3').html(response.sum_agbottom3);
		  $('#sum_agtod3').html(response.sum_agtod3);
		  $('#sum_agtop2').html(response.sum_agtop2);
		  $('#sum_agbottom2').html(response.sum_agbottom2);
		  $('#sum_agtod2').html(response.sum_agtod2);
		  $('#sum_agtop1').html(response.sum_agtop1);
		  $('#sum_agbottom1').html(response.sum_agbottom1);
		  ////////////////////////////////////////////////////////
		  $('#com_agtop3').html(response.com_agtop3);
		  $('#com_agbottom3').html(response.com_agbottom3);
		  $('#com_agtod3').html(response.com_agtod3);
		  $('#com_agtop2').html(response.com_agtop2);
		  $('#com_agbottom2').html(response.com_agbottom2);
		  $('#com_agtod2').html(response.com_agtod2);
		  $('#com_agtop1').html(response.com_agtop1);
		  $('#com_agbottom1').html(response.com_agbottom1);
		  ////////////////////////////////////////////////////////
		  $('#sumag_top3').html(response.sumag_top3);
		  $('#sumag_bottom3').html(response.sumag_bottom3);
		  $('#sumag_tod3').html(response.sumag_tod3);
		  $('#sumag_top2').html(response.sumag_top2);
		  $('#sumag_bottom2').html(response.sumag_bottom2);
		  $('#sumag_tod2').html(response.sumag_tod2);
		  $('#sumag_top1').html(response.sumag_top1);
		  $('#sumag_bottom1').html(response.sumag_bottom1);

		  $('#sumcompany_top3').html(response.sumcompany_top3);
		  $('#sumcompany_bottom3').html(response.sumcompany_bottom3);
		  $('#sumcompany_tod3').html(response.sumcompany_tod3);
		  $('#sumcompany_top2').html(response.sumcompany_top2);
		  $('#sumcompany_bottom2').html(response.sumcompany_bottom2);
		  $('#sumcompany_tod2').html(response.sumcompany_tod2);
		  $('#sumcompany_top1').html(response.sumcompany_top1);
		  $('#sumcompany_bottom1').html(response.sumcompany_bottom1);

		  $('#comcompany_top3').html(response.comcompany_top3);
		  $('#comcompany_bottom3').html(response.comcompany_bottom3);
		  $('#comcompany_tod3').html(response.comcompany_tod3);
		  $('#comcompany_top2').html(response.comcompany_top2);
		  $('#comcompany_bottom2').html(response.comcompany_bottom2);
		  $('#comcompany_tod2').html(response.comcompany_tod2);
		  $('#comcompany_top1').html(response.comcompany_top1);
		  $('#comcompany_bottom1').html(response.comcompany_bottom1);
		
		  $('#sumtop3_company').html(response.sumtop3_company);
		  $('#sumbottom3_company').html(response.sumbottom3_company);
		  $('#sumtod3_company').html(response.sumtod3_company);
		  $('#sumtop2_company').html(response.sumtop2_company);
		  $('#sumbottom2_company').html(response.sumbottom2_company);
		  $('#sumtod2_company').html(response.sumtod2_company);
		  $('#sumtop1_company').html(response.sumtop1_company);
		  $('#sumbottom1_company').html(response.sumbottom1_company);
		
		  $('#sum_allmember').html(response.sumallmember);
		  $('#sum_allcommember').html(response.sumallcommember);
		  $('#sum_allcount').html(response.sumallcount);
		  $('#sum_allag').html(response.sumallag);
		  $('#sum_allcomag').html(response.sumallcomag);
		  $('#sum_allagcount').html(response.sumallagcount);
		  $('#sum_allcompany').html(response.sumallcompany);
		  $('#sum_allcomcompany').html(response.sumallcomcompany);
		  $('#sum_allcountcompany').html(response.sumallcountcompany);

		  $('#sumallmember').html(response.sumallmember);
		  $('#sumallcommember').html(response.sumallcommember);
		  $('#sumallcount').html(response.sumallcount);
		  $('#sumallag').html(response.sumallag);
		  $('#sumallcomag').html(response.sumallcomag);
		  $('#sumallagcount').html(response.sumallagcount);
		  $('#sumallcompany').html(response.sumallcompany);
		  $('#sumallcomcompany').html(response.sumallcomcompany);
		  $('#sumallcountcompany').html(response.sumallcountcompany);

		});
  
		});


	  });
	// $(function(){
	// 	$('.ajaxmember').on('click', function(){  
	// 		console.log('Ok');
	// 	}); 
	// });
   
</script>
@endsection