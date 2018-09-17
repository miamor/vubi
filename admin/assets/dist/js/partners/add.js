$(document).ready(function () {
    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/partners/add.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/partners';
        })
        return false
    })
})
