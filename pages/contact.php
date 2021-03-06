<?php
$config->addJS('', 'contact.js');
include 'objects/contact.php';
$contact = new Contact();

include("include/simple-php-captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha(); ?>

<div class="main-content">
    <div class="main">
        <div>
            <div class="pagination">
                <div>
                    <ul>
                        <li><a href="<?php echo MAIN_URL ?>">Trang chủ</a></li>
                        <li><a href="<?php echo MAIN_URL ?>/contact">Liên hệ</a></li>
                    </ul>
                </div>
            </div>

            <?php include 'left.php'?>

            <div class="right-content"><div>

                <div class="right-content-item gui-cauhoi">
                    <div style="margin-bottom:20px;">
                        <h3 class="right-content-title dat-cauhoi-title" style="font-size:20px;padding-top:15px">
                            <?php echo $info['name'] ?>
                        </h3>
                        <ul>
                            <li style="font-size:15px;font-weight:bold;"><i class="fa fa-map-marker" aria-hidden="true" style="color:#338d5c"></i>
                                <?php echo $info['address'] ?>
                            </li>
                            <li style="font-size:15px;font-weight:bold;"><i class="fa fa-phone" aria-hidden="true" style="color:#338d5c"></i>
                                <?php echo $info['phone'] ?>
                            </li>
                            <li style="font-size:15px;font-weight:bold;"><i class="fa fa-envelope-o" aria-hidden="true" style="color:#338d5c"></i>
                                <?php echo $info['email'] ?>
                            </li>
                        </ul>
                    </div>
               
                    
                    <div style="clear: both;"></div>

                    <form id="contactForm" action="" method="POST" style="padding-top:30px">
                        <ul class="form-list">
                                            <li class="fields">
                                             <div class="input-box">
                                                    <input name="name" id="name" title="Name" value="" placeholder="Tên của bạn" class="input-text required-entry" type="text" required="">
                                                </div>
                                                <div class="input-box">
                                                    <input name="email" id="email" title="Email" value="" placeholder="Email" class="input-text required-entry validate-email" type="text" required="">
                                                </div>
                                                <div class="input-box">
                                                    <input name="phone" id="phone" title="Telephone" placeholder="Số điện thoại" value="" class="input-text" type="text" required="">
                                                </div>
                                                <div class="input-box">
                                                    <input placeholder="Địa chỉ" name="address" id="address" title="address" value="" class="input-text" type="text">
                                                </div>
                                                <div class="input-box">
                                                    <textarea placeholder="Nội dung" name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="8" required=""></textarea>
                                                </div>
                                                <div class="input-box">
                                                    <input class="input-text" placeholder="Mã xác nhận" name="captcha" id="captcha" type="text" style="float: left; width:40%;" required="">
                                                    <img class="captcha" style="height:38px;width:80px;border-width:0px;margin:0 0 0 5px" src="<?php echo $_SESSION['captcha']['image_src'] ?>">
                                                    <script>
                                                        $(".captcha").click(function() {
                                                            $.get(MAIN_URL+'/requests/captcha/gen.php', function (data) {
                                                                src = data.image_src;
                                                                $(".captcha").attr("src", src);
                                                            }
                                                        });
                                                    </script>
                                                </div>

                                <div class="clearfix"></div>
                            </li>
                        </ul>


                        <div class="gui-thong-tin">
                            <button type="submit">Gửi</button>
                        </div>
                    </form>
                </div>

            </div></div>
        </div>
    </div>
</div>
