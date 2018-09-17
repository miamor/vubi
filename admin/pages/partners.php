<?php
include 'objects/partners.php';
$partners = new Partners();

if ($subpage) {
	$partners->id = $subpage;
	$partners->readOne();
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/view.php';
}
else include $page.'/index.php';
