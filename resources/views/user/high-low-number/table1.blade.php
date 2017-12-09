<script>
	$(function(){
		$('.check-all').change(function() {
			console.log($('.check-all').prop( "checked"));
			if(this.checked == true){
					$("input[name='member_ids[]']").prop( "checked", true );
					//$(".member-check").prop( "checked", true );
					$(".check-all").prop( "checked", true );
			}else{
				$("input[name='member_ids[]']").prop( "checked", false );
				//$(".member-check").prop( "checked", false );
				$(".check-all").prop( "checked", false );
			}
		});
	});

</script>
<div class="tab-pane active" id="min" data-action="update-min" data-parent-id="9306">
	<ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
		<li class="js-change-tab active" data-tab2="1">
			<a data-toggle="tab" href="#min_1">3 ตัวท้าย</a>
		</li>
	</ul>

	<div class="tab-content no-padding">
		<div id="min1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">

			<form id="form1" method="POST" action="/min" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit"
			 data-after="reset" class="js-ajax-form">
				{{ csrf_field() }}
				<div id="general">
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
									<input name="bet_type_group_id" type="hidden" value="1"> {{-- <button type="submit" id="editMin" class="btn btn-primary btn-xs">แก้ไข</button>									--}}
									<button type="button" id="editMin" class="btn btn-primary btn-xs">แก้ไข</button>
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
							@foreach($member as $members)

							<tr data-id="9474" data-status="{{ $members->status }}" @if($members->status == 0) class="jquery-hide nomal" @elseif($members->status == 1) class="jquery-hide bg-warning" @else class="jquery-hide
								bg-danger" @endif >
								<td class="id">{{$members->playset->id}}</td>
								<td>{{$members->username}} <span class="span-name jquery-hide" name="showname">({{$members->name}})</span></td>
								@if($members->level == 7)
								<td class="type" nowrap="">Member</td>
								@elseif($members->level == 6)
								<td class="type" nowrap="">Agent</td>
								@elseif($members->level == 5)
								<td class="type" nowrap="">Master</td>
								@elseif($members->level == 4)
								<td class="type" nowrap="">Senior</td>
								@elseif($members->level == 3)
								<td class="type" nowrap="">Super Senior</td>
								@elseif($members->level == 2)
								<td class="type" nowrap="">Pathner</td>
								@elseif($members->level == 1)
								<td class="type" nowrap="">Admin</td>
								@endif
								<td class="check"><input name="member_ids[]" class="member-check" type="checkbox" value="{{ $members->playset->id }}"></td>
								<td class="table-min-1-row-{{ $members->playset->id }}-col-min_1">{{ $members->playset->min_1}}</td>
								<td class="table-min-1-row-{{ $members->playset->id }}-col-min_2">{{ $members->playset->min_2}}</td>
								<td class="table-min-1-row-{{ $members->playset->id }}-col-min_3">{{ $members->playset->min_3}}</td>
								<td class="table-min-1-row-{{ $members->playset->id }}-col-min_4">{{ $members->playset->min_4}}</td>
								<td class="table-min-1-row-{{ $members->playset->id }}-col-min_5">{{ $members->playset->min_5}}</td>
								<td class="table-min-1-row-{{ $members->playset->id }}-col-min_6">{{ $members->playset->min_6}}</td>
								<td class="table-min-1-row-{{ $members->playset->id }}-col-min_7">{{ $members->playset->min_7}}</td>
								<td class="table-min-1-row-{{ $members->playset->id }}-col-min_8">{{ $members->playset->min_8}}</td>
							</tr>

							@endforeach
						</tbody>
					</table>
				</div>
			</form>

		</div>

	</div>
</div>

