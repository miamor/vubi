<?php
// config file
include_once 'include/config.php';

if (!isset($page) || !$page) {
    $page = 'index';
}

include 'objects/about.php';
$about = new About();
$info = $about->getInfo();

include 'objects/menu.php';
$menu = new Menu();
$menuList = $menu->readAll('left');
$menuTop = $menu->readAll('top');


if ($page == 'xet-nghiem-ung-thu') $page = 'service1';
else if ($page == 'tam-soat-di-truyen') $page = 'service2';

if (!$do && !$v && !$temp && $page != 'requests') {
    include 'header.php';
}


if ($page && $page != 'requests') {
    if ($page != 'index' && !file_exists('pages/' . $page . '.php')) {
        $page = 'error';
    }
    
    include 'pages/' . $page . '.php';
}
if ($page == 'requests') {
    include 'requests/' . $__pageAr[1] . '/' . $__pageAr[2];
}

if (!$do && !$v && !$temp && $page != 'requests') {
    include 'footer.php';
}
