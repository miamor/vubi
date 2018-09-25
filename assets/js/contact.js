$(document).ready(function () {
    $(".captcha").click(function() {
        console.log('clicked!');
        $.get(MAIN_URL+'/requests/captcha/gen.php', function (data) {
            src = data.image_src;
            $(".captcha").attr("src", src);
        });
    });

    $('#contactForm').submit(function () {
        $.post(MAIN_URL+'/requests/contact/submit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) {
                //mtip('', 'success', '', 'Gửi thông tin thành công!');
                location.reload();
            } else if (data == -2) {
                alert('Mã bảo mật sai!');
            } else if (data == -1) {
                alert('Bạn cần nhập đầy đủ các trường bắt buộc (có dấu * đỏ)!');
            }
        });
        return false;
    });
});