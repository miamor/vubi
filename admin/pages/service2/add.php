<?php
$user->readAllSimple();

$config->addJS('dist', "{$page}/add.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thêm tin
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/service2">Tầm soát di truyền</a></li>
    <li class="active">Thêm mới</li>
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
            <input type="text" class="form-control" name="title"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Ảnh
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="image"/>
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
                if ($oneTaxi['id'] == $config->u) $selected = 'selected';
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
            <input type="text" class="form-control" name="date" value="<?php echo date('Y-m-d H:i:s', time()) ?>"/>
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Nội dung (in đậm)
        </div>
        <div class="col-lg-9">
            <textarea name="highlight_content" class="sce-editor form-control"></textarea>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Nội dung
        </div>
        <div class="col-lg-9">
            <textarea name="content" class="sce-editor form-control"></textarea>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Giá dịch vụ
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="price"/>
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
