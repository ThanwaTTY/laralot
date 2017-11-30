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
    <script src="../../js/main.js"></script>


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
<script src="../../js/main.js"></script>
{{-- <script type="text/javascript">
  $(function(){
    $('#editMin').on('click', function(){
      $.post('/min', $('#form1').serialize()).done( function(data) {
        console.log(data);
        for(var i in data.success)
        {
          for( var j in data.success[i])
          {

            $('.table-min-8-row-'+ data.success[i][j]+'-col-' + i).addClass('bg-success');
            console.log('.table-min-8-row-'+ data.success[i][j]+'-col-' + i);
          }

        }
      });

    });
  });
</script> --}}
{{-- min --}}
<script type="text/javascript">
  $(function(){
    $('#minmin').on('keyup', function(){
      var minmin = 0;

      minmin += isNaN(parseInt( $('#minmin').val() )) ? 0 : parseInt( $('#minmin').val() );
      if(minmin < 5 ){
        $(this).val('');
      }else{
         $(this).val(minmin);
      }
    });

  });
  $(function(){
    $('#minmin2').on('keyup', function(){
      var minmin2 = 0;

      minmin2 += isNaN(parseInt( $('#minmin2').val() )) ? 0 : parseInt( $('#minmin2').val() );
      if(minmin2 < 5 ){
        $(this).val('');
      }else{
         $(this).val(minmin2);
      }

    });
  });
  $(function(){
    $('#minmin3').on('keyup', function(){
      var minmin3 = 0;

      minmin3 += isNaN(parseInt( $('#minmin3').val() )) ? 0 : parseInt( $('#minmin3').val() );
      if(minmin3 < 5 ){
        $(this).val('');
      }else{
         $(this).val(minmin3);
      }

    });
  });
  $(function(){
    $('#minmin4').on('keyup', function(){
      var minmin4 = 0;

      minmin4 += isNaN(parseInt( $('#minmin4').val() )) ? 0 : parseInt( $('#minmin4').val() );
      if(minmin4 < 5 ){
        $(this).val('');
      }else{
         $(this).val(minmin4);
      }

    });
  });
  $(function(){
    $('#minmin5').on('keyup', function(){
      var minmin5 = 0;

      minmin5 += isNaN(parseInt( $('#minmin5').val() )) ? 0 : parseInt( $('#minmin5').val() );
      if(minmin5 < 5 ){
        $(this).val('');
      }else{
         $(this).val(minmin5);
      }

    });
  });
  $(function(){
    $('#minmin6').on('keyup', function(){
      var minmin6 = 0;

      minmin6 += isNaN(parseInt( $('#minmin6').val() )) ? 0 : parseInt( $('#minmin6').val() );
      if(minmin6 < 5 ){
        $(this).val('');
      }else{
         $(this).val(minmin6);
      }

    });
  });
  $(function(){
    $('#minmin7').on('keyup', function(){
      var minmin7 = 0;

      minmin7 += isNaN(parseInt( $('#minmin7').val() )) ? 0 : parseInt( $('#minmin7').val() );
      if(minmin7 < 5 ){
        $(this).val('');
      }else{
         $(this).val(minmin7);
      }

    });
  });
  $(function(){
    $('#minmin8').on('keyup', function(){
      var minmin8 = 0;

      minmin8 += isNaN(parseInt( $('#minmin8').val() )) ? 0 : parseInt( $('#minmin8').val() );
      if(minmin8 < 5 ){
        $(this).val('');
      }else{
         $(this).val(minmin8);
      }

    });
  });
