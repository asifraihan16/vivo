@extends('frontend.layouts.app')

@section('content')
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero slider is-clearfix ">
                    <h2 class="display-none">slider</h2>
                    <div class="rev_slider_wrapper fullscreen-container ">
                        <div id="rev_slider_1" class="rev_slider tp-overflow-hidden fullscreenbanner" data-version="5.4.7"
                            style="display:none">
                            <ul>
                                @foreach ($home_sliders as $value)
                                    <li data-transition="crossfade">
                                        <img alt="VIVO Bangladesh" class="rev-slidebg"
                                            src="{{ Storage::url($value->img) }}" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off"
                                            data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
                                            data-scaleend="150" data-rotatestart="0" data-rotateend="0"
                                            data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15">

                                        <!-- <div class="tp-caption rev-scroll-btn revs-white"
                                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['50','50','50','50']" data-width="30" data-height="50"
                                            data-whitespace="nowrap" data-type="button"
                                            data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                            data-basealign="slide"
                                            data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":2400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 19; min-width: 30px; max-width: 30px; max-width: 50px; max-width: 50px;border-width:1.5px!important;cursor:pointer;">
                                            <span></span>
                                        </div> -->
                                    </li>
                                @endforeach
                                <!-- slide -->
                            </ul>
                        </div>
                        <!-- .rev_slider -->
                    </div>
                    <!-- .rev_slider_wrapper -->
                </section>
                <!-- .slider -->
            </div>
            <!-- #header-bottom-inner -->
        </div>
        <!-- #header-bottom -->
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <!-- import content layouts and modules -->
                <!-- start adding page content -->
                <!-- works section -->
                <section class="section works-list is-clearfix padding-3rem">
                    <div class="container width-80-percent">
                        <h1 class="heading-title style-1">Moments</h1>
                        <div class="works isotope image-hover effect-8">
                            <div class="columns is-variable is-1 is-multiline" style="">
                                <div class="column is-3 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img1) }}" class="mfp-lightbox mfp-image" title="">
                                                <img alt="Moments Photo" src="{{ Storage::url($moments[0]->img1) }}">
                                                <figcaption>
                                                    <ul class="social">
                                                        <li>
                                                            <span class="icon">
                                                                <i class="icon-magnifier"></i>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-6 prototype aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img2) }}" class="mfp-lightbox mfp-image"
                                                title="">
                                                <img alt="Moments Photo"
                                                    src="{{ Storage::url($moments[0]->img2) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-3 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img3) }}" class="mfp-lightbox mfp-image"
                                                title="">
                                                <img alt="Moments Photo"
                                                    src="{{ Storage::url($moments[0]->img3) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-6 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img4) }}" class="mfp-lightbox mfp-image"
                                                title="">
                                                <img alt="Moments Photo"
                                                    src="{{ Storage::url($moments[0]->img4) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>

                                <div class="column is-3 branding aos-init" data-aos="fade-up" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img5) }}"
                                                class="mfp-lightbox mfp-image" title="">
                                                <img alt="Moments Photo"
                                                    src="{{ Storage::url($moments[0]->img5) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-3 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img6) }}"
                                                class="mfp-lightbox mfp-image" title="">
                                                <img alt="Moments Photo"
                                                    src="{{ Storage::url($moments[0]->img6) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-6 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img7) }}"
                                                class="mfp-lightbox mfp-image" title="">
                                                <img alt="Moments Photo"
                                                    src="{{ Storage::url($moments[0]->img7) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>

                            </div>
                            <!-- .columns -->
                        </div>
                        <!-- .works -->
                    </div>
                </section>

                <!-- Vedio section -->

                <section class="section has-background-primary-light watch-video is-clearfix padding-3rem">
                    <div class="container width-80-percent">
                        <div class="column is-12-desktop is-12-tablet" data-aos="fade" style="text-align: center;">
                            <p class="heading-title-top has-text-center has-text-tertiary"></p>
                            <h1 class="heading-title style-1 has-text-center">Events and Compaign</h1>
                            <!-- .works-button -->
                        </div>
                        <div class="columns is-variable is-8 is-multiline">
                            <div class="column is-12-desktop is-12-tablet has-text-centered" data-aos="fade-up">
                                <div class="works-latest">
                                    <div class="works-latest-item">
                                        <iframe width="100%" height="400" src="{{ $playlist1_main[0]->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <!-- .works-latest-icon -->
                                    </div>
                                    <!-- .works-latest-item -->
                                </div>
                            </div>
                        </div>
                        <div class="works-latest image-hover effect-1 owl-carousel dots carousel-items-3">
                            @foreach ($playlist1_other as $value)
                                <div class="works-latest-item">
                                    <iframe width="100%" height="auto" src="{{ $value->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <!-- .works-latest-icon -->
                                </div>
                            @endforeach
                            <!-- .work-item -->
                        </div>
                    </div>
                </section>

                <section class="section watch-video is-clearfix padding-3rem">
                    <div class="container width-80-percent">
                        <div class="column is-12-desktop is-12-tablet" data-aos="fade" style="text-align: center;">
                            <br>
                            <br>
                            <p class="heading-title-top has-text-center has-text-tertiary"></p>
                            <h1 class="heading-title style-1 has-text-center">Ads and Features</h1>
                            <br>
                            <!-- .works-button -->
                        </div>
                        <div class="columns is-variable is-8 is-multiline">
                            <div class="column is-12-desktop is-12-tablet has-text-centered" data-aos="fade-up">
                                <div class="works-latest">
                                    <div class="works-latest-item">
                                        <iframe width="100%" height="400" src="{{ $playlist2_main[0]->link ?? '' }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <!-- .works-latest-icon -->
                                    </div>
                                    <!-- .works-latest-item -->
                                </div>
                            </div>
                        </div>
                        <div class="works-latest image-hover effect-1 owl-carousel dots carousel-items-3">
                            @foreach ($playlist2_other as $value)
                                <div class="works-latest-item">
                                    <iframe width="100%" height="auto" src="{{ $value->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <!-- .works-latest-icon -->
                                </div>
                            @endforeach
                            <!-- .work-item -->
                        </div>
                    </div>
                </section>

                <!-- phone category section -->
                <section class="section has-background-primary-light works-list is-clearfix padding-3rem">
                    <div class="container width-80-percent">
                        <div class="works isotope image-hover effect-8">
                            <div class="columns is-variable is-4 is-multiline">
                                @foreach ($mobile_series as $value)
                                    <div class="column is-4 branding " data-aos="fade-up">
                                        <div class="work-item">
                                            <button class="mobile-series-title style-1">{{ $value->name }}</span></button>
                                            <figure>
                                                <img alt="VIVO Bangladesh" src="{{ $value->img ? Storage::url($value->img) : '' }}">
                                            </figure>
                                        </div>
                                        <!-- .work-item -->
                                    </div>
                                @endforeach
                            </div>
                            <!-- .columns -->
                        </div>
                        <!-- .works -->
                    </div>
                </section>

                <!-- blog category -->
                <section class="section hero is-clearfix padding-3rem">
                    <h1 class="heading-title style-1">Blogs</h1>
                    <div class="container width-80-percent">
                        <br>
                        <div class="isotope masonry">
                            <div class="blog-list style-2 columns is-variable is-4 is-multiline">
                                @foreach ($blogs as $value)
                                    <div class="column is-4" data-aos="fade-up">
                                        <article class="blog-post">
                                            <figure class="post-image">
                                                <a href="{{ url('/blog_details/' . $value->id) }}">
                                                    <img alt="Blog Photo"
                                                        src="{{ $value->img ? Storage::url($value->img) : '' }}"> </a>
                                            </figure>
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a
                                                        href="{{ url('/blog_details/' . $value->id) }}">{{ $value->title }}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <ul>
                                                        <li>
                                                            <span>{{ date('M-d-Y', strtotime($value->created_at)) }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .post-meta -->
                                            </div>
                                            <!-- .entry-header -->
                                            <div class="entry-content">
                                                {!! Str::limit($value->desc, 100) !!}
                                            </div>
                                            <!-- .entry-content -->
                                        </article>
                                        <!-- .blog-post -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <br>
                    </div>
                </section>
            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>
@endsection
