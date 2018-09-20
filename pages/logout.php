<?php
$page_title = 'Log out';
include_once 'objects/login.php';

if (!$config->u) echo '<div class="alerts alert-error">You are not logged in.</div>';
else {
//$act = get('act');
$memFb = 0 ?>

<div class="goodbye">We'll miss you!</div>

<?php 
	session_destroy();
	echo '<script>window.history.back()</script>';
}
