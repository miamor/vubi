$(document).ready(function () {
    //$('#reservation').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/news/edit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/news';
        })
        return false
    });

    $('#delete_news').click(function () {
        $.get(MAIN_URL+'/requests/news/delete.php?id='+$('.theform [name="id"]').val(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/news';
        })
        return false
    })
})
