<?php
//include '../../include/config.php';
if (!$_SESSION['username']) {
    include 'objects/login.php';
    $login = new Login();

    $login->username = isset($_POST['username']) ? $_POST['username'] : null;
    $login->password = isset($_POST['password']) ? $_POST['password'] : null;

//    echo $_POST['username'];

    if ($login->username && $login->password) {
        $do = $login->login();
        if ($do) {
            $_SESSION['username'] = $login->username;
        }
        echo ($do ? 1 : 0);
    } else echo -1;
} else echo -2;
