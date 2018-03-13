function sivamtime() {
    now = new Date();
    day = (now.getDate());
    mounths = new Array(12);
    mounths[0] = "มกราคม";
    mounths[1] = "กุมภาพันธ์";
    mounths[2] = "มีนาคม";
    mounths[3] = "เมษายน";
    mounths[4] = "พฤษภาคม";
    mounths[5] = "มิถุนายน";
    mounths[6] = "กรกฏาคม";
    mounths[7] = "สิงหาคม";
    mounths[8] = "กันยายน";
    mounths[9] = "ตุลาคม";
    mounths[10] = "พฤศจิกายน";
    mounths[11] = "ธันวาคม";
    mounth = mounths[(now.getMonth())];
    year = (now.getFullYear() + 543);

    hour = now.getHours();
    min = now.getMinutes();
    sec = now.getSeconds();
    if (day <= 9) { day = "0" + day; }
    if (min <= 9) { min = "0" + min; }
    if (sec <= 9) { sec = "0" + sec; }
    //if (hour>12) { hour=hour-12; add="pm"; }
    //else { hour=hour; add="am"; }
    //if (hour==12) { add="pm"; }

    //time = ((hour<=9) ? "0"+hour : hour) + ":" + min + ":" + sec + " " + add;
    time = "วันที่ " + day + " " + mounth + " " + year + " " + "เวลา " + ((hour <= 9) ? "0" + hour : hour) + ":" + min + ":" + sec + " ";

    if (document.getElementById) { theTime.innerHTML = time; }
    else if (document.layers) {
        document.layers.theTime.document.write(time);
        document.layers.theTime.document.close();
    }

    setTimeout("sivamtime()", 1000);
}
window.onload = sivamtime;



function clickmenu(url) {
    //$('li').on('click', function () {
    //    $('ul.nav.nav-list li.active').removeClass('active');
    //    $(this).addClass('active');
    //});
    $.get(url, function (data) {
        $(".main-content").html(data);
        //alert( data );
    });
    return false;
}



$(function () {
    // $('.input-all.input-number.form-control.input-sm.bolder').on('click', function () {
    //     alert();
    // });
    $('.input-all.input-number.form-control.input-sm.bolder').on('change', function () {
        let data = $(this).val();
        $('#betable-number').html(data);
        $('#betable-0').html("ปิดรับ");
        $('#betable-1').html("ปิดรับ");
        $('#betable-2').html("ปิดรับ");
    });

    $('#btn-submit-bet').on('click', function () {
        //console.log('Active');
        //var inputcheck = $('input[name=num\\[\\]]');
        var input_num_val = 0;
        $('.input-all.input-number.form-control.input-sm.bolder').each(function (index) {
            //console.log('input[name=num\[' + index + '\]]');
            var ll = $('#input-number-row-' + index).val();
            if (ll) {
                //console.log(ll);
                input_num_val += 1;
            } else {
                input_num_val += 0;
            }
        });

        if (input_num_val == 0) {
            alert('ไม่มีรายการแทง กรุณาตรวจสอบข้อมูล');
        } else {
            $.post('/storebet', $('#formpatbet').serialize()).done(function (data) {

                $.each(data.error, function (i) {
                    console.log(i);
                    console.log(data.error[i]);
                    if (data.error[i] == true) {
                        $('#' + i + '>i.ace-icon.fa.fa-check.green.success').removeClass('hidden');
                    } else {
                        $('#' + i + '>i.ace-icon.fa.fa-times.red.error').removeClass('hidden');
                    }
                });
                console.log(data);

                // $.each(data.check, function (i) {
                //     if (data.check[i]) {
                // console.log(data);
                // console.log(data.error);

                //     } else {
                //         //alert();
                //     }
                //     //console.log(i + ": ");
                // });
            });

        }

    });

    $('.input-amount').on('keyup', function () {
        var sum_amount = 0;
        console.log($(this).val());
        $('.all-tr').each(function (index) {
            sum_amount += isNaN(parseInt($('#input-0-row-' + index).val())) ? 0 : parseInt($('#input-0-row-' + index).val());
            sum_amount += isNaN(parseInt($('#input-1-row-' + index).val())) ? 0 : parseInt($('#input-1-row-' + index).val());
            sum_amount += isNaN(parseInt($('#input-2-row-' + index).val())) ? 0 : parseInt($('#input-2-row-' + index).val());
        });
        $('#bill-sum').html(sum_amount);
    });

    $('.nav.nav-list>li').on('click', function () {
        $('.nav.nav-list>li').removeClass('active');
        $(this).addClass('active');
    });

    $("#btn-clear-bet").on('click', function () {
        $('input.input-all').val("");
    });

    $(".btn-delete").on('click', function () {
        var x = $(this).tabIndex;
        console.log(x);
    });
});