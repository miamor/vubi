<?php
//include 'include/config.php';
include 'objects/news.php';

$news = new News();
$news->id = isset($_POST['id']) ? $_POST['id'] : null;

$news->title = isset($_POST['title']) ? $_POST['title'] : null;
$news->image = isset($_POST['image']) ? $_POST['image'] : null;
$news->author = isset($_POST['author']) ? $_POST['author'] : null;
$news->date = isset($_POST['date']) ? $_POST['date'] : null;
$news->content = isset($_POST['content']) ? $_POST['content'] : null;

//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($news->id && $news->title && $news->author && $news->date && $news->content) {
	$edit = $news->update();
	if ($edit) {
		echo 1;
	} else echo 0;
	//echo ($edit ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
