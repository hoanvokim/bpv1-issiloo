<?php
/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 22.08.18
 * Time: 16:44
 */
?>

<?php $this->load->view('webapp/tpl_header'); ?>

    <!-- ***** Banner Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-6 col-12">
                    <div class="wellcome-heading wow fadeInLeftBig" data-wow-delay="0.7s">
                        <img src="<?php echo base_url(); ?>webresources/img/issi/duhochanquoc.png">
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="#" method="post" class="form-inline">
                            <input type="email" class="form-control email wow flipInY" data-wow-delay="1s"
                                   placeholder="Số điện thoại">
                            <input type="submit" class="submit wow flipInY" data-wow-delay="1.2s"
                                   value="Tư vấn">
                        </form>
                        <!-- Form End -->
                    </div>
                    <!-- social icon-->
                    <div class="wellcome-heading-icon">
                        <a href="https://www.facebook.com/issiloo.edu.vn/">
                            <img src="<?php echo base_url(); ?>webresources/img/issi/iconFacebook.png"
                                 class="wow flipInY" data-wow-delay="1.2s">
                        </a>
                        <a href="http://zaloapp.com/qr/p/fwc7rp42pe1x">
                            <img src="<?php echo base_url(); ?>webresources/img/issi/iconZalo.png" class="wow flipInY"
                                 data-wow-delay="1.6s">
                        </a>
                        <a href="https://www.youtube.com/channel/UCxSwrePN-rYK7AUtoKi2gfg?view_as=subscriber">
                            <img src="<?php echo base_url(); ?>webresources/img/issi/iconYoutube.png"
                                 class="wow flipInY" data-wow-delay="1.4s">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <!-- Welcome thumb -->
                    <div class="welcome-thumb wow fadeInDownBig" data-wow-delay="0.4s">
                        <img src="<?php echo base_url(); ?>webresources/img/issi/hocvien.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Banner Area End ***** -->

    <!-- ***** Gia tri Area Start ***** -->
    <section class="popular_news_area clearfix section_padding_20_30">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-md-7 col-sm-12 col-12 wow zoomInLeft" data-wow-delay="0.2s">
                    <div class="popular_news_area-header">
                        <h1>Bài mới</h1>
                        <hr/>
                    </div>
                    <div class="popular_news_area-content">
                        <img src="<?php echo base_url(); ?>assets/university/uni-4.jpg"/>
                        <a>Trang chủ / Tự học Tiếng Hàn / Từ vựng</a>
                        <h3>Kính ngữ thường gặp trong Tiếng </h3>
                        <span>
                        Đối với một đất nước trọng lễ nghi như Hàn Quốc thì việc sử dụng kính ngữ rất quan trọng. Sử dụng kính ngữ đúng không chỉ giúp việc giao tiếp của bạn trở nên thuận lời, được người Hàn đánh giá cao hơn mà còn giúp bạn hiểu hơn về Văn hoá con người Hàn Quốc.
                    </span>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-md-5 col-sm-12 col-12 wow zoomInRight" data-wow-delay="0.2s">
                    <div class="popular_news_area-header">
                        <h3>Bài được xem nhiều nhất</h3>
                        <hr/>
                    </div>
                    <div class="row popular_news_area-single">
                        <div class="no-padding col-6">
                            <img src="<?php echo base_url(); ?>assets/university/uni-1.jpg"/>
                        </div>
                        <div class="no-padding col-6">
                            <h4>Đại học Korea - Trường đại học top</h4>
                            <a>Trang chủ / Trường đại học</a>
                        </div>
                    </div>
                    <div class="row popular_news_area-single">
                        <div class="no-padding col-6">
                            <img src="<?php echo base_url(); ?>assets/university/uni-2.jpg"/>
                        </div>
                        <div class="no-padding col-6">
                            <h4>TUYỂN SINH DU HỌC HÀN QUỐC ĐỢT NHẬP HỌC THÁNG 12</h4>
                            <a>Trang chủ / Trường đại học</a>
                        </div>
                    </div>
                    <div class="row popular_news_area-single">
                        <div class="no-padding col-6">
                            <img src="<?php echo base_url(); ?>assets/university/uni-3.jpg"/>
                        </div>
                        <div class="no-padding col-6">
                            <h4>Chương trình du học tại</h4>
                            <a>Trang chủ / Thông tin du học</a>
                        </div>
                    </div>
                    <div class="row popular_news_area-single">
                        <button class="button-view" href="#">Xem thêm →</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ***** Gia tri Area End ***** -->

    <!-- ***** Gia tri Area Start ***** -->
    <section class="cool_facts_area clearfix section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="cool_facts_area-heading">
                        <h1>Những giá trị ISSILOO mang lại</h1>
                    </div>
                </div>
            </div>
            <div class="row cool_facts_area-content">
                <!-- Single Cool Fact-->
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="single-cool-fact d-flex justify-content-center wow zoomInUp" data-wow-delay="1.3s">
                        <a href="<?php echo base_url(); ?>" target="_blank">
                            <div class="cool-facts-content hvr-grow">
                                <h2>100%</h2>
                                <p>đậu visa</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="single-cool-fact d-flex justify-content-center wow zoomInUp" data-wow-delay="1.5s">
                        <a href="<?php echo base_url(); ?>" target="_blank">
                            <div class="cool-facts-content hvr-grow">
                                <h2>Chi phí</h2>
                                <p>thấp nhất</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="single-cool-fact d-flex justify-content-center wow zoomInUp" data-wow-delay="1.7s">
                        <a href="<?php echo base_url(); ?>" target="_blank">
                            <div class="cool-facts-content hvr-grow">
                                <h2>Dịch vụ</h2>
                                <p>tốt nhất</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Gia tri Area End ***** -->

    <!-- ***** chuong trinh Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_50_0 clearfix mt-80" id="chuongtrinh">
        <div>
            <img class="injectRightDiv-chuongtrinh"
                 src="<?php echo base_url(); ?>webresources/img/issi/hoa-issiloo.png">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="our-Team-area-heading wow zoomInDown" data-wow-delay="0.4s">
                        <h1>Chương trình tại <img src="<?php echo base_url(); ?>webresources/img/issi/issi.png"></a>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="chuongtrinhissiloo_slides owl-carousel">
                    <div class="single-shot show-shadow">
                        <a href="<?php echo base_url(); ?>news/news_content/1">
                            <img src="<?php echo base_url(); ?>assets/university/uni-1.jpg" alt="">
                            <h5>Du học Hàn </h5>
                        </a>
                        <div class="content">
                            <span>Tư vấn và hỗ trợ trọn gói cho học viên. Hình thức du học đa dạng. 100% học viên đậu visa. </span>
                            <br/>
                            <br/>
                            <a> <span>Xem chi tiết >>></span></a>
                        </div>

                    </div>
                    <div class="single-shot show-shadow">
                        <a href="<?php echo base_url(); ?>news/news_content/1">
                            <img src="<?php echo base_url(); ?>assets/university/uni-2.jpg" alt="">
                            <h5>Du học Hàn </h5>
                        </a>
                        <div class="content">
                            <span>Tư vấn và hỗ trợ trọn gói cho học viên. Hình thức du học đa dạng. 100% học viên đậu visa. </span>
                            <br/>
                            <br/>
                            <a> <span>Xem chi tiết >>></span></a>
                        </div>

                    </div>
                    <div class="single-shot show-shadow">
                        <a href="<?php echo base_url(); ?>news/news_content/1">
                            <img src="<?php echo base_url(); ?>assets/university/uni-3.jpg" alt="">
                            <h5>Du học Hàn </h5>
                        </a>
                        <div class="content">
                            <span>Tư vấn và hỗ trợ trọn gói cho học viên. Hình thức du học đa dạng. 100% học viên đậu visa. </span>
                            <br/>
                            <br/>
                            <a> <span>Xem chi tiết >>></span></a>
                        </div>

                    </div>
                    <div class="single-shot show-shadow">
                        <a href="<?php echo base_url(); ?>news/news_content/1">
                            <img src="<?php echo base_url(); ?>assets/university/uni-4.jpg" alt="">
                            <h5>Du học Hàn </h5>
                        </a>
                        <div class="content">
                            <span>Tư vấn và hỗ trợ trọn gói cho học viên. Hình thức du học đa dạng. 100% học viên đậu visa. </span>
                            <br/>
                            <br/>
                            <a> <span>Xem chi tiết >>></span></a>
                        </div>

                    </div>
                    <div class="single-shot show-shadow">
                        <a href="<?php echo base_url(); ?>news/news_content/1">
                            <img src="<?php echo base_url(); ?>assets/university/uni-5.jpg" alt="">
                            <h5>Du học Hàn </h5>
                        </a>
                        <div class="content">
                            <span>Tư vấn và hỗ trợ trọn gói cho học viên. Hình thức du học đa dạng. 100% học viên đậu visa. </span>
                            <br/>
                            <br/>
                            <a> <span>Xem chi tiết >>></span></a>
                        </div>

                    </div>
                    <div class="single-shot show-shadow">
                        <a href="<?php echo base_url(); ?>news/news_content/1">
                            <img src="<?php echo base_url(); ?>assets/university/uni-6.jpg" alt="">
                            <h5>Du học Hàn </h5>
                        </a>
                        <div class="content">
                            <span>Tư vấn và hỗ trợ trọn gói cho học viên. Hình thức du học đa dạng. 100% học viên đậu visa. </span>
                            <br/>
                            <br/>
                            <a> <span>Xem chi tiết >>></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** chuong trinh End ***** -->

    <!-- ***** Truong dai hoc Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_70_50 clearfix wow bounceInUp" data-wow-delay="0.2s"
             id="truongdaihoc">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Các trường đại học</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshot_slides owl-carousel">
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-1.jpg" alt="">
                            <h5>ĐẠI HỌC HANKUK</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-2.jpg" alt="">
                            <h5>ĐẠI HỌC KOREA</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-3.jpg" alt="">
                            <h5>ĐẠI HỌC NỮ EWHA</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-4.jpg" alt="">
                            <h5>ĐẠI HỌC QUỐC GIA HANBAT</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-5.jpg" alt="">
                            <h5>ĐẠI HỌC KOSIN</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-6.jpg" alt="">
                            <h5>ĐẠI HỌC DONGSEO</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-5.jpg" alt="">
                            <h5>ĐẠI HỌC KOSIN</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-6.jpg" alt="">
                            <h5>ĐẠI HỌC DONGSEO</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-3.jpg" alt="">
                            <h5>ĐẠI HỌC NỮ EWHA</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-4.jpg" alt="">
                            <h5>ĐẠI HỌC QUỐC GIA HANBAT</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-5.jpg" alt="">
                            <h5>ĐẠI HỌC KOSIN</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-6.jpg" alt="">
                            <h5>ĐẠI HỌC DONGSEO</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Truong dai hoc Area End *****====== -->

    <!-- ***** Hoc Bong Area Start ***** -->
    <section class="scholar_ship_area clearfix section_padding_100_50" id="hocbong">
        <div>
            <img class="injectLeftDiv" src="<?php echo base_url(); ?>webresources/img/issi/hoa-issiloo.png">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-5 text-center">
                    <!-- Heading Text  -->
                    <div class="scholar_ship_area-heading with-text-padding">
                        <h1 class="wow bounceInLeft" data-wow-delay="0.4s">Học bổng</h1>
                        <span>
                            Tổng hợp và cập nhật những thông tin học bổng trong và ngoài nước dành cho các bạn du học sinh
                        </span>
                        <br/>
                        <button class="button-view wow flipInY" data-wow-delay="1s"
                                href="https://www.facebook.com/issiloo.edu.vn/">
                            Xem thêm →
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-7 scholar_ship_area-heading text-center wow bounceInRight"
                     data-wow-delay="0.4s">
                    <!-- Heading Text  -->
                    <img src="<?php echo base_url(); ?>webresources/img/issi/hocvien.png">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hoc Bong Area End ***** -->

    <!-- ***** Hocvien Area Start ***** -->
    <section class="hocvien-area bg-white section_padding_50 clearfix wow bounceInUp" data-wow-delay="0.2s"
             id="hocvienissiloo">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Học viên tại ISSILOO</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="hocvien_slides owl-carousel">
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/student/hieu_nho.png" alt="">
                            <h5>Nguyễn Văn Hiếu</h5>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/student/hoan_nho.png" alt="">
                            <h5>Nguyễn Văn Hoan</h5>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/student/khang_nho.png" alt="">
                            <h5>Tô Hoàng </h5>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/student/thinh_nho.png" alt="">
                            <h5>Tô Hoàng Thịnh</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hocvien Area End *****====== -->

    <!-- ***** Thong tin du hoc Area Start ***** -->
    <section class="study_abroad_area clearfix section_padding_50_20" id="thongtinduhoc">
        <!--        <div>-->
        <!--            <img class="injectRightDiv2" src="-->
        <?php //echo base_url(); ?><!--webresources/img/issi/hoa-issiloo.png">-->
        <!--        </div>-->
        <div class="container">
            <div class="row">
                <div class=" col-6 scholar_ship_area-heading text-center wow bounceInRight" data-wow-delay="0.4s">
                    <!-- Heading Text  -->
                    <img src="<?php echo base_url(); ?>webresources/img/issi/hocvien.png">
                </div>
                <div class=" col-6 text-center">
                    <!-- Heading Text  -->
                    <div class="study_abroad_area-heading with-text-padding">
                        <h1 class="wow bounceInLeft" data-wow-delay="0.4s">Thông tin du học</h1>
                        <button class="button-view wow flipInY" data-wow-delay="1s"
                                href="https://www.facebook.com/issiloo.edu.vn/">
                            Xem thêm →
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Thong tin du hoc Area End ***** -->

    <!-- ***** hoc vien Feedback Area Start ***** -->
    <section class="clients-feedback-area bg-white section_padding_30_20 clearfix" id="sinhvien">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="slider slider-for">
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ISSILOO là trung tâm tiếng hàn rất dễ thương và thân thiện. Quan tâm đến từng học
                                    viên một.”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Nguyễn Văn Hiếu</h5>
                                <p>Busan university - Busan</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“Cô giáo dạy tiếng hàn nhiệt tình. Giáo trình nhẹ nhưng hiệu quả.”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Nguyễn Văn Hoan</h5>
                                <p>Hankuk University of Foreign Studies</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“Được các cô nhiệt tình hỗ trợ, cảm thấy động lực học tập.”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Tô Hoàng Khang</h5>
                                <p>Chungbuk National University</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“Ban đầu có chút khó khăn, nhưng được các cô hỗ trợ rất nhiệt tình”
                                </p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Tô Hoàng Thịnh</h5>
                                <p>Seoul National University of Science and Technology</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav">
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url(); ?>assets/student/hieu_nho.png" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url(); ?>assets/student/hoan_nho.png" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url(); ?>assets/student/khang_nho.png" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url(); ?>assets/student/thinh_nho.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** hoc vien Feedback Area End ***** -->

    <!-- ***** Tu hoc tieng han Area Start ***** -->
    <section class="self_learning_area bg-white section_padding_70_50 clearfix wow bounceInUp" data-wow-delay="0.6s"
             id="tuhoc">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Tự học Tiếng Hàn</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="self_learning_slides owl-carousel">
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-1.jpg" alt="">
                            <h5>Bài học 1</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-2.jpg" alt="">
                            <h5>Bài học 2</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-3.jpg" alt="">
                            <h5>Bài học 3</h5>
                        </div>
                        <div class="single-shot show-shadow">
                            <img src="<?php echo base_url(); ?>assets/university/uni-4.jpg" alt="">
                            <h5>Bài học 4</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Tu hoc tieng han Area End *****====== -->


    <!-- ***** ISSILOO Start ***** -->
    <section class="news_area clearfix " id="issiloo">
        <!--        <div>-->
        <!--            <img class="injectLeftDiv" src="-->
        <?php //echo base_url(); ?><!--webresources/img/issi/hoa-issiloo.png">-->
        <!--        </div>-->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="news_area-heading wow fadeInLeft slow" data-wow-delay="0.4s">
                        <h2>ISSILOO</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding-top: 30px;">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="issiloo_images_slides owl-carousel wow fadeInRight slow" data-wow-delay="0.4s">
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/news/news-1.png" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/news/news-2.png" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/news/news-3.png" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/news/news-4.png" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/news/news-5.png" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/news/news-6.png" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/news/news-7.png" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/news/news-8.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** ISSILOO End ***** -->

    <!-- ***** Video Area Start ***** -->
    <section class="video-section section_padding_50_0">
        <div class="container-fluid work-item">
            <div class="row">
                <div class="col-12">
                    <!-- Video Area Start -->
                    <div class="video-area"
                         style="background-image: url(<?php echo base_url(); ?>/webresources/img/issi/meeting.jpg );
                                 background-repeat: no-repeat;
                                 ">
                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=75WSmq1QXJw" class="video_btn"><i
                                        class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Video Area End ***** -->

<?php $this->load->view('webapp/tpl_footer'); ?>