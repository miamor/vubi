<?php
//include '../../include/config.php';
include 'objects/feedback.php';

$feedback = new Feedback();

$feedback->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($feedback->id) echo $feedback->delete();
else echo -1;
