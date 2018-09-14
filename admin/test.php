<?php
$Today = date('y:m:d');
$lock_time = 2;
$NewDate = Date('Y-m-d H:i:s', strtotime("+{$lock_time} days"));
echo $NewDate;
 ?>
