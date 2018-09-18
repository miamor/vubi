<?php
include 'objects/menu.php';
$menu = new Menu();

if ($subpage) {
    $type = $_GET['type'];
	$menu->id = $subpage;
	$menu->readOne($type);
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/view.php';
}
else include $page.'/index.php';
