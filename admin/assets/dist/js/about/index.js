$(document).ready(function () {
    $.get(MAIN_URL+'/requests/about/read.php', $(this).serialize(), function (data) {
        //console.log(data);
        for (var key in data) {
            console.log(key);
            $('[name="'+key+'"]').val(data[key]);
        }
    })

    $('.theform').submit(function () {
        //console.log($(this).serializeArray());
        $.post(MAIN_URL+'/requests/about/update.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) {
                //location.href = MAIN_URL+'/about';
                mtip('', 'success', '', 'Thông tin cập nhật thành công!');
                location.reload();
            } else {
                mtip('', 'error', '', 'Có lỗi xảy ra!')
            }
        })
        return false
    })
})
