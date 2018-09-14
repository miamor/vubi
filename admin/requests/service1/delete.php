<?php
//include '../../include/config.php';
include 'objects/news.php';

$news = new News();

$news->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($news->id) echo $news->delete();
else echo -1;
