@extends('layouts.main')
@php
use Carbon\Carbon;
@endphp
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
                <h2>Produk</h2>
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
                                        <h2 class="section-title__title">Produk Kami</h2>
                                        <p>Berikut ini beberapa produk buatan Perusahaan kami yang mungkin Anda butuhkan.</p>
                                    </div>
                                    <div class="row filter-layout masonary-layout">
                                        @forelse ($product as $pro)
                                            <div class="col-xl-3 col-lg-6 col-md-6 filter-item mb-4 branding photography">
                                                <div class="portfolio-one__single wow fadeInUp" data-wow-delay="100ms">
                                                    <div class="portfolio-one__img">
                                                        <img fetchpriority="high" width="370" height="426" src="{{ asset('storage/product/'.$pro->product_cover) }}" class="attachment-moniz_370X426 size-moniz_370X426 wp-post-image" alt="" decoding="async" />
                                                        <div class="portfolio-one__experience">
                                                            <div class="portfolio-one__web-design">
                                                                <p class="portfolio-one__web-design-title">{{ Carbon::parse($pro->release_date)->locale('id')->isoFormat('DD MMMM YYYY') }}</p>
                                                            </div>
                                                            <div class="portfolio-one__fimlor">
                                                                <p class="portfolio-one__fimlor-title"><a href="portfolio/sussia-foundation/index.html">{{ $pro->product_name }}</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-lg-12 col-xl-12 mb-5 d-flex flex-column justify-content-center align-items-center">
                                                <img src="{{ asset('empty/empty.png') }}" alt="">
                                                <small>Tidak ada data</small>
                                            </div>
                                        @endforelse

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

@endsection

@section('script')

@endsection
