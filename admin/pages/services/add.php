<?php
$config->addJS('dist', "{$page}/{$mode}.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thêm dịch vụ
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/services">Dịch vụ</a></li>
    <li class="active">Thêm</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<form class="theform">
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Tên dịch vụ
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

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Mô tả
        </div>
        <div class="col-lg-9">
            <textarea name="content" class="form-control"></textarea>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="add-form-submit center">
        <input type="reset" value="Nhập lại"/>
        <input type="submit" value="Hoàn tất"/>
    </div>
</form>

</section>
<!-- end section.content -->
