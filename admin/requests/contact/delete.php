<?php
//include '../../include/config.php';
include 'objects/contact.php';

$contact = new Contact();

$contact->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($contact->id) echo $contact->delete();
else echo -1;
