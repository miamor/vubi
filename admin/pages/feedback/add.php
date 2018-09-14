<?php
$config->addJS('dist', "{$page}/edit.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thêm phản hồi
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/feedback">Phản hồi</a></li>
    <li class="active">Thêm</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<form class="theform">
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Tên khách hàng
        </div>
        <div class="col-lg-9">
            <input type="hidden" name="id" value="<?php echo $news->id ?>"/>
            <input type="text" class="form-control" name="cust_name" value="<?php echo $news->cust_name ?>"/>
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

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Nội dung
        </div>
        <div class="col-lg-9">
            <textarea name="content" class="form-control"><?php echo $news->content ?></textarea>
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
