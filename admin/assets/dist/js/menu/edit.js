var type = location.href.split('type=')[1].split('&')[0];

$(document).ready(function () {

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/menu/edit.php?type='+type, $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) {
                mtip('', 'success', '', 'Cập nhật thành công!');
                location.href = MAIN_URL+'/menu';
            }
        });
        return false;
    });
})
