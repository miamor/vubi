<?php
include 'objects/user.php';
include 'objects/news.php';
$user = new User();
$news = new News();

if ($subpage) {
	$news->id = $subpage;
    $news->readOne(1);
    
    $related = $news->getRelated(1, $news->title, $news->id);

    echo $config->breadcumb(array(
        array('link' => MAIN_URL.'/service1', 'title' => 'Xét nghiệm ung thư'),
        array('link' => $news->link, 'title' => $news->title),
    ));
    
} else {
    $newsList = $news->readAllServices(1);

    echo $config->breadcumb(array(
        array('link'=>'service1', 'title'=>'Xét nghiệm ung thư'),
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