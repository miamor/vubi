<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/list.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Menu
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Menu</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<div class="box">
    <div class="box-header">
        <div class="btns right">
            <a href="<?php echo MAIN_URL ?>/menu?mode=add&type=top" class="btn btn-primary">Thêm</a>
        </div>
        <h3 class="box-title">Menu ngang</h3>
    </div>
    <div class="box-body">
        <table id="buyList_top" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên menu</th>
                  <th>Đường dẫn</th>
                  <th>Menu cha</th>
                  <th>Thứ tự</th>
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
            <a href="<?php echo MAIN_URL ?>/menu?mode=add&type=left" class="btn btn-primary">Thêm</a>
        </div>
        <h3 class="box-title">Menu trái</h3>
    </div>
    <div class="box-body">
        <table id="buyList" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên menu</th>
                  <th>Đường dẫn</th>
                  <th>Menu cha</th>
                  <th>Thứ tự</th>
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
