$(document).ready(function () {

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/consult/edit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) {
                mtip('', 'success', '', 'Cập nhật thành công!');
                location.href = MAIN_URL+'/consult';
            }
        })
        return false
    });

    $('#delete_consult').click(function () {
        $.get(MAIN_URL+'/requests/consult/delete.php?id='+$('.theform [name="id"]').val(), function (data) {
            console.log(data);
            if (data == 1) {
                location.href = MAIN_URL+'/consult';
            }
        })
        return false
    })
})
