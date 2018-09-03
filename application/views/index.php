<?php
/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 22.08.18
 * Time: 16:44
 */
?>

<?php $this->load->view('webapp/tpl_header'); ?>

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Du học Hàn Quốc</h2>
                        <h2>ISSILOO</h2>
                        <h3>ISSILOO</h3>
                        <p>Chắp cánh ước mơ Du Học.</p>
                    </div>
                    <!-- social icon-->
                    <div class="wellcome-heading-icon wellcome-heading">
                        <a href="https://www.facebook.com/issiloo.edu.vn/">
                            <img src="<?php echo base_url(); ?>webresources/img/scr-img/facebook.png">
                            </a>
                        <a href="https://www.youtube.com/channel/UCxSwrePN-rYK7AUtoKi2gfg?view_as=subscriber">
                            <img src="<?php echo base_url(); ?>webresources/img/scr-img/youtube.png"></a>
                        <a href="http://zaloapp.com/qr/p/fwc7rp42pe1x">
                            <img src="<?php echo base_url(); ?>webresources/img/scr-img/zalo.png"></a>
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="#" method="post" class="form-inline">
                            <input type="email" class="form-control email" placeholder="Số điện thoại...">
                            <input type="submit" class="submit" value="Liên hệ ngay">
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="<?php echo base_url(); ?>webresources/img/bg-img/welcome-img.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_70_0 clearfix mt-80" id="chuongtrinh">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="our-Team-area-heading">
                        <h2>Chương trình tại ISSILOO</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo base_url(); ?>webresources/img/core-img/DU-HOC-HAN-QUOC.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo base_url(); ?>webresources/img/core-img/DAO-TAO-HAN-NGU.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Feature Area Start ***** -->
    <section class="cool_facts_area clearfix section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="cool_facts_area-heading">
                        <h3>NHỮNG GIÁ TRỊ CHẤT LƯỢNG MÀ CHÚNG TÔI MANG LẠI</h3>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row cool_facts_area-content">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-4">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="cool-facts-content hvr-grow">
                            <img src="<?php echo base_url(); ?>webresources/img/scr-img/feature-white-01.png">
                            <p>100%<br> Học viên đậu visa</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-4">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="cool-facts-content hvr-grow">
                            <img src="<?php echo base_url(); ?>webresources/img/scr-img/feature-white-02.png">
                            <p>Chi phí<br>thấp nhất</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-4">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="cool-facts-content hvr-grow">
                            <img src="<?php echo base_url(); ?>webresources/img/scr-img/feature-white-03.png">
                            <p>Dịch vụ<br>tốt nhất</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Feature Area End ***** -->

    <!-- ***** University Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_100_50 clearfix" id="truongdaihoc">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Các trường đại học</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-1.jpg" alt="">
                            <h5>ĐẠI HỌC HANKUK</h5>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-2.jpg" alt="">
                            <h5>ĐẠI HỌC KOREA</h5>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-3.jpg" alt="">
                            <h5>ĐẠI HỌC NỮ EWHA</h5>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-4.jpg" alt="">
                            <h5>ĐẠI HỌC QUỐC GIA HANBAT</h5>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-5.jpg" alt="">
                            <h5>ĐẠI HỌC KOSIN</h5>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-6.jpg" alt="">
                            <h5>ĐẠI HỌC DONGSEO</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** University Area End *****====== -->


    <!-- ***** Client Feedback Area Start ***** -->
    <section class="clients-feedback-area bg-white section_padding_70_0 clearfix" id="sinhvien">
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
                                <p>“ ISSILOO là trung tâm tiếng hàn rất dễ thương và thân thiện. Quan tâm đến từng học
                                    viên một. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Lê nhật phát</h5>
                                <p>Busan university - Busan</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Cô giáo dạy tiếng hàn nhiệt tình. Giáo trình nhẹ nhưng hiệu quả. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Lê ánh viên</h5>
                                <p>Developer</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ I have been using it for a number of years. I use Colorlib for usability testing.
                                    It's great for taking images and making clickable image prototypes that do the
                                    job.”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Helen</h5>
                                <p>Marketer</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ I have been using it for a number of years. I use Colorlib for usability testing.
                                    It's great for taking images and making clickable image prototypes that do the job
                                    and save me the coding time and just the general hassle of hosting. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Henry smith</h5>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav">
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-3.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-2.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-1.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** News Area Start ***** -->
    <section class="news_area clearfix section_padding_100_50" id="thongtin">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="news_area-heading">
                        <h2>Thông tin du học</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">

            <!-- filter -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-filter">
                        <a href="#" class="filter active" data-filter="*">Tất </a>
                        <a href="#" class="filter" data-filter=".hocbong">Học bổng</a>
                        <a href="#" class="filter" data-filter=".kinhnghiemduhoc">Kinh nghiệm du học</a>
                        <a href="#" class="filter" data-filter=".tintuc">Tin tức</a>
                        <a href="#" class="filter" data-filter=".tuhoctienghan">Tự học tiếng Hàn</a>
                    </div>
                </div>
            </div>
            <!-- end filter -->

            <div class="row">

                <div class="works-grid titles">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item tintuc">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-1.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Thư ký Kim sao thế?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item kinhnghiemduhoc">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-2.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">So sánh từ đồng nghĩa trong tiếng </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item kinhnghiemduhoc">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-3.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Kinh nghiệm học ở đại học busan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item tuhoctienghan">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-4.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Cách dùng từ chính xác</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item tintuc">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-5.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Visa thẳng hay visa đi phỏng vấn</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item tuhoctienghan">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-6.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Các ngành học ở trường đại học Seoul</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item hocbong">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-7.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Du lịch ở Busan thì đi đâu?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item tintuc">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-8.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Các cặp từ trái nghĩa</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item tuhoctienghan">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-8.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Các cặp từ trái nghĩa</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item tintuc">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-8.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Các cặp từ trái nghĩa</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item tintuc">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-8.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Các cặp từ trái nghĩa</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 work-item kinhnghiemduhoc">
                        <div class="work-container">
                            <div class="hvr-grow">
                                <a href="www.google.com">
                                    <img src="<?php echo base_url(); ?>/assets/news/news-8.png" alt="">
                                </a>
                            </div>
                            <div class="work-description">
                                <a href="www.google.com">Các cặp từ trái nghĩa</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** NEWS Area End ***** -->


    <!-- ***** Video Area Start ***** -->
    <div class="video-section" id="issiloo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Area Start -->
                    <div class="video-area"
                         style="background-image: url(<?php echo base_url(); ?>/webresources/img/core-img/logo-line-2.png );
                                 background-color: #fff;
                                 background-repeat: no-repeat;
                                 background-size: 500px;
                                 ">
                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=75WSmq1QXJw" class="video_btn"><i
                                        class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Video Area End ***** -->


    <!-- ***** CTA Area Start ***** -->
    <section class="our-monthly-membership section_padding_150_50 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="membership-description">
                        <h2>Đăng ký ngay để trở thành học viên ở ISSILOO</h2>
                        <p>Giấc mơ du học sẽ trở thành hiện thực</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                        <a href="#">Gọi ngay cho chúng tôi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

<?php $this->load->view('webapp/tpl_footer'); ?>