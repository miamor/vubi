$(document).ready(function () {
    //$('#reservation').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

	window.tagBox && window.tagBox.init();

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/service2/edit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/service2';
        })
        return false
    });

    $('#delete_service2').click(function () {
        $.get(MAIN_URL+'/requests/service2/delete.php?id='+$('.theform [name="id"]').val(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/service2';
        })
        return false
    })
})
