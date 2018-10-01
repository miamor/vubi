<?php
//include 'include/config.php';
include 'objects/news.php';

$news = new News();

$news->title = isset($_POST['title']) ? $_POST['title'] : null;
$news->image = isset($_POST['image']) ? $_POST['image'] : null;
$news->author = isset($_POST['author']) ? $_POST['author'] : null;
$news->date = isset($_POST['date']) ? $_POST['date'] : null;
$news->highlight_content = isset($_POST['highlight_content']) ? $_POST['highlight_content'] : null;
$news->content = isset($_POST['content']) ? $_POST['content'] : null;
$news->price = isset($_POST['price']) ? $_POST['price'] : 0;
$news->is_service = 1;

$news->tags = isset($_POST['tax_input']) ? implode(',', $_POST['tax_input']) : null;
//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

if ($news->title && $news->author && $news->date && $news->content) {
	$add = $news->create();
	echo ($add ? 1 : 0);
} else echo -1;
