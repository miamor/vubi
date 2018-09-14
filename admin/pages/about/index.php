<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/index.js");
?>

<form class="theform">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    About
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">About</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">
    <div class="form-group">
        <div class="col-lg-3">
            Tiêu đề
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="title"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3">
            Tên
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3">
            Mô tả
        </div>
        <div class="col-lg-9">
            <textarea style="min-height:80px" class="form-control" name="des"></textarea>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3">
            Email
        </div>
        <div class="col-lg-9">
            <input type="email" class="form-control" name="email"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3">
            Sđt
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="phone"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3">
            Logo
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="logo"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3">
            Ảnh bìa (Các link ảnh cách nhau bằng dấu phẩy ",")
        </div>
        <div class="col-lg-9">
            <textarea style="min-height:110px" class="form-control" name="header_image"></textarea>
        </div>
        <div class="clearfix"></div>
    </div>

</section><!-- /.content -->



<!-- section.content Main content -->
<section class="content">
    <div class="form-group">
        <div class="col-lg-3">
            About
        </div>
        <div class="col-lg-9">
            <textarea style="min-height:250px" class="form-control" name="about"></textarea>
        </div>
        <div class="clearfix"></div>
    </div>
</section><!-- /.content -->


<!-- section.content Main content -->
<section class="content">
    <div class="form-group">
        <div class="col-lg-3">
            Footer
        </div>
        <div class="col-lg-9">
            <textarea style="min-height:250px" class="form-control" name="footer"></textarea>
        </div>
        <div class="clearfix"></div>
    </div>
</section><!-- /.content -->

<div class="clear"></div>


<div class="add-form-submit center" style="padding-bottom:20px">
<input class="btn btn-default" type="reset" value="Reset"/>
<input class="btn btn-primary" type="submit" value="Submit"/>
</div>

</form>