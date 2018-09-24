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
            <div class="col-lg-11 col-md-11 col-sm-9 col-9">
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
