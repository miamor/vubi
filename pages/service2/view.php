<h1 class="title-name"><?php echo $news->title ?> </h1>
<div class="news-one-price">
    Giá: <span><?php echo $news->price ?></span>
</div>
<div style="clear: both;"></div>
<div class="product-detail">
    <h2 class="sapo" data-field="sapo"></h2>
    <div class="news-image" style="text-align:center;margin:20px auto">
        <img style="margin:0 auto" src="<?php echo $news->image ?>"/>
    </div>
    <?php echo $news->content ?>
</div>