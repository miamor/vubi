<?php
include 'objects/user.php';
include 'objects/news.php';
$user = new User();
$news = new News();

if ($subpage) {
    $config->addJS('plugins', 'sceditor/minified/jquery.sceditor.bbcode.min.js');
    $config->addJS('access', 'news/view.js');

	$news->id = $subpage;
    $news->readOne(0);

    $related = $news->getRelated(0, $news->title, $news->id);
    
    echo $config->breadcumb(array(
        array('link' => MAIN_URL.'/news', 'title' => 'Tin tức'),
        array('link' => $news->link, 'title' => $news->title),
    ));
    
} else {
    $newsList = $news->readAll();

    echo $config->breadcumb(array(
        array('link'=>'news', 'title'=>'Tin tức'),
    ));    
}

echo '<div class="main-content">
<div class="main">';

include 'left.php';

echo '<div class="right-content"><div>';

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/view.php';
}
else include $page.'/index.php';

echo '</div></div>
<div class="clearfix"></div>';

echo '</div>
</div>';