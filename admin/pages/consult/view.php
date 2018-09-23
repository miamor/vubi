<?php
$nhombenh = $news->getNhomBenh();
$config->addJS('dist', "{$page}/edit.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tư vấn - sửa
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/consult">Tư vấn</a></li>
    <li class="active">Sửa</li>
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
            <input type="text" class="form-control" name="name" value="<?php echo $news->name ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Tuổi
        </div>
        <div class="col-lg-9">
            <input type="number" min="1" class="form-control" name="age" value="<?php echo $news->age ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Điện thoại
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="phone" value="<?php echo $news->phone ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Email
        </div>
        <div class="col-lg-9">
            <input type="email" class="form-control" name="email" value="<?php echo $news->email ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Địa chỉ 
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="address" value="<?php echo $news->address ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Tiêu đề
        </div>
        <div class="col-lg-9">
            <input type="hidden" name="id" value="<?php echo $news->id ?>"/>
            <input type="text" class="form-control" name="title" value="<?php echo $news->title ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Nhóm bệnh
        </div>
        <div class="col-lg-9">
            <select class="form-control" name="nhombenh">
            <?php foreach ($nhombenh as $bO) {
                $selected = '';
                if ($bO['id'] == $news->nhombenh_id) {
                    $selected = ' selected';
                }
                echo '<option'.$selected.' value="'.$bO['id'].'">'.$bO['title'].'</option>';
            } ?>
            </select>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Nội dung câu hỏi
        </div>
        <div class="col-lg-9">
            <textarea name="content" class="sce-editor form-control"><?php echo $news->content ?></textarea>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="divide"></div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Trả lời
        </div>
        <div class="col-lg-9">
            <textarea name="reply" class="sce-editor form-control"><?php echo $news->reply ?></textarea>
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
