<?php
include 'objects/consult.php';
$news = new Consult();

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
