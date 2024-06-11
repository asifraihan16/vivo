@extends('frontend.layouts.app')

@section('title', 'Chronicle Magazine')

@section('content')
    <!-- #header-wrap -->
    {{-- <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="">
                    <div class="hero-body">
                        <div class="container">
                            <h1>Chronicle Magazine</h1>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div> --}}
    @php

        // $cover_pic = $running_campaing ? Storage::url($running_campaing->img1) : asset('/frontend/assets/images/banner-images/Gallery.webp');
        $cover_pic = asset('/frontend/assets/images/banner-images/Photography_Chronicle.jpg');
    @endphp

    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ $cover_pic }}) no-repeat top center; background-size: cover;">
                    <div class="hero-body">
                        <div class="container">
                            {{-- <h1>Gallery</h1> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        
        <div id="content-area" class="site-content-area">
            
            <div id="content-area-inner" class="site-content-area-inner">
                
                <section class="section is-clearfix {{-- has-background-primary-light --}} hero"
                    style="background-color: #fafafa !important;">
                    
                    <div class="container">
                        <h1 style="    text-align: center;
                        font-size: 40px;
                    ">Chronicle Magazine</h1>
                        {{-- <h1 class="heading-title style-1">Campaign List</h1> --}}
                        {{-- <br> --}}
                        {{-- <br> --}}

                        {{-- <div id="countdown"></div> --}}


                        <div class="blog-list style-3 columns is-variable is-4 is-multiline">
                            @foreach ($chronicle_magazines as $data)
                                <div class="column is-4" data-aos="fade">
                                    <article class="blog-post" >
                                        <div class="entry-header">
                                            <div class="post-meta">
                                                
                                                <a href="{{ url('chronicle_magazine_deatils/' . $data->id) }}"
                                                    style="font-size: 20px;">  <img src="{{ $data->image_path ? Storage::url($data->image_path) : '' }}"
                                                    alt="Campaign Cover Photo" style="    width: 250px;
                                                    height: 400px;"> </a>
                                            </div>
                                            <h2 class="entry-title" style="text-transform: inherit !important;">
                                                <a href="{{ url('chronicle_magazine_deatils/' . $data->id) }}"
                                                    style="font-size: 20px;">{{ $data->title }}</a>
                                            </h2>
                                        </div>
                                       
                                        {{-- <div class="entry-footer">
                                            <a class="button" href="{{ route('frontend.campaign_detail', ['id' => $data->id]) }}">See More</a>
                                        </div> --}}
                                        <!-- .entry-footer -->
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        <br>
                    </div>
                </section>
            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>
    <!-- #content-main-wrap -->


@endsection


@section('styles')
{{-- <link rel="stylesheet" href="{{ asset('frontend/assets/js/countdown-timezone/css/style.css') }}"> --}}
@endsection

@section('scripts')
    {{-- <script src="{{ asset('frontend/assets/js/countdown-timezone/js/countdown.jquery.min.js') }}" defer></script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            /* $('#countdown').countdown({
                year: 2022, // YYYY Format
                month: 9, // 1-12
                day: 25, // 1-31
                hour: 0, // 24 hour format 0-23
                minute: 0, // 0-59
                second: 0, // 0-59
            }); */

        });
    </script>
@endsection
