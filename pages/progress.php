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

                    <div class="danhsach-cauhoi quytrinh">
                        <ul>
                            <li class="active"><a href="#tab1" class="cauhoi-tab-head">Quy trình 1</a></li>
                            <li><a href="#tab2" class="cauhoi-tab-head">Quy trình 2</a></li>
                        </ul>
                        <div class="danhsach-cauhoi-content">

<?php foreach ($progList as $_i => $prL) {
    $active = '';
    if ($_i == 1) $active = ' active'; ?>
                        <div class="cauhoi-tab<?php echo $active ?>" id="tab<?php echo $_i ?>">
                            <div>

                        <div class="carousel carousel--mobileview carousel-fade slide clearfix" data-ride="carousel" id="carousel--mobileview--progress-<?php echo $_i ?>">
                            <!-- Indicators -->
                            <ol class="carousel-indicators steps--4 clearfix">
                            <?php foreach ($prL as $pK => $pO) {
                                if ($pK == 0) $active = ' class="active"';
                                else $active = '';
                                $pKn = $pK+1;
                                echo '<li'.$active.' data-slide-to="'.$pK.'" data-target="#carousel--mobileview--progress-'.$_i.'"
                                data-step="'.$pKn.'">
                                <h4>'.$pO['title'].'</h4>
                                <p>'.$pO['content'].'</p>
                            </li>';
                            } ?>
                            </ol><!-- Wrapper for slides -->
                            <div class="carousel-description visible-xs"></div>
                            <div class="carousel-inner">
                            <?php foreach ($prL as $pK => $pO) {
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
<?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>