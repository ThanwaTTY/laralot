$(function () {
    $('tr[data-status]').css("display", "none");
    $('tr[data-status="0"]').css("display", "table-row");
    /*$('.membername').on('keydown', function(){
        var memberid = $(this).data('memberid');

        $('#button_' + memberid).removeClass('hiddenButton')
        //alert( $(this).data('memberid'));
    });*/

    $('input[name="name"]').on('keyup', function () {
        var memberid = $(this).data('memberid');
        var name_new = $(this).val();
        var name_old = $(this).data('old');
        if (name_old != name_new) {
            $('#button_' + memberid).removeClass('hiddenButton');
            $('tr[data-member-id="' + memberid + '"]').addClass('bg-info');
        } else {
            $('#button_' + memberid).addClass('hiddenButton');
            $('tr[data-member-id="' + memberid + '"]').removeClass('bg-info');
        }
    });


    $('input[name="phone"]').on('keyup', function () {
        var memberid = $(this).data('memberid');
        var name_new = $(this).val();
        var name_old = $(this).data('old');
        if (name_old != name_new) {
            $('#button_' + memberid).removeClass('hiddenButton');
            $('tr[data-member-id="' + memberid + '"]').addClass('bg-info');
        } else {
            $('#button_' + memberid).addClass('hiddenButton');
            $('tr[data-member-id="' + memberid + '"]').removeClass('bg-info');
        }
    });

    $('select[name="status"]').on('change', function () {
        //alert('change');
        var memberid = $(this).data('memberid');
        var name_new = $(this).val();
        var name_old = $(this).data('old');
        //alert('name_new:'+name_new+' name_old:'+name_old);
        if (name_old != name_new) {
            $('#button_' + memberid).removeClass('hiddenButton');
            $('tr[data-member-id="' + memberid + '"]').addClass('bg-info');
        } else {
            $('#button_' + memberid).addClass('hiddenButton');
            $('tr[data-member-id="' + memberid + '"]').removeClass('bg-info');
        }
    });

    $('input[name="password"]').on('keyup', function () {
        var memberid = $(this).data('memberid');
        var name_new = $(this).val();
        var name_old = $(this).data('old');
        //alert('name_new:'+name_new+' name_old:'+name_old);
        if (name_old != name_new) {
            $('#btn-password_' + memberid).removeClass('hiddenButton');
            $('tr[data-member-password-id="' + memberid + '"]').addClass('bg-info');
        } else {
            $('#btn-password_' + memberid).addClass('hiddenButton');
            $('tr[data-member-password-id="' + memberid + '"]').removeClass('bg-info');
        }
    });

    $('#users-edit-filter').on('change', function () {
        //var status = $(this).data('status');
        //alert($(this).val());
        displayOption();

    });


    $('#users-edit-order').on('change', function () {

        var route = $(this).val();
        //alert(route);
        //console.log(order);
        $.get(route, function (data) {

            $('.tab-content').html(data);
            displayOption();

        });
    });

});

function displayOption() {
    var filter = $('#users-edit-filter').val();

    if (filter == 0) {
        $('tr[data-status]').css("display", "none");
        $('tr[data-status="0"]').css("display", "table-row");
    } else if (filter == 1) {
        $('tr[data-status]').css("display", "none");
        $('tr[data-status="1"]').css("display", "table-row");
    } else if (filter == 2) {
        $('tr[data-status]').css("display", "none");
        $('tr[data-status="2"]').css("display", "table-row");
    } else {
        $('tr[data-status]').css("display", "table-row");
    }
}
