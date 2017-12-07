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
                <input name="bet_type_group_id" type="hidden" value="1"> {{-- <button type="submit" id="editMin" class="btn btn-primary btn-xs">แก้ไข</button>													--}}
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

        <tr data-id="9474" data-status="1" @if($members->status == 0) class="jquery-hide nomal" @elseif($members->status == 1) class="jquery-hide bg-warning" @else class="jquery-hide
            bg-danger" @endif >
            <td class="id">{{$members->playset->id}}</td>
            <td>{{$members->username}} <span class="showname" name="showname">({{$members->name}})</span></td>
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