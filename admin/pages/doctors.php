<?php
include 'objects/doctors.php';
$news = new Doctors();

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
