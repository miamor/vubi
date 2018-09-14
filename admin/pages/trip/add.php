<?php
$taxi->readAllSimple();

$config->addJS(-1, 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js');
$config->addJS('plugins', 'daterangepicker/daterangepicker.js');
$config->addJS('dist', "{$page}/{$mode}.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thêm chuyến
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/trip">Chuyến đi</a></li>
    <li class="active">Thêm chuyến</li>
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
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Số điện thoại
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="phone"/>
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
            <input type="text" class="form-control" name="from"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Điểm đến
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="to"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Số khách
        </div>
        <div class="col-lg-9">
            <input type="number" min="1" class="form-control" name="num_guess"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Thời gian (YYYY-mm-dd H:i:s)
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="time"/>
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
            <input type="number" class="form-control" name="seat"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Mã chuyến bay
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="PNR"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Giá chuyến (nghìn đồng)
        </div>
        <div class="col-lg-9">
            <input type="number" class="form-control" name="price"/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-3 control-label">
            Giá thông tin khách hàng (nghìn đồng)
        </div>
        <div class="col-lg-9">
            <input type="number" class="form-control" name="coin"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-lg-3 control-label">
            Một chiều/Hai chiều
        </div>
        <div class="col-lg-9">
            <label class="radio">
                <input type="radio" name="is_round" checked value="0"/> Một chiều
            </label>
            <label class="radio">
                <input type="radio" name="is_round" value="1"/> Hai chiều
            </label>
        </div>
        <div class="clearfix"></div>
    </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Ghi chú
            </div>
            <div class="col-lg-9">
                <textarea name="details" class="form-control"></textarea>
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
