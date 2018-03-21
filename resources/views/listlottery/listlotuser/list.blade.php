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
@endsection 
@section('content')
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
    รายการแทงแยกตามสมาชิก
    <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                  <a href="https://agent.superlot999.com/items/by-member/9306" class="ajax">3M3K</a>
                      <i class="ace-icon fa fa-angle-double-right"></i>
                  3M3KTOR
                  </small>
  </h1>
                <h4 class="sub">
    <i class="fa fa-angle-right orange"></i>
    <span class="deep-blue">รัฐบาลไทย</span>, งวดวันที่ 16 กุมภาพันธ์ 2561
    <span class="smaller near-white"><i>(เปลี่ยนได้ที่แถบเมนูด้านบน)</i></span>
  </h4>
            </div>

            <div class="alert alert-info">
                <h3 class="no-margin">ออกรางวัลแล้ว</h3>
            </div>

            <label>
                <input class="" type="checkbox" id="input-checkbox-detail">
                <span class="lbl"> แสดงรายละเอียด</span>
            </label>

            <div class="alert alert-info span-detail jquery-hide">
                ถือสู้ 1,000.00 [50%+<span class="orange">10%</span>]
                <br> ค่าคอม <span class="n2c"><span class="negative">-300.00<span></span></span>
                </span>
                <br> รวม <span class="n2c"><span class="positive">700.00<span></span></span>
                </span>
                <br>
                <br> ถือสู้ <u>ถือสู้</u> [<u>เก็บของ</u>+<u class="orange">เก็บของเกิน</u>]
                <br> ค่าคอม <u>ค่าคอม</u>
                <br> รวม <u>รวม</u>
            </div>

            <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap" id="by-member-table">
                <thead class="thin-border-bottom">
                    <tr>
                        <th class="ac">&nbsp;#&nbsp;</th>
                        <th class="ac width-90px">ชื่อผู้ใช้</th>
                        <th class="ac">โพย#</th>
                        <th class="ac">Bet#</th>
                        <th class="ac">อัตราจ่าย</th>
                        <th class="ac">เวลา</th>
                        <th class="ac">การแทง</th>
                        <th class="ac width-110">รายการ</th>
                        <th class="ac width-90px">จ่าย</th>
                        <th class="ac width-90px">เมมเบอร์</th>
                        <th class="ac width-90px">เอเย่นต์ถือ</th>
                        <th class="ac width-90px">บริษัทถือ</th>
                        <th>หมายเหตุ</th>
                    </tr>
                </thead>

                <tbody>
            @foreach($member_name as $key => $member_names)
                    <tr class="even">
                        <td class="ac">1</td>
                        <td class="ac">{{$member_name[$key]}}</td>
                        <td class="ac">{{$member_ticket[$key]}}</td>
                        <td class="ac">14468208</td>
                        <td class="ac">{{$member_ratepay[$key]}}</td>
                        <td class="ac">{{$member_date[$key]}}</td>
                        <td class="ac">{{$member_type[$key]}}</td>
                        <td class="ac">
                            <span class="positive">{{$member_type[$key]}}</span> =
                            <span class="deep-blue">{{$member_num[$key]}}</span>
                        </td>
                        <td class="ac">{{number_format($member_pay[$key])}}</td>
                        <td class="ar">
                        <span class="n0 clear0">{{$sumbet_mem[$key]}}</span>
                            <br>
                            <span class="span-detail jquery-hide">
              ค่าคอม <span class="n2c"><span class="positive">{{$combet_mem[$key]}}<span></span></span>
                            </span>
                            </span>
                        </td>
                        <td class="ar">
                            <div>
                                <span class="span-detail jquery-hide">ถือสู้</span>
                                <span class="n2 clear0">9.00</span>
                                <span class="span-detail jquery-hide">
                                    [90%<span class="orange"></span>]
                                </span>
                            </div>
                            <span class="span-detail jquery-hide">
                ค่าคอม <span class="n2c"><span class="negative">-2.97<span></span></span>
                            </span>
                            <br> รวม <span class="n2c"><span class="positive">6.03<span></span></span>
                            </span>
                            </span>
                        </td>
                        <td class="ar">
                            <span class="span-detail jquery-hide">
                ค่าคอม <span class="n2c"><span class="negative">-0.33<span></span></span>
                            </span>
                            <br> ถือสู้
                            </span>
                            <span class="n2 clear0">1.00</span>
                            <span class="span-detail jquery-hide">
                        [10%]
                    </span>
                        </td>
                        <td></td>
                    </tr>
            @endforeach
                </tbody>

                <tfoot class="thin-border-bottom">
                    <tr class="even">
                        <td colspan="9" class="ac bolder">รวม</td>
                        <td class="ar bolder n0">375</td>
                        <td class="ar bolder n2 clear0">337.50</td>
                        <td class="ar bolder n2 clear0">37.50</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>

            <script>
                $.each($('tbody tr, tfoot tr'), function(key, value) {
                    $(this).addClass(key % 2 == 0 ? 'odd' : 'even');
                });
                $.each($('.n0'), function(key, value) {
                    $(this).html(n0($(this).text()));
                });
                $.each($('.n0c'), function(key, value) {
                    $(this).html(n0c($(this).text()));
                });
                $.each($('.n2'), function(key, value) {
                    $(this).html(n2($(this).text()));
                });
                $.each($('.n2c'), function(key, value) {
                    $(this).html(n2c($(this).text()));
                });
                $.each($('.clear0'), function(key, value) {
                    if ($(this).text() == 0)
                        $(this).text('');
                });
            </script>
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

@endsection
