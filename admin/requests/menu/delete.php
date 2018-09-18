<?php
//include '../../include/config.php';
include 'objects/menu.php';
$type = $_GET['type'];

$menu = new Menu();

$menu->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($menu->id) echo $menu->delete($type);
else echo -1;
