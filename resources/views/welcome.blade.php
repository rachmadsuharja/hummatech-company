@extends('layouts.main')

@section('style')
<style>
    .hummatech-blue {
        color: #00B1EE !important;
    }
    .main-slider-shape-1, .main-slider-shape-4 {
        background:#00B1EE;
    }
</style>
@endsection

@section('container')
<!-- Preloader -->
{{-- <div class="preloader">
    <div class="preloader__image"></div>
</div> --}}
<!-- /.preloader -->

<div id="page" class="site page-wrapper">
    <!-- the loop -->
    <div data-elementor-type="wp-post" data-elementor-id="106" class="elementor elementor-106">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-94fd4a5 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="94fd4a5" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5b45859" data-id="5b45859" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1205ea4 elementor-widget elementor-widget-moniz-header" data-id="1205ea4" data-element_type="widget" data-widget_type="moniz-header.default">
                            <div class="elementor-widget-container">

                                @include('partials.navbar')

                                <span data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end of the loop -->




    <div data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-c9fd3f1 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c9fd3f1" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-73c13e0" data-id="73c13e0" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-463386f elementor-widget elementor-widget-moniz-main-slider" data-id="463386f" data-element_type="widget" data-widget_type="moniz-main-slider.default">
                            <div class="elementor-widget-container">


                                <!-- Banner One Start -->
                                <section class="main-slider">
                                    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": { "el": "#main-slider-pagination", "type": "bullets", "clickable": true }, "navigation": { "nextEl": "#main-slider__swiper-button-next", "prevEl": "#main-slider__swiper-button-prev" }, "autoplay": { "delay": 5000 }}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="image-layer" style="background-image: url({{ asset('moniz/wp-content/uploads/2021/07/main-slider-1-1.jpg') }});"></div>
                                                <div class="image-layer-overlay"></div>
                                                <div class="main-slider-shape-1"></div>
                                                <div class="main-slider-shape-2"></div>
                                                <div class="main-slider-shape-3"></div>
                                                <div class="main-slider-shape-4"></div>
                                                <!-- /.image-layer -->
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="main-slider__content">
                                                                <p>Hummasoft Technology</p>
                                                                <h2>Konsultasikan Kebutuhan <span class="hummatech-blue">Software</span> Anda</h2>
                                                                <a href="contact/index.html" class="thm-btn"><span>Coba Sekarang</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-layer" style="background-image: url({{ asset('moniz/wp-content/uploads/2021/07/main-slider-1-2.jpg') }});"></div>
                                                <div class="image-layer-overlay"></div>
                                                <div class="main-slider-shape-1"></div>
                                                <div class="main-slider-shape-2"></div>
                                                <div class="main-slider-shape-3"></div>
                                                <div class="main-slider-shape-4"></div>
                                                <!-- /.image-layer -->
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="main-slider__content">
                                                                <p>Hummasoft Technology</p>
                                                                <h2>Jadilah <span class="hummatech-blue">Expert</span> Programmer</h2>
                                                                <a href="contact/index.html" class="thm-btn"><span>Gabung Bersama Kami</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- If we need navigation buttons -->
                                        <div class="slider-bottom-box d-flex justify-content-center">
                                            <div class="main-slider__nav w-100 d-flex justify-content-between">
                                                <i class="fa fa-arrow-left btn btn-outline-light p-3 rounded-circle bg-white-50" id="main-slider__swiper-button-next"></i>
                                                <i class="fa fa-arrow-right btn btn-outline-light p-3 rounded-circle" id="main-slider__swiper-button-prev"></i>
                                            </div>
                                            <div class="swiper-pagination w-100 d-flex justify-content-center" id="main-slider-pagination"></div>
                                        </div>
                                    </div>
                                </section>
                                <!--Banner One End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-a56b3de elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="a56b3de" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9bbd6d8" data-id="9bbd6d8" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-05480c3 elementor-widget elementor-widget-moniz-about" data-id="05480c3" data-element_type="widget" data-widget_type="moniz-about.default">
                            <div class="elementor-widget-container">

                                <!--Welcome One Start-->
                                <section class="welcome-one">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="welcome-one__left wow fadeInLeft" data-wow-duration="1500ms">
                                                    <div class="welcome-one__img-box">
                                                        <div class="welcome-one__img">
                                                            <img decoding="async" src="{{ asset('moniz/wp-content/uploads/2021/07/welcome-one-img-1.png') }}" alt="">
                                                            <div class="welcome-one__shape-1"></div>
                                                            <div class="welcome-one__shape-2"></div>
                                                        </div>
                                                        <div class="welcome-one__trusted">
                                                            <p>Trusted by</p>
                                                            <h2 class="odometer" data-count="4890">00</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="welcome-one__right">
                                                    <div class="section-title text-left">
                                                        <span class="section-title__tagline">Tentang Hummatech Digital Indonesia</span>
                                                        <h2 class="section-title__title">We provide the best web services</h2>
                                                    </div>
                                                    <div class="welcome-one__solutions">
                                                        <div class="welcome-one__solutions-single">
                                                            <div class="welcome-one__solutions-icon">
                                                                <span class="icon-tick"></span>
                                                            </div>
                                                            <div class="welcome-one__solutions-text-box">
                                                                <p>Solution for small &amp; <br> large businesses</p>
                                                            </div>
                                                        </div>
                                                        <div class="welcome-one__solutions-single">
                                                            <div class="welcome-one__solutions-icon">
                                                                <span class="icon-tick"></span>
                                                            </div>
                                                            <div class="welcome-one__solutions-text-box">
                                                                <p>Solution for small &amp; <br> large businesses</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="welcome-one__right-text-1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                                    <p class="welcome-one__right-text-2">You need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the Internet.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Welcome One End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-f76b84e elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f76b84e" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b97f31" data-id="6b97f31" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-06aa3b3 elementor-widget elementor-widget-moniz-funfact" data-id="06aa3b3" data-element_type="widget" data-widget_type="moniz-funfact.default">
                            <div class="elementor-widget-container">

                                <!--Counter One Start-->
                                <section class="counters-one">
                                    <div class="container">
                                        <ul class="counters-one__box list-unstyled ml-0">
                                            <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                                <div class="counter-one__icon">
                                                    <span class=" icon-recommend"></span>
                                                </div>
                                                <h3 class="odometer" data-count="860">00</h3>
                                                <p class="counter-one__text">Projects completed</p>
                                            </li>
                                            <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                                <div class="counter-one__icon">
                                                    <span class=" icon-recruit"></span>
                                                </div>
                                                <h3 class="odometer" data-count="50">00</h3>
                                                <p class="counter-one__text">Active clients</p>
                                            </li>
                                            <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                                <div class="counter-one__icon">
                                                    <span class=" icon-coffee"></span>
                                                </div>
                                                <h3 class="odometer" data-count="93">00</h3>
                                                <p class="counter-one__text">Cups of coffee</p>
                                            </li>
                                            <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                                <div class="counter-one__icon">
                                                    <span class="icon-customer-review"></span>
                                                </div>
                                                <h3 class="odometer" data-count="970">00</h3>
                                                <p class="counter-one__text">Happy clients</p>
                                            </li>

                                            <li class="counter-one__shape wow fadeInUp" data-wow-delay="500ms"></li>
                                        </ul>
                                    </div>
                                </section>
                                <!--Counter One End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-739c990 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="739c990" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eb7323d" data-id="eb7323d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-095182f elementor-widget elementor-widget-moniz-accordion" data-id="095182f" data-element_type="widget" data-widget_type="moniz-accordion.default">
                            <div class="elementor-widget-container">
                                <!--We Change Start-->
                                <section class="we-change">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="we-change__left-faqs">
                                                    <div class="section-title text-left">
                                                        <span class="section-title__tagline">Frequently asked questions</span>
                                                        <h2 class="section-title__title">We’re here to change your business look</h2>
                                                    </div>
                                                    <div class="we-change__faqs">
                                                        <div class="accrodion-grp faq-one-accordion" data-grp-name="faq-one-accrodion-650eaa6aa0aa3">

                                                            <div class="accrodion active">
                                                                <div class="accrodion-title">
                                                                    <h4>Few resons why you should choose us</h4>
                                                                </div>
                                                                <div class="accrodion-content">
                                                                    <div class="inner">
                                                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo ligula, vitae commodo nisl.
                                                                        </p>
                                                                    </div>
                                                                    <!-- /.inner -->
                                                                </div>
                                                            </div>

                                                            <div class="accrodion ">
                                                                <div class="accrodion-title">
                                                                    <h4>User generated content in real-time will </h4>
                                                                </div>
                                                                <div class="accrodion-content">
                                                                    <div class="inner">
                                                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo ligula, vitae commodo nisl.
                                                                        </p>
                                                                    </div>
                                                                    <!-- /.inner -->
                                                                </div>
                                                            </div>

                                                            <div class="accrodion ">
                                                                <div class="accrodion-title">
                                                                    <h4>Completely iterate covalent strategic theme</h4>
                                                                </div>
                                                                <div class="accrodion-content">
                                                                    <div class="inner">
                                                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo ligula, vitae commodo nisl.
                                                                        </p>
                                                                    </div>
                                                                    <!-- /.inner -->
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="we-change__right">
                                                    <div class="we-change__right-img">
                                                        <img decoding="async" src="{{ asset('moniz/wp-content/uploads/2021/07/we-change-right-img-1.jpg') }}" alt="">
                                                        <div class="we-change__agency">
                                                            <div class="we-change__agency-icon">
                                                                <span class="icon-development"></span>
                                                            </div>
                                                            <div class="we-change__agency-text">
                                                                <h3>Our agency is one of the most <br> successful agency.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--We Change End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-bd05b6c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="bd05b6c" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c4b69c" data-id="6c4b69c" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-11eac44 elementor-widget elementor-widget-moniz-progress" data-id="11eac44" data-element_type="widget" data-widget_type="moniz-progress.default">
                            <div class="elementor-widget-container">

                                <!--We Make Start-->
                                <section class="we-make">
                                    <div class="we-make-bg" style="background-image: url(wp-content/uploads/2021/07/we-make-bg.jpg);"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-6">
                                                <div class="we-make__left">
                                                    <div class="section-title text-left">
                                                        <span class="section-title__tagline">Corporate business theme</span>
                                                        <h2 class="section-title__title">We make the quality design &amp; developments</h2>

                                                    </div>
                                                    <div class="we-make__person">
                                                        <div class="we-make__person-img">
                                                            <img decoding="async" src="{{ asset('moniz/wp-content/uploads/2021/07/person-img-1.png') }}" alt="">
                                                        </div>
                                                        <div class="we-make__person-text">
                                                            <p>Jhon Smith</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-6">
                                                <div class="we-make__right">
                                                    <div class="we-make__progress">
                                                        <div class="we-make__progress-single">
                                                            <h4 class="we-make__progress-title">Web design</h4>
                                                            <div class="bar">
                                                                <div class="bar-inner count-bar" data-percent="70%">
                                                                    <div class="count-text">70%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="we-make__progress-single">
                                                            <h4 class="we-make__progress-title">Web development</h4>
                                                            <div class="bar">
                                                                <div class="bar-inner count-bar" data-percent="46%">
                                                                    <div class="count-text">46%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="we-make__progress-single">
                                                            <h4 class="we-make__progress-title">Web application</h4>
                                                            <div class="bar">
                                                                <div class="bar-inner count-bar" data-percent="38%">
                                                                    <div class="count-text">38%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--We Make End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-9118d58 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="9118d58" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7e4d05a" data-id="7e4d05a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2560ced elementor-widget elementor-widget-moniz-service" data-id="2560ced" data-element_type="widget" data-widget_type="moniz-service.default">
                            <div class="elementor-widget-container">

                                <!--Services One Start-->
                                <section class="services-one  ">
                                    <div class="services-one-bg" style="background-image: url(wp-content/uploads/2021/07/services-one-bg.jpg)">
                                    </div>
                                    <div class="container">
                                        <div class="section-title text-center">
                                            <span class="section-title__tagline">Our services list</span>
                                            <h2 class="section-title__title">What we’re offering</h2>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                <!--Services One Single-->
                                                <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="services-one__icon">
                                                        <span class="icon-color-sample "></span>
                                                    </div>
                                                    <h3 class="services-one__title"><a href="service/website-design/index.html">Website design</a></h3>
                                                    <p class="services-one__text">Need something changed or is there something not quite working the</p>
                                                    <a href="service/website-design/index.html" class="service-one__arrow"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <!--Services One Single-->
                                                <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="services-one__icon">
                                                        <span class="icon-front-end "></span>
                                                    </div>
                                                    <h3 class="services-one__title"><a href="service/web-development/index.html">Web development</a></h3>
                                                    <p class="services-one__text">Need something changed or is there something not quite working the</p>
                                                    <a href="service/web-development/index.html" class="service-one__arrow"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <!--Services One Single-->
                                                <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="services-one__icon">
                                                        <span class="icon-online-shopping "></span>
                                                    </div>
                                                    <h3 class="services-one__title"><a href="service/web-application/index.html">Web application</a></h3>
                                                    <p class="services-one__text">Need something changed or is there something not quite working the</p>
                                                    <a href="service/web-application/index.html" class="service-one__arrow"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                                <!--Services One End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-702b343 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="702b343" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d52d1f" data-id="7d52d1f" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f1bbedf elementor-widget elementor-widget-moniz-portfolio" data-id="f1bbedf" data-element_type="widget" data-widget_type="moniz-portfolio.default">
                            <div class="elementor-widget-container">

                                <!--Portfolio One Start-->
                                <section class="portfolio-one  ">
                                    <div class="portfolio-one__container">
                                        <div class="section-title text-center">
                                            <span class="section-title__tagline">Recent work completed</span>
                                            <h2 class="section-title__title">Work showcase</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">


                                                <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled ml-0">
                                                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                                                    <li data-filter=".branding">
                                                        <span class="filter-text">
                                    Branding									</span>
                                                    </li>
                                                    <li data-filter=".illustration">
                                                        <span class="filter-text">
                                    illustration									</span>
                                                    </li>
                                                    <li data-filter=".photography">
                                                        <span class="filter-text">
                                    Photography									</span>
                                                    </li>
                                                    <li data-filter=".web-design">
                                                        <span class="filter-text">
                                    Web design									</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row filter-layout masonary-layout">

                                            <div class="col-xl-3 col-lg-6 col-md-6 filter-item  branding photography">
                                                <!--Portfolio One Single-->
                                                <div class="portfolio-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="portfolio-one__img">
                                                        <img fetchpriority="high" width="370" height="426" src="{{ asset('moniz/wp-content/uploads/2021/07/blog-s-5-370x426.jpg') }}" class="attachment-moniz_370X426 size-moniz_370X426 wp-post-image" alt="" decoding="async" />
                                                        <div class="portfolio-one__experience">
                                                            <div class="portfolio-one__web-design">
                                                                <p class="portfolio-one__web-design-title">Branding</p>
                                                            </div>
                                                            <div class="portfolio-one__fimlor">
                                                                <p class="portfolio-one__fimlor-title"><a href="portfolio/sussia-foundation/index.html">Sussia foundation</a></p>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-one__arrow">
                                                            <a href="portfolio/sussia-foundation/index.html"><span class="icon-right-arrow"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-6 col-md-6 filter-item  branding illustration">
                                                <!--Portfolio One Single-->
                                                <div class="portfolio-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="portfolio-one__img">
                                                        <img width="370" height="426" src="{{ asset('moniz/wp-content/uploads/2021/07/portfolio-1-4-370x426.jpg') }}" class="attachment-moniz_370X426 size-moniz_370X426 wp-post-image" alt="" decoding="async" />
                                                        <div class="portfolio-one__experience">
                                                            <div class="portfolio-one__web-design">
                                                                <p class="portfolio-one__web-design-title">Branding</p>
                                                            </div>
                                                            <div class="portfolio-one__fimlor">
                                                                <p class="portfolio-one__fimlor-title"><a href="portfolio/marikon-development/index.html">Marikon development</a></p>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-one__arrow">
                                                            <a href="portfolio/marikon-development/index.html"><span class="icon-right-arrow"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-6 col-md-6 filter-item  branding photography">
                                                <!--Portfolio One Single-->
                                                <div class="portfolio-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="portfolio-one__img">
                                                        <img width="370" height="426" src="{{ asset('moniz/wp-content/uploads/2021/07/portfolio-g-1-370x426.jpg') }}" class="attachment-moniz_370X426 size-moniz_370X426 wp-post-image" alt="" decoding="async" />
                                                        <div class="portfolio-one__experience">
                                                            <div class="portfolio-one__web-design">
                                                                <p class="portfolio-one__web-design-title">Branding</p>
                                                            </div>
                                                            <div class="portfolio-one__fimlor">
                                                                <p class="portfolio-one__fimlor-title"><a href="portfolio/forestry-innovation/index.html">Forestry innovation</a></p>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-one__arrow">
                                                            <a href="portfolio/forestry-innovation/index.html"><span class="icon-right-arrow"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-6 col-md-6 filter-item  branding web-design">
                                                <!--Portfolio One Single-->
                                                <div class="portfolio-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="portfolio-one__img">
                                                        <img loading="lazy" width="370" height="426" src="{{ asset('moniz/wp-content/uploads/2021/07/blog-s-7-370x426.jpg') }}" class="attachment-moniz_370X426 size-moniz_370X426 wp-post-image" alt="" decoding="async" />
                                                        <div class="portfolio-one__experience">
                                                            <div class="portfolio-one__web-design">
                                                                <p class="portfolio-one__web-design-title">Branding</p>
                                                            </div>
                                                            <div class="portfolio-one__fimlor">
                                                                <p class="portfolio-one__fimlor-title"><a href="portfolio/metrix-order/index.html">Metrix order</a></p>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-one__arrow">
                                                            <a href="portfolio/metrix-order/index.html"><span class="icon-right-arrow"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </section>
                                <!--Portfolio One End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-e40fad3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="e40fad3" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1610656" data-id="1610656" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-cb4c1e8 elementor-widget elementor-widget-moniz-testimonials" data-id="cb4c1e8" data-element_type="widget" data-widget_type="moniz-testimonials.default">
                            <div class="elementor-widget-container">

                                <!--Testimonial One Start-->
                                <section class="testimonial-one">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5">
                                                <div class="testimonial-one__left">
                                                    <div class="section-title text-left">
                                                        <span class="section-title__tagline">Customer feedback</span>
                                                        <h2 class="section-title__title">What they are talking about moniz?</h2>
                                                    </div>
                                                    <div class="testimonial-one__btn-box">
                                                        <a href="about/index.html" class="thm-btn testimonial-one__btn"><span>All feedback</span></a>
                                                        <div class="testimonial-one__btn-shape"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7   ">
                                                <div class="testimonial-one__slider">
                                                    <div class="swiper-container" id="testimonials-one__thumb">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="testimonial-one__img-holder">
                                                                    <img loading="lazy" width="125" height="125" src="{{ asset('moniz/wp-content/uploads/2021/12/team-page-4-125x125.jpg') }}" class="attachment-moniz_testimonials_125x125 size-moniz_testimonials_125x125 wp-post-image" alt="" decoding="async" srcset="https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-4-125x125.jpg 125w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-4-150x150.jpg 150w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-4-73x73.jpg 73w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-4-92x92.jpg 92w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-4-270x270.jpg 270w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-4-100x100.jpg 100w"
                                                                        sizes="(max-width: 125px) 100vw, 125px" />
                                                                    <div class="testimonial-one__quote"></div>
                                                                </div>
                                                            </div>
                                                            <!-- /.swiper-slide -->

                                                            <div class="swiper-slide">
                                                                <div class="testimonial-one__img-holder">
                                                                    <img loading="lazy" width="125" height="125" src="{{ asset('moniz/wp-content/uploads/2021/12/team-page-1-125x125.jpg') }}" class="attachment-moniz_testimonials_125x125 size-moniz_testimonials_125x125 wp-post-image" alt="" decoding="async" srcset="https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-1-125x125.jpg 125w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-1-150x150.jpg 150w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-1-73x73.jpg 73w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-1-92x92.jpg 92w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-1-270x270.jpg 270w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-1-100x100.jpg 100w"
                                                                        sizes="(max-width: 125px) 100vw, 125px" />
                                                                    <div class="testimonial-one__quote"></div>
                                                                </div>
                                                            </div>
                                                            <!-- /.swiper-slide -->

                                                            <div class="swiper-slide">
                                                                <div class="testimonial-one__img-holder">
                                                                    <img loading="lazy" width="125" height="125" src="{{ asset('moniz/wp-content/uploads/2021/12/team-page-6-125x125.jpg') }}" class="attachment-moniz_testimonials_125x125 size-moniz_testimonials_125x125 wp-post-image" alt="" decoding="async" srcset="https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-6-125x125.jpg 125w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-6-150x150.jpg 150w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-6-73x73.jpg 73w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-6-92x92.jpg 92w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-6-270x270.jpg 270w, https://layerdrops.com/monizwp/wp-content/uploads/2021/12/team-page-6-100x100.jpg 100w"
                                                                        sizes="(max-width: 125px) 100vw, 125px" />
                                                                    <div class="testimonial-one__quote"></div>
                                                                </div>
                                                            </div>
                                                            <!-- /.swiper-slide -->



                                                        </div>
                                                        <!-- /.swiper-wrapper -->
                                                    </div>
                                                    <!-- /#testimonials-one__thumb.swiper-container -->

                                                    <div class="testimonials-one__main-content">
                                                        <div class="swiper-container" id="testimonials-one__carousel">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="testimonial-one__conent-box">
                                                                        <p class="testimonial-one__text">
                                                                            This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                                                        <div class="testimonial-one__client-details">
                                                                            <h4 class="testimonial-one__client-name">Lester burgess</h4>
                                                                            <span class="testimonial-one__clinet-title">Customer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.swiper-slide -->

                                                                <div class="swiper-slide">
                                                                    <div class="testimonial-one__conent-box">
                                                                        <p class="testimonial-one__text">
                                                                            This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                                                        <div class="testimonial-one__client-details">
                                                                            <h4 class="testimonial-one__client-name">Isabella benson</h4>
                                                                            <span class="testimonial-one__clinet-title">Customer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.swiper-slide -->

                                                                <div class="swiper-slide">
                                                                    <div class="testimonial-one__conent-box">
                                                                        <p class="testimonial-one__text">
                                                                            This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                                                        <div class="testimonial-one__client-details">
                                                                            <h4 class="testimonial-one__client-name">Matilda baylor</h4>
                                                                            <span class="testimonial-one__clinet-title">Customer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.swiper-slide -->


                                                            </div>
                                                            <!-- /.swiper-wrapper -->
                                                            <div id="testimonials-one__carousel-pagination"></div>
                                                            <!-- /#testimonials-one__carousel-pagination -->
                                                        </div>
                                                        <!-- /#testimonials-one__thumb.swiper-container -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Testimonial One End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-b8c8d47 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b8c8d47" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4b5165d" data-id="4b5165d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-cbd4d94 elementor-widget elementor-widget-moniz-icon-box" data-id="cbd4d94" data-element_type="widget" data-widget_type="moniz-icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="two-boxes__single">
                                    <div class="two-boxes__content">
                                        <div class="two-boxes__icon">
                                            <span class="icon-web-design"></span>
                                        </div>
                                        <div class="two-boxes__text">
                                            <p>We’re committed to create <br> a change that matters</p>
                                        </div>
                                    </div>
                                    <div class="two-boxes__arrow">
                                        <a href="contact/index.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ea8d7f6" data-id="ea8d7f6" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-039af9e elementor-widget elementor-widget-moniz-icon-box" data-id="039af9e" data-element_type="widget" data-widget_type="moniz-icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="two-boxes__single">
                                    <div class="two-boxes__content">
                                        <div class="two-boxes__icon">
                                            <span class="icon-web-design"></span>
                                        </div>
                                        <div class="two-boxes__text">
                                            <p>We’re committed to create <br> a change that matters</p>
                                        </div>
                                    </div>
                                    <div class="two-boxes__arrow">
                                        <a href="contact/index.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-1a76559 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1a76559" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bd84f27" data-id="bd84f27" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-59106c5 elementor-widget elementor-widget-moniz-video" data-id="59106c5" data-element_type="widget" data-widget_type="moniz-video.default">
                            <div class="elementor-widget-container">
                                <!--Video One Start-->
                                <section class="video-one">
                                    <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url({{ asset('moniz/wp-content/uploads/2021/07/video-bg-1.jpg') }})"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="video-one__inner">
                                                    <div class="video-one__link">
                                                        <a href="https://www.youtube.com/watch?v=8DP4NgupAhI" class="video-one__btn video-popup">
                                                            <div class="video-one__video-icon">
                                                                <span class="icon-play-button"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <h2 class="video-one__text">We’re shaping the perfect <br> web solutions</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Video One End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-3fd7a0b elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3fd7a0b" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0c18bad" data-id="0c18bad" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-35cddee elementor-widget elementor-widget-moniz-about" data-id="35cddee" data-element_type="widget" data-widget_type="moniz-about.default">
                            <div class="elementor-widget-container">

                                <!--Reasons One Start-->
                                <section class="reasons-one">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="reasons-one__left">
                                                    <div class="section-title text-left">
                                                        <span class="section-title__tagline">Our benefits</span>
                                                        <h2 class="section-title__title">Reasons why we are best</h2>
                                                    </div>
                                                    <ul class="list-unstyled reasons-one__icon-box">
                                                        <li>
                                                            <span class="icon-training"></span>
                                                            <p class="reasons-one__text">The best user interfaces</p>
                                                        </li>
                                                        <li>
                                                            <span class=" icon-strategy"></span>
                                                            <p class="reasons-one__text">Quick smooth web development</p>
                                                        </li>
                                                    </ul>
                                                    <p class="reasons-one__text-1">Tincidunt elit magnis nulla facilisis sagittis maecenas. sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci not dong right.</p>
                                                    <a href="services/index.html" class="thm-btn"><span>Discover more</span></a>
                                                    <!-- /.thm-btn -->
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="reasons-one__img-box">
                                                    <div class="reasons-one-img-box-bg"></div>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="reasons-one__img-one">
                                                                <img decoding="async" src="{{ asset('moniz/wp-content/uploads/2021/07/reasons-one-img-1.jpg') }}" alt="">
                                                                <div class="reasons-one__shape-1"></div>
                                                                <div class="reasons-one__shape-2"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="reasons-one__img-two">
                                                                <img decoding="async" src="{{ asset('moniz/wp-content/uploads/2021/07/reasons-one-img-3.jpg') }}" alt="">
                                                            </div>
                                                            <div class="reasons-one__img-three reasons-one__img-two">
                                                                <img decoding="async" src="{{ asset('moniz/wp-content/uploads/2021/07/reasons-one-img-2.jpg') }}" alt="">
                                                                <div class="reasons-one__shape-3"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                                <!--Reasons One End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-ff1463e elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ff1463e" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f02e4e" data-id="3f02e4e" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4875a98 elementor-widget elementor-widget-moniz-blog" data-id="4875a98" data-element_type="widget" data-widget_type="moniz-blog.default">
                            <div class="elementor-widget-container">

                                <!--Blog One Start-->
                                <section class="blog-one  ">
                                    <div class="container">
                                        <div class="section-title text-center">
                                            <span class="section-title__tagline">Recent work completed</span>
                                            <h2 class="section-title__title">Latest from the blog</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                <!--Blog One Single-->
                                                <div class="blog-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="blog-one__img-box">
                                                        <div class="blog-one__img">
                                                            <img loading="lazy" width="370" height="250" src="{{ asset('moniz/wp-content/uploads/2021/07/blog-s-1-370x250.jpg') }}" class="attachment-moniz_blog_370X250 size-moniz_blog_370X250 wp-post-image" alt="" decoding="async" />
                                                            <a href="delivering-the-best-web-design-agency/index.html">
                                                                <span class="blog-one__plus"></span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-one__date-box">
                                                            <p><span>05</span> Jul</p>
                                                        </div>
                                                    </div>
                                                    <div class="blog-one__content">
                                                        <ul class="list-unstyled blog-one__meta">
                                                            <li><span class="byline"><span class="far fa-user-circle"></span> <span class="author vcard"><a class="url fn n" href="author/j6u43rt5/index.html">LayerDrops</a></span></span>
                                                            </li>
                                                            <li><span class="comments-link"><span class="far fa-comments"></span><a href="delivering-the-best-web-design-agency/index.html#comments">2 Comments<span class="screen-reader-text"> on Delivering the best web design agency.</span></a></span>
                                                            </li>
                                                        </ul>
                                                        <h3 class="blog-one__title">
                                                            <a href="delivering-the-best-web-design-agency/index.html">Delivering the best web design agency.</a>
                                                        </h3>
                                                        <p class="blog-one__text">
                                                            There are many variations of passages of Lorem Ipsum available, </p>
                                                        <div class="blog-one__bottom">
                                                            <div class="blog-one__read-btn">
                                                                <a href="delivering-the-best-web-design-agency/index.html">Read more</a>
                                                            </div>
                                                            <div class="blog-one__arrow">
                                                                <a href="delivering-the-best-web-design-agency/index.html"><span class="icon-right-arrow"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <!--Blog One Single-->
                                                <div class="blog-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="blog-one__img-box">
                                                        <div class="blog-one__img">
                                                            <img loading="lazy" width="370" height="250" src="{{ asset('moniz/wp-content/uploads/2021/07/blog-s-2-370x250.jpg')}}" class="attachment-moniz_blog_370X250 size-moniz_blog_370X250 wp-post-image" alt="" decoding="async" />
                                                            <a href="over-ride-the-digital-divide-with-additional/index.html">
                                                                <span class="blog-one__plus"></span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-one__date-box">
                                                            <p><span>05</span> Jul</p>
                                                        </div>
                                                    </div>
                                                    <div class="blog-one__content">
                                                        <ul class="list-unstyled blog-one__meta">
                                                            <li><span class="byline"><span class="far fa-user-circle"></span> <span class="author vcard"><a class="url fn n" href="author/j6u43rt5/index.html">LayerDrops</a></span></span>
                                                            </li>
                                                            <li><span class="comments-link"><span class="far fa-comments"></span><a href="over-ride-the-digital-divide-with-additional/index.html#comments">1 Comment<span class="screen-reader-text"> on Over ride the digital divide with additional</span></a></span>
                                                            </li>
                                                        </ul>
                                                        <h3 class="blog-one__title">
                                                            <a href="over-ride-the-digital-divide-with-additional/index.html">Over ride the digital divide with additional</a>
                                                        </h3>
                                                        <p class="blog-one__text">
                                                            There are many variations of passages of Lorem Ipsum available, </p>
                                                        <div class="blog-one__bottom">
                                                            <div class="blog-one__read-btn">
                                                                <a href="over-ride-the-digital-divide-with-additional/index.html">Read more</a>
                                                            </div>
                                                            <div class="blog-one__arrow">
                                                                <a href="over-ride-the-digital-divide-with-additional/index.html"><span class="icon-right-arrow"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <!--Blog One Single-->
                                                <div class="blog-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="blog-one__img-box">
                                                        <div class="blog-one__img">
                                                            <img loading="lazy" width="370" height="250" src="{{ asset('moniz/wp-content/uploads/2021/07/blog-s-3-370x250.jpg')}}" class="attachment-moniz_blog_370X250 size-moniz_blog_370X250 wp-post-image" alt="" decoding="async" />
                                                            <a href="capitalize-on-low-hanging-fruit-to-identify/index.html">
                                                                <span class="blog-one__plus"></span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-one__date-box">
                                                            <p><span>05</span> Jul</p>
                                                        </div>
                                                    </div>
                                                    <div class="blog-one__content">
                                                        <ul class="list-unstyled blog-one__meta">
                                                            <li><span class="byline"><span class="far fa-user-circle"></span> <span class="author vcard"><a class="url fn n" href="author/j6u43rt5/index.html">LayerDrops</a></span></span>
                                                            </li>
                                                            <li><span class="comments-link"><span class="far fa-comments"></span><a href="capitalize-on-low-hanging-fruit-to-identify/index.html#comments">1 Comment<span class="screen-reader-text"> on Capitalize on low hanging fruit to identify</span></a></span>
                                                            </li>
                                                        </ul>
                                                        <h3 class="blog-one__title">
                                                            <a href="capitalize-on-low-hanging-fruit-to-identify/index.html">Capitalize on low hanging fruit to identify</a>
                                                        </h3>
                                                        <p class="blog-one__text">
                                                            There are many variations of passages of Lorem Ipsum available, </p>
                                                        <div class="blog-one__bottom">
                                                            <div class="blog-one__read-btn">
                                                                <a href="capitalize-on-low-hanging-fruit-to-identify/index.html">Read more</a>
                                                            </div>
                                                            <div class="blog-one__arrow">
                                                                <a href="capitalize-on-low-hanging-fruit-to-identify/index.html"><span class="icon-right-arrow"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                                <!--Blog One End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-b753f6d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="b753f6d" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c56713" data-id="7c56713" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-60da2ae elementor-widget elementor-widget-moniz-sponsors" data-id="60da2ae" data-element_type="widget" data-widget_type="moniz-sponsors.default">
                            <div class="elementor-widget-container">

                                <!--Brand Two-->
                                <section class="brand-one">
                                    <div class="container">
                                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": { "0": { "spaceBetween": 30, "slidesPerView": 2 }, "375": { "spaceBetween": 30, "slidesPerView": 2 }, "575": { "spaceBetween": 30, "slidesPerView": 3 }, "767": { "spaceBetween": 50, "slidesPerView": 4 }, "991": { "spaceBetween": 50, "slidesPerView": 5 }, "1199": { "spaceBetween": 100, "slidesPerView": 5 } }}'>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png') }}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png')}}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png') }}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png') }}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png') }}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png') }}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png') }}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png')}}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png') }}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img loading="lazy" width="150" height="80" src="{{ asset('moniz/wp-content/uploads/2021/07/brand-1.png') }}" class="attachment-moniz_brand_logo_150X80 size-moniz_brand_logo_150X80" alt="" decoding="async" /> </a>
                                                </div>
                                                <!-- /.swiper-slide -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Brand Two End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-2cb5e0c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2cb5e0c" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7b569dc" data-id="7b569dc" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f0a2a93 elementor-widget elementor-widget-moniz-call-to-action" data-id="f0a2a93" data-element_type="widget" data-widget_type="moniz-call-to-action.default">
                            <div class="elementor-widget-container">

                                <!--CTA One Start-->
                                <section class="cta-one">
                                    <div class="cta-one-bg" style="background-image: url({{ asset('moniz/wp-content/uploads/2021/07/cta-one-bg.jpg') }})"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="cta-one__inner">
                                                    <p class="cta-one__tagline">We can help you stand out your business</p>
                                                    <h2 class="cta-one__title">Website design services for <br> your businesses</h2>
                                                    <a href="contact/index.html" class="thm-btn cta-one__btn thm-btn--dark--light-hover"><span>Free consultation</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--CTA One End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- the loop -->
    <div data-elementor-type="wp-post" data-elementor-id="94" class="elementor elementor-94">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-dfd8556 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dfd8556" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0a4c676" data-id="0a4c676" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5f04a37 elementor-widget elementor-widget-footer-about" data-id="5f04a37" data-element_type="widget" data-widget_type="footer-about.default">
                            <div class="elementor-widget-container">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-logo">
                                        <a href="index.html"><img decoding="async" id="fLogo" src="{{ asset('moniz/wp-content/uploads/2021/07/logo-light.png') }}" alt="Moniz" /></a>
                                    </div>
                                    <p class="footer-widget__about-text">Welcome to our website design agency. Lore ipsum simply text amet cing elit.</p>
                                    <div class="footer-widget__about-social-list">
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-facebook"></span></a>
                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-eddf8ca" data-id="eddf8ca" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3ffc972 elementor-widget elementor-widget-footer-nav-menu" data-id="3ffc972" data-element_type="widget" data-widget_type="footer-nav-menu.default">
                            <div class="elementor-widget-container">
                                <div class="footer-widget__column footer-widget__explore clearfix">
                                    <h3 class="footer-widget__title">Explore</h3>
                                    <div class="menu-footer-menu-container">
                                        <ul id="menu-footer-menu" class="footer-widget__explore-list m-0 list-unstyled">
                                            <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="about/index.html">About</a></li>
                                            <li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="team/index.html">Meet our team</a></li>
                                            <li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a href="portfolio/index.html">Case Stories</a></li>
                                            <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a href="blog-grid/index.html">Latest News</a></li>
                                            <li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a href="contact/index.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c32ab04" data-id="c32ab04" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f307785 elementor-widget elementor-widget-footer-contact" data-id="f307785" data-element_type="widget" data-widget_type="footer-contact.default">
                            <div class="elementor-widget-container">
                                <div class="footer-widget__column footer-widget__contact">
                                    <h3 class="footer-widget__title">Contact</h3>
                                    <p class="footer-widget__contact-text">66 Broklyn Street New York United States of America
                                    </p>
                                    <div class="footer-widget__contact-info">
                                        <p>
                                            <a href="tel:http://92-666-888-0000" class="footer-widget__contact-phone">92 666 888 0000</a>
                                            <a href="mailto:needhelp@moniz.com" class="footer-widget__contact-mail">needhelp@moniz.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b4e8feb" data-id="b4e8feb" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4fcaf0a elementor-widget elementor-widget-footer-subscribe" data-id="4fcaf0a" data-element_type="widget" data-widget_type="footer-subscribe.default">
                            <div class="elementor-widget-container">

                                <div class="footer-widget__column footer-widget__newsletter">
                                    <h3 class="footer-widget__title">Sign up for newsletter</h3>
                                    <form class="footer-widget__newsletter-form mc-form" data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e">
                                        <div class="footer-widget__newsletter-input-box">
                                            <input type="email" name="EMAIL" placeholder="Email Address">
                                            <button type="submit" class="footer-widget__newsletter-btn"><i class="fas fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                    <div class="mc-form__response"></div>
                                    <div class="footer-widget__newsletter-bottom">
                                        <div class="footer-widget__newsletter-bottom-icon">
                                            <i class="fa fa-circle"></i>
                                        </div>
                                        <div class="footer-widget__newsletter-bottom-text">
                                            <p>I agree to all <a href="#">terms and policies</a> </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-ed92f39 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ed92f39" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e9d82fe" data-id="e9d82fe" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-acc5cff elementor-widget elementor-widget-footer-copyright" data-id="acc5cff" data-element_type="widget" data-widget_type="footer-copyright.default">
                            <div class="elementor-widget-container">
                                <div class="site-footer-bottom">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="site-footer-bottom__inner">
                                                    <p class="site-footer-bottom__copy-right">© Copyright 2021 by <a href="#">Layerdrops.com</a></p>
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
        </section>
    </div>
    <!-- end of the loop -->



</div>
<!-- #page -->
@endsection

