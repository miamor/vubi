$(document).ready(function () {

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/menu/edit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) {
                mtip('', 'success', '', 'Cập nhật thành công!')
            }
        })
        return false
    });
})