</script>
{{-- max --}}
<script type="text/javascript">
  $(function(){
    $('#maxmax1').on('keyup', function(){
      var maxmax1 = 0;

      maxmax1 += isNaN(parseInt( $('#maxmax1').val() )) ? 0 : parseInt( $('#maxmax1').val() );
      if(maxmax1 > 3000 ){
        $(this).val('');
      }else{
         $(this).val(maxmax1);
      }
    });

  });
  $(function(){
    $('#maxmax2').on('keyup', function(){
      var maxmax2 = 0;

      maxmax2 += isNaN(parseInt( $('#maxmax2').val() )) ? 0 : parseInt( $('#maxmax2').val() );
      if(maxmax2 > 3000 ){
        $(this).val('');
      }else{
         $(this).val(maxmax2);
      }

    });
  });
  $(function(){
    $('#maxmax3').on('keyup', function(){
      var maxmax3 = 0;

      maxmax3 += isNaN(parseInt( $('#maxmax3').val() )) ? 0 : parseInt( $('#maxmax3').val() );
      if(maxmax3 > 3000  ){
        $(this).val('');
      }else{
         $(this).val(maxmax3);
      }

    });
  });
  $(function(){
    $('#maxmax4').on('keyup', function(){
      var maxmax4 = 0;

      maxmax4 += isNaN(parseInt( $('#maxmax4').val() )) ? 0 : parseInt( $('#maxmax4').val() );
      if(maxmax4 > 10000 ){
        $(this).val('');
      }else{
         $(this).val(maxmax4);
      }

    });
  });
  $(function(){
    $('#maxmax5').on('keyup', function(){
      var maxmax5 = 0;

      maxmax5 += isNaN(parseInt( $('#maxmax5').val() )) ? 0 : parseInt( $('#maxmax5').val() );
      if(maxmax5 > 10000 ){
        $(this).val('');
      }else{
         $(this).val(maxmax5);
      }

    });
  });
  $(function(){
    $('#maxmax6').on('keyup', function(){
      var maxmax6 = 0;

      maxmax6 += isNaN(parseInt( $('#maxmax6').val() )) ? 0 : parseInt( $('#maxmax6').val() );
      if(maxmax6 > 10000 ){
        $(this).val('');
      }else{
         $(this).val(maxmax6);
      }

    });
  });
  $(function(){
    $('#maxmax7').on('keyup', function(){
      var maxmax7 = 0;

      maxmax7 += isNaN(parseInt( $('#maxmax7').val() )) ? 0 : parseInt( $('#maxmax7').val() );
      if(maxmax7 > 100000 ){
        $(this).val('');
      }else{
         $(this).val(maxmax7);
      }

    });
  });
  $(function(){
    $('#maxmax8').on('keyup', function(){
      var maxmax8 = 0;

      maxmax8 += isNaN(parseInt( $('#maxmax8').val() )) ? 0 : parseInt( $('#maxmax8').val() );
      if(maxmax8 > 100000 ){
        $(this).val('');
      }else{
         $(this).val(maxmax8);
      }

    });
  });
