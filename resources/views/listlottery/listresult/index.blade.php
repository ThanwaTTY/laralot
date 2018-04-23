

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
            รอผลเดิมพัน
        </li>
        </ul><!-- /.breadcrumb -->

        <span id="global-clock" class="pull-right"></span>
    </div>
    <div class="page-content" id="user-content">
            <div class="row">
            <div id="content" class="col-xs-12"> <div class="page-header">
    <h1>
        รอผลเดิมพัน
        <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                    3M3K
                    </small>
    </h1>
    </div>


    <div class="alert alert-info">แสดงข้อมูลงวดที่ <b>ยังไม่ออกรางวัล</b></div>

    <div class="space-4"></div>


    <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap" id="by-member-table">
    <thead class="thin-border-bottom">
        <tr>
        <th rowspan="2" class="align-center width-90px">
            ชื่อผู้ใช้<br>
            <label class="inline">
            <input class="" type="checkbox" id="input-checkbox-name">
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

    </table>

    <h3>รวมทั้งหมด</h3>

    <table class="table table-bordered table-border-dark table-fancy table-auto table-nowrap" id="by-member-table">
    <thead class="thin-border-bottom">
        <tr>
        <th rowspan="2" class="align-center width-90px">
            ชื่อผู้ใช้<br>
            <label class="inline">
            <input class="" type="checkbox" id="input-checkbox-name">
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
        <tr>
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
    </table>

    <script>
    $.each($('#by-member-table').find('tbody tr, tfoot tr'), function(key, value) {
        $(this).addClass(key % 2 == 0 ? 'odd' : 'even');
    });
    $.each($('.n2'), function(key, value) {
        $(this).html(n2($(this).text()));
    });
    $.each($('.n2c'), function(key, value) {
        $(this).html(n2c($(this).text()));
    });
    $('.date-mask').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'dd-mm-yyyy'
    });
    var list = '';
    if (list == '') {
        $('#game-type-checkboxes input:checkbox').attr('checked', true);
    } else {
        $.each(list.split(','), function(key, value){
        $('#game-type-checkboxes input.item[value="'+value+'"]').attr('checked', true);
        });
    }
    </script>
    </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
