<?php
$user->readAllSimple();

//$config->addJS(-1, 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js');
//$config->addJS('plugins', 'daterangepicker/daterangepicker.js');
$config->addJS('dist', "tags-box.js");
$config->addJS('dist', "{$page}/edit.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Xét nghiệm ung thư - sửa
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/service1">Xét nghiệm ung thư</a></li>
    <li class="active">Sửa</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<form class="theform">
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Tiêu đề
        </div>
        <div class="col-lg-9">
            <input type="hidden" readonly class="form-control" name="id" value="<?php echo $news->id ?>"/>
            <input type="text" class="form-control" name="title" value="<?php echo $news->title ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Ảnh
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="image" value="<?php echo $news->image ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="divide"></div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Tác giả
        </div>
        <div class="col-lg-9">
            <select class="chosen-select form-control" name="author">
            <?php foreach ($user->all_list as $oneTaxi) {
                if ($oneTaxi['id'] == $news->author) $selected = 'selected';
                else $selected = '';
                echo '<option '.$selected.' value="'.$oneTaxi['id'].'">'.$oneTaxi['username'].'</option>';
            } ?>
            </select>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Ngày đăng (YYYY-mm-dd H:i:s)
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="date" value="<?php echo $news->date ?>"/>
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Nội dung (in đậm)
        </div>
        <div class="col-lg-9">
            <textarea name="highlight_content" class="sce-editor form-control"><?php echo $news->highlight_content ?></textarea>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Nội dung
        </div>
        <div class="col-lg-9">
            <textarea name="content" class="sce-editor form-control"><?php echo $news->content ?></textarea>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Giá dịch vụ
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="price" value="<?php echo $news->price ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="form-group">
        <div class="col-lg-3 control-label">
            Tags
        </div>
        <div class="col-lg-9 postbox" id="tagsdiv-post_tag">
            <div class="tagsdiv" id="post_tag">
                <div class="jaxtag">
                    <textarea class="hidden the-tags" name="tax_input[post_tag]" rows="3" cols="20" id="tax-input-post_tag"  aria-describedby="new-tag-post_tag-desc"><?php echo $news->tags ?></textarea>
                    <div class="ajaxtag hide-if-no-js">
                        <div class="col-lg-4 no-padding">
                            <input data-wp-taxonomy="post_tag" type="text" id="new-tag-post_tag" name="newtag[post_tag]" class="newtag form-input-tip form-control" size="16" autocomplete="off" aria-describedby="new-tag-post_tag-desc" value=""/>
                        </div>
                        <div class="col-lg-6">
                            <input type="button" class="button tagadd" value="Add" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p class="howto" id="new-tag-post_tag-desc">Separate tags with commas</p>

                    <p class="hide-if-no-js"><button type="button" class="button-link tagcloud-link" id="link-post_tag" aria-expanded="false">Choose from the most used tags</button></p>
                </div>
                <div class="tagchecklist"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="add-form-submit center">
        <input class="btn btn-default" type="reset" value="Nhập lại"/>
        <input class="btn btn-success" type="submit" value="Hoàn tất"/>
    </div>
</form>

</section>
<!-- end section.content -->