</script>
{{-- num_per_max --}}
<script type="text/javascript">
  $(function(){
    $('#numpermax1').on('keyup', function(){
      var numpermax1 = 0;

      numpermax1 += isNaN(parseInt( $('#numpermax1').val() )) ? 0 : parseInt( $('#numpermax1').val() );
      if(numpermax1 > 10000 ){
        $(this).val('');
      }else{
         $(this).val(numpermax1);
      }
    });

  });
  $(function(){
    $('#numpermax2').on('keyup', function(){
      var numpermax2 = 0;

      numpermax2 += isNaN(parseInt( $('#numpermax2').val() )) ? 0 : parseInt( $('#numpermax2').val() );
      if(numpermax2 > 100000 ){
        $(this).val('');
      }else{
         $(this).val(numpermax2);
      }

    });
  });
  $(function(){
    $('#numpermax3').on('keyup', function(){
      var numpermax3 = 0;

      numpermax3 += isNaN(parseInt( $('#numpermax3').val() )) ? 0 : parseInt( $('#numpermax3').val() );
      if(numpermax3 > 30000  ){
        $(this).val('');
      }else{
         $(this).val(numpermax3);
      }

    });
  });
  $(function(){
    $('#numpermax4').on('keyup', function(){
      var numpermax4 = 0;

      numpermax4 += isNaN(parseInt( $('#numpermax4').val() )) ? 0 : parseInt( $('#numpermax4').val() );
      if(numpermax4 > 100000 ){
        $(this).val('');
      }else{
         $(this).val(numpermax4);
      }

    });
  });
  $(function(){
    $('#numpermax5').on('keyup', function(){
      var numpermax5 = 0;

      numpermax5 += isNaN(parseInt( $('#numpermax5').val() )) ? 0 : parseInt( $('#numpermax5').val() );
      if(numpermax5 > 100000 ){
        $(this).val('');
      }else{
         $(this).val(numpermax5);
      }

    });
  });
  $(function(){
    $('#numpermax6').on('keyup', function(){
      var numpermax6 = 0;

      numpermax6 += isNaN(parseInt( $('#numpermax6').val() )) ? 0 : parseInt( $('#numpermax6').val() );
      if(numpermax6 > 100000 ){
        $(this).val('');
      }else{
         $(this).val(numpermax6);
      }

    });
  });
  $(function(){
    $('#numpermax7').on('keyup', function(){
      var numpermax7 = 0;

      numpermax7 += isNaN(parseInt( $('#numpermax7').val() )) ? 0 : parseInt( $('#numpermax7').val() );
      if(numpermax7 > 300000 ){
        $(this).val('');
      }else{
         $(this).val(numpermax7);
      }

    });
  });
  $(function(){
    $('#numpermax8').on('keyup', function(){
      var numpermax8 = 0;

      numpermax8 += isNaN(parseInt( $('#numpermax8').val() )) ? 0 : parseInt( $('#numpermax8').val() );
      if(numpermax8 > 300000 ){
        $(this).val('');
      }else{
         $(this).val(numpermax8);
      }

    });
  });
</script>
{{--  --}}
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
          3. ขั้นต่ำ/สูงสุด/สูงสุดต่อเลข
          </li>
         </ul><!-- /.breadcrumb -->

        <span id="global-clock" class="pull-right"></span>
      </div>

