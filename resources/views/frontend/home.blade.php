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

                                        <div class="tp-caption rev-scroll-btn revs-white"
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
                                        </div>

                                        <a class="tp-caption1 tp-resizeme button is-primary is-rounded show-on-desktop join-activity-btn"
                                            style="position: absolute; bottom: 4%; right: 6%;"
                                            href="{{ $campaign_url }}"
                                            data-frames='[
                                                {"delay":400,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},
                                                {"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}
                                            ]'
                                            data-x="center" data-y="center" data-hoffset="['720','0','0','0']" data-voffset="['350','0','0','0']" data-type="button">
                                            <span>Join the Activity</span>
                                        </a>
                                        <a class="tp-caption tp-resizeme button is-primary is-rounded show-on-mobile"
                                            href="{{ $campaign_url }}"
                                            data-frames='[
                                                {"delay":400,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},
                                                {"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}
                                            ]'
                                            data-x="center" data-y="center" data-hoffset="['0','0','0','0']" data-voffset="['150','80','0','0']" data-type="button">
                                            <span>Join the Activity</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                @if ($ongoing_campaign && $ongoing_campaign->start_date && $ongoing_campaign->campaign_status == 2)
                <div class="countdown-wrapper" style="">
                    <div class="countdown-inside">
                        <p class="ends-in-text">Ends In,</p>
                        <div class='countdown' style="text-align: center;"
                            data-date="{{ \Carbon\Carbon::parse($ongoing_campaign->start_date)->addDays($CAMPAIGN_DURATION_IN_DAYS)->format('Y-m-d') }}" data-time="00:00"></div>
                    </div>
                </div>
                @endif

                <section class="section works-list is-clearfix padding-3rem" style="padding-top: 0px;">
                    <div class="container width-80-percent">
                        

                        <h1 class="heading-title style-1" style="text-transform: inherit;
                        margin-top: 40px;
                        text-align: center;">Capture the Future </h1>
                        <br>
                        <div class="works isotope image-hover effect-8">
                            <div class="columns is-variable is-1 is-multiline" style="">

                                @foreach ($capture_the_future_index as $moment)
                                <div class="column is-{{ $moment->image_span_col }} branding aos-init" style="">
                                    <div class="work-item">
                                        <div class="photo-like-area" id="photo-like-area-{{ $moment->id }}">
                                            
                                            <a href="javascript:;" class="likes unliked">
                                                <i class="fa fa-heart"></i>
                                              
                                            </a>
                                        
                                    </div>
                                        <figure>
                                            <a href="{{ url('capture_the_future_deatils/' . $moment->id) }}" {{-- class="mfp-lightbox mfp-image" --}} title="{{ $moment->title }}">
                                                <img alt="{{ $moment->title }}"
                                                    src="{{ $moment->image_path ? Storage::url($moment->image_path) : Storage::url($moment->image_path) }}"
                                                    style="" />
                                    
                                              
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            
                            @endforeach

                                {{-- @foreach ($capture_the_future_index as $moment)
                                    <div class="column is-{{ $moment->image_span_col }} branding aos-init" style="">
                                        <div class="work-item">
                                            <figure>
                                                <a href="{{ $moment->image_path ? Storage::url($moment->image_path) : '' }}"
                                                    class="mfp-lightbox mfp-image" title="{{ $moment->title }} ">
                                                    <img alt="{{ $moment->title }}"
                                                        src="{{ $moment->image_path ? Storage::url($moment->image_path) : '' }}"
                                                        style="width: {{ $moment->image_span_col == 6 ? '900px' : '450px' }};" />
                                                    <figcaption>
                                                        <ul class="social">
                                                            <li>
                                                                <span class="icon">
                                                                    <i class="icon-magnifier"></i>
                                                                </span>
                                                            </li>
                                                        </ul>

                                                        <h3 class="photo-bottom-caption">{{ $moment->title }}</>

                                                    </figcaption>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                @endforeach --}}

                            </div>
                            <div style="text-align:center;">
                                <a href="{{ route('frontend.capture_the_future') }}"
                                    class="button is-danger is-radiusless">View All</a>
                            </div>
                            <!-- .columns -->
                        </div>
                        <!-- .works -->
                    </div>
                </section>

                <section class="section works-list is-clearfix padding-3rem" style="padding-top: 0px;">
                    <div class="container width-80-percent">
                        

                        <h1 class="heading-title style-1" style="text-transform: inherit;">Chronicle Magazine</h1>
                        <br>
                        <div class="works isotope image-hover effect-8">
                            <div class="columns is-variable is-1 is-multiline" style="">


                                @foreach ($ChronicleMagazines as $moment)
                                <div class="column is-4" data-aos="fade" >
                                    <article class="blog-post" style="padding: 20px 25px;">
                                        <div class="entry-header" style="">
                                            <div class="post-meta">
                                               
                                                <a href="{{ url('chronicle_magazine_deatils/' . $moment->id) }}"
                                                    style="font-size: 20px;">
                                                  <img src="{{ $moment->image_path ? Storage::url($moment->image_path) : '' }}"
                                                    alt="Campaign Cover Photo" style="    width: 250px;
                                                    height: 400px;"> </a>
                                            </div>
                                            <h2 class="entry-title" style="text-transform: inherit !important;">
                                                <a href="#"
                                                    style="font-size: 20px;">{{ $moment->title }}</a>
                                            </h2>
                                        </div>
                                     
                                    </article>
                                </div>
                                @endforeach

                            </div>
                            <div style="text-align:center;">
                                <a href="{{ route('frontend.chronicle_magazine') }}"
                                    class="button is-danger is-radiusless">View All</a>
                            </div>
                            <!-- .columns -->
                        </div>
                        <!-- .works -->
                    </div>
                </section>

                <section class="section works-list is-clearfix padding-3rem" style="padding-top: 0px;">
                    <div class="container width-80-percent">
                        

                        <h1 class="heading-title style-1" style="text-transform: inherit;">vivo Moments</h1>
                        <br>
                        <div class="works isotope image-hover effect-8">
                            <div class="columns is-variable is-1 is-multiline" style="">

                                @php
                                    $last_campaign_link = "<br><a style='color: white; font-weight:900;' href='{$last_campaign}'> {$last_campaign_name}</a>";
                                @endphp

                                @foreach ($moments as $moment)
                                    <div class="column is-{{ $moment->image_span_col }} branding aos-init" style="">
                                        <div class="work-item">
                                            <figure>
                                                <a href="{{ $moment->image_path ? Storage::url($moment->image_path) : '' }}"
                                                    class="mfp-lightbox mfp-image" title=" Image Title: {{ $moment->title }} {!! $last_campaign_link !!} <br> Author Name :  {{ $moment->author_name }} <br> Phone Model :  {{ $moment->phone_model }} <br> Tag :  {{ $moment->tag }}  <br> Story :   {{ $moment->story }}">
                                                    <img alt="{{ $moment->title }}"
                                                        src="{{ $moment->image_path ? Storage::url($moment->image_path) : '' }}"
                                                        style="width: {{ $moment->image_span_col == 6 ? '900px' : '450px' }};" />
                                                    <figcaption>
                                                        <ul class="social">
                                                            <li>
                                                                <span class="icon">
                                                                    <i class="icon-magnifier"></i>
                                                                </span>
                                                            </li>
                                                        </ul>

                                                        <h3 class="photo-bottom-caption">{{ $moment->title }}</>

                                                    </figcaption>
                                                </a>
                                            </figure>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            {{-- <div style="text-align:center;">
                                <a href="#"
                                    class="button is-danger is-radiusless">View All</a>
                            </div> --}}
                            <!-- .columns -->
                        </div>
                        <!-- .works -->
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">

                <section class="section has-background-primary-light watch-video is-clearfix padding-3rem">
                    <div class="container width-80-percent">
                        <div class="column is-12-desktop is-12-tablet" data-aos="fade" style="text-align: center;">
                            <br>
                            <br>
                            <p class="heading-title-top has-text-center has-text-tertiary"></p>
                            <h1 class="heading-title style-1 has-text-center">Features and Campaign</h1>
                            <br>
                            <!-- .works-button -->
                        </div>
                        <div class="column is-12-desktop is-12-tablet" data-aos="fade-up">
                            <div class="works-latest">
                                <div class="works-latest-item">

                                    <img alt="VIVO Bangladesh"
                                        src="{{ $playlist1_main[0]->img ? Storage::url($playlist1_main[0]->img) : '' }}"
                                        class="main-vedio" style="width: 100%;">
                                    <div class="works-latest-item-icon style-2">
                                        <a href="{{ $playlist1_main[0]->link }}" class="mfp-lightbox mfp-iframe">
                                            <div class="play"></div>
                                        </a>
                                    </div>
                                    <!-- .works-latest-icon -->
                                </div>
                                <!-- .works-latest-item -->
                            </div>
                        </div>
                        <div class="works-latest image-hover effect-1 owl-carousel dots carousel-items-3">
                            @foreach ($playlist1_other as $value)
                                <div class="works-latest-item">
                                    <img alt="VIVO Bangladesh" src="{{ $value->img ? Storage::url($value->img) : '' }}">
                                    <div class="works-latest-item-icon style-2 sl-play-area">
                                        <a href="{{ $value->link }}" class="mfp-lightbox mfp-iframe">
                                            <div class="play2"></div>
                                        </a>
                                    </div>
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
                                            <button
                                                class="mobile-series-title style-1">{{ $value->name }}</span></button>
                                            <figure>
                                                <img alt="VIVO Bangladesh"
                                                    src="{{ $value->img ? Storage::url($value->img) : '' }}">
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
                                                    <img alt="Blog Image"
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
                    </div>
                </section>
            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div> --}}
