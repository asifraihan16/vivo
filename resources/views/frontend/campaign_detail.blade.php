@extends('frontend.layouts.app')

@section('title', 'Campaign')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/banner-images/Campaign.webp') }}) no-repeat top center; background-size: cover;}">
                    <div class="hero-body">
                        <div class="container">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section  is-clearfix">
                    <div class="container">
                        <div class="blog-single">
                            <br>
                            <article class="blog-post ">
                                <figure class="post-image">
                                    <img alt="Joo - Niche Multi-Purpose HTML Template"
                                        src="{{ $data->img1 ? Storage::url($data->img1) : '' }}">
                                </figure>
                                <div class="columns">
                                    <div class="column is-6">
                                        <div class="entry-header">
                                            <div class="post-meta">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="icon-clock"> </i>
                                                        </span>
                                                        <span> {{ date('M-d-Y', strtotime($data->created_at)) }} </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h2 class="entry-title"> {{ $data->title_detail }} </h2>
                                        </div>
                                        <!-- .entry-header -->

                                        <div class="entry-content content">
                                            {!! $data->desc !!}
                                        </div>

                                        
                                    </div>

                                </div>

                                @if ($data->campaign_status == 2)
                                    @guest
                                        <a href="{{ route('user.login') }}" class="button is-danger is-rounded ">Join Now</a>
                                    @else
                                        <a href="{{ route('user.photo-upload') }}" class="button is-danger is-rounded ">Join
                                            Now</a>
                                    @endguest
                                @endif


                                @if ($data->start_date && $data->campaign_status == 2)
                                    <div class="" style="margin-bottom: 30px;">
                                        <p class="ends-in-text">Ends In,</p>
                                        <div class='countdown' style="text-align: center;"
                                            data-date="{{ \Carbon\Carbon::parse($data->start_date)->addDays(20)->format('Y-m-d') }}" data-time="00:00"></div>
                                    </div>
                                @endif
                            </article>

                            <br>
                        </div>
                        <div class="column is-12">
                            {{-- @if ($data->campaign_status == 3) --}}
                                <div id="content-main-wrap" class="is-clearfix">
                                    <div id="content-area" class="site-content-area">
                                        <div id="content-area-inner" class="site-content-area-inner">
                                            <section class="section works-list is-clearfix padding-3rem">
                                                <div class="container width-80-percent">
                                                    {{-- <h4 class="heading-title style-1" style="text-transform: inherit;">
                                                        Previous Campaign Photo</h4> --}}
                                                    <br>
                                                    <div class="works isotope image-hover effect-8">
                                                        <div class="columns is-variable is-1 is-multiline" style="">

                                                            @foreach ($image_lists as $photo)
                                                                <div class="column is-6 branding aos-init" style="">
                                                                    <x-image-tile :photo="$photo" :campaign="$data" :userLikedPhotos="$user_liked_photos" />
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                        @if ($image_lists->count())
                                                            <div style="text-align:center;">
                                                                <a href="{{ route('frontend.campaign-photos', $data->id) }}"
                                                                    class="button is-danger is-radiusless">View All</a>
                                                            </div>
                                                        @endif
                                                        <!-- .columns -->
                                                    </div>
                                                    <!-- .works -->
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endif --}}

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
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


@section('scripts')
    {{-- <script src="{{ asset('frontend/assets/js/countdown-timezone/js/countdown.jquery.min.js') }}" defer></script> --}}
    <script src="{{ asset('frontend/assets/js/countdown-timer/js/countdown.js') }}" defer></script>

    <script type="text/javascript">

    </script>
@endsection
