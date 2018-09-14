<?php
//include '../../include/config.php';
include 'objects/doctors.php';

$doctors = new Doctors();

$doctors->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($doctors->id) echo $doctors->delete();
else echo -1;
