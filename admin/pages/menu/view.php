<?php
$config->addJS('dist', "{$page}/edit.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Menu - sửa
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/menu">Menu</a></li>
    <li class="active">Sửa</li>
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
            <input type="hidden" name="id" value="<?php echo $menu->id ?>"/>
            <input type="text" class="form-control" name="title" value="<?php echo $menu->title ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Đường dẫn
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" value="<?php echo $menu->link ?>" name="link"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Thứ tự
        </div>
        <div class="col-lg-9">
            <input type="number" value="<?php echo $menu->order ?>" class="form-control" name="order"/>
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
