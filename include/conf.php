<?php
session_start();
error_reporting(E_ERROR | E_PARSE);

define('__HOST__', 'localhost');
define('DB_NAME', 'vubi');
define('DB_PASSWORD', '');
define('DB_USERNAME', 'root');
define('DB_HOST', 'localhost');

define('MAIN_PATH', './');
define('HOST_URL', '//'. __HOST__ . $__pattern);
define('MAIN_URL', 'http:' . HOST_URL);
define('ASSETS', MAIN_URL . '/assets');
define('CSS', ASSETS . '/css');
define('JS', ASSETS . '/js');
define('IMG', ASSETS . '/img');
define('PLUGINS', ASSETS . '/plugins');

$__page = str_replace($__pattern . '/', '', $_SERVER['REQUEST_URI']);

// Start config
$config = new Config();

if (check($__page, '?') > 0) {
    $__page = $__page . '&';
} else {
    $__page = $__page;
}

$__pageAr = array_values(array_filter(explode('/', explode('?', rtrim($__page))[0])));
$subpage = null;
if ($__pageAr) {
    $page = $__pageAr[0];
    $subpage = (array_key_exists(1, $__pageAr) && $__pageAr[1]) ? $__pageAr[1] : null;
    $requestAr = explode('?', $__page);
    $config->request = isset($requestAr[1]) ? $requestAr[1] : null;
//    if ($__pageAr[1]) $subpage = $__pageAr[1];
} else if (check($__page, '?')) {
    $config->request = explode('?', $__page)[1];
}

$v = $config->get('v');
$temp = $config->get('temp');
$type = $config->get('type');
$do = $config->get('do');
$mode = $config->get('mode');
if (check($__page, 'requests')) {
    $config->__request = explode('.', end(explode('/', $__page)))[0];
}

if ($config->__request) {
    header('Content-Type: application/json; charset=utf-8');
} else {
    header('Content-Type: text/html; charset=utf-8');
}

// End config