<!-- /section:basics/content.breadcrumbs -->
      <div class="page-content" id="user-content">
        <div class="row">
          <div id="content" class="col-xs-12"><div class="page-header">
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
            <input type="checkbox" id="input-checkbox-name" data-target="page">
            <span class="lbl"> แสดงชื่อ</span>
          </label>

          <div class="min-width-800 max-width-1100">
            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
              <li class="js-change-tab active" data-tab1="min"><a href="#min" data-toggle="tab">ขั้นต่ำ</a></li>
              <li class="js-change-tab " data-tab1="max"><a href="#max" data-toggle="tab">สูงสุด</a></li>
              <li class="js-change-tab " data-tab1="max_per_num"><a href="#max_per_num" data-toggle="tab">สูงสุดต่อเลข</a></li>
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
            <div class="tab-pane active" id="min" data-action="update-min" data-parent-id="9306">
              <ul class="nav nav-tabs padding-18 tab-color-blue background-blue">
                <li class="js-change-tab active" data-tab2="1">
                  <a data-toggle="tab" href="#min_1">3 ตัวท้าย</a>
                </li>
              </ul>

              <div class="tab-content no-padding">
                <div id="min_1" class="tab-pane in active" data-action="update-min" data-parent-id="9306">

                  <form id="form1" method="POST" action="/min" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form">
                  {{ csrf_field() }}
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
                            <input class="form-control input-sm ac" name="min_1"  id="minmin" type="text" value="">
                            &gt;=
                            <a href="#" class="fill-input" tabindex="-1">5</a>
                          </th>
                          <th>3 ตัวล่าง<br>
                            <input class="form-control input-sm ac" name="min_2" id="minmin2" type="text" value="">
                            &gt;=
                            <a href="#" class="fill-input" tabindex="-1">5</a>
                          </th>
                          <th>
                            3 ตัวโต๊ด<br>
                            <input class="form-control input-sm ac" name="min_3" id="minmin3" type="text" value="">
                            &gt;=
                            <a href="#" class="fill-input" tabindex="-1">5</a>
                          </th>
                          <th>
                            2 ตัวบน<br>
                            <input class="form-control input-sm ac" name="min_4" id="minmin4" type="text" value="">
                            &gt;=
                            <a href="#" class="fill-input" tabindex="-1">5</a>
                          </th>
                          <th>
                            2 ตัวล่าง<br>
                            <input class="form-control input-sm ac" name="min_5" id="minmin5" type="text" value="">
                            &gt;=
                            <a href="#" class="fill-input" tabindex="-1">5</a>
                          </th>
                          <th>
                            2 ตัวโต๊ด<br>
                            <input class="form-control input-sm ac" name="min_6" id="minmin6" type="text" value="">
                            &gt;=
                            <a href="#" class="fill-input" tabindex="-1">5</a>
                          </th>
                          <th>
                            วิ่งบน<br>
                            <input class="form-control input-sm ac" name="min_7" id="minmin7" type="text" value="">
                            &gt;=
                            <a href="#" class="fill-input" tabindex="-1">5</a>
                          </th>
                          <th>
                            วิ่งล่าง<br>
                            <input class="form-control input-sm ac" name="min_8" id="minmin8" type="text" value="">
                            &gt;=
                            <a href="#" class="fill-input" tabindex="-1">5</a>
                          </th>
                        </tr>
                      </thead>
                      @foreach($member as $members)
                      <tbody>
                          <tr data-id="9474" data-status="1" class=" ">
                            <td class="id">{{$members->playset->id}}</td>
                            <td>{{$members->username}} <span class="span-name jquery-hide"></span></td>
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
                            <td class="table-min-1-row-{{ $members->playset->id }}-col-min_1">{{ $members->playset->min_1}}</td>
                            <td class="table-min-1-row-{{ $members->playset->id }}-col-min_2">{{ $members->playset->min_2}}</td>
                            <td class="table-min-1-row-{{ $members->playset->id }}-col-min_3">{{ $members->playset->min_3}}</td>
                            <td class="table-min-1-row-{{ $members->playset->id }}-col-min_4">{{ $members->playset->min_4}}</td>
                            <td class="table-min-1-row-{{ $members->playset->id }}-col-min_5">{{ $members->playset->min_5}}</td>
                            <td class="table-min-1-row-{{ $members->playset->id }}-col-min_6">{{ $members->playset->min_6}}</td>
                            <td class="table-min-1-row-{{ $members->playset->id }}-col-min_7">{{ $members->playset->min_7}}</td>
                            <td class="table-min-1-row-{{ $members->playset->id }}-col-min_8">{{ $members->playset->min_8}}</td>
                          </tr>
                      </tbody>
                    @endforeach
                    </table>
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
                    <form method="POST" action="/max" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
                      {{ csrf_field() }}
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
                                <input class="form-control input-sm ac" name="max_1" id="maxmax1" type="text" value="">
                                &lt;=
                                <a href="#" class="fill-input" tabindex="-1">3000</a>
                              </th>
                              <th>
                                3 ตัวล่าง<br>
                                <input class="form-control input-sm ac" name="max_2" id="maxmax2" type="text" value="">
                                &lt;=
                                <a href="#" class="fill-input" tabindex="-1">3000</a>
                              </th>
                              <th>
                                3 ตัวโต๊ด<br>
                                <input class="form-control input-sm ac" name="max_3" id="maxmax3" type="text" value="">
                                &lt;=
                                <a href="#" class="fill-input" tabindex="-1">3000</a>
                              </th>
                              <th>
                                2 ตัวบน<br>
                                <input class="form-control input-sm ac" name="max_4" id="maxmax4" type="text" value="">
                                &lt;=
                                <a href="#" class="fill-input" tabindex="-1">10000</a>
                              </th>
                              <th>
                                2 ตัวล่าง<br>
                                <input class="form-control input-sm ac" name="max_5" id="maxmax5" type="text" value="">
                                &lt;=
                                <a href="#" class="fill-input" tabindex="-1">10000</a>
                              </th>
                              <th>
                                2 ตัวโต๊ด<br>
                                <input class="form-control input-sm ac" name="max_6" id="maxmax6" type="text" value="">
                                &lt;=
                                <a href="#" class="fill-input" tabindex="-1">10000</a>
                              </th>
                              <th>
                                วิ่งบน<br>
                                <input class="form-control input-sm ac" name="max_7" id="maxmax7" type="text" value="">
                                &lt;=
                                <a href="#" class="fill-input" tabindex="-1">100000</a>
                              </th>
                              <th>
                                วิ่งล่าง<br>
                                <input class="form-control input-sm ac" name="max_8" id="maxmax8" type="text" value="">
                                &lt;=
                                <a href="#" class="fill-input" tabindex="-1">100000</a>
                              </th>
                          </tr>
                        </thead>
                         @foreach($member as $members)
                        <tbody>
                          <tr data-id="9474" data-status="1" class=" ">
                              <td class="id">{{$members->playset->id}}</td>
                              <td>{{$members->username}} <span class="span-name jquery-hide"></span></td>
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
                  <form method="POST" action="/max_per_num" accept-charset="UTF-8" data-method="put" data-feedback="mixed" data-before="validateUserEdit" data-after="reset" class="js-ajax-form"><input name="_token" type="hidden" value="IeCQoUcrA0DJ5LqlVQc5nt1EhjE70qQG4BtBIlu7">
                    {{ csrf_field() }}
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
                              <input class="form-control input-sm ac" name="max_per_num_1" id="numpermax1" type="text" value="">
                              &lt;=
                              <a href="#" class="fill-input" tabindex="-1">10000</a>
                            </th>
                            <th>
                              3 ตัวล่าง<br>
                              <input class="form-control input-sm ac" name="max_per_num_2" id="numpermax2" type="text" value="">
                              &lt;=
                              <a href="#" class="fill-input" tabindex="-1">100000</a>
                            </th>
                            <th>
                              3 ตัวโต๊ด<br>
                              <input class="form-control input-sm ac" name="max_per_num_3" id="numpermax3" type="text" value="">
                              &lt;=
                              <a href="#" class="fill-input" tabindex="-1">30000</a>
                            </th>
                            <th>
                              2 ตัวบน<br>
                              <input class="form-control input-sm ac" name="max_per_num_4" id="numpermax4" type="text" value="">
                              &lt;=
                              <a href="#" class="fill-input" tabindex="-1">100000</a>
                            </th>
                            <th>
                              2 ตัวล่าง<br>
                              <input class="form-control input-sm ac" name="max_per_num_5" id="numpermax5" type="text" value="">
                              &lt;=
                              <a href="#" class="fill-input" tabindex="-1">100000</a>
                            </th>
                            <th>
                              2 ตัวโต๊ด<br>
                              <input class="form-control input-sm ac" name="max_per_num_6" id="numpermax6" type="text" value="">
                              &lt;=
                              <a href="#" class="fill-input" tabindex="-1">100000</a>
                            </th>
                            <th>
                              วิ่งบน<br>
                              <input class="form-control input-sm ac" name="max_per_num_7" id="numpermax7" type="text" value="">
                              &lt;=
                              <a href="#" class="fill-input" tabindex="-1">300000</a>
                            </th>
                            <th>
                              วิ่งล่าง<br>
                              <input class="form-control input-sm ac" name="max_per_num_8" id="numpermax8" type="text" value="">
                              &lt;=
                              <a href="#" class="fill-input" tabindex="-1">300000</a>
                            </th>
                        </tr>
                      </thead>
                      @foreach($member as $members)
                      <tbody>
                        <tr data-id="9474" data-status="1" class=" ">
                            <td class="id">{{$members->playset->id}}</td>
                            <td>{{$members->username}} <span class="span-name jquery-hide"></span></td>
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
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
</div><!-- /.page-content -->

@endsection
 