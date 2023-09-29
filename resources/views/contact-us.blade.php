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
                <h2>Kontak Kami</h2>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-6580d2d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6580d2d" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-89d607b" data-id="89d607b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c925ef8 elementor-widget elementor-widget-moniz-contact-info" data-id="c925ef8" data-element_type="widget" data-widget_type="moniz-contact-info.default">
                        <div class="elementor-widget-container">
                            <!--Get in Touch Start-->
                            <section class="get-in-touch">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="get-in-touch__img wow fadeInLeft" data-wow-duration="1500ms">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.952145574655!2d112.60431107396016!3d-7.900068678605819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881c2c4637501%3A0x10433eaf1fb2fb4c!2sHummasoft%20Technology!5e0!3m2!1sid!2sid!4v1695905011464!5m2!1sid!2sid" width="600" height="450" style="border:1px black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                <div class="get-in-touch__img-shapes">
                                                    <div class="get-in-touch__img-shape-1"></div>
                                                    <div class="get-in-touch__img-shape-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="get-in-touch__right">
                                                <div class="section-title text-left">
                                                    <h4 class="section-title__title">Get in Touch</h4>
                                                </div>
                                                <div class="get-in-touch__locations">
                                                    <div class="row">
                                                            <div class="get-in-touch__locations-right">
                                                                <div class="row">
                                                                    <form action="{{ route('inbox.send') }}" method="post">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-xl-6">
                                                                                <div class="comment-form__input-box">
                                                                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                                        <input size="40" class="wpcf7-form-control wpcf7-text @error('name') is-invalid @enderror wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nama Anda" value="{{ old('name') }}" type="text" name="name" />
                                                                                    </span>
                                                                                    @error('name')
                                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6">
                                                                                <div class="comment-form__input-box">
                                                                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                                        <input size="40" class="wpcf7-form-control wpcf7-text @error('email') is-invalid @enderror wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Email" value="{{ old('email') }}" type="text" name="email" />
                                                                                    </span>
                                                                                    @error('email')
                                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xl-6">
                                                                                <div class="comment-form__input-box">
                                                                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                                        <input size="40" class="wpcf7-form-control wpcf7-text @error('phone') is-invalid @enderror wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="No. Telpon" value="{{ old('phone') }}" type="text" name="phone" />
                                                                                    </span>
                                                                                    @error('phone')
                                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6">
                                                                                <div class="comment-form__input-box">
                                                                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                                        <input size="40" class="wpcf7-form-control wpcf7-text @error('subject') is-invalid @enderror wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Judul" value="{{ old('subject') }}" type="text" name="subject" />
                                                                                    </span>
                                                                                    @error('subject')
                                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <div class="comment-form__input-box">
                                                                                <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                                                    <textarea cols="40" rows="10" class="wpcf7-form-control @error('message') is-invalid @enderror wpcf7-textarea" aria-invalid="false" placeholder="Pesan" name="message">{{ old('message') }}</textarea>
                                                                                </span>
                                                                                @error('message')
                                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-3 mt-3">
                                                                            <div class="comment-form__input-box">
                                                                                <span class="wpcf-7-form-control-wrap">
                                                                                    <button type="submit" class="thm-btn faqs-contact__btn"><span>Kirim</span></button>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </form>
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
                            <!--Get in Touch End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')

@endsection


