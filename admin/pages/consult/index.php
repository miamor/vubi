<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/list.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Tư vấn
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tư vấn</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<div class="box">
    <div class="box-header">
        <div class="btns right">
            <a href="<?php echo MAIN_URL ?>/consult?mode=add" class="btn btn-primary">Thêm</a>
        </div>
        <h3 class="box-title">Tư vấn</h3>
    </div>
    <div class="box-body">
        <table id="buyList" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên khách hàng</th>
                  <th>Tuổi</th>
                  <th>Điện thoại</th>
                  <th>Email</th>
                  <th>Địa chỉ</th>
                  <th>Tiêu đề</th>
                  <th>Nhóm bệnh</th>
                  <th style="width:35%!important">Câu hỏi</th>
                  <th>Thời gian</th>
                  <th style="width:25%!important">Trả lời</th>
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
