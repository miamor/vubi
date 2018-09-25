<?php
include 'objects/contact.php';
$news = new Contact();

if ($subpage) {
	$news->id = $subpage;
	$news->readOne();
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/view.php';
}
else include $page.'/index.php';
