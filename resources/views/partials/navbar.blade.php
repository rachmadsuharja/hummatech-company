<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper clearfix">
            <div class="main-menu-wrapper__left clearfix">
                {{-- Logo Hummatech --}}
                <div class="main-menu-wrapper__logo">
                    <a href="#"><img decoding="async" loading="lazy" src="{{ asset('hummatech.png') }}" id="thm-logo" alt="Hummatech"></a>
                </div>
                <div class="main-menu-wrapper__social">
                    <a href="{{ ($sosmed->instagram != null) ? $sosmed->instagram : '#' }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ ($sosmed->facebook != null) ? $sosmed->facebook : '#' }}"><i class="fab fa-facebook"></i></a>
                    <a href="{{ ($sosmed->twitter != null) ? $sosmed->twitter : '#' }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ ($sosmed->youtube != null) ? $sosmed->youtube : '#' }}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="main-menu-wrapper__main-menu">
                <a href="#" class="mobile-nav__toggler">
                    <span></span>
                </a>
                <div class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="main-menu__list">
                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item"><a href="{{ route('welcome') }}" class="{{ (Request::routeIs('welcome')) ? 'text-primary fw-bold' : ''}}">Beranda</a></li>
                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item"><a href="#"  class="{{ (Request::routeIs('kelas-industri','pkl')) ? 'text-primary fw-bold' : ''}}">Pendidikan</a>
                            <ul class="sub-menu">
                                <li id="menu-item-279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279"><a href="{{ route('kelas-industri') }}" class="{{ (Request::routeIs('kelas-industri')) ? 'text-primary' : ''}}">Kelas Industri</a></li>
                                <li id="menu-item-661" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-661"><a href="{{ route('pkl') }}" class="{{ (Request::routeIs('pkl')) ? 'text-primary' : ''}}">Magang/PKL</a></li>
                            </ul>
                        </li>
                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item"><a href="#"  class="{{ (Request::routeIs('blog','article.details')) ? 'text-primary fw-bold' : ''}}">Blog</a>
                            <ul class="sub-menu">
                                @foreach ($categories as $category)
                                    <li id="menu-item-279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279"><a href="{{ route('blog', $category->slug) }}" class="{{ (Request::routeIs('blog')) ? 'text-primary' : ''}}">{{ $category->category }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item"><a href="{{ route('produk') }}" class="{{ (Request::routeIs('produk','produk.details')) ? 'text-primary fw-bold' : ''}}">Produk</a></li>
                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item"><a href="{{ route('kontak') }}" class="{{ (Request::routeIs('kontak')) ? 'text-primary fw-bold' : ''}}">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->

<!--Mobile Menu-->
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"></span>
        <div class="logo-box">
            <a href="index.html">
                <img decoding="async" loading="lazy" width="134" height="34" src="{{ asset('hummatech.png') }}" id="mobile-thm-logo" alt="Moniz">
            </a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->
        <div class="mobile-nav__text">
            Hummasoft merupakan sebuah perusahaan yang bergerak dibidang IT (Information Technology)
        </div>
        <!-- /.mobile-nav__text -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
