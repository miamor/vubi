<?php
//include 'include/config.php';
include 'objects/contact.php';

$contact = new Contact();
//$contact->id = isset($_POST['id']) ? $_POST['id'] : null;

$code = isset($_POST['code']) ? $_POST['code'] : null;
if ($code == $_SESSION['captcha']['code']) {

    $contact->content = isset($_POST['content']) ? $_POST['content'] : null;
    
    $contact->name = isset($_POST['name']) ? $_POST['name'] : null;
    $contact->phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $contact->email = isset($_POST['email']) ? $_POST['email'] : null;
    $contact->address = isset($_POST['address']) ? $_POST['address'] : null;
    $contact->date = isset($_POST['date']) ? $_POST['date'] : null;
        
    //echo json_encode($_POST, JSON_UNESCAPED_UNICODE);
    
    if ($contact->content && $contact->name && $contact->email) {
        $add = $contact->create();
        if ($add) {
            echo 1;
        } else echo 0;
        //echo ($edit ? 1 : 0);
        //echo json_encode($data, JSON_UNESCAPED_UNICODE);
    } else echo -1;
    
} else echo -2;