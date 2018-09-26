<?php
/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 28.08.18
 * Time: 11:02
 */
?>
<!-- ***** Header Area Start ***** -->
<header class="header_area animated sticky slideInDown">
    <div class="container">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-lg-11 col-md-11 col-sm-10 col-10">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- Logo -->
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url(); ?>webresources/img/issi/logoWhite.png" alt="">
                        </a>
                        <!-- Menu Area -->
                        <?php if ($active_page == 'home') { ?>
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Trang chủ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#chuongtrinh">Chương trình</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#truongdaihoc">Trường đại học</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#hocbong">Học bổng</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#thongtinduhoc">Thông tin du học</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#issiloo">ISSILOO</a></li>
                                </ul>
                            </div>
                        <?php } ?>
                    </nav>
                </div>
                <div class="wrapper cf">
                    <nav id="main-nav">
                        <ul class="first-nav">
                            <li><a href="<?php echo base_url() . 'post'; ?>">Du học Hàn Quốc</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Trường đại học</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Chi phí</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Học bổng</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Kinh nghiệm du học</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Đào tạo Hàn ngữ</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Luyện thi XKLĐ</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Thành tích học viên</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Hoạt động ngoại khóa</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Tự học tiếng Hàn</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Tin Tức</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">ISSILOO</a></li>
                            <li><a href="<?php echo base_url() . 'post'; ?>">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-2">
                <div class="sing-up-button">
                    <a class="toggle hc-nav-trigger hc-nav-1 hc-nav-2 hc-nav-3 hc-nav-4">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<section class="button-bottom navbar fixed-bottom">
    <div id="popUpCall" class="showCall">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 style="float: right">
                        <i class="dialog-close ion-android-close"></i></h1>
                </div>
                <div class="col-12 text-center">
                    <h1>Trung Tâm</h1>
                    <h5>Du học hàn quốc issiloo</h5>
                </div>
                <div class="col-12 text-center section_padding_20_30">
                    <h1><i class="ion-android-call"></i> 0901 879 877</h1>
                </div>
                <div class="col-12 text-center section_padding_0_30">
                    <h3><i class="ion-android-call"></i> 028 3728 2259</h3>
                </div>
            </div>
        </div>
    </div>
    <div id="popUpContact" class="showContact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 style="float: right">
                        <i class="dialog-close ion-android-close"></i></h1>
                </div>
                <div class="col-12 text-center">
                    <h5>Đăng kí tư vấn miễn phí</h5>
                </div>
                <form action="#" method="post" class="form-inline text-left section_padding_0_50">
                    <div class="col-12 section_padding_20_10">
                        <span> Họ và tên * </span><br/>
                        <input type="name" class="form-control"/>
                    </div>
                    <div class="col-12 section_padding_0_15">
                        <span> Tỉnh / Thành phố * </span><br/>
                        <input type="name" class="form-control"/>
                    </div>
                    <div class="col-12 section_padding_0_15">
                        <span> Điện thoại * </span><br/>
                        <input type="name" class="form-control"/>
                    </div>
                    <div class="col-12 section_padding_0_15">
                        <span> Trường bạn muốn đi Du học Hàn Quốc </span><br/>
                        <input type="name" class="form-control"/>
                    </div>
                    <div class="col-6 section_padding_0_15">
                        <span> Trình độ * </span><br/>
                        <select class="form-control">
                            <option value="volvo">Xin chọn</option>
                            <option value="saab">Saab</option>
                        </select>
                    </div>
                    <div class="col-6 section_padding_0_15" style="padding-right: 15px !important;">
                        <span> Nhu cầu * </span><br/>
                        <select class="form-control">
                            <option value="volvo">Xin chọn</option>
                            <option value="saab">Saab</option>
                        </select>
                    </div>
                    <div class="col-12 text-center">
                        <button class="button-view" type="submit" style="width: 100px;">
                           Gửi đi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 text-center">
            <button id="callAction" class="button-view" type="submit">
                <i class="ion-android-call"></i> Gọi điện
            </button>
        </div>
        <div class="col-6 text-center">
            <button id="textAction" class="button-view" type="submit">
                <i class="ion-android-chat"></i> Tư vấn miễn phí
            </button>
        </div>
    </div>
</section>
