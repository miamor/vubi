<?php
//include 'include/config.php';
include 'objects/services.php';

$services = new Services();
//$services->id = isset($_POST['id']) ? $_POST['id'] : null;

$services->title = isset($_POST['title']) ? $_POST['title'] : null;
$services->image = isset($_POST['image']) ? $_POST['image'] : null;
$services->content = isset($_POST['content']) ? $_POST['content'] : null;

//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($services->title && $services->image && $services->content) {
	$add = $services->create();
	if ($add) {
		echo 1;
	} else echo 0;
	//echo ($edit ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
