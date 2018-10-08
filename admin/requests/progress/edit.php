<?php
//include 'include/config.php';
include 'objects/progress.php';

$progress = new Progress();
$progress->id = isset($_POST['id']) ? $_POST['id'] : null;

$progress->title = isset($_POST['title']) ? $_POST['title'] : null;
$progress->image = isset($_POST['image']) ? $_POST['image'] : null;
$progress->content = isset($_POST['content']) ? $_POST['content'] : null;
$progress->orders = isset($_POST['orders']) ? $_POST['orders'] : 1;

//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($progress->id && $progress->title && $progress->image && $progress->content) {
	$edit = $progress->update();
	if ($edit) {
		echo 1;
	} else echo 0;
	//echo ($edit ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
