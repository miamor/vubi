<h2 class="module-title"><span>Tin tức</span></h2>
<div class="category-product">
    <div class="home-list-news">
        <?php foreach ($newsList as $nO) { ?>
        <div class="home-news-item cat-news-item">
            <div>
                <a href="<?php echo $nO['link'] ?>">
                    <img src="<?php echo $nO['image'] ?>" alt="<?php echo $nO['title'] ?>">
                </a>
                <h3><a href="<?php echo $nO['link'] ?>">
                        <?php echo $nO['title'] ?></a></h3>
            </div>
        </div>
        <?php } ?>
    </div>
</div>