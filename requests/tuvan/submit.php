<?php
//include 'include/config.php';
include 'objects/consult.php';

$consult = new Consult();
//$consult->id = isset($_POST['id']) ? $_POST['id'] : null;

$code = isset($_POST['code']) ? $_POST['code'] : null;
if ($code == $_SESSION['captcha']['code']) {

    $consult->title = isset($_POST['title']) ? $_POST['title'] : null;
    $consult->content = isset($_POST['content']) ? $_POST['content'] : null;
    
    $consult->name = isset($_POST['name']) ? $_POST['name'] : null;
    $consult->age = isset($_POST['age']) ? $_POST['age'] : null;
    $consult->phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $consult->email = isset($_POST['email']) ? $_POST['email'] : null;
    $consult->address = isset($_POST['address']) ? $_POST['address'] : null;
    $consult->date = isset($_POST['date']) ? $_POST['date'] : null;
    $consult->nhombenh = isset($_POST['nhombenh']) ? $_POST['nhombenh'] : null;
    
    $consult->reply = isset($_POST['reply']) ? $_POST['reply'] : null;
    
    //echo json_encode($_POST, JSON_UNESCAPED_UNICODE);
    
    if ($consult->title && $consult->content && $consult->name && $consult->email) {
        $add = $consult->create();
        if ($add) {
            echo 1;
        } else echo 0;
        //echo ($edit ? 1 : 0);
        //echo json_encode($data, JSON_UNESCAPED_UNICODE);
    } else echo -1;
    
} else echo -2;