<?php
//include 'include/config.php';
include 'objects/feedback.php';

$feedback = new Feedback();
//$feedback->id = isset($_POST['id']) ? $_POST['id'] : null;

$feedback->cust_name = isset($_POST['cust_name']) ? $_POST['cust_name'] : null;
$feedback->image = isset($_POST['image']) ? $_POST['image'] : null;
$feedback->content = isset($_POST['content']) ? $_POST['content'] : null;

//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($feedback->cust_name && $feedback->image && $feedback->content) {
	$add = $feedback->create();
	if ($add) {
		echo 1;
	} else echo 0;
	//echo ($edit ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
