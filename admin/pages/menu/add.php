<?php
$taxi->readAllSimple();

$config->addJS(-1, 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js');
$config->addJS('plugins', 'daterangepicker/daterangepicker.js');
$config->addJS('dist', "{$page}/{$mode}.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thêm menu
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/menu">Menu</a></li>
    <li class="active">Thêm</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<form class="theform">
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Tên menu
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="title"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Đường dẫn
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="link"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Thứ tự
        </div>
        <div class="col-lg-9">
            <input type="number" value="1" class="form-control" name="order"/>
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
