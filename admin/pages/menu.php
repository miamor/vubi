<?php
include 'objects/menu.php';
$menu = new Menu();

if ($subpage) {
	$menu->id = $subpage;
	$menu->readOne();
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/view.php';
}
else include $page.'/index.php';
