$(document).ready(function () {
	window.tagBox && window.tagBox.init();

    $('.theform').submit(function () {
        //console.log($(this).serialize());
        $.post(MAIN_URL+'/requests/news/add.php', $(this).serialize(), function (data) {
            //console.log(data);
            if (data == 1) {
                location.href = MAIN_URL+'/news';
            }
        });
        return false;
    });
});
