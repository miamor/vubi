<?php
//include '../../include/config.php';
include 'objects/services.php';

$services = new Services();

$services->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($services->id) echo $services->delete();
else echo -1;
