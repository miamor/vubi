<?php
//include 'include/config.php';
include 'objects/progress.php';

$news = new Progress();

$data = array('data' => $news->readAll());

echo json_encode($data, JSON_UNESCAPED_UNICODE);

/*
$data = array(
'data' => array(
	0 => array(
		'trip_id' => 3,
		'order_id' => 1,
		'time' => '2017/12/12',
		'coin' => 10,
		'buyer' => 'haduchien',
		'buyer_phone' => '0987654321',
		'customer' => 'mnt',
		'customer_phone' => '0987654321'
	),
	1 => array(
		'trip_id' => 5,
		'order_id' => 2,
		'time' => '2017/12/12',
		'coin' => 10,
		'buyer' => 'tutu',
		'buyer_phone' => '0987654321',
		'customer' => 'haha',
		'customer_phone' => '0987654321'
	),
));
echo json_encode($data, JSON_UNESCAPED_UNICODE);
*/
