@extends('master')
@section('head')
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

    {{-- <style>
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
    <link rel="stylesheet" href="/css/custom2.css">
@endsection
@section('footer')
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

<script type="text/javascript">
    $('.check-all').change(function(){
		if(this.checked == true){
			 $("input[name='member_ids[]']").prop( "checked", true );
		}else{
          $("input[name='member_ids[]']").prop( "checked", false );
        }
	});
</script>
@endsection

@section('content')
    
        
    @if($errors->all())
        <div class="box-body">
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>            
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                @foreach($errors->all() as $message)
                    {{ $message }}. <br>
                @endforeach
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
                    5. เปิด-ปิด หวย/อัตราจ่าย
                </li>
        </ul><!-- /.breadcrumb -->
        <span id="global-clock" class="pull-right"></span>
    </div>

<!-- /section:basics/content.breadcrumbs -->
    <div class="page-content" id="user-content">
        <div class="row">
            <div id="content" class="col-xs-12">
                    <div class="page-header">
                        <h1>
                            5. เปิด-ปิด อัตราจ่าย/หวย
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                <a href="#" class="ajax">3M3K</a>
                            </small>
                        </h1>
                    </div>

                    <div class="min-width-800 max-width-1100">
                        <div class="alert alert-info">
                            อ่านคำอธิบายระบบใหม่ได้ที่ <a href="#" target="_blank">คู่มือการใช้งาน</a><br>
                            <b>สถานะ:</b> <span class="bg-warning">เหลือง=ระงับ</span>, <span class="bg-danger">แดง=ล็อค</span>
                        </div>
                    </div>

                    <label class="inline">
                        <input type="checkbox" id="input-checkbox-name" data-target="page">
                        <span class="lbl"> แสดงชื่อ</span>
                    </label>

                    <div class="min-width-800 max-width-1100 clearfix">
                        <div class="pull-left">
                            <label>
                                <input class="" type="checkbox" id="input-checkbox-detail">
                                <span class="lbl"> ดูอัตราจ่าย - กลุ่มหวย</span>
                            </label>

                            <table class="table table-nonfluid table-bordered table-border-dark table-nowrap jquery-hide span-detail">
                                <thead class="thin-border-bottom">
                                    <tr>
                                        <th></th>
                                        <th>รัฐบาล</th>
                                        <th>หวย ธกส.</th>
                                        <th>หวยหุ้นไทย</th>
                                        <th>หวยลาว</th>
                                        <th>หวยมาเลย์ (Magnum4D)</th>
                                        <th>หวยหุ้นต่างประเทศ</th>
                                        <th>หวยเวียดนาม</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="ac am">
                                        <td class="dark">หวยรัฐ 70</td>
                                        <td class="ac am ">
                                            <i class="fa fa-check green"></i>
                                        </td>
                                        <td class="ac am "></td>
                                        <td class="ac am "></td>
                                        <td class="ac am "></td>
                                        <td class="ac am "></td>
                                        <td class="ac am "></td>
                                        <td class="ac am "></td>
                                    </tr>
                                    <tr class="ac am">
                                        <td class="dark">หวย 70</td>
                                        <td class="ac am "></td>
                                        <td class="ac am ">
                                            <i class="fa fa-check green"></i>
                                        </td>
                                        <td class="ac am ">
                                            <i class="fa fa-check green"></i>
                                        </td>
                                        <td class="ac am ">
                                            <i class="fa fa-check green"></i>
                                        </td>
                                        <td class="ac am ">
                                            <i class="fa fa-check green"></i>
                                        </td>
                                        <td class="ac am ">
                                            <i class="fa fa-check green"></i>
                                        </td>
                                        <td class="ac am ">
                                            <i class="fa fa-check green"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="min-width-800 max-width-1100">
                        <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
                            <li class="js-change-tab active" data-tab1="gtg_status"><a href="#gtg_status" data-toggle="tab">เปิด/ปิด กลุ่มหวย</a></li>
                            <li class="js-change-tab " data-tab1="btg_visibility"><a href="#btg_visibility" data-toggle="tab">เปิด/ปิด ชนิดการแทง</a></li>
                            <li class="js-change-tab " data-tab1="payout_status"><a href="#payout_status" data-toggle="tab">เปิด/ปิด อัตราจ่าย</a></li>

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
                            <option value="#" selected="selected">ชื่อสมาชิก ก่อน -&gt; หลัง</option>
                            <option value="#">ชื่อสมาชิก หลัง -&gt; ก่อน</option>
                            <option value="#">เวลาที่สร้าง ก่อน -&gt; หลัง</option>
                            <option value="#">เวลาที่สร้าง หลัง -&gt; ก่อน</option>
                        </select>
                        </li>
                        </ul>
                    </div>

                <div class="tab-content no-border no-margin-top no-padding width-800 max-width-1100">             
                    <div class="tab-pane active" id="gtg_status">
                        <ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
                            <li class="active">
                                <a data-toggle="tab" href="#gtg_status_1" class="nowrap">รัฐบาล</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#gtg_status_16" class="nowrap">หวย ธกส.</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#gtg_status_2" class="nowrap">หวยหุ้นไทย</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#gtg_status_6" class="nowrap">หวยลาว</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#gtg_status_5" class="nowrap">หวยมาเลย์ (Magnum4D)</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#gtg_status_3" class="nowrap">หวยหุ้นต่างประเทศ</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#gtg_status_15" class="nowrap">หวยเวียดนาม</a>
                            </li>
                        </ul>

                        <div class="tab-content no-padding">
                            <div class="tab-pane in active" id="gtg_status_1">
                                <form method="POST" action="/govlot" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                 {{ csrf_field() }}   
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                เปิด/ปิด กลุ่มหวย รัฐบาล
                                                </th>
                                            </tr>

                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                <input name="action" type="hidden" value="gtg_active">
                                                <input name="game_type_group_id" type="hidden" value="1">
                                                <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                </th>

                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th> การใช้งาน<br>
                                                    <select name="active">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option><option value="2">ปิด</option>
                                                    </select><br>
                                                    &nbsp;
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($members as $member)
                                            <tr data-id="9474" data-status="1" class=" ">
                                                <td class="id">{{$member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span> </td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{$member->openclose->id}}"></td>
                                                @if($member->openclose->govlot == 1)
                                                <td class="ac table-gtg1-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->govlot == 2)
                                                <td class="ac table-gtg1-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="tab-pane " id="gtg_status_16">
                                <form method="POST" action="/tkslot" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                    {{csrf_field()}}
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                เปิด/ปิด กลุ่มหวย หวย ธกส.
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                <input name="action" type="hidden" value="gtg_active">
                                                <input name="game_type_group_id" type="hidden" value="16">
                                                <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                </th>
                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th>การใช้งาน<br>
                                                    <select name="active">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option>
                                                        <option value="2">ปิด</option>
                                                    </select><br>
                                                    &nbsp;
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($members as $member)
                                            <tr data-id="" data-status="1" class=" ">
                                                <td class="id">{{ $member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span></td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{ $member->openclose->id }}"></td>
                                                @if($member->openclose->tkslot == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->tkslot == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="tab-pane " id="gtg_status_2">
                                <form method="POST" action="/setlot" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                 {{csrf_field()}}
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                เปิด/ปิด กลุ่มหวย หวยหุ้นไทย
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                    <input name="action" type="hidden" value="gtg_active">
                                                    <input name="game_type_group_id" type="hidden" value="2">
                                                    <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                    <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                </th>
                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th>การใช้งาน<br>
                                                    <select name="active">
                                                        <option value="" selected="selected">
                                                        </option><option value="1">เปิด</option>
                                                        <option value="2">ปิด</option>
                                                    </select><br>
                                                    &nbsp;
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($members as $member)
                                            <tr data-id="" data-status="1" class=" ">
                                                <td class="id">{{ $member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span></td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{ $member->openclose->id }}"></td>
                                                @if($member->openclose->setlot == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->setlot == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="tab-pane " id="gtg_status_6">
                                <form method="POST" action="/loaslot" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                    {{ csrf_field()}}
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                เปิด/ปิด กลุ่มหวย หวยลาว
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                    <input name="action" type="hidden" value="gtg_active">
                                                    <input name="game_type_group_id" type="hidden" value="6">
                                                    <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                    <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                </th>
                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th>การใช้งาน<br>
                                                    <select name="active">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option>
                                                        <option value="2">ปิด</option>
                                                    </select><br>
                                                    &nbsp;
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($members as $member)
                                            <tr data-id="" data-status="1" class=" ">
                                                <td class="id">{{ $member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span></td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{ $member->openclose->id }}"></td>
                                                @if($member->openclose->loaslot == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->loaslot == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="tab-pane " id="gtg_status_5">
                                <form method="POST" action="/malalot" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                {{ csrf_field()}}
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                เปิด/ปิด กลุ่มหวย หวยมาเลย์ (Magnum4D)
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                <input name="action" type="hidden" value="gtg_active">
                                                <input name="game_type_group_id" type="hidden" value="5">
                                                <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                </th>
                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th>การใช้งาน<br>
                                                    <select name="active">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option><option value="2">ปิด</option>
                                                    </select><br>
                                                    &nbsp;
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($members as $member)
                                            <tr data-id="" data-status="1" class=" ">
                                                <td class="id">{{ $member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span></td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{ $member->openclose->id }}"></td>
                                                @if($member->openclose->malalot == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->malalot == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="tab-pane " id="gtg_status_3">
                                <form method="POST" action="/setabroad" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                {{csrf_field()}}
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                เปิด/ปิด กลุ่มหวย หวยหุ้นต่างประเทศ
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                    <input name="action" type="hidden" value="gtg_active">
                                                    <input name="game_type_group_id" type="hidden" value="3">
                                                    <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                    <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                    </th>
                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th>การใช้งาน<br>
                                                    <select name="active">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option>
                                                        <option value="2">ปิด</option>
                                                    </select><br>
                                                    &nbsp;
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($members as $member)
                                            <tr data-id="" data-status="1" class=" ">
                                                <td class="id">{{ $member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span></td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{ $member->openclose->id }}"></td>
                                                @if($member->openclose->setabroad == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->setabroad == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="tab-pane " id="gtg_status_15">
                                <form method="POST" action="/vnlot" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                 {{csrf_field()}}
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                เปิด/ปิด กลุ่มหวย หวยเวียดนาม
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                    <input name="action" type="hidden" value="gtg_active">
                                                    <input name="game_type_group_id" type="hidden" value="15">
                                                    <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                    <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                </th>
                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th>การใช้งาน<br>
                                                    <select name="active">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option><option value="2">ปิด</option>
                                                    </select><br>
                                                    &nbsp;
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($members as $member)
                                            <tr data-id="" data-status="1" class=" ">
                                                <td class="id">{{ $member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span></td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{ $member->openclose->id }}"></td>
                                                @if($member->openclose->vnlot == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->vnlot == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>   

                    <div class="tab-pane " id="btg_visibility">
                        <div class="tab-content no-padding">
                            <div class="tab-pane in active" id="btg_visibility">
                                <form method="POST" action="/typebet" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                {{csrf_field()}}
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                    เปิด/ปิด ชนิดการแทง
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                <input name="action" type="hidden" value="btg_visibility">
                                                <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                </th>
                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th>3 ตัวท้าย<br>
                                                    <select class="vh" name="btg_visible_1">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option>
                                                        <option value="2">ปิด</option>
                                                    </select>
                                                    <br>
                                                    &nbsp;
                                                </th>                                                                                                                                                                                                                                                                                           </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($members as $member)
                                            <tr data-id="" data-status="1" class=" ">
                                                <td class="id">{{ $member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span></td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{ $member->openclose->id }}"></td>
                                                @if($member->openclose->typebet == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->typebet == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach                                                                                                                                                                                                                                                                                                                          </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane " id="payout_status">
                        <ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
                            <li class="active">
                                <a data-toggle="tab" href="#payout_status_5" class="nowrap">หวยรัฐ 70</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#payout_status_11" class="nowrap">หวย 70</a>
                            </li>
                        </ul>
                        <div class="tab-content no-padding">
                            <div class="tab-pane in active" id="payout_status_5">
                                <form method="POST" action="/lotgovuse" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                {{ csrf_field() }}
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                เปิด/ปิด อัตราจ่าย หวยรัฐ 70
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                    <input name="action" type="hidden" value="payout_active">
                                                    <input name="payout_id" type="hidden" value="5">
                                                    <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                    <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                </th>
                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th>การใช้งาน<br>
                                                    <select name="active">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option><option value="2">ปิด</option>
                                                    </select>
                                                    <br>&nbsp;
                                                </th>
                                                <th>&nbsp;</th>
                                                <th>3 ตัวท้าย<br>
                                                    <select name="btg_active_1">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option>
                                                        <option value="2">ปิด</option>
                                                    </select><br> &nbsp;
                                                </th>                                                                                                                                                                                                                                                                                                                                                    </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($members as $member)
                                            <tr data-id="" data-status="1" class=" ">
                                                <td class="id">{{ $member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span></td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{ $member->openclose->id }}"></td>
                                                @if($member->openclose->lotgovuse == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->lotgovuse == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                                <td></td>
                                                @if($member->openclose->lotgov3 == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->lotgov3 == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach                                                                                                                                                                                                                                                                                                                                       </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="tab-pane " id="payout_status_11">
                                <form method="POST" action="/lotuse" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                                {{ csrf_field() }}
                                    <table class="table table-bordered table-border-dark table-auto table-nowrap no-margin-bottom enable-check-all users__edit">
                                        <thead>
                                            <tr>
                                                <th colspan="99" class="deep-blue caption">
                                                เปิด/ปิด อัตราจ่าย หวย 70
                                                </th>
                                            </tr>

                                            <tr>
                                                <th colspan="3" class="vm text-center">
                                                <input name="action" type="hidden" value="payout_active">
                                                <input name="payout_id" type="hidden" value="11">
                                                <button type="submit" class="btn btn-primary btn-xs">แก้ไข</button>
                                                <a class="btn btn-primary btn-xs btn-cancel">ยกเลิก</a>
                                                </th>

                                                <th><input class="check-all" name="" type="checkbox" value="0"></th>
                                                <th>การใช้งาน<br>
                                                    <select name="active">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option>
                                                        <option value="2">ปิด</option>
                                                    </select><br> &nbsp;
                                                </th>
                                                <th>&nbsp;</th>
                                                <th>3 ตัวท้าย<br>
                                                    <select name="btg_active_1">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">เปิด</option>
                                                        <option value="2">ปิด</option>
                                                    </select><br>
                                                    &nbsp;
                                                </th>                                                                                                                                                                                                                                                                                                                                               </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($members as $member)
                                            <tr data-id="" data-status="1" class=" ">
                                                <td class="id">{{ $member->id}}</td>
                                                <td>{{$member->username}}<span class="span-name jquery-hide">()</span></td>
                                                @if($member->level == 7)
                                                <td class="type" nowrap="">Member</td>
                                                @elseif($member->level == 6)
                                                <td class="type" nowrap="">Agent</td>
                                                @elseif($member->level == 5)
                                                <td class="type" nowrap="">Master</td>
                                                @elseif($member->level == 4)
                                                <td class="type" nowrap="">Senior</td>
                                                @elseif($member->level == 3)
                                                <td class="type" nowrap="">Super Senior</td>
                                                @elseif($member->level == 2)
                                                <td class="type" nowrap="">Pathner</td>
                                                @elseif($member->level == 1)
                                                <td class="type" nowrap="">Admin</td>
                                                @endif
                                                <td class="check"><input name="member_ids[]" type="checkbox" value="{{ $member->openclose->id }}"></td>
                                                @if($member->openclose->lotuse == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->lotuse == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                                <td></td>
                                                @if($member->openclose->lot3 == 1)
                                                <td class="ac table-gtg16-row-9474-col-active">เปิด</td>
                                                @elseif($member->openclose->lot3 == 2)
                                                <td class="ac table-gtg16-row-9474-col-active">ปิด</td>
                                                @endif
                                            </tr>
                                        @endforeach                                                                                                                                                                                                                                                                                                                                                         </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    $('#content > .tab-content > .tab-pane').each(function (key, val) {
                    if ($(val).find('.tab-pane.active').length == 0) {
                        $(val).find('.nav-tabs li:first').addClass('active');
                        $(val).find('.tab-content .tab-pane:first').addClass('in active');
                    }
                    });
                });
                </script>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>
@endsection

 