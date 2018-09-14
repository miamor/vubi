<?php
//include 'include/config.php';
include 'objects/doctors.php';

$doctors = new Doctors();

$doctors->name = isset($_POST['name']) ? $_POST['name'] : null;
$doctors->title = isset($_POST['title']) ? $_POST['title'] : null;
$doctors->image = isset($_POST['image']) ? $_POST['image'] : null;
$doctors->des = isset($_POST['des']) ? $_POST['des'] : null;

//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($doctors->name && $doctors->title && $doctors->image) {
	$add = $doctors->create();
	if ($add) {
		echo 1;
	} else echo 0;
	//echo ($edit ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
