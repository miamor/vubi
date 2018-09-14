<?php
$taxi->readAllSimple();

$config->addJS(-1, 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js');
$config->addJS('plugins', 'daterangepicker/daterangepicker.js');
$config->addJS('dist', "{$page}/edit.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Sửa chuyến
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/trip">Chuyến đi</a></li>
    <li class="active">Sửa chuyến</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<form class="theform">
    <?php if (!$news->approve) {
        echo '<div class="callout callout-warning">Chuyến này chưa được kiểm duyệt. Các đối tác sẽ không thể nhìn thấy.<br/>Xác nhận chuyến bằng cách thêm <b>giá mua ngay</b> và <b>giá khách hàng phải trả</b> rồi bấm <b>Xác nhận</b>.<br/>Hủy chuyến bằng cách bấm <b>Hủy chuyến</b>.<br/>Xóa chuyến bằng cách bấm <b>Xóa</b>.</div>';
    } ?>
<!--    <div class="form-group">
        <div class="col-lg-3 control-label">
            ID người dùng
        </div>
        <div class="col-lg-9">
            <script>​document.getElementById('userid').value = <?php echo $news->userid ?>;</script>
            <select id="userid" class="chosen-select form-control" name="userid">
                <option value="">NULL</option>
            <?php foreach ($user->all_list as $oneU) {
                $isChecked = ($oneU['id'] == $news->userid) ? 'checked' : '';
                echo '<option '.$isChecked.' value="'.$oneU['id'].'">'.$oneU['name'].' - @'.$oneU['username'].'</option>';
            } ?>
            </select>
        </div>
        <div class="clearfix"></div>
    </div> -->

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Tên khách hàng
        </div>
        <div class="col-lg-9">
            <input type="hidden" readonly class="form-control" name="id" value="<?php echo $news->id ?>"/>
            <input type="text" class="form-control" name="name" value="<?php echo $news->name ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Số điện thoại
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="phone" value="<?php echo $news->phone ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="divide"></div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Ưu tiên cho taxi
        </div>
        <div class="col-lg-9">
            <select class="chosen-select form-control" name="prioritize">
                <option value="0">Không</option>
            <?php foreach ($taxi->all_list as $oneTaxi) {
                if ($oneTaxi['id'] == $news->prioritize) $selected = 'selected';
                else $selected = '';
                echo '<option '.$selected.' value="'.$oneTaxi['id'].'">'.$oneTaxi['name'].' - @'.$oneTaxi['username'].'</option>';
            } ?>
            </select>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Điểm đi
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="from" value="<?php echo $news->addressfrom ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Điểm đến
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="to" value="<?php echo $news->addressto ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Số khách
        </div>
        <div class="col-lg-9">
            <input type="number" min="1" class="form-control" name="num_guess" value="<?php echo $news->num_guess ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Thời gian (YYYY-mm-dd H:i:s)
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="time" value="<?php echo $news->time ?>"/>
        </div>
<!--        <div class="col-lg-5">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group">
                <input type="text" name="time" class="form-control timepicker">
                <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                </div>
            </div>
        </div>-->
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Yêu cầu xe số chỗ
        </div>
        <div class="col-lg-9">
            <input type="number" min="4" class="form-control" name="seat" value="<?php echo $news->seat ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            PNR
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="PNR" value="<?php echo $news->PNR ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Một chiều/Hai chiều
        </div>
        <div class="col-lg-9">
            <label class="radio">
                <input type="radio" name="is_round" <?php if ($news->is_round == 0) echo 'checked' ?> value="0"/> Một chiều
            </label>
            <label class="radio">
                <input type="radio" name="is_round" <?php if ($news->is_round == 1) echo 'checked' ?> value="1"/> Hai chiều
            </label>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Ghi chú
        </div>
        <div class="col-lg-9">
            <textarea name="details" class="form-control"><?php echo $news->details ?></textarea>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="divide"></div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Giá khách hàng trả (nghìn đồng)
        </div>
        <div class="col-lg-9">
            <input type="number" min="0" class="form-control" name="price" value="<?php echo $news->price ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Giá thông tin khách hàng (nghìn đồng)
        </div>
        <div class="col-lg-9">
            <input type="number" min="0" class="form-control" name="coin" value="<?php echo $news->coin ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Giá mua ngay (nghìn đồng)
        </div>
        <div class="col-lg-9">
            <input type="number" class="form-control" disabled value="<?php echo $news->price - $news->coin ?>"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Xác nhận
        </div>
        <div class="col-lg-9">
            <label class="radio">
                <input type="radio" name="approve" <?php if ($news->approve == 0) echo 'checked' ?> value="0"/> Không đồng ý hiển thị
            </label>
            <label class="radio">
                <input type="radio" name="approve" <?php if ($news->approve == 1) echo 'checked' ?> value="1"/> Xác nhận và đồng ý hiển thị
            </label>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="add-form-submit center">
        <input class="btn btn-default" type="reset" value="Nhập lại"/>
        <input class="btn btn-success" type="submit" value="Hoàn tất"/>
        <a id="delete_trip" href="#" class="btn btn-danger">Xoá chuyến</a>
    </div>
</form>

</section>
<!-- end section.content -->
