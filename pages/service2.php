<?php
include 'objects/user.php';
include 'objects/news.php';
$user = new User();
$news = new News();

if ($subpage) {
	$news->id = $subpage;
    $news->readOne(2);
    
    echo $config->breadcumb(array(
        array('link' => MAIN_URL.'/service2', 'title' => 'Dịch vụ 2'),
        array('link' => $news->link, 'title' => $news->title),
    ));
    
} else {
    $newsList = $news->readAllServices(2);

    echo $config->breadcumb(array(
        array('link'=>'service2', 'title'=>'Dịch vụ 2'),
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