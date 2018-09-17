<?php 
include 'objects/doctors.php';
include 'objects/news.php';
include 'objects/feedback.php';
include 'objects/partners.php';

$news = new News();
$doctors = new Doctors();
$feedback = new Feedback();
$partners = new Partners();

$tuvanNewsHighlight = $news->readMany(0, 2);
$tuvanNews = $news->readMany(2, 2);

$doctorsList = $doctors->readAll();
$feedbackList = $feedback->readAll();
$partnersList = $partners->readAll(); ?>

    <div class="main-slideshow">
        <div class="slideshow">
            <ul class="rslides">
                <?php foreach ($info['header_image'] as $iO) echo '<li><img src="'.$iO.'" alt="banner"></li>'; ?>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="main-about-us">
        <div class="main">
            <div>
                <div class="module-title">
                    <h2>Dịch vụ</h2>
                </div>
                <div class="list-about">
                    <div class="home-about-item home-about-item-1">
                        <div>
                            <img src="images/icon1.png" alt="Tư vấn và phân tích">
                            <h3>Tư vấn và phân tích</h3>
                            <p>Tư vấn và phân tích gien thế hệ mới tại các phòng xét nghiệm hiện đại của Hoa Kỳ​</p>
                        </div>
                    </div>
                    <div class="home-about-item home-about-item-2">
                        <div>
                            <img src="images/icon2.png" alt="Quy Trình Giải Mã Gien">
                            <h3>Quy Trình Giải Mã Gien</h3>
                            <p>Quy Trình Giải Mã Gien tiên tiến từ các trung tâm ung thư và di truyền học uy tín của Hoa Kỳ</p>
                        </div>
                    </div>
                    <div class="home-about-item home-about-item-3">
                        <div>
                            <img src="images/icon3.png" alt="Hỗ trợ từ các chuyên gia ung thư">
                            <h3>Hỗ trợ từ các chuyên gia ung thư</h3>
                            <p>Tư vấn và phân tích gien thế hệ mới tại các phòng xét nghiệm hiện đại của Hoa Kỳ​</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="home-bacsi">
        <div class="main">
            <div>
                <div class="module-title">
                    <h3>Đội ngũ bác sĩ</h3>
                    <p class="mod-desc">Viện Y Sinh Việt Nam – Hoa Kỳ được thành lập với sự tham gia hỗ trợ của nhiều giáo sư, bác sĩ và chuyên gia từ Hoa Kỳ</p>
                </div>
                <div class="list-home-bacsi">
                <?php foreach ($doctorsList as $dO) { ?>
                    <div class="bacsi-item">
                        <div>
                            <div>
                                <img src="<?php echo $dO['image'] ?>">
                            </div>
                            <p><?php echo $dO['title'] ?></p>
                            <h3 class="bacsi-name">
                                <?php echo $dO['name'] ?>
                            </h3>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="home-row3">
        <div class="main">
            <div>
                <?php echo $info['about'] ?>
            </div>
        </div>
    </div>

    <div class="home-row4">
        <div class="main">
            <div>
                <div class="tuvan">
                    <div>
                        <div class="module-title-2">
                            <h3><span>Tư vấn trực tuyến</span></h3>
                        </div>
                        <div class="tuvan-content">
                        <?php foreach ($tuvanNewsHighlight as $tvN) { ?>
                            <div class="tuvan-content-item">
                                <div>
                                    <a href="<?php echo $tvN['link'] ?>"><img src="<?php echo $tvN['image'] ?>"></a>
                                    <h3><a href="#<?php echo $tvN['link'] ?>"><?php echo $tvN['title'] ?></a></h3>
                                    <p><?php echo $tvN['content'] ?></p>
                                    <a href="<?php echo $tvN['link'] ?>" class="readmore-2">Xem them</a>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="tintuc">
                    <div>
                        <div class="module-title-2">
                            <h3><span>Tư vấn trực tuyến</span></h3>
                        </div>
                        <div class="tintuc-content">
                        <?php foreach ($tuvanNews as $tvN) { ?>
                            <div class="tintuc-content-item">
                                <div>
                                    <div class="tintuc-content-item-left"><a href="<?php echo $tvN['link'] ?>"><img src="<?php echo $tvN['image'] ?>"></a></div>
                                    <div class="tintuc-content-item-right">
                                        <div class="posted">By <span><?php echo $tvN['author']['username'] ?></span> Posted <span><?php echo $tvN['date'] ?></span></div>
                                        <h3><a href="<?php echo $tvN['link'] ?>"><?php echo $tvN['title'] ?></a></h3>
                                        <p><?php echo $tvN['content'] ?></p>
                                        <a href="<?php echo $tvN['link'] ?>" class="readmore-2">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="home-row5">
        <div class="main">
            <div>
                <div class="home-row5-left">
                    <div>
                        <a href="#"><img src="images/video.jpg"></a>
                    </div>
                </div>
                <div class="home-row5-right">
                    <div>
                        <h3>Y kiến khách hàng</h3>
                        <div class="ykien-content">
                        <?php foreach ($feedbackList as $fO) { ?>
                            <div class="ykien-item">
                                <p>“<?php echo $fO['content'] ?>”</p>
                                <div><img src="<?php echo $fO['image'] ?>"></div>
                                <h4><?php echo $fO['cust_name'] ?></h4>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="main-parner">
        <div class="main">
            <div>
                <ul class="all-parner">
                <?php foreach ($partnersList as $pO) {
                    echo '<li><a title="'.$pO['title'].'" href="'.$pO['link'].'"><img src="'.$pO['image'].'" alt="parner"></a></li>';
                } ?>
                </ul>
            </div>
        </div>
    </div>

