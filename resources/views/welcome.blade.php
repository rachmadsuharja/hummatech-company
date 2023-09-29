@extends('layouts.main')

@section('style')
<style>
    .hummatech-blue {
        color: #00B1EE !important;
    }
    .main-slider-shape-1, .main-slider-shape-4 {
        background:#00B1EE;
    }
    .op-05 {
        filter: brightness(30%);
    }
</style>
@endsection

@section('container')
<!-- Preloader -->
<div class="preloader bg-light" style="display: grid">
    <div class="preloader__image"></div>
</div>
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
                                                <div class="image-layer" style="background-image: url({{ asset('company/cover1.jpg') }});"></div>
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
                                                                <a href="{{ route('kontak') }}" class="thm-btn"><span>Coba Sekarang</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-layer" style="background-image: url({{ asset('company/cover2.png') }});"></div>
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
                                                                <a href="{{ route('kontak') }}" class="thm-btn"><span>Gabung Bersama Kami</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                            @if ($company->company_cover == null)
                                                                <img decoding="async" src="{{ asset('company/cover.png') }}" alt="">
                                                            @else
                                                                <img decoding="async" src="{{ asset('storage/company/'.$company->company_cover) }}" alt="">
                                                            @endif
                                                            <div class="welcome-one__shape-1"></div>
                                                            <div class="welcome-one__shape-2"></div>
                                                        </div>
                                                        <div class="welcome-one__trusted">
                                                            <p>Kuota Magang</p>
                                                            <h2 class="odometer" data-count="4890">{{ $counter->student_quota }}</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="welcome-one__right">
                                                    <div class="section-title text-left">
                                                        <span class="section-title__tagline">Tentang Hummatech Digital Indonesia</span>
                                                        <h2 class="section-title__title">{{ $company->company_title }}</h2>
                                                    </div>
                                                    <p class="welcome-one__right-text-1">{{ $company->company_description }}</p>
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
                                                        <h2 class="section-title__title">Layanan Kami</h2>
                                                    </div>
                                                    <div class="we-change__faqs">
                                                        <div class="accrodion-grp faq-one-accordion" data-grp-name="faq-one-accrodion-650eaa6aa0aa3">
                                                            @foreach ($services as $service)
                                                                <div class="accrodion">
                                                                    <div class="accrodion-title">
                                                                        <h4>{{ $service->services_title }}</h4>
                                                                    </div>
                                                                    <div class="accrodion-content">
                                                                        <div class="inner">
                                                                            <p>{{ $service->services_description }}</p>
                                                                        </div>
                                                                        <!-- /.inner -->
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="we-change__right">
                                                    <div class="we-change__right-img">
                                                        <img decoding="async" class="op-05" src="{{ asset('moniz/wp-content/uploads/2021/07/we-change-right-img-1.jpg') }}" alt="">
                                                        <a href="https://www.youtube.com/watch?v=_KT04quo_Y8" class="video-one__btn video-popup">
                                                            <div class="video-one__video-icon position-absolute top-50 start-50 translate-middle">
                                                                <span class="icon-play-button"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
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
                                                        <h2 class="section-title__title">{{ $work->work_title }}</h2>
                                                    </div>
                                                    <p class="reasons-one__text-1">{{ $work->work_description }}</p>
                                                    <a href="{{ route('kontak') }}" class="thm-btn"><span>Hubungi Kami</span></a>
                                                    <!-- /.thm-btn -->
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="reasons-one__img-box">
                                                    <div class="reasons-one-img-box-bg"></div>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="reasons-one__img-one">
                                                                @if ($work->first_cover == null)
                                                                    <img decoding="async" src="{{ asset('company/work-method/first_cover.png') }}" alt="">
                                                                @else
                                                                    <img decoding="async" src="{{ asset('storage/company/work-method/'.$work->first_cover) }}" alt="">
                                                                @endif
                                                                <div class="reasons-one__shape-1"></div>
                                                                <div class="reasons-one__shape-2"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="reasons-one__img-two">
                                                                @if ($work->second_cover == null)
                                                                    <img decoding="async" src="{{ asset('company/work-method/second_cover.png') }}" alt="">
                                                                @else
                                                                    <img decoding="async" src="{{ asset('storage/company/work-method/'.$work->second_cover) }}" alt="">
                                                                @endif
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
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-ff1463e elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ff1463e" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f02e4e" data-id="3f02e4e" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4875a98 elementor-widget elementor-widget-moniz-blog" data-id="4875a98" data-element_type="widget" data-widget_type="moniz-blog.default">
                            <div class="elementor-widget-container">

                                <!--Blog One Start-->
                                <section class="blog-one  ">
                                    <div class="container">
                                        <div class="section-title text-center">
                                            <span class="section-title__tagline">Informasi</span>
                                            <h2 class="section-title__title">Berita Terbaru</h2>
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
                                        </div>
                                    </div>
                                </section>
                                <!--Blog One End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
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
                                                @forelse ($school as $sch)
                                                    <div class="swiper-slide">
                                                        <a href="#">
                                                            <img loading="lazy" width="150" height="80" src="{{ asset('storage/school/'.$sch->school_logo) }}" alt="" decoding="async" />
                                                        </a>
                                                    </div>
                                                @empty
                                                    <hr>
                                                @endforelse
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
    </div>
</div>
<!-- #page -->

@endsection


{{--
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-f76b84e elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f76b84e" data-element_type="section">
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
</section> --}}

{{--
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
</section> --}}
