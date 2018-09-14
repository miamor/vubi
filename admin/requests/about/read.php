<?php
//include 'include/config.php';
include 'objects/about.php';

$about = new About();

$info = $about->getInfo();

echo json_encode($info, JSON_UNESCAPED_UNICODE);
