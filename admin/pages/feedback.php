<?php
include 'objects/feedback.php';
$news = new Feedback();

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
