<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/list.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Quy trình
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Quy trình</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<div class="box">
    <div class="box-header">
        <div class="btns right">
            <a href="<?php echo MAIN_URL ?>/progress?mode=add&type=1" class="btn btn-primary">Thêm</a>
        </div>
        <h3 class="box-title">Quy trình 1</h3>
    </div>
    <div class="box-body">
        <table id="buyList" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Thứ tự</th>
                  <th>Tiêu đề</th>
                  <th style="width:20%!important">Ảnh</th>
                  <th style="width:30%!important">Nội dung</th>
                  <th class="th-none">Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<div class="box">
    <div class="box-header">
        <div class="btns right">
            <a href="<?php echo MAIN_URL ?>/progress?mode=add&type=2" class="btn btn-primary">Thêm</a>
        </div>
        <h3 class="box-title">Quy trình 2</h3>
    </div>
    <div class="box-body">
        <table id="buyList_1" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Thứ tự</th>
                  <th>Tiêu đề</th>
                  <th style="width:20%!important">Ảnh</th>
                  <th style="width:30%!important">Nội dung</th>
                  <th class="th-none">Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

</section><!-- /.content -->

<div class="clear"></div>
