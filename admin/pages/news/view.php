<?php
$user->readAllSimple();

//$config->addJS(-1, 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js');
//$config->addJS('plugins', 'daterangepicker/daterangepicker.js');

//$config->addJS('plugins', "sceditor/minified/jquery.sceditor.bbcode.min.js");
$config->addJS('dist', "{$page}/edit.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tin tức - sửa
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/news">Tin tức</a></li>
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
    if ($oneTaxi['id'] == $news->author) {
        $selected = 'selected';
    } else {
        $selected = '';
    }

    echo '<option ' . $selected . ' value="' . $oneTaxi['id'] . '">' . $oneTaxi['username'] . '</option>';
}?>
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

    <div class="add-form-submit center">
        <input class="btn btn-default" type="reset" value="Nhập lại"/>
        <input class="btn btn-success" type="submit" value="Hoàn tất"/>
    </div>
</form>

</section>
<!-- end section.content -->
