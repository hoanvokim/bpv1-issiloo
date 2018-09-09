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
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-10 col-lg-11 col-md-11 col-sm-11 col-xs-10">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo base_url(); ?>webresources/img/issi/<?php if ($active_page == 'home') {
                                echo 'logoWhite.png';
                            }
                            else {
                                echo 'logoBlue.png';
                            } ?>" alt="">
                        </a>
                        <!-- Menu Area -->
                        <?php if ($active_page == 'home') { ?>
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Trang chủ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#chuongtrinh">Chương trình</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#truongdaihoc">Trường đại học</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#hocbong">Học bổng</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#thongtin">Thông tin du học</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#issiloo">ISSILOO</a></li>
                                </ul>
                            </div>
                        <?php } ?>
                    </nav>
                </div>
                <div class="wrapper cf">
                    <nav id="main-nav">
                        <ul class="first-nav">
                            <li class="cryptocurrency">
                                <a href="<?php echo base_url(); ?>" target="_blank">Trang chủ</a>
                            </li>
                            <li class="cryptocurrency">
                                <a href="<?php echo base_url() . 'post'; ?>" target="_blank">Du học Hàn Quốc</a>
                                <ul>
                                    <li><a href="#">Trường đại học</a></li>
                                    <li><a href="#">Chi phí</a></li>
                                    <li><a href="#">Học bổng</a></li>
                                    <li><a href="#">Kinh nghiệm du học</a></li>
                                </ul>
                            </li>
                            <li class="bookmark">
                                <a href="https://www.google.com/search?q=Crypto" target="_blank">Đào tạo Hàn ngữ</a>
                            </li>
                            <li class="cryptocurrency">
                                <a href="https://www.google.com/search?q=Crypto" target="_blank">Luyện thi XKLĐ</a>
                            </li>
                            <li class="cryptocurrency">
                                <a href="https://www.google.com/search?q=Crypto" target="_blank">Thành tích học viên</a>
                            </li>
                            <li class="cryptocurrency">
                                <a href="https://www.google.com/search?q=Crypto" target="_blank">Hoạt động ngoại khóa</a>
                            </li>
                            <li class="cryptocurrency">
                                <a href="https://www.google.com/search?q=Crypto" target="_blank">Tự học tiếng Hàn</a>
                            </li>
                            <li class="cryptocurrency">
                                <a href="https://www.google.com/search?q=Crypto" target="_blank">Tin Tức</a>
                            </li>
                            <li class="cryptocurrency">
                                <a href="https://www.google.com/search?q=Crypto" target="_blank">ISSILOO</a>
                            </li>
                            <li class="cryptocurrency">
                                <a href="https://www.google.com/search?q=Crypto" target="_blank">Liên hệ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-1 col-lg-1 col-md-1 col-sm-1 col-xs-2">
                <div class="sing-up-button">
                    <a class="toggle hc-nav-trigger hc-nav-1 hc-nav-2 hc-nav-3 hc-nav-4 <?php if ($active_page != 'home') {
                        echo 'inverse';
                    } ?>">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
