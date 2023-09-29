@extends('layouts.main')

@section('style')

@endsection

@section('container')

    @include('partials.navbar')

    <section class="page-header">
        <div class="page-header-shape-1"></div>
        <div class="page-header-shape-2"></div>
        <div class="container">
            <div class="page-header__inner">
                <div class="breadcrumbs thm-breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Hummatech Here." href="{{ route('welcome') }}" class="home" >
                        <span property="name">Hummatech /</span>
                    </a>
                    <meta property="url" content="index.html">
                <meta property="position" content="2"></span></div>
                <h2>Magang/PKL</h2>
            </div>
        </div>
    </section>
    <div data-elementor-type="wp-page" data-elementor-id="567" class="elementor elementor-567">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-0c46751 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0c46751" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b48c474" data-id="b48c474" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-15f6020 elementor-widget elementor-widget-moniz-about" data-id="15f6020" data-element_type="widget" data-widget_type="moniz-about.default">
                            <div class="elementor-widget-container">
                                <section class="about-two">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-5">
                                                <div class="about-two__image">
                                                    <img decoding="async" src="{{ asset('company/main.png') }}" alt="">
                                                    <div class="mt-5 d-flex flex-lg-column justify-content-center align-items-center">
                                                        <img decoding="async" src="{{ asset('company/person.png') }}" class="" alt="">
                                                    </div>
                                                    <!-- /.about-two__image__caption -->
                                                </div>
                                                <!-- /.about-two__image -->
                                            </div>
                                            <!-- /.col-md-12 -->
                                            <div class="col-md-12 col-lg-7">
                                                <div class="about-two__content">
                                                    <div class="section-title text-left">
                                                        <span class="section-title__tagline">PKL</span>
                                                        <h2 class="section-title__title">Tentang Magang di Hummatech</h2>
                                                    </div>
                                                    <div class="about-two__box">
                                                        <div class="about-two__box__icon">
                                                            <i class="icon-recommend text-primary"></i>
                                                        </div>
                                                        <!-- /.about-two__box__icon -->
                                                        <div class="about-two__box__content">
                                                            Magang Hummatech adalah program pembelajaran yang ditujukan untuk siapapun yang ingin belajar bekerja dan meningkatkan skillnya di dunia informatika dengan meningkatkan semua kebutuhan dari attitude dan kemampuan dalam bekerja sesuai dengan kebutuhan perusahaan.
                                                        </div>
                                                        <!-- /.about-two__box__content -->
                                                    </div>
                                                    <!-- /.about-two__box -->
                                                    <p class="about-two__summery">
                                                        Magang ini terbuka kepada siswa SMK dan universitas yang sedang menempuh pembelajaran dengan Magang atau PKL di industri, magang hummasoft tidak dikenakan biaya, dan minimal untuk smk 6 bulan dan mahasiswa 3 bulan, diharapkan menanyakan terlebih dahulu quotanya.
                                                    </p>
                                                    <!-- /.about-two__summery -->
                                                </div>
                                                <!-- /.about-two__content -->
                                            </div>
                                            <!-- /.col-md-12 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.container -->
                                </section>
                                <!-- /.about-two -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-4225f21 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4225f21" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-657a4b8" data-id="657a4b8" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-14b3b67 elementor-widget elementor-widget-moniz-video" data-id="14b3b67" data-element_type="widget" data-widget_type="moniz-video.default">
                            <div class="elementor-widget-container">
                                <!--Watch Video Start-->
                                <section class="watch-video">
                                    <div class="container">
                                        <div class="watch-video__inner">
                                            <div class="watch-video__img">
                                                <div class="watch-video__img-box">
                                                    <img decoding="async" src="{{ ('moniz/wp-content/uploads/2021/07/watch-video-img.jpg') }}" alt="">
                                                    <div class="watch-video-shape-1"></div>
                                                    <div class="watch-video-shape-2"></div>
                                                    <div class="watch-video__text">
                                                        <p>
                                                            Lihat keseruan kami disini
                                                        </p>
                                                    </div>
                                                </div>
                                                <a href="https://www.youtube.com/watch?v=Ux0DebuNU9U" class="video-popup">
                                                    <div class="watch-video__icon">
                                                        <span class="icon-play-button"></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Watch Video End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div data-elementor-type="wp-page" data-elementor-id="562" class="elementor elementor-562">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-bb231d7 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="bb231d7" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a2ec60" data-id="6a2ec60" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f87006a elementor-widget elementor-widget-moniz-testimonials" data-id="f87006a" data-element_type="widget" data-widget_type="moniz-testimonials.default">
                                <div class="elementor-widget-container">

                                    <section class="testimonials-two">
                                        <div class="container">
                                            <div class="row">
                                                <h3 class="text-center">Apa Kata Alumni?</h3>
                                            </div>
                                            <div class="thm-swiper__slider swiper-container"
                                            data-swiper-options='{
                                                "slidesPerView": 1,
                                                "slidesPerGroup": 1,
                                                "spaceBetween": 0,
                                                "loop": true,
                                                "autoplay": { "delay": 5000 },
                                                "pagination": {
                                                    "el": "#testimonials-two-pagination",
                                                    "type": "bullets",
                                                    "clickable": true
                                                },
                                                "breakpoints": {
                                                    "0": {
                                                        "slidesPerView": 1,
                                                        "slidesPerGroup": 1,
                                                        "spaceBetween": 0
                                                    },
                                                    "768": {
                                                        "slidesPerView": 2,
                                                        "slidesPerGroup": 2,
                                                        "spaceBetween": 30
                                                    },
                                                    "992": {
                                                        "slidesPerView": 3,
                                                        "slidesPerGroup": 3,
                                                        "spaceBetween": 30
                                                    }
                                                }
                                            }'>
                                                <div class="swiper-wrapper">
                                                    @forelse ($testimonial as $testimoni)
                                                        <div class="swiper-slide">
                                                            <div class="testimonials-two__card">
                                                                <div class="testimonials-two__card__inner">
                                                                    <div class="testimonials-two__meta">
                                                                        @if ($testimoni->profile != null)
                                                                        <img width="90" height="90" class="rounded-circle me-3" src="{{ asset('storage/student/'.$testimoni->profile) }}" alt="" decoding="async" sizes="(max-width: 90px) 100vw, 90px" />
                                                                        @else
                                                                        <img width="90" height="90" class="rounded-circle me-3" src="{{ asset('empty/profile.jpg') }}" alt="" sizes="(max-width: 90px) 100vw, 90px" />
                                                                        @endif
                                                                        <!-- /.testimonials-two__image -->
                                                                        <div class="testimonial-two__meta__content">
                                                                            <h3 class="testimonials-two__name">{{ $testimoni->alumni_name }}</h3>
                                                                            <!-- /.testimonials-two__name -->
                                                                            <p class="testimonials-two__designation">{{ $testimoni->school }}</p>
                                                                        </div>
                                                                        <!-- /.testimonial-two__meta__content -->
                                                                    </div>
                                                                    <!-- /.testimonials-two__meta -->
                                                                    <div class="testimonials-two__summery">
                                                                        {{ $testimoni->words }}
                                                                    </div>
                                                                </div>
                                                                <!-- /.testimonials-two__card__inner -->
                                                            </div>
                                                            <!-- /.testimonials-two__card -->
                                                        </div>
                                                    @empty
                                                        <hr>
                                                    @endforelse
                                                </div>
                                                <!-- /.swiper-wrapper -->
                                                <div class="swiper-pagination" id="testimonials-two-pagination"></div>
                                            </div>
                                            <!-- /.thm-swiper__slider -->

                                        </div>
                                        <!-- /.container -->
                                    </section>
                                    <!-- /.testimonials-two -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection

@section('script')

@endsection