<div class="tab-pane " id="max" data-action="update-max" data-parent-id="9306">
	<ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
		<li class="js-change-tab active" data-tab2="1">
			<a data-toggle="tab" href="#max_1">3 ตัวท้าย</a>
		</li>
	</ul>

	<div class="tab-content no-padding">
		<div id="max_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">
			<form method="POST" action="/max" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit"
			 data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7"> {{ csrf_field() }}
				<table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
					<thead clsss="thin-border-bottom">
						<tr>
							<th colspan="99" class="deep-blue caption">
								สูงสุด 3 ตัวท้าย

							</th>
						</tr>

						<tr>
							<th colspan="3" class="vm text-center">
								<input name="action" type="hidden" value="max">
								<input name="bet_type_group_id" type="hidden" value="1">
								<button type="submit" id="editMax" class="btn btn-primary btn-xs">แก้ไข</button>
								<a class="btn btn-primary btn-xs">ยกเลิก</a>
							</th>

							<th><input class="check-all" name="" type="checkbox" value="0"></th>
							<th>
								3 ตัวบน<br>
								<input class="form-control input-sm ac" name="max_1" id="maxmax1" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">3000</a>
							</th>
							<th>
								3 ตัวล่าง<br>
								<input class="form-control input-sm ac" name="max_2" id="maxmax2" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">3000</a>
							</th>
							<th>
								3 ตัวโต๊ด<br>
								<input class="form-control input-sm ac" name="max_3" id="maxmax3" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">3000</a>
							</th>
							<th>
								2 ตัวบน<br>
								<input class="form-control input-sm ac" name="max_4" id="maxmax4" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">10000</a>
							</th>
							<th>
								2 ตัวล่าง<br>
								<input class="form-control input-sm ac" name="max_5" id="maxmax5" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">10000</a>
							</th>
							<th>
								2 ตัวโต๊ด<br>
								<input class="form-control input-sm ac" name="max_6" id="maxmax6" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">10000</a>
							</th>
							<th>
								วิ่งบน<br>
								<input class="form-control input-sm ac" name="max_7" id="maxmax7" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">100000</a>
							</th>
							<th>
								วิ่งล่าง<br>
								<input class="form-control input-sm ac" name="max_8" id="maxmax8" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">100000</a>
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($member as $members)
						<tr data-id="9474" data-status="{{$members->status}}" @if($members->status == 0) class="jquery-hide nomal" @elseif($members->status == 1) class="jquery-hide bg-warning" @else class="jquery-hide
							bg-danger" @endif >
							<td class="id">{{$members->playset->id}}</td>
							<td>{{$members->username}} <span class="span-name jquery-hide">({{$members->name}})</span></td>
							@if($members->level == 7)
							<td class="type" nowrap="">Member</td>
							@elseif($members->level == 6)
							<td class="type" nowrap="">Agent</td>
							@elseif($members->level == 5)
							<td class="type" nowrap="">Master</td>
							@elseif($members->level == 4)
							<td class="type" nowrap="">Senior</td>
							@elseif($members->level == 3)
							<td class="type" nowrap="">Super Senior</td>
							@elseif($members->level == 2)
							<td class="type" nowrap="">Pathner</td>
							@elseif($members->level == 1)
							<td class="type" nowrap="">Admin</td>
							@endif
							<td class="check"><input name="member_ids[]" type="checkbox" value="{{ $members->playset->id }}"></td>
							<td class="table-max-1-row-{{ $members->playset->id }}-col-max_1">{{$members->playset->max_1}}</td>
							<td class="table-max-1-row-{{ $members->playset->id }}-col-max_2">{{$members->playset->max_2}}</td>
							<td class="table-max-1-row-{{ $members->playset->id }}-col-max_3">{{$members->playset->max_3}}</td>
							<td class="table-max-1-row-{{ $members->playset->id }}-col-max_4">{{$members->playset->max_4}}</td>
							<td class="table-max-1-row-{{ $members->playset->id }}-col-max_5">{{$members->playset->max_5}}</td>
							<td class="table-max-1-row-{{ $members->playset->id }}-col-max_6">{{$members->playset->max_6}}</td>
							<td class="table-max-1-row-{{ $members->playset->id }}-col-max_7">{{$members->playset->max_7}}</td>
							<td class="table-max-1-row-{{ $members->playset->id }}-col-max_8">{{$members->playset->max_8}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>

<div class="tab-pane " id="max_per_num" data-action="update-max_per_num" data-parent-id="9306">
	<ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
		<li class="js-change-tab active" data-tab2="1">
			<a data-toggle="tab" href="#max_per_num_1">3 ตัวท้าย</a>
		</li>
	</ul>

	<div class="tab-content no-padding">
		<div id="max_per_num_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">
			<form method="POST" action="/max_per_num" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit"
			 data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7"> {{ csrf_field() }}
				<table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
					<thead clsss="thin-border-bottom">
						<tr>
							<th colspan="99" class="deep-blue caption">
								สูงสุดต่อเลข 3 ตัวท้าย

							</th>
						</tr>

						<tr>
							<th colspan="3" class="vm text-center">
								<input name="action" type="hidden" value="max_per_num">
								<input name="bet_type_group_id" type="hidden" value="1">
								<button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
								<a class="btn btn-primary btn-xs">ยกเลิก</a>
							</th>

							<th><input class="check-all" name="" type="checkbox" value="0"></th>

							<th>
								3 ตัวบน<br>
								<input class="form-control input-sm ac" name="max_per_num_1" id="numpermax1" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">10000</a>
							</th>
							<th>
								3 ตัวล่าง<br>
								<input class="form-control input-sm ac" name="max_per_num_2" id="numpermax2" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">100000</a>
							</th>
							<th>
								3 ตัวโต๊ด<br>
								<input class="form-control input-sm ac" name="max_per_num_3" id="numpermax3" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">30000</a>
							</th>
							<th>
								2 ตัวบน<br>
								<input class="form-control input-sm ac" name="max_per_num_4" id="numpermax4" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">100000</a>
							</th>
							<th>
								2 ตัวล่าง<br>
								<input class="form-control input-sm ac" name="max_per_num_5" id="numpermax5" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">100000</a>
							</th>
							<th>
								2 ตัวโต๊ด<br>
								<input class="form-control input-sm ac" name="max_per_num_6" id="numpermax6" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">100000</a>
							</th>
							<th>
								วิ่งบน<br>
								<input class="form-control input-sm ac" name="max_per_num_7" id="numpermax7" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">300000</a>
							</th>
							<th>
								วิ่งล่าง<br>
								<input class="form-control input-sm ac" name="max_per_num_8" id="numpermax8" type="text" value=""> &lt;=
								<a href="#" class="fill-input" tabindex="-1">300000</a>
							</th>
						</tr>
					</thead>
					@foreach($member as $members)
					<tbody>
						<tr data-id="9474" data-status="{{ $members->status }}" @if($members->status == 0) class="jquery-hide nomal" @elseif($members->status == 1) class="jquery-hide bg-warning" @else class="jquery-hide
							bg-danger" @endif >
							<td class="id">{{$members->playset->id}}</td>
							<td>{{$members->username}} <span class="span-name jquery-hide">({{$members->name}})</span></td>
							@if($members->level == 7)
							<td class="type" nowrap="">Member</td>
							@elseif($members->level == 6)
							<td class="type" nowrap="">Agent</td>
							@elseif($members->level == 5)
							<td class="type" nowrap="">Master</td>
							@elseif($members->level == 4)
							<td class="type" nowrap="">Senior</td>
							@elseif($members->level == 3)
							<td class="type" nowrap="">Super Senior</td>
							@elseif($members->level == 2)
							<td class="type" nowrap="">Pathner</td>
							@elseif($members->level == 1)
							<td class="type" nowrap="">Admin</td>
							@endif
							<td class="check"><input name="member_ids[]" type="checkbox" value="{{ $members->playset->id }}"></td>
							<td class="table-max_per_num-1-row-{{ $members->playset->id }}-col-max_per_num_1">{{$members->playset->max_per_num1}}</td>
							<td class="table-max_per_num-1-row-{{ $members->playset->id }}-col-max_per_num_2">{{$members->playset->max_per_num2}}</td>
							<td class="table-max_per_num-1-row-{{ $members->playset->id }}-col-max_per_num_3">{{$members->playset->max_per_num3}}</td>
							<td class="table-max_per_num-1-row-{{ $members->playset->id }}-col-max_per_num_4">{{$members->playset->max_per_num4}}</td>
							<td class="table-max_per_num-1-row-{{ $members->playset->id }}-col-max_per_num_5">{{$members->playset->max_per_num5}}</td>
							<td class="table-max_per_num-1-row-{{ $members->playset->id }}-col-max_per_num_6">{{$members->playset->max_per_num6}}</td>
							<td class="table-max_per_num-1-row-{{ $members->playset->id }}-col-max_per_num_7">{{$members->playset->max_per_num7}}</td>
							<td class="table-max_per_num-1-row-{{ $members->playset->id }}-col-max_per_num_8">{{$members->playset->max_per_num8}}</td>
						</tr>
					</tbody>
					@endforeach
				</table>
			</form>

		</div>


	</div>
</div>