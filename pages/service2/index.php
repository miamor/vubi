<h2 class="module-title"><span>Tầm soát di truyền</span></h2>
<div class="category-product">
    <div class="home-list-news">
        <?php foreach ($newsList as $nO) { ?>
        <div class="home-news-item cat-news-item">
            <div>
                <a href="<?php echo $nO['link'] ?>">
                    <img src="<?php echo $nO['image'] ?>" alt="<?php echo $nO['title'] ?>">
                </a>
                <h3><a href="<?php echo $nO['link'] ?>">
                        <?php echo $nO['title'] ?></a>
                </h3>
                <div class="news-price">
                    Giá: <span><?php echo $nO['price'] ?></span>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>