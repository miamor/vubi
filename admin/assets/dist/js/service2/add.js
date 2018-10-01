$(document).ready(function () {
	window.tagBox && window.tagBox.init();

    $('.theform').submit(function () {
        $.post(MAIN_URL+'/requests/service2/add.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) {
                location.href = MAIN_URL+'/service2';
            }
        });
        return false
    })
})
