@extends('frontend.layouts.app')

@section('title', 'Videos')

@section('content')
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/banner-images/Video.webp') }}) no-repeat top center; background-size: cover;">
                    <div class="hero-body">
                        <div class="container">
                            {{-- <h1>Videos</h1> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section watch-video is-clearfix">
                    <div class="container">
                        <div class="columns is-centered">
                            <div class="column is-8" data-aos="fade">
                                <div class="works-latest">
                                    <div class="works-latest-item video-item-main">
                                        {{-- <img alt="vivo Moments - Video" src="{{ asset('frontend/assets/images/global/introduction.png') }}"> --}}
                                        <img alt="vivo Moments - Video" src="{{ Storage::disk('s3')->url($main_video->img) }}" style="width: 100%;">
                                        {{-- <div class="works-latest-item-icon style-2"> --}}
                                            <a href="{{ $main_video->link }}" class="mfp-lightbox mfp-iframe icon ripple-effect video-item-main-icon-area">
                                                {{-- <span class="icon ripple-effect"> --}}
                                                    {{-- <i class="ion-ios-play"></i> --}}
                                                    <img src="{{ asset('frontend/assets/images/play-button.png') }}" alt="Play Button" class="video-thumb-image-main" />
                                                {{-- </span> --}}
                                            </a>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columns is-centered">
                            <div class="column is-8-desktop">
                                <div class="columns is-variable is-centered is-multiline">
                                    @foreach ($videos as $video)
                                    <div class="column is-6" data-aos="fade">
                                        <div class="works-latest">
                                            <div class="works-latest-item video-item-other">
                                                <img alt="vivo Moments - Video" src="{{ Storage::disk('s3')->url($video->img) }}" style="width: 100%;">
                                                {{-- <div class="works-latest-item-icon style-2"> --}}
                                                    <a href="{{ $video->link }}" class="mfp-lightbox mfp-iframe icon ripple-effect video-item-other-icon-area">
                                                        {{-- <span class="icon ripple-effect"> --}}
                                                            {{-- <i class="ion-ios-play"></i> --}}
                                                            <img src="{{ asset('frontend/assets/images/play-button.png') }}" alt="Play Button" class="video-thumb-image-other">
                                                        {{-- </span> --}}
                                                    </a>
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection


