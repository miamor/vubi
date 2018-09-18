<div class="left-content">
    <div>
        <div class="left-menu">
            <ul>
            <?php foreach ($menuList as $mO) {
                echo '<li class="">
                    <a href="'.MAIN_URL.'/'.$mO['link'].'">'.$mO['title'].'</a>';
                if ($mO['child']) {
                    echo '<ul class="childs">';
                    foreach ($mO['child'] as $mOc) {
                        echo '<li><a href="'.MAIN_URL.'/'.$mO['link'].'/'.$mOc['link'].'">'.$mOc['title'].'</a></li>';
                    };
                    echo '</ul>';
                }
                echo '</li>';
            } ?>
            </ul>
        </div>
        <div class="left-banner">
        </div>
    </div>
</div>