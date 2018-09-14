<?php
include 'objects/user.php';
include 'objects/about.php';
$about = new About();

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else include $page.'/index.php';
