$(document).ready(function () {

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/doctors/edit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) {
                mtip('', 'success', '', 'Cập nhật thành công!')
            }
        })
        return false
    });

    $('#delete_doctors').click(function () {
        $.get(MAIN_URL+'/requests/doctors/delete.php?id='+$('.theform [name="id"]').val(), function (data) {
            console.log(data);
            if (data == 1) {
                location.href = MAIN_URL+'/doctors';
            }
        })
        return false
    })
})
