<?php
include 'objects/user.php';
include 'objects/news.php';
$user = new User();
$news = new News();

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
