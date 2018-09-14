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

        <?php include 'left.php' ?>

        <div class="right-content">
            <div>

                <div class="content">
                    <?php echo $info['about'] ?>
                </div>
            </div>
        </div>
    </div>
</div>