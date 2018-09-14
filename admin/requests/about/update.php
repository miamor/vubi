<?php
//include 'include/config.php';
include 'objects/about.php';

$about = new About();

$about->email = isset($_POST['email']) ? $_POST['email'] : null;
$about->phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$about->logo = isset($_POST['logo']) ? $_POST['logo'] : null;
$about->about = isset($_POST['about']) ? $_POST['about'] : null;
$about->footer = isset($_POST['footer']) ? $_POST['footer'] : null;
$about->title = isset($_POST['title']) ? $_POST['title'] : null;
$about->name = isset($_POST['name']) ? $_POST['name'] : null;
$about->des = isset($_POST['des']) ? $_POST['des'] : null;
$about->header_image = isset($_POST['header_image']) ? $_POST['header_image'] : null;

if ($about->name && $about->title) {
    $update = $about->update();
    echo $update;
    //echo ($update ? 1 : 0);
    
    //echo $about->title;
} else echo -1;

	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
