$(document).ready(function () {
    //$('#reservation').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/service1/edit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/service1';
        })
        return false
    });

    $('#delete_service1').click(function () {
        $.get(MAIN_URL+'/requests/service1/delete.php?id='+$('.theform [name="id"]').val(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/service1';
        })
        return false
    })
})
