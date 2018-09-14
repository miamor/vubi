<?php
//include 'include/config.php';
include 'objects/menu.php';

$menu = new Menu();
$menu->id = isset($_POST['id']) ? $_POST['id'] : null;

$menu->title = isset($_POST['title']) ? $_POST['title'] : null;
$menu->link = isset($_POST['link']) ? $_POST['link'] : null;
$menu->order = isset($_POST['order']) ? $_POST['order'] : null;

//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($menu->id && $menu->title && $menu->image && $menu->content) {
	$edit = $menu->update();
	if ($edit) {
		echo 1;
	} else echo 0;
	//echo ($edit ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
