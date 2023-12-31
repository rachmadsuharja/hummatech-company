<div data-elementor-type="wp-post" data-elementor-id="94" class="elementor elementor-94">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-dfd8556 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dfd8556" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0a4c676" data-id="0a4c676" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5f04a37 elementor-widget elementor-widget-footer-about" data-id="5f04a37" data-element_type="widget" data-widget_type="footer-about.default">
                        <div class="elementor-widget-container">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="index.html"><img decoding="async" id="fLogo" src="{{ asset('hummatech.png') }}" alt="Moniz" /></a>
                                </div>
                                <p class="footer-widget__about-text">Hummasoft merupakan sebuah perusahaan yang bergerak dibidang IT (Information Technology)</p>
                                <div class="footer-widget__about-social-list">
                                    <a href="{{ ($sosmed->instagram != null) ? $sosmed->instagram : '#' }}"><span class="fab fa-instagram"></span></a>
                                    <a href="{{ ($sosmed->facebook != null) ? $sosmed->facebook : '#' }}"><span class="fab fa-facebook"></span></a>
                                    <a href="{{ ($sosmed->twitter != null) ? $sosmed->twitter : '#' }}"><span class="fab fa-twitter"></span></a>
                                    <a href="{{ ($sosmed->youtube != null) ? $sosmed->youtube : '#' }}"><span class="fab fa-youtube"></span></a>
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
                                        <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="{{ route('kelas-industri') }}">Kelas Industri</a></li>
                                        <li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="{{ route('pkl') }}">PKL</a></li>
                                        <li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a href="{{ route('produk') }}">Produk</a></li>
                                        <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a href=""></a></li>
                                        <li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a href="{{ route('kontak') }}">Kontak Kami</a></li>
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
                                <h3 class="footer-widget__title">Alamat</h3>
                                <p class="footer-widget__contact-text">{{ $other->address }}</p>
                                <p class="footer-widget__contact-text">{{ $other->start_working .' - '. $other->finish_working }}</p>
                                <div class="footer-widget__contact-info">
                                    <p>
                                        <a href="https://wa.me/{{ $sosmed->whatsapp }}" class="footer-widget__contact-phone">{{ $sosmed->whatsapp }}</a>
                                        <a href="mailto:{{ $other->email }}" class="footer-widget__contact-mail text-primary">{{ $other->email }}</a>
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
                                                <p class="site-footer-bottom__copy-right">Copyright &copy; <a href="#">Hummatech - All Right Reserved</a></p>
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
