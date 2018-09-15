<?php
//include 'include/config.php';
include 'objects/news.php';

$news = new News();

$news->title = isset($_POST['title']) ? $_POST['title'] : null;
$news->image = isset($_POST['image']) ? $_POST['image'] : null;
$news->author = isset($_POST['author']) ? $_POST['author'] : null;
$news->date = isset($_POST['date']) ? $_POST['date'] : null;
$news->content = isset($_POST['content']) ? $_POST['content'] : null;
$news->price = 0;
$news->is_service = 0;

//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($news->title && $news->author && $news->date && $news->content) {
	$add = $news->create();
	echo ($add ? 1 : 0);
} else echo -1;
