@extends('layouts.main')

@section('style')
    
@endsection

@section('container')
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
@endsection

@section('script')
    
@endsection