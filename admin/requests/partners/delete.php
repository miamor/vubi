<?php
//include '../../include/config.php';
include 'objects/partners.php';

$partners = new Partners();

$partners->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($partners->id) echo $partners->delete();
else echo -1;
