<?php $config->addJS(-1, 'https://cdn.grab.com/vn/wp-content/themes/grabsg/js/bootstrap.min.js');
$config->addJS('', 'progress.js');

include 'objects/progress.php';
$progressObj = new Progress();
$progList = $progressObj->readAll(); ?>
<div class="main-content">
    <div class="main">
        <div class="pagination">
            <div>
                <ul>
                    <li><a href="<?php echo MAIN_URL ?>">Trang chủ</a></li>
                    <li><a href="<?php echo MAIN_URL ?>/about">Giới thiệu</a></li>
                </ul>
            </div>
        </div>

<style>
    @media(max-width: 767px) {
        .main-content{padding-bottom:0}
    }
</style>
        <?php include 'left.php' ?>

        <div class="right-content">
            <div>

                <div class="content">

                    <div class="col-xs-12 col-md-10 col-md-offset-1">

                        <div style="margin-top:20px" class="carousel carousel--mobileview carousel-fade slide clearfix" data-ride="carousel" id="carousel--mobileview--how-it-works-grabtaxi">
                            <!-- Indicators -->
                            <ol class="carousel-indicators steps--4 clearfix">
                            <?php foreach ($progList as $pK => $pO) {
                                if ($pK == 0) $active = ' class="active"';
                                else $active = '';
                                $pKn = $pK+1;
                                echo '<li'.$active.' data-slide-to="'.$pK.'" data-target="#carousel--mobileview--how-it-works-grabtaxi"
                                data-step="'.$pKn.'">
                                <h4>'.$pO['title'].'</h4>
                                <p>'.$pO['content'].'</p>
                            </li>';
                            } ?>
                            </ol><!-- Wrapper for slides -->
                            <div class="carousel-description visible-xs"></div>
                            <div class="carousel-inner">
                            <?php foreach ($progList as $pK => $pO) {
                                if ($pK == 0) $active = ' active';
                                else $active = '';
                                echo '<div class="item'.$active.'">
                                <img src="'.$pO['image'].'" />
                            </div><!-- /item -->';
                            } ?>
                            </div><!-- /carousel-inner -->
                            <div class="carousel-bg"></div>
                        </div><!-- /carousel -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>