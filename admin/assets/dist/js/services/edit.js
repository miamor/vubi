$(document).ready(function () {

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/services/edit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) {
                mtip('', 'success', '', 'Cập nhật thành công!')
            }
        })
        return false
    });

    $('#delete_services').click(function () {
        $.get(MAIN_URL+'/requests/services/delete.php?id='+$('.theform [name="id"]').val(), function (data) {
            console.log(data);
            if (data == 1) {
                location.href = MAIN_URL+'/services';
            }
        })
        return false
    })
})
