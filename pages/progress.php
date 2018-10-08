<?php $config->addJS(-1, 'https://cdn.grab.com/vn/wp-content/themes/grabsg/js/bootstrap.min.js');
$config->addJS('', 'progress.js'); ?>
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
                                <li class="active" data-slide-to="0" data-target="#carousel--mobileview--how-it-works-grabtaxi"
                                    data-step="1">
                                    <h4>Đặt xe chỉ với 2 thao tác đơn giản</h4>
                                    <p>Đừng quên chọn điểm đến của bạn để nhận thông báo ước lượng về giá cước cho
                                        chuyến đi.</p>
                                </li>
                                <li data-slide-to="1" data-target="#carousel--mobileview--how-it-works-grabtaxi"
                                    data-step="2">
                                    <h4>Tài xế đón liền tay!</h4>
                                    <p>Grab sẽ giúp bạn tìm tài xế (có xe trống) gần nhất.</p>
                                </li>
                                <li data-slide-to="2" data-target="#carousel--mobileview--how-it-works-grabtaxi"
                                    data-step="3">
                                    <h4>Dõi theo tài xế</h4>
                                    <p>Bạn có thể dõi theo di chuyển của tài xế và biết trước thời điểm bạn sẽ được
                                        ngồi lên xe!</p>
                                </li>
                                <li data-slide-to="3" data-target="#carousel--mobileview--how-it-works-grabtaxi"
                                    data-step="4">
                                    <h4>Kết thúc hành trình an toàn mỹ mãn</h4>
                                    <p>Bạn thậm chí còn có thể chia sẻ hành trình của mình với người thân để thêm phần
                                        an tâm trong chuyến đi nha!</p>
                                </li>
                            </ol><!-- Wrapper for slides -->
                            <div class="carousel-description visible-xs"></div>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="https://cdn.grab.com/vn/wp-content/uploads/sites/11/2016/05/1_step-1.jpg" />
                                </div><!-- /item -->
                                <div class="item">
                                    <img src="https://cdn.grab.com/vn/wp-content/uploads/sites/11/2016/05/2_step-1.jpg" />
                                </div><!-- /item -->
                                <div class="item">
                                    <img src="https://cdn.grab.com/vn/wp-content/uploads/sites/11/2016/05/3_step-1.jpg" />
                                </div><!-- /item -->
                                <div class="item">
                                    <img src="https://cdn.grab.com/vn/wp-content/uploads/sites/11/2016/05/4_step-1.jpg" />
                                </div><!-- /item -->
                            </div><!-- /carousel-inner -->
                            <div class="carousel-bg"></div>
                        </div><!-- /carousel -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>