@endsection

@section('scripts')
<script src="{{ asset('frontend/assets/js/countdown-timer/js/countdown.js') }}" defer></script>

<script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/js/countdown-timer/css/countdown.css') }}">

    <style>
        .post-meta ul li span {
            color: #4768FF !important;
        }

        .photo-bottom-caption {
            bottom: 0 !important;
            left: 0;
            width: auto !important;
            color: #fff;
            padding-bottom: 1.5rem !important;
            font-size: 24px;
            font-weight: 500;
            text-align: left;
        }

        .watch-video .works-latest .works-latest-item .works-latest-item-icon {
            top: 50% !important;
            left: 50% !important;
        }

        @media screen and (max-width: 768px) {
            .play {
                font-size: 1em;
                /* change this to change size */
            }

            .watch-video .works-latest .works-latest-item .works-latest-item-icon {
                top: 60% !important;
            }


            .play2 {
                font-size: .8em;
                /* change this to change size */
            }

            .watch-video .works-latest .works-latest-item .sl-play-area {
                top: 50% !important;
            }

        }

        .ends-in-text {
            text-align: center;
            color: rgba(65, 95, 255, 1.0) !important;
            font-family: 'vivo-type-CN-Light' !important;
            text-transform: uppercase;
        }
        
        
        .countdown {
            /* font-family: 'Roboto'; */
            font-family: 'vivo-type-CN-Light' !important;
            color: rgba(65, 95, 255, 1.0) !important;
            text-transform: uppercase;
        }

        .countdown>div {
            display: inline-block;
        }

        .countdown>div>span {
            display: block;
            text-align: center;
        }

        .countdown-container {
            margin: 0 3px;
        }

        .countdown-container .countdown-heading {
            font-size: 11px;
            margin: 3px;
            /* color: #666 */
            font-family: 'vivo-type-CN-Bold' !important;
            color: rgba(65, 95, 255, 1.0) !important;
        }
        
        .countdown-container .countdown-value {
            border-radius: 6%;
            font-size: 30px;
            font-family: 'vivo-type-CN-Bold';
            background-color: rgba(65, 95, 255, 1.0);
            /* padding: 25px auto !important; */
            color: #fff;
            width: 80px;
            height: 60px;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 0)
        }

    </style>
@endsection
