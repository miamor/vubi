<?php
//include '../../include/config.php';
include 'objects/progress.php';

$progress = new Progress();

$progress->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($progress->id) echo $progress->delete();
else echo -1;
