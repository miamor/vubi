<h1 class="title-name"><?php echo $news->title ?> </h1>
<div style="clear: both;"></div>
<div class="product-detail">
    <h2 class="sapo news-highlight_content" data-field="sapo"></h2>

    <div class="news-image" style="text-align:center;margin:20px auto">
        <img style="margin:0 auto" src="<?php echo $news->image ?>"/>
    </div>

    <div class="news-content"></div>

    <textarea class="hidden" id="news-content-textarea"><?php echo $news->content ?></textarea>
    <textarea class="hidden" id="news-highlight_content-textarea"><?php echo $news->highlight_content ?></textarea>
</div>


<h3 style="margin-top:50px">Tin liên quan</h3>
<ol class="related-news">
<?php foreach($related as $rO) { ?>
    <li><a href="<?php echo $rO['link'] ?>"><?php echo $rO['title'] ?></a>
<?php } ?>
</ol>