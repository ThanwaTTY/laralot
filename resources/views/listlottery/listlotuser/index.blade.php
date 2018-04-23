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
							<td class="align-right n2c"><span class="negative"><span id="sum_allmember">{{ number_format($sumallmembers,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sum_allcommember">{{ number_format($sumallcommembers,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sum_allcount">{{ number_format($sumallcounts,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_allag">{{ number_format($sumallags,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="sum_allcomag">{{ number_format($sumallcomags,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sum_allagcount">{{ number_format($sumallagcounts,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sum_allcompany">{{ number_format($sumallcompanys,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative">-<span id="sum_allcomcompany">{{ number_format($sumallcomcompanys,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sum_allcountcompany">{{ number_format($sumallcountcompanys,2) }}</span></span>
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
								<td class="align-right n2c"><span class="negative"><span id="sumallmember">{{ number_format($sumallmembers,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumallcommember">{{ number_format($sumallcommembers,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="sumallcount">{{ number_format($sumallcounts,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumallag">{{ number_format($sumallags,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="negative"><span id="sumallcomag">{{ number_format($sumallcomags,2) }}</span></span>
								</td>
								<td class="align-right n2c bg-yellow"><span class="positive"><span id="sumallagcount">{{ number_format($sumallagcounts,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumallcompany">{{ number_format($sumallcompanys,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="negative"><span id="sumallcomcompany">{{ number_format($sumallcomcompanys,2) }}</span></span>
								</td>
								<td class="align-right n2c"><span class="positive"><span id="sumallcountcompany">{{ number_format($sumallcountcompanys,2) }}</span></span>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
