<?php
//include 'include/config.php';
include 'objects/menu.php';
$type = $_GET['type'];

$menu = new Menu();
//$menu->id = isset($_POST['id']) ? $_POST['id'] : null;
$menu->id = $subpage;

$menu->title = isset($_POST['title']) ? $_POST['title'] : null;
$menu->link = isset($_POST['link']) ? $_POST['link'] : null;
$menu->order = isset($_POST['order']) ? $_POST['order'] : null;

//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($menu->title && $menu->link) {
	$add = $menu->create($type);
	if ($add) {
		echo 1;
	} else echo 0;
	//echo ($edit ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
