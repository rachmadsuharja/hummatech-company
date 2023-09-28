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
                <h2>Kelas Industri</h2>
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
                                                    <img decoding="async" src="{{ asset('company/kelas-industri.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-7">
                                                <div class="about-two__content">
                                                    <div class="section-title text-left">
                                                        <h2 class="section-title__title">Selamat Datang di Kelas Industri Hummatech</h2>
                                                    </div>
                                                    <div class="about-two__box">
                                                        <div class="about-two__box__icon">
                                                            <i class="icon-recommend text-primary"></i>
                                                        </div>
                                                        <div class="about-two__box__content">
                                                            Kelas yang di bina langsung oleh Hummatech untuk menjadi Web & Mobile Development sesuai dengan kebutuhan di Sekolah
                                                        </div>
                                                    </div>
                                                    <p class="about-two__summery">
                                                        <b>Program Kelas Industri</b>
                                                        didesain untuk meningkatkan kemampuan siswa dengan mensinkronisasikan keahlian/skill yang dibutuhkan industri dengan kurikulum sekolah.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reasons">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="reasons__left">
                            <div class="reasons__img">
                                <img decoding="async" src="{{ asset('company/cover.png') }}" alt="">
                                <div class="reasons__img-shape-1"></div>
                                <div class="reasons__img-shape-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="reasons__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Kelas Industri Hummatech</span>
                                <h2 class="section-title__title">Manfaat untuk Sekolah</h2>
                            </div>
                            <p class="reasons__text">
                                Kami menyediakan berbagai materi yang memungkinkan untuk siswa/siswi di sekolah berkembang jauh lebih baik.
                            </p>
                            <ul class="list-unstyled reasons__list">
                                @forelse ($core as $c)
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ $c->core_features }}</p>
                                        </div>
                                    </li>
                                @empty

                                @endforelse
                            </ul>
                            <a href="../contact/index.html" class="thm-btn reasons__btn"><span>Dapatkan Sekarang</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection

@section('script')

@endsection
