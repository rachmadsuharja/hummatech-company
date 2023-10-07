@extends('layouts.main')

@php
    use Carbon\Carbon;
@endphp

@section('style')

@endsection

@section('container')
<body class="blog wp-custom-logo theme-moniz woocommerce-no-js hfeed woocommerce-active elementor-default elementor-kit-10">
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

            <section class="page-header">
                <div class="page-header-shape-1"></div>
                <div class="page-header-shape-2"></div>
                <div class="container">
                    <div class="page-header__inner">
                        <div class="breadcrumbs thm-breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Hummatech Here." href="{{ route('welcome') }}" class="home" >
                                <span property="name">Hummatech / Blog</span>
                            </a>
                        </span>
                    </div>
                </div>
            </section>
        </div>
        <!-- end of the loop -->

        <!--Blog Sidebar Start-->
        <section class="blog-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-sidebar__left">
                            <div id="primary" class="site-main">
                                    <article id="post-53" class="blog-sidebar__content-single post-53 post type-post status-publish format-standard has-post-thumbnail hentry category-one-page-template category-parallax-effects tag-business-agency tag-web">
                                        <h3 class="blog-sidebar__title">{{ $news->subject }}</h3>
                                        <ul class="entry-meta blog-sidebar__meta list-unstyled">
                                            <li><span class="posted-on"><i class="far fa-clock"></i> <a href="#" rel="bookmark"><time class="entry-date published" datetime="2021-07-05T13:28:42+00:00">{{ Carbon::parse($news->created_at)->locale('id')->isoFormat('DD MMM YYYY') }}</time></a></span></li>
                                            <li><span class="byline"><span class="far fa-user-circle"></span> <span class="author vcard"><a class="url fn n" href="#">Hummatech</a></span></span></li>
                                            {{-- <li><span class="comments-link"><span class="far fa-comments"></span><a href="##comments">2 Comments<span class="screen-reader-text"> on Delivering the best web design agency.</span></a></span></li> --}}
                                        </ul><!-- .entry-meta -->
                                        <div class=" blog-sidebar__content-box">
                                            <a class="post-thumbnail blog-sidebar__content-img" href="#" aria-hidden="true" tabindex="-1">
                                                <img width="1920" height="1192" src="{{ asset('storage/news/'.$news->photo) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="{{ $news->photo }}" decoding="async" fetchpriority="high" sizes="(max-width: 1920px) 100vw, 1920px" />
                                            </a>
                                            <p class="blog-sidebar__text">{!! $news->news_content !!}</p>
                                        </div><!-- .blog-sidebar__content-box -->
                                    </article><!-- #post-53 -->
                            </div><!-- #main -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <aside id="secondary" class="widget-area">
                                <section id="srpw_widget-2" class="sidebar__single widget widget_smart_recent_entries smart_recent_posts"><h2 class="sidebar__title widget-title">Postingan Terbaru</h2><div class="srpw-block srpw-default-style ">
                                    <style>
                                        .srpw-thumbnail{
                                            width: 60px;
                                            height: 60px;
                                        }
                                    </style>
                                        <ul class="srpw-ul">
                                            @foreach ($articles as $n)
                                                <li class="srpw-li srpw-clearfix">
                                                    <a class="srpw-img srpw-alignleft" href="{{ route('article.details', $n->slug) }}" target="_self"><img width="73" height="73" src="{{ asset('storage/news/'.$n->photo) }}" class=" srpw-thumbnail wp-post-image" alt="Over ride the digital divide with additional" decoding="async" loading="lazy" sizes="(max-width: 73px) 100vw, 73px" /></a>
                                                    <div class="srpw-content">
                                                        <a class="srpw-title" href="{{ route('article.details', $n->slug) }}" target="_self">{{ $n->subject }}</a>
                                                        <div class="srpw-meta">
                                                            <time class="srpw-time published" datetime="2021-07-05T13:27:11+00:00">{{ Carbon::parse($n->created_at)->locale('id')->isoFormat('HH:MM, DD MMM YYYY') }}</time>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div><!-- Generated by http://wordpress.org/plugins/smart-recent-posts-widget/ -->
                                </section>
                                <section id="categories-2" class="sidebar__single widget widget_categories">
                                    <h2 class="sidebar__title widget-title">Kategori</h2>
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li class="cat-item cat-item-2">
                                                <a href="{{ route('blog', $category->slug) }}">{{ $category->category }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </section>
                                {{-- <section id="tag_cloud-2" class="sidebar__single widget widget_tag_cloud">
                                    <h2 class="sidebar__title widget-title">Tags</h2>
                                    <div class="tagcloud">
                                        <a href="../tag/agency/index.html" class="tag-cloud-link tag-link-9 tag-link-position-1" style="font-size: 22pt;" aria-label="Agency (5 items)">Agency</a>
                                        <a href="../tag/business-agency/index.html" class="tag-cloud-link tag-link-13 tag-link-position-2" style="font-size: 8pt;" aria-label="Business Agency (1 item)">Business Agency</a>
                                        <a href="../tag/design/index.html" class="tag-cloud-link tag-link-8 tag-link-position-3" style="font-size: 22pt;" aria-label="Design (5 items)">Design</a>
                                        <a href="../tag/development/index.html" class="tag-cloud-link tag-link-10 tag-link-position-4" style="font-size: 8pt;" aria-label="Development (1 item)">Development</a>
                                        <a href="../tag/parallax/index.html" class="tag-cloud-link tag-link-11 tag-link-position-5" style="font-size: 8pt;" aria-label="Parallax (1 item)">Parallax</a>
                                        <a href="../tag/web/index.html" class="tag-cloud-link tag-link-12 tag-link-position-6" style="font-size: 8pt;" aria-label="Web (1 item)">Web</a>
                                    </div>
                                </section> --}}
                                {{-- <section id="recent-comments-2" class="sidebar__single widget widget_recent_comments"><h2 class="sidebar__title widget-title">Recent comments</h2><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link"><a href="http://layerdrops.com/monizwp" class="url" rel="ugc">LayerDrops</a></span> on <a href="../leverage-frameworks-to-provide-a-robust/index.html#comment-9">Leverage frameworks to provide a robust</a></li><li class="recentcomments"><span class="comment-author-link"><a href="http://layerdrops.com/monizwp" class="url" rel="ugc">LayerDrops</a></span> on <a href="../organically-grow-the-holistic-world-view-of/index.html#comment-8">Organically grow the holistic world view of</a></li><li class="recentcomments"><span class="comment-author-link"><a href="http://layerdrops.com/monizwp" class="url" rel="ugc">LayerDrops</a></span> on <a href="../bring-to-the-table-win-win-survival-strategies/index.html#comment-7">Bring to the table win-win survival strategies</a></li><li class="recentcomments"><span class="comment-author-link"><a href="http://layerdrops.com/monizwp" class="url" rel="ugc">LayerDrops</a></span> on <a href="../capitalize-on-low-hanging-fruit-to-identify/index.html#comment-6">Capitalize on low hanging fruit to identify</a></li><li class="recentcomments"><span class="comment-author-link"><a href="http://layerdrops.com/monizwp" class="url" rel="ugc">LayerDrops</a></span> on <a href="../over-ride-the-digital-divide-with-additional/index.html#comment-5">Over ride the digital divide with additional</a></li></ul></section></aside><!-- #secondary --> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Blog Sidebar End-->
</body>

@endsection
