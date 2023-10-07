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
                        <span property="name">Hummatech / Produk</span>
                    </a>
                    <meta property="url" content="index.html">
                <meta property="position" content="2"></span></div>
                <h2>{{ $product->product_name }}</h2>
            </div>
        </div>
    </section>

    <!--Portfolio Details Full Start-->
    <section class="portfolio-fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-fullwidth__img-box">
                        <img src="{{ asset('storage/product/'.$product->product_cover) }}" alt="Desktop mockup">
                        <div class="portfolio-fullwidth__details-box">
                            <ul class="portfolio-fullwidth__details-info list-unstyled">
                                <li>
                                    <h5 class="portfolio-fullwidth__client">Nama</h5>
                                    <p class="portfolio-fullwidth__name">{{ $product->product_name }}</p>
                                </li>
                                <li>
                                    <h5 class="portfolio-fullwidth__client">Kategori</h5>
                                    <p class="portfolio-fullwidth__name"><span>Aplikasi</span> </p>
                                </li>
                                <li>
                                    <h5 class="portfolio-fullwidth__client">Tanggal Rilis</h5>
                                    <p class="portfolio-fullwidth__name">{{ Carbon::parse($product->release_date)->locale('id')->isoFormat('DD MMMM YYYY') }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-fullwidth__content">
                        <h2 class="portfolio-fullwidth__title">{{ $product->product_name }}</h2>
                        <div class="portfolio-fullwidth__text">
                            {{ $product->product_desc }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio Details Full End-->

@endsection

@section('script')

@endsection
