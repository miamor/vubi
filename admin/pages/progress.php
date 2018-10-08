<?php
include 'objects/progress.php';
$progress = new Progress();

if ($subpage) {
	$progress->id = $subpage;
	$progress->readOne();
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/view.php';
}
else include $page.'/index.php';
