<?php
//include 'include/config.php';
include 'objects/partners.php';

$partners = new Partners();
//$partners->id = isset($_POST['id']) ? $_POST['id'] : null;

$partners->title = isset($_POST['title']) ? $_POST['title'] : null;
$partners->image = isset($_POST['image']) ? $_POST['image'] : null;
$partners->link = isset($_POST['link']) ? $_POST['link'] : null;

//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($partners->title && $partners->image && $partners->link) {
	$add = $partners->create();
	if ($add) {
		echo 1;
	} else echo 0;
	//echo ($edit ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
