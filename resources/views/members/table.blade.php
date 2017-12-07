<!-- Tab 1 General -->
<div class="tab-pane simple active" id="general">
	<table class="table table-bordered table-border-dark table-nowrap no-margin-bottom min-width-800 max-width-1100 users__edit users__edit--larger">
		<thead>
			<tr>
				<th>#</th>
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
					<td class="name"><input data-memberid="{{ $members->id }}" id="name_{{ $members->id }}" class="form-control input-sm membername" data-old="{{$members->name}}"
						 name="name" type="text" value="{{$members->name}}"></td>
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
				<th>#</th>
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