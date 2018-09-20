<?php //echo date("Y-m-d H:i:s");
$config = new Config();
//$config->addJS('dist', 'main.js');
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8"/>
    <title><?php echo $info['title'] ?></title>
    <meta name="description" content="<?php echo $info['des'] ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="<?php echo MAIN_URL ?>/assets/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo MAIN_URL ?>/assets/css/slick.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo MAIN_URL ?>/assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="<?php echo MAIN_URL ?>/assets/css/responsive.css" type="text/css" rel="stylesheet">
    <script src="<?php echo MAIN_URL ?>/assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script>var MAIN_URL = '<?php echo MAIN_URL ?>'; </script>

    <style>
        .header-content .logo a{
            background-image: url('<?php echo $info['logo'] ?>')!important
        }
    </style>
</head>
<body>
    <div class="main-header">
        <div class="header-top">
            <div class="main">
                <div>
                    <div class="head-top-left">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $info['email'] ?></a></li>
                            <li><a href="tel:<?php echo $info['phone'] ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $info['phone'] ?></a></li>
                            <li class="lang">
                                <span>Ngôn ngữ</span>
                                <a href="#"><img src="<?php echo MAIN_URL ?>/images/en.jpg"></a>
                                <a href="#"><img src="<?php echo MAIN_URL ?>/images/vi.jpg"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="head-top-right">
                        <a href="<?php echo MAIN_URL ?>/tuvan">Tư vấn chuyên gia</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-content">
            <div class="main">
                <div>
                    <h1 class="logo"><a href="<?php echo MAIN_URL ?>"><?php echo $info['name'] ?></a></h1>
                    <div id="main-menu">
                        <div class="mobile-menu hidden">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="menu-content">
                            <ul class="main-menu">
                            <?php foreach ($menuTop as $mtK => $mtO) {
                                echo '<li class="menu-item-'.$mtK.' active">
                                    <a href="'.$mtO['link'].'">'.$mtO['title'].'</a>';
                                if ($mtO['child']) {
                                    echo '<ul class="sub-menu">';
                                    foreach ($mtO['child'] as $mtc) {
                                        echo '<li><a href="'.$mtc['link'].'">'.$mtc['title'].'</a></li>';
                                    }
                                    echo '</ul>';
                                }
                                echo '</li>';
                            } ?>
                            </ul>                                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
