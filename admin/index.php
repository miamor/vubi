<?php
// config file
include_once 'include/config.php';

if (!$config->u && $page == 'requests' && $__pageAr[1] != 'login') {

} else {

    if ($page != 'requests' && !$config->u) {
        $page = 'login';
    } else {
        if (!isset($page) || !$page) {
            $page = 'index';
        }

    }

    $page_title = 'AdminCP';

    if ($page != 'index' && $page != 'requests' && !file_exists('pages/' . $page . '.php')) {
        $page = 'error';
    }

    if (!$do && !$v && !$temp && $page != 'requests') {
        include 'header.php';
    }

    if ($page == 'index') {
        echo '<script>location.href = "' . MAIN_URL . '/news";</script>';
    }

    if ($page && $page != 'requests') {
        include 'pages/' . $page . '.php';
    }

    if ($page == 'requests') {
//        header("Content-type:application/json; charset=utf-8");
        include 'requests/' . $__pageAr[1] . '/' . $__pageAr[2];
    }

    if (!$do && !$v && !$temp && $page != 'requests') {
        include 'footer.php';
    }

}
