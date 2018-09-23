<?php
//include '../../include/config.php';
include 'objects/consult.php';

$consult = new Consult();

$consult->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($consult->id) echo $consult->delete();
else echo -1;
