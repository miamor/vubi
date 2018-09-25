<?php
include("include/simple-php-captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

echo json_encode(array('image' => $_SESSION['captcha']['image_src'] ));