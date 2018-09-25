<?php 
$config->addJS('', 'tuvan.js');
include 'objects/consult.php';
$consult = new Consult();
$nhombenh = $consult->getNhomBenh();

include("include/simple-php-captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha(); ?>

<div class="main-content">
        <div class="main">
            <div>
                <div class="pagination">
                    <div>
                        <ul>
                            <li><a href="<?php echo MAIN_URL ?>">Trang chủ</a></li>
                            <li><a href="<?php echo MAIN_URL ?>/tuvan">Tư vấn sức khỏe</a></li>
                        </ul>
                    </div>
                </div>

                <?php include 'left.php' ?>
                
                <div class="right-content">
                    <div>
                        <div class="right-content-item search-1">
                            <form action="">
                                <input type="text" name="">
                                <button type="submit">Tim kiem</button>
                            </form>
                        </div>

                        <div class="right-content-item gui-cauhoi">
                            <h3 class="right-content-title dat-cauhoi-title">Đặt câu hỏi tư vấn online</h3>
                            <form id="tuvanForm" action="" method="POST">
                                <div style="padding: 20px;text-align: center;">Những phần đánh dấu <font color="red">(*)</font> là những phần không để trống</div>
                                <div>
                                    <table class="table1">
                                        <tbody>
                                            <tr>
                                                <td style="width: 35%;">Chọn nhóm bệnh:</td>
                                                <td>
                                                    <select name="nhombenh" id="nhombenh">
                                                    <?php foreach ($nhombenh as $bO) {
                                                        echo '<option value="'.$bO['id'].'">'.$bO['title'].'</option>';
                                                    } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 10px;"></td>
                                            </tr>
                                            <tr>
                                                <td>Họ tên : <font color="red">(*)</font></td>
                                                <td>
                                                    <input name="name" id="" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 10px;"></td>
                                            </tr>
                                            <tr>
                                                <td>Địa chỉ :</td>
                                                <td>
                                                    <input name="address" id="" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 10px;">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Mã bảo mật : <font color="red">(*)</font></td>
                                                <td>
                                                    <input name="code" id="" style="width:100px;" type="text">
                                                    <img class="captcha" src="<?php echo $_SESSION['captcha']['image_src'] ?>" style="height:38px;width:80px;border-width:0px;margin:0 0 -14px 5px">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table2">
                                        <tbody>
                                            <tr>
                                                <td style="width: 20%;">Điện thoại:</td>
                                                <td>
                                                    <input name="phone" id="" style="width:90%;" type="text"> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 10px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tuổi:</td>
                                                <td>
                                                    <input name="age" id="" style="width:90%;" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 10px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email : <font color="red">(*)</font></td>
                                                <td>
                                                    <input name="email" id="" style="width:90%;" type="text">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- <div style="clear: both;">
                                    <table class="table3" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <td style="width: 17%">Mã bảo mật : <font color="red">(*)</font></td>
                                                <td>
                                                    <input name="code" id="" style="width:50px;" type="text">
                                                    <img id="ctl00_ContentPlaceHolder1_Image1" src="https://medlatec.vn/JpgeCaptcha.aspx" style="height:30px;width:80px;border-width:0px;">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> -->
                                <div class="clearfix" style="padding-top: 20px;">
                                    (Quý vị vui lòng gõ Tiếng Việt có dấu và cung cấp đầy đủ thông tin tuổi, nghề nghiệp, tiền sử, triệu chứng bệnh và các kết quả xét nghiệm, chẩn đoán của bác sỹ (nếu có) để được tư vấn tốt nhất) 
                                </div>
                                <div>
                                    <table style="width: 100%;" class="table3">
                                        <tbody>
                                            <tr>
                                                <td style="width: 17%">Tiêu đề : <font color="red">(*)</font></td>
                                                <td>
                                                    <input name="title" id="" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 10px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nội dung tư vấn : <font color="red">(*)</font></td>
                                                <td>
                                                    <textarea style="min-height:200px" name="content"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gui-thong-tin">
                                    <button type="submit">Gửi</button>
                                </div>
                            </form>
                        </div>

                        <div class="right-content-item right-content-item-cauhoi">
                            <div class="danhsach-cauhoi">
                                <ul>
                                    <li class="active"><a href="#tab1" class="cauhoi-tab-head"><img src="images/tracuu_02.png" alt="">Câu hỏi mới nhất</a></li>
                                    <li><a href="#tab2" class="cauhoi-tab-head"><img src="images/tracuu_04.png" alt="">Câu hỏi đọc nhiều nhất</a></li>
                                </ul>
                                <div class="danhsach-cauhoi-content">
                                    <div class="cauhoi-tab active" id="tab1">
                                        <div>
                                            <div class="cauhoi-content-item">
                                                <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                            <div class="cauhoi-content-item">
                                               <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                            <div class="cauhoi-content-item">
                                                <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                            <div class="cauhoi-content-item">
                                                <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                            <div class="cauhoi-content-item">
                                                <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cauhoi-tab" id="tab2">
                                        <div>
                                            <div class="cauhoi-content-item">
                                                <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                            <div class="cauhoi-content-item">
                                               <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                            <div class="cauhoi-content-item">
                                                <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                            <div class="cauhoi-content-item">
                                                <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                            <div class="cauhoi-content-item">
                                                <div>
                                                    <img class="img-responsive" src="images/tracuu_19.png" alt="">
                                                    <h3 class="media-heading"><a class="thea" href="#">Bé đi ngoài ngày 5,6 lần</a></h3>
                                                    <p>Bác sĩ cho e hỏi: Con nhà e gần 6 tháng mấy ngày nay ngày đi 5,6 lần. Phân lúc...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
