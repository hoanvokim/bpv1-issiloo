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
    <section class="our-Team-area bg-white section_padding_170_0 clearfix mt-80" id="team">
        <div class="container">
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
                        <h2>NHỮNG GIÁ TRỊ CHẤT LƯỢNG MÀ CHÚNG TÔI MANG LẠI</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row cool_facts_area-content">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-arrow-down-a"></i>
                            <p>100%<br> Học viên đậu visa</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-person"></i>
                            <p>Chi phí<br>thấp nhất</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-ios-star-outline"></i>
                            <p>Dịch vụ<br>tốt nhất</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Feature Area End ***** -->

    <!-- ***** University Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_100_50 clearfix" id="screenshot">
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
                            <h2>ĐẠI HỌC HANKUK</h2>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-2.jpg" alt="">
                            <h2>ĐẠI HỌC KOREA</h2>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-3.jpg" alt="">
                            <h2>ĐẠI HỌC NỮ EWHA</h2>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-4.jpg" alt="">
                            <h2>ĐẠI HỌC QUỐC GIA HANBAT</h2>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-5.jpg" alt="">
                            <h2>ĐẠI HỌC KOSIN</h2>
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url(); ?>assets/university/uni-6.jpg" alt="">
                            <h2>ĐẠI HỌC DONGSEO</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** University Area End *****====== -->

    <!-- ***** Feedback Area Start ***** -->
    <section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="slider slider-for slick-initialized slick-slider">
                        <!-- Client Feedback Text  -->
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 3680px;">
                                <div class="client-feedback-text text-center slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" style="width: 920px; position: relative; left: 0px; top: 0px; z-index: 1000; opacity: 1; transition: opacity 500ms ease;">
                                    <div class="client">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <div class="client-description text-center">
                                        <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                                    </div>
                                    <div class="star-icon text-center">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                    </div>
                                    <div class="client-name text-center">
                                        <h5>Aigars Silkalns</h5>
                                        <p>Ceo Colorlib</p>
                                    </div>
                                </div>
                                <div class="client-feedback-text text-center slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 920px; position: relative; left: -920px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease;">
                                    <div class="client">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <div class="client-description text-center">
                                        <p>“ I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                                    </div>
                                    <div class="star-icon text-center">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                    </div>
                                    <div class="client-name text-center">
                                        <h5>Jennifer</h5>
                                        <p>Developer</p>
                                    </div>
                                </div>
                                <div class="client-feedback-text text-center slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 920px; position: relative; left: -1840px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease;">
                                    <div class="client">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <div class="client-description text-center">
                                        <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job.”</p>
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
                                <div class="client-feedback-text text-center slick-slide" data-slick-index="3" aria-hidden="true" tabindex="0" style="width: 920px; position: relative; left: -2760px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease;">
                                    <div class="client">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <div class="client-description text-center">
                                        <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
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
                        <!-- Client Feedback Text  -->

                        <!-- Client Feedback Text  -->

                        <!-- Client Feedback Text  -->

                    </div>
                </div>
                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav slick-initialized slick-slider slick-dotted"><i class="fa fa-angle-left slick-arrow" style="display: block;"></i>
                        <div class="slick-list draggable" style="padding: 0px 30px;">
                            <div class="slick-track" style="opacity: 1; width: 1548px; transform: translate3d(-903px, 0px, 0px); transition: transform 500ms ease;">
                                <div class="client-thumbnail slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-3.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-2.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-1.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide slick-cloned slick-active" data-slick-index="-1" aria-hidden="false" tabindex="-1" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-2.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" tabindex="-1" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-3.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-2.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-1.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide" data-slick-index="3" aria-hidden="true" tabindex="0" role="tabpanel" id="slick-slide13" aria-describedby="slick-slide-control13" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-2.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide slick-cloned slick-center" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-3.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-2.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-1.jpg" alt="">
                                </div>
                                <div class="client-thumbnail slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 129px;">
                                    <img src="<?php echo base_url(); ?>webresources/img/bg-img/client-2.jpg" alt="">
                                </div>
                            </div>
                        </div>


                        <i class="fa fa-angle-right slick-arrow" style="display: block;"></i>
                        <ul class="slick-dots" style="display: flex;" role="tablist">
                            <li class="slick-active" role="presentation">
                                <button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 2" tabindex="-1">1</button>
                            </li>
                            <li role="presentation" class="">
                                <button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 2" tabindex="-1">2</button>
                            </li>
                            <li role="presentation" class="">
                                <button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 2" tabindex="-1">3</button>
                            </li>
                            <li role="presentation" class="">
                                <button type="button" role="tab" id="slick-slide-control13" aria-controls="slick-slide13" aria-label="4 of 2" tabindex="0" aria-selected="true">4</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Feedback Area End *****====== -->

    <!-- ***** News Area Start ***** -->
    <section class="news_area clearfix section_padding_100_50">
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
        <div class="container">
            <div class="row cool_facts_area-content mt-30">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="news-content">
                            <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                            <div class="text-des-container-news">
                                <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="news-content">
                            <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                            <div class="text-des-container-news">
                                <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                            <div class="text-des-container-news">
                                <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="news-content">
                            <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                            <div class="text-des-container-news">
                                <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <a href="http://localhost/bpv1-issiloo/news/ky-thi-topik-61"> <img src="http://localhost/bpv1-issiloo/assets/news/Hq3.png"></a>
                            <div class="text-des-container-news">
                                <h6>THÔNG BÁO VỀ KỲ THI TOPIK 61</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** NEWS Area End ***** -->


    <!-- ***** CTA Area Start ***** -->
    <section class="our-monthly-membership section_padding_50 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="membership-description">
                        <h2>Join our Monthly Membership</h2>
                        <p>Find the perfect plan for you — 100% satisfaction guaranteed.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                        <a href="#">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->


<?php $this->load->view('webapp/tpl_footer'); ?>