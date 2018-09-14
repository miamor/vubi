$(document).ready(function () {
    $('#reservation').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/doctors/add.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/doctors';
        })
        return false
    })
})